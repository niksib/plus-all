<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Contracts\CRUDLangController;
use App\Services\SeoRule\Models\SeoRule;
use App\Services\SeoRule\Models\SeoRuleLang;
use App\Services\SeoRule\Repositories\SeoRuleCRUDRepository;
use App\Services\SeoRule\Requests\SeoRuleFormRequest;

class SeoRuleLangController extends CRUDLangController
{
    public function __construct() {
        $this->CRUDRepository = new SeoRuleCRUDRepository();
        $this->item = new SeoRule();
        $this->itemLangs = new SeoRuleLang();
        $this->routeId = 'seo_rule';
        $this->routeGroup = 'seo-rule';
        $this->viewGroup = 'SeoRule';
        $this->createFormRequest = new SeoRuleFormRequest();
        $this->updateFormRequest = new SeoRuleFormRequest();
    }
}
