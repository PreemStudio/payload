<?php

declare(strict_types=1);

namespace PreemStudio\Payload;

use PreemStudio\Payload\Contracts\Normalizer;

abstract class AbstractNormalizer implements Normalizer
{
    abstract public function encode(mixed $contents): string;

    abstract public function decode(mixed $contents): array;

    public function write(string $path, mixed $contents): bool
    {
        return File::put($path, $this->encode($contents));
    }

    public function read(string $path): array
    {
        return $this->decode(File::get($path));
    }
}
