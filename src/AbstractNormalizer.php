<?php

declare(strict_types=1);

namespace BaseCodeOy\Payload;

use BaseCodeOy\Payload\Contracts\Normalizer;

abstract class AbstractNormalizer implements Normalizer
{
    public function write(string $path, mixed $contents): bool
    {
        return File::put($path, $this->encode($contents));
    }

    public function read(string $path): array
    {
        return $this->decode(File::get($path));
    }

    abstract public function encode(mixed $contents): string;

    abstract public function decode(mixed $contents): array;
}
