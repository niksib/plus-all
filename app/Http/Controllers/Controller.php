<?php

namespace App\Http\Controllers;

use App\Services\SeoRule\Repositories\SeoRuleFrontRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->registerSeoRules();
    }

    private function registerSeoRules(): void
    {
        $seoRuleRepository = new SeoRuleFrontRepository();
        $url = parse_url(LaravelLocalization::getNonLocalizedURL());
        $seoRule = $seoRuleRepository->getActiveSeoRuleByUrl($url['path']);
        if ($seoRule) {
            view()->share('seoRule', $seoRule);
        }
    }
}
