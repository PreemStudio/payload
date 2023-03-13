<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Normalisers;

use PreemStudio\Payload\Contracts\Deserialiser;
use PreemStudio\Payload\Contracts\Normaliser;
use PreemStudio\Payload\Contracts\Serialiser;
use PreemStudio\Payload\Deserialisers\YamlDeserialiser;
use PreemStudio\Payload\Readers\Reader;
use PreemStudio\Payload\Readers\YamlReader;
use PreemStudio\Payload\Serialisers\YamlInlineSerialiser;
use PreemStudio\Payload\Writers\Writer;
use PreemStudio\Payload\Writers\YamlInlineWriter;

final class YamlInlineNormaliser implements Normaliser
{
    public function serialiser(): Serialiser
    {
        return new YamlInlineSerialiser;
    }

    public function deserialiser(): Deserialiser
    {
        return new YamlDeserialiser;
    }

    public function writer(): Writer
    {
        return new YamlInlineWriter;
    }

    public function reader(): Reader
    {
        return new YamlReader;
    }
}
