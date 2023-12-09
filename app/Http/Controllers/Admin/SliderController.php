<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Contracts\CRUDLangController;
use App\Services\Slider\Models\Slider;
use App\Services\Slider\Models\SliderLang;
use App\Services\Slider\Repositories\SliderRepository;
use App\Services\Slider\Requests\SliderCreateRequest;
use App\Services\Slider\Requests\SliderUpdateRequest;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SliderController extends CRUDLangController
{
    public function __construct()
    {
        $this->CRUDRepository = new SliderRepository();
        $this->item = new Slider();
        $this->itemLangs = new SliderLang();
        $this->routeId = 'slider';
        $this->routeGroup = 'sliders';
        $this->viewGroup = 'Slider';
        $this->createFormRequest = new SliderCreateRequest();
        $this->updateFormRequest = new SliderUpdateRequest();
    }

    public function editByUid(string $uid): RedirectResponse
    {
        /** @var Slider $slider */
        $slider = $this->CRUDRepository->getBy('uid', $uid, ['lang']);

        return redirect(route('admin.sliders.edit', ['slider' => $slider->id]));
    }
}
