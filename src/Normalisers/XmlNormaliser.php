<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Normalisers;

use PreemStudio\Payload\Contracts\Deserialiser;
use PreemStudio\Payload\Contracts\Normaliser;
use PreemStudio\Payload\Contracts\Serialiser;
use PreemStudio\Payload\Deserialisers\XmlDeserialiser;
use PreemStudio\Payload\Readers\Reader;
use PreemStudio\Payload\Readers\XmlReader;
use PreemStudio\Payload\Serialisers\XmlSerialiser;
use PreemStudio\Payload\Writers\Writer;
use PreemStudio\Payload\Writers\XmlWriter;

final class XmlNormaliser implements Normaliser
{
    public function serialiser(): Serialiser
    {
        return new XmlSerialiser;
    }

    public function deserialiser(): Deserialiser
    {
        return new XmlDeserialiser;
    }

    public function writer(): Writer
    {
        return new XmlWriter;
    }

    public function reader(): Reader
    {
        return new XmlReader;
    }
}
