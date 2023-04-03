<?php

declare(strict_types=1);

namespace PreemStudio\Payload;

use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

final class Xml extends AbstractNormalizer
{
    public function encode(mixed $contents): string
    {
        return (new Serializer(
            [new ObjectNormalizer()],
            [new XmlEncoder()],
        ))->serialize($contents, 'xml');
    }

    public function decode(mixed $contents): array
    {
        return \json_decode(\json_encode(\simplexml_load_string($contents, null, \LIBXML_NOCDATA)), true, \JSON_THROW_ON_ERROR);
    }
}
