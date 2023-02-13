<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Readers;

use PreemStudio\Payload\Deserialisers\XmlDeserialiser;

class XmlReader extends Reader
{
    public array $extensions = ['xml'];

    public function read(string $path, ?string $class = null): array
    {
        return (new XmlDeserialiser)->deserialise($this->contents($path), $class);
    }
}
