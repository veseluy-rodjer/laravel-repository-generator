<?php

namespace VeseluyRodjer\RepositoryGenerator\Repository;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentRepositoryInterface
{
    public function all(): Collection
    {
        return $this->model->all();
    }

    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function findOrFail(int $id): ?Model
    {
        return $this->model->findOrFail($id);
    }

    public function where($attr, $val): ?Collection
    {
        return $this->model->where($attr, $val)->get();
    }

    public function update(int $id, array $attributes): ?bool
    {
        return $this->model->findOrFail($id)->update($attributes);
    }

    public function delete(int $id): ?bool
    {
        return $this->model->findOrFail($id)->delete();
    }
}
