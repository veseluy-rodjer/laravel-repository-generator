<?php

namespace VeseluyRodjer\RepositoryGenerator\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

interface BaseRepositoryInterface
{
    public function all(): Collection;

    public function create(array $attributes): Model;

    public function findOrFail(int $id): Model;

    public function where(string $attr, string|int $val): Collection;

    public function update(array $attributes, int $id): bool;

    public function destroy(int $id): bool;
}
