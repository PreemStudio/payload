<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Serialisers;

use PreemStudio\Payload\Contracts\Serialiser;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer as SymfonySerialiser;

final class XmlSerialiser implements Serialiser
{
    public function serialise(mixed $input): string
    {
        return (new SymfonySerialiser(
            [new ObjectNormalizer], [new XmlEncoder]
        ))->serialize($input, 'xml');
    }
}
