<?php

declare(strict_types=1);

namespace AriAva\Contracts\DependencyInjection;

interface ContainerInterface
{
    public function add(string $id, callable $factory): void;
    public function get(string $id): mixed;
    public function has(string $id): bool;
    public function autowireFolderByAttribute(string $path): void;
    public function addParameters(array $parameters): void;
}