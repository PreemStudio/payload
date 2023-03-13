<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Normalisers;

use PreemStudio\Payload\Contracts\Deserialiser;
use PreemStudio\Payload\Contracts\Normaliser;
use PreemStudio\Payload\Contracts\Serialiser;
use PreemStudio\Payload\Deserialisers\JsonDeserialiser;
use PreemStudio\Payload\Readers\JsonReader;
use PreemStudio\Payload\Readers\Reader;
use PreemStudio\Payload\Serialisers\JsonSerialiser;
use PreemStudio\Payload\Writers\JsonWriter;
use PreemStudio\Payload\Writers\Writer;

final class JsonNormaliser implements Normaliser
{
    public function serialiser(): Serialiser
    {
        return new JsonSerialiser;
    }

    public function deserialiser(): Deserialiser
    {
        return new JsonDeserialiser;
    }

    public function writer(): Writer
    {
        return new JsonWriter;
    }

    public function reader(): Reader
    {
        return new JsonReader;
    }
}
