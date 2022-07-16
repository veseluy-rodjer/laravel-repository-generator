<?php

namespace VeseluyRodjer\RepositoryGenerator\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class BaseRepository
{
    public function all(): Collection
    {
        return $this->model->query()->all();
    }

    public function create(array $attributes): Model
    {
        return $this->model->query()->create($attributes);
    }

    public function findOrFail(int $id): Model
    {
        return $this->model->query()->findOrFail($id);
    }

    public function where(string $attr, string|int $val): Collection
    {
        return $this->model->query()->where($attr, $val)->get();
    }

    public function update(array $attributes, int $id): bool
    {
        return $this->findOrFail($id)->update($attributes);
    }

    public function destroy(int $id): bool
    {
        return $this->model->query()->destroy($id);
    }
}
