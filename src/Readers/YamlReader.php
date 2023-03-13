<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Readers;

use PreemStudio\Payload\Deserialisers\YamlDeserialiser;

final class YamlReader extends Reader
{
    public array $extensions = ['yml', 'yaml'];

    public function read(string $path, ?string $class = null): array
    {
        return (new YamlDeserialiser)->deserialise($this->contents($path), $class);
    }
}
