<?php

declare(strict_types=1);

namespace AriAva\Contracts\Serialize;

interface SerializerInterface
{
    public function serialize($item): string;
}
