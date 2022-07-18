<?php

namespace VeseluyRodjer\RepositoryGenerator\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class BaseRepository
{
    public function getAll(): Builder
    {
        return $this->model->newQuery()->getAll();
    }

    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function findOrFail(int $id): Model
    {
        return $this->model->newQuery()->findOrFail($id);
    }

    public function where(string $attr, string|int $val): Builder
    {
        return $this->model->newQuery()->where($attr, $val);
    }

    public function update(array $attributes, int $id): bool
    {
        return $this->findOrFail($id)->update($attributes);
    }

    public function delete(int $id): bool
    {
        return $this->where('id', $id)->delete();
    }

    public function statusFilter(int $status): Builder
    {
        return $this->model->newQuery()->where('status', $status);
    }
}
