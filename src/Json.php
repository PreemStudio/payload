<?php

declare(strict_types=1);

namespace PreemStudio\Payload;

use PreemStudio\Payload\Contracts\Normaliser;
use PreemStudio\Payload\Normalisers\JsonNormaliser;

class Json
{
    protected Normaliser $normaliser;

    public function __construct()
    {
        $this->normaliser = new JsonNormaliser;
    }

    public function serialise(mixed $input): string
    {
        return $this->normaliser->serialiser()->serialise($input);
    }

    public function deserialise(mixed $input, ?string $class = null): array
    {
        return $this->normaliser->deserialiser()->deserialise($input, $class);
    }

    public function write(string $path, mixed $input): bool
    {
        return $this->normaliser->writer()->write($path, $input);
    }

    public function read(string $path, ?string $class = null): array
    {
        return $this->normaliser->reader()->read($path, $class);
    }
}
