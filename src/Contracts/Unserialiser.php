<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Contracts;

interface Unserialiser
{
    public function unserialise(mixed $input, ?string $class = null): array;
}
