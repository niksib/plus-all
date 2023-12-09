<?php

namespace App\Services\Basic\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class CRUDRepository
{
    public const PER_PAGE = 25;

    protected Model $model;

    public function __construct()
    {
    }

    public function getPaginatedList(array $filters = []): LengthAwarePaginator
    {
        return $this->model::query()->paginate(self::PER_PAGE);
    }

    public function create(array $data): Model
    {
        $entity = new $this->model;
        $entity->fill($data);
        $entity->save();

        return $entity;
    }

    public function getById(int $id,): Model
    {
        return $this->model::where('id', $id)->firstOrFail();
    }

    public function update(int $id, array $data): Model
    {
        $entity = $this->getById($id);
        $entity->fill($data);
        $entity->save();

        return $entity;
    }

    public function delete(int $id): void
    {
        $entity = $this->getById($id);
        $entity->delete();
    }
}
