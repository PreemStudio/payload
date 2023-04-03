<?php

declare(strict_types=1);

namespace PreemStudio\Payload;

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
