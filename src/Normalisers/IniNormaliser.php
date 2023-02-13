<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Normalisers;

use PreemStudio\Payload\Contracts\Normaliser;
use PreemStudio\Payload\Contracts\Serialiser;
use PreemStudio\Payload\Contracts\Unserialiser;
use PreemStudio\Payload\Readers\IniReader;
use PreemStudio\Payload\Readers\Reader;
use PreemStudio\Payload\Serialisers\IniSerialiser;
use PreemStudio\Payload\Unserialisers\IniUnserialiser;
use PreemStudio\Payload\Writers\IniWriter;
use PreemStudio\Payload\Writers\Writer;

class IniNormaliser implements Normaliser
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

        return $this->serialiser = new IniSerialiser();
    }

    public function unserialiser(): Unserialiser
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new IniUnserialiser();
    }

    public function writer(): Writer
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new IniWriter();
    }

    public function reader(): Reader
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new IniReader();
    }
}
