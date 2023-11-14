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

    public function filterIn(string $attr, array $data): Builder
    {
        return $this->model->newQuery()->filterIn($attr, $data);
    }

    public function modelWith(string|array $relationship, int $id): Builder
    {
        return $this->model->newQuery()->modelWith($relationship, $id);
    }

    public function allWith(string|array $relationship): Builder
    {
        return $this->model->newQuery()->allWith($relationship);
    }

    public function update(array $attributes, int $id): bool
    {
        return $this->model->newQuery()->filter('id', $id)->update($attributes);
    }

    public function massUpdate(array $attributes, string $field, array $data): bool
    {
        return $this->model->newQuery()
            ->filterIn($field, $data)
            ->update($attributes);
    }

    public function delete(int $id): bool
    {
        return $this->model->newQuery()->filter('id', $id)->delete();
    }

    public function massDelete(string $field, array $data): bool
    {
        return $this->model->newQuery()
            ->filterIn($field, $data)
            ->delete();
    }

    public function statusFilter(int $status): Builder
    {
        return $this->model->newQuery()->statusFilter($status);
    }

    public function filterByCompare(string $attr, string $compare, string|int $val): Builder
    {
        return $this->model->newQuery()->filterByCompare($attr, $compare, $val);
    }

    public function sort(string $attr, string $direction = 'asc'): Builder
    {
        return $this->model->newQuery()->sort($attr, $direction);
    }
}
