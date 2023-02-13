<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Normalisers;

use PreemStudio\Payload\Contracts\Normaliser;
use PreemStudio\Payload\Contracts\Serialiser;
use PreemStudio\Payload\Contracts\Unserialiser;
use PreemStudio\Payload\Readers\JsonReader;
use PreemStudio\Payload\Readers\Reader;
use PreemStudio\Payload\Serialisers\JsonSerialiser;
use PreemStudio\Payload\Unserialisers\JsonUnserialiser;
use PreemStudio\Payload\Writers\JsonWriter;
use PreemStudio\Payload\Writers\Writer;

class JsonNormaliser implements Normaliser
{
    protected Serialiser $serialiser;

    protected Unserialiser $unserialiser;

    protected Writer $writer;

    protected Reader $reader;

    public function serialiser(): Serialiser
    {
        if ($this->serialiser) {
            return $this->serialiser;
        }

        return $this->serialiser = new JsonSerialiser();
    }

    public function unserialiser(): Unserialiser
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new JsonUnserialiser();
    }

    public function writer(): Writer
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new JsonWriter();
    }

    public function reader(): Reader
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new JsonReader();
    }
}
