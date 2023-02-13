<?php

declare(strict_types=1);

namespace PreemStudio\Payload;

use PreemStudio\Payload\Contracts\Normaliser;
use PreemStudio\Payload\Normalisers\CsvNormaliser;

class Csv
{
    protected Normaliser $normaliser;

    public function __construct()
    {
        $this->normaliser = new CsvNormaliser();
    }

    public function serialise(mixed $input): string
    {
        return $this->normaliser->serialiser()->serialise($input);
    }

    public function unserialise(mixed $input, ?string $class = null): array
    {
        return $this->normaliser->unserialiser()->unserialise($input, $class);
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
