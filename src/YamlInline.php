<?php

declare(strict_types=1);

namespace BaseCodeOy\Payload;

use Symfony\Component\Yaml\Dumper;
use Symfony\Component\Yaml\Yaml as Parser;

final class YamlInline extends AbstractNormalizer
{
    public function encode(mixed $contents): string
    {
        return (new Dumper())->dump($contents, 1);
    }

    public function decode(mixed $contents): array
    {
        return Parser::parse($contents);
    }
}
