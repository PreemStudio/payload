<?php

declare(strict_types=1);

namespace BombenProdukt\Payload\Contracts;

interface Normalizer
{
    public function encode(mixed $contents): string;

    public function decode(mixed $contents): array;

    public function write(string $path, mixed $contents): bool;

    public function read(string $path): array;
}
