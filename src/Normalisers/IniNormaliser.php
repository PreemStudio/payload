<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Normalisers;

use PreemStudio\Payload\Contracts\Deserialiser;
use PreemStudio\Payload\Contracts\Normaliser;
use PreemStudio\Payload\Contracts\Serialiser;
use PreemStudio\Payload\Deserialisers\IniDeserialiser;
use PreemStudio\Payload\Readers\IniReader;
use PreemStudio\Payload\Readers\Reader;
use PreemStudio\Payload\Serialisers\IniSerialiser;
use PreemStudio\Payload\Writers\IniWriter;
use PreemStudio\Payload\Writers\Writer;

class IniNormaliser implements Normaliser
{
    public function serialiser(): Serialiser
    {
        return new IniSerialiser;
    }

    public function deserialiser(): Deserialiser
    {
        return new IniDeserialiser;
    }

    public function writer(): Writer
    {
        return new IniWriter;
    }

    public function reader(): Reader
    {
        return new IniReader;
    }
}
