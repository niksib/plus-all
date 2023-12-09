<?php

namespace App\Services\SeoRule\Repositories;

use App\Services\Basic\Repositories\CRUDLangRepository;
use App\Services\SeoRule\Models\SeoRule;
use App\Services\SeoRule\Models\SeoRuleLang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class SeoRuleCRUDRepository extends CRUDLangRepository
{
    public function __construct()
    {
        parent::__construct();

        $this->model = new SeoRule();
        $this->modelLang = new SeoRuleLang();
        $this->parentColumn = 'seo_rule_id';
        $this->imagesPath = 'images/seo';
    }

    public function create(array $data): Model
    {
        $dataLangs = $data['dataLangs'];
        $data = $data['data'];

        $model = $this->model::create($data);

        foreach ($dataLangs as $locale => $localeData) {
            $localeData[$this->parentColumn] = $model->id;
            $localeData['lang'] = $locale;

            if (!empty($localeData['social_image']) && $localeData['social_image'] instanceof UploadedFile) {
                $localeData['social_image'] = $this->fileService->store($localeData['social_image'], $this->imagesPath);
            }

            $this->modelLang::create($localeData);
        }

        return $model;
    }

    public function update(int $id, array $data): Model
    {
        $model = $this->getById($id, ['langs']);
        $dataLangs = $data['dataLangs'];
        $data = $data['data'];

        foreach ($dataLangs as $lang => $dataLang) {
            $modelLang = $model->langs->where('lang', $lang)->first();
            if (empty($modelLang)) {
                $modelLang = new $this->modelLang;
                $modelLang->{$this->parentColumn} = $model->id;
                $modelLang->lang = $lang;
            }

            if (!empty($dataLang['social_image']) && $dataLang['social_image'] instanceof UploadedFile) {
                if ($modelLang->social_image) {
                    $this->fileService->delete($modelLang->social_image);
                }

                $dataLang['social_image'] = $this->fileService->store($dataLang['social_image'], $this->imagesPath);
            }

            $modelLang->fill($dataLang);
            $modelLang->save();
        }

        $model->fill($data);
        $model->save();

        return $model;
    }
}
