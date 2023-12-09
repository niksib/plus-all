<?php

namespace App\Services\Basic\Repositories;

use App\Services\File\Services\FileService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Pagination\LengthAwarePaginator;

class CRUDLangRepository
{
    public const PER_PAGE = 25;

    protected Model $model;
    protected Model $modelLang;
    protected string $parentColumn = 'parent_id';
    protected FileService $fileService;
    protected string $imagesPath = 'images';

    public function __construct()
    {
        $this->fileService = new FileService();
    }

    public function getPaginated(): LengthAwarePaginator
    {
        return $this->model::with(['lang'])->paginate(25);
    }

    public function getById(int $id, array $with = []): Model
    {
        return $this->model::with($with)->where('id', $id)->firstOrFail();
    }

    public function getBy(string $column, string $value, array $with = []): Model
    {
        return $this->model::with($with)->where($column, $value)->firstOrFail();
    }

    public function getAll(): array
    {
        return $this->model::with(['lang'])->get()->toArray();
    }

    public function create(array $data): Model
    {
        $dataLangs = $data['dataLangs'];
        $data = $data['data'];

        if (!empty($data['image']) && $data['image'] instanceof UploadedFile) {
            $data['image'] = $this->fileService->store($data['image'], $this->imagesPath);
        }

        $model = $this->model::create($data);

        foreach ($dataLangs as $locale => $localeData) {
            $localeData[$this->parentColumn] = $model->id;
            $localeData['lang'] = $locale;

            $this->modelLang::create($localeData);
        }

        return $model;
    }

    public function update(int $id, array $data): Model
    {
        $model = $this->getById($id, ['langs']);
        $dataLangs = $data['dataLangs'];
        $data = $data['data'];

        if (!empty($data['image']) && $data['image'] instanceof UploadedFile) {
            if ($model->image) {
                $this->fileService->delete($model->image);
            }

            $data['image'] = $this->fileService->store($data['image'], $this->imagesPath);
        }

        foreach ($dataLangs as $lang => $dataLang) {
            $modelLang = $model->langs->where('lang', $lang)->first();
            if (empty($modelLang)) {
                $modelLang = new $this->modelLang;
                $modelLang->{$this->parentColumn} = $model->id;
                $modelLang->lang = $lang;
            }

            $modelLang->fill($dataLang);
            $modelLang->save();
        }

        $model->fill($data);
        $model->save();

        return $model;
    }

    public function delete(int $id): void
    {
        $model = $this->getById($id, ['langs']);

        $model->delete();
    }
}
