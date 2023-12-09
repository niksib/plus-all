<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Contracts\CRUDController;
use App\Services\Setting\Models\Setting;
use App\Services\Setting\Repositories\SettingCRUDRepository;
use Inertia\Inertia;
use Inertia\Response;

class SettingController extends CRUDController
{
    public function __construct()
    {
        $this->CRUDRepository = new SettingCRUDRepository();
        $this->item = new Setting();
        $this->routeId = 'setting';
        $this->routeGroup = 'settings';
        $this->viewGroup = 'Setting';
    }

    public function index(): Response
    {
        $filters = [
            'key' => app('request')->get('key'),
        ];

        /** @var Setting[] $items */
        $items = $this->CRUDRepository->getPaginatedList($filters);

        foreach ($items as $item) {
            $item->val = mb_strlen($item->val) > 50 ? mb_substr($item->val, 0, 50) . '...' : $item->val;

            if ($item->type === Setting::TYPE_BOOL) {
                $item->val = $item->val === '1' ? 'True' : 'False';
            }
        }

        return Inertia::render($this->viewGroup . '/List', [
            'items' => $items,
            'filters' => $filters,
        ]);
    }
}
