<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Normalisers;

use PreemStudio\Payload\Contracts\Normaliser;
use PreemStudio\Payload\Contracts\Serialiser;
use PreemStudio\Payload\Contracts\Unserialiser;
use PreemStudio\Payload\Readers\Reader;
use PreemStudio\Payload\Readers\ValueReader;
use PreemStudio\Payload\Serialisers\ValueSerialiser;
use PreemStudio\Payload\Unserialisers\ValueUnserialiser;
use PreemStudio\Payload\Writers\ValueWriter;
use PreemStudio\Payload\Writers\Writer;

class ValueNormaliser implements Normaliser
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

        return $this->serialiser = new ValueSerialiser();
    }

    public function unserialiser(): Unserialiser
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new ValueUnserialiser();
    }

    public function writer(): Writer
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new ValueWriter();
    }

    public function reader(): Reader
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new ValueReader();
    }
}
