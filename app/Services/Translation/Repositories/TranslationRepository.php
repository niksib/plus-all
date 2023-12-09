<?php

namespace App\Services\Translation\Repositories;

use App\Services\Basic\Repositories\CRUDRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\TranslationLoader\LanguageLine;

class TranslationRepository extends CRUDRepository
{
    public function __construct()
    {
        parent::__construct();

        $this->model = new LanguageLine();
    }

    public function getPaginatedList(array $filters = []): LengthAwarePaginator
    {
        $query = LanguageLine::query();

        if (!empty($filters['group'])) {
            $query->where('group', $filters['group']);
        }

        if (!empty($filters['key'])) {
            $query->where('key', 'like', $filters['key'] . '%');
        }

        if (!empty($filters['value'])) {
            $query->where('text', 'like', '%' . $filters['value'] . '%');
        }

        return $query->paginate(self::PER_PAGE)->appends($filters);
    }
}
