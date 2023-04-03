<?php

declare(strict_types=1);

namespace PreemStudio\Payload;

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
