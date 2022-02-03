<?php

namespace VeseluyRodjer\RepositoryGenerator\Repository;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface EloquentRepositoryInterface
{
    public function all(): Collection;

    public function create(array $attributes): Model;

    public function findOrFail(int $id): ?Model;

    public function where($attr, $val): ?Collection;

    public function update(int $id, array $attributes): ?bool;

    public function delete(int $id): ?bool;
}
