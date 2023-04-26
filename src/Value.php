<?php

declare(strict_types=1);

namespace BombenProdukt\Payload;

final class Value extends AbstractNormalizer
{
    public function encode(mixed $contents): string
    {
        return \serialize($contents);
    }

    public function decode(mixed $contents): array
    {
        return \unserialize($contents);
    }
}
