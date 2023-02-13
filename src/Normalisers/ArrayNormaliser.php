<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Normalisers;

use PreemStudio\Payload\Contracts\Deserialiser;
use PreemStudio\Payload\Contracts\Normaliser;
use PreemStudio\Payload\Contracts\Serialiser;
use PreemStudio\Payload\Deserialisers\ArrayDeserialiser;
use PreemStudio\Payload\Readers\ArrayReader;
use PreemStudio\Payload\Readers\Reader;
use PreemStudio\Payload\Serialisers\ArraySerialiser;
use PreemStudio\Payload\Writers\ArrayWriter;
use PreemStudio\Payload\Writers\Writer;

class ArrayNormaliser implements Normaliser
{
    public function serialiser(): Serialiser
    {
        return new ArraySerialiser;
    }

    public function deserialiser(): Deserialiser
    {
        return new ArrayDeserialiser;
    }

    public function writer(): Writer
    {
        return new ArrayWriter;
    }

    public function reader(): Reader
    {
        return new ArrayReader;
    }
}
