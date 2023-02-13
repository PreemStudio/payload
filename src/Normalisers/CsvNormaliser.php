<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Normalisers;

use PreemStudio\Payload\Contracts\Deserialiser;
use PreemStudio\Payload\Contracts\Normaliser;
use PreemStudio\Payload\Contracts\Serialiser;
use PreemStudio\Payload\Deserialisers\CsvDeserialiser;
use PreemStudio\Payload\Readers\CsvReader;
use PreemStudio\Payload\Readers\Reader;
use PreemStudio\Payload\Serialisers\CsvSerialiser;
use PreemStudio\Payload\Writers\CsvWriter;
use PreemStudio\Payload\Writers\Writer;

class CsvNormaliser implements Normaliser
{
    public function serialiser(): Serialiser
    {
        return new CsvSerialiser;
    }

    public function deserialiser(): Deserialiser
    {
        return new CsvDeserialiser;
    }

    public function writer(): Writer
    {
        return new CsvWriter;
    }

    public function reader(): Reader
    {
        return new CsvReader;
    }
}
