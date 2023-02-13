<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Normalisers;

use PreemStudio\Payload\Contracts\Normaliser;
use PreemStudio\Payload\Contracts\Serialiser;
use PreemStudio\Payload\Contracts\Unserialiser;
use PreemStudio\Payload\Readers\Reader;
use PreemStudio\Payload\Readers\XmlReader;
use PreemStudio\Payload\Serialisers\XmlSerialiser;
use PreemStudio\Payload\Unserialisers\XmlUnserialiser;
use PreemStudio\Payload\Writers\Writer;
use PreemStudio\Payload\Writers\XmlWriter;

class XmlNormaliser implements Normaliser
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

        return $this->serialiser = new XmlSerialiser();
    }

    public function unserialiser(): Unserialiser
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new XmlUnserialiser();
    }

    public function writer(): Writer
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new XmlWriter();
    }

    public function reader(): Reader
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new XmlReader();
    }
}
