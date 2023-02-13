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
        return $this->model->newQuery()->create($attributes);
    }

    public function findModel(int $id): Model
    {
        return $this->model->newQuery()->findModel($id)->first();
    }

    public function filter(string $attr, string|int $val): Builder
    {
        return $this->model->newQuery()->filter($attr, $val);
    }

    public function update(array $attributes, int $id): bool
    {
        return $this->model->newQuery()->filter('id', $id)->update($attributes);
    }

    public function delete(int $id): bool
    {
        return $this->model->newQuery()->filter('id', $id)->delete();
    }

    public function statusFilter(int $status): Builder
    {
        return $this->model->newQuery()->statusFilter($status);
    }

    public function filterByCompare(string $attr, string $compare, string|int $val): Builder
    {
        return $this->model->newQuery()->filterByCompare($attr, $compare, $val);
    }
}
