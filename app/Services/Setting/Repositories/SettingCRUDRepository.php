<?php

namespace App\Services\Setting\Repositories;

use App\Services\Basic\Repositories\CRUDRepository;
use App\Services\Setting\Models\Setting;
use Illuminate\Pagination\LengthAwarePaginator;

class SettingCRUDRepository extends CRUDRepository
{
    public const PER_PAGE = 500;

    public function __construct()
    {
        parent::__construct();

        $this->model = new Setting();
    }

    public function getPaginatedList(array $filters = []): LengthAwarePaginator
    {
        $query = $this->model::query()->orderBy('key');

        if (!empty($filters['key'])) {
            $query->where('key', 'like', $filters['key'] . '%');
        }

        return $query->paginate(self::PER_PAGE);
    }
}
