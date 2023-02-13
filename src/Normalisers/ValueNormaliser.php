<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Normalisers;

use PreemStudio\Payload\Contracts\Deserialiser;
use PreemStudio\Payload\Contracts\Normaliser;
use PreemStudio\Payload\Contracts\Serialiser;
use PreemStudio\Payload\Deserialisers\ValueDeserialiser;
use PreemStudio\Payload\Readers\Reader;
use PreemStudio\Payload\Readers\ValueReader;
use PreemStudio\Payload\Serialisers\ValueSerialiser;
use PreemStudio\Payload\Writers\ValueWriter;
use PreemStudio\Payload\Writers\Writer;

class ValueNormaliser implements Normaliser
{
    public function serialiser(): Serialiser
    {
        return new ValueSerialiser;
    }

    public function deserialiser(): Deserialiser
    {
        return new ValueDeserialiser;
    }

    public function writer(): Writer
    {
        return new ValueWriter;
    }

    public function reader(): Reader
    {
        return new ValueReader;
    }
}
