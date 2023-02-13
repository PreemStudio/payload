<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Contracts;

interface Deserialiser
{
    public function deserialise(mixed $input, ?string $class = null): array;
}
