<?php

namespace App\Services\Slider\Repositories;

use App\Services\Basic\Repositories\CRUDLangRepository;
use App\Services\Slider\Models\Slider;
use App\Services\Slider\Models\SliderLang;
use Illuminate\Http\UploadedFile;

class SliderRepository extends CRUDLangRepository
{
    public function __construct()
    {
        parent::__construct();

        $this->model = new Slider();
        $this->modelLang = new SliderLang();
        $this->parentColumn = 'slider_id';
        $this->imagesPath = 'images/slides';
    }

    public function create(array $data): Slider
    {
        $dataLangs = $data['dataLangs'];
        $data = $data['data'];

        $images = [];
        foreach ($data['images'] as $image) {
            if ($image) {
                $images[] = $this->fileService->store($image, 'images/slides');
            }
        }

        $data['images'] = $images;
        $model = Slider::create($data);

        foreach ($dataLangs as $locale => $localeData) {
            $localeData['slider_id'] = $model->id;
            $localeData['lang'] = $locale;

            SliderLang::create($localeData);
        }

        return $model;
    }

    public function update(int $id, array $data): Slider
    {
        $model = $this->getById($id, ['langs']);
        $dataLangs = $data['dataLangs'];
        $data = $data['data'];

        foreach ($data['images'] as $imageKey => $image) {
            if ($image instanceof UploadedFile) {
                $data['images'][$imageKey] = $this->fileService->store($image, 'images/slides');

                if (!empty($model->images[$imageKey])) {
                    $this->fileService->delete($model->images[$imageKey]);
                }
            }
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

        foreach ($model->images as $image) {
            $this->fileService->delete($image);
        }

        $model->delete();
    }
}
