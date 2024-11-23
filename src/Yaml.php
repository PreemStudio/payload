<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Payload;

use Symfony\Component\Yaml\Dumper;
use Symfony\Component\Yaml\Yaml as Parser;

final class Yaml extends AbstractNormalizer
{
    public function encode(mixed $contents): string
    {
        return (new Dumper())->dump($contents);
    }

    public function decode(mixed $contents): array
    {
        return Parser::parse($contents);
    }
}
