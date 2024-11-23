<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Payload;

final class Json extends AbstractNormalizer
{
    public function encode(mixed $contents): string
    {
        return \json_encode($contents);
    }

    public function decode(mixed $contents): array
    {
        return \json_decode($contents, true, \JSON_THROW_ON_ERROR);
    }
}
