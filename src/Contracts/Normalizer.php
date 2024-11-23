<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Payload\Contracts;

interface Normalizer
{
    public function encode(mixed $contents): string;

    public function decode(mixed $contents): array;

    public function write(string $path, mixed $contents): bool;

    public function read(string $path): array;
}
