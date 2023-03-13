<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Readers;

use PreemStudio\Payload\Deserialisers\IniDeserialiser;

final class IniReader extends Reader
{
    public array $extensions = ['ini'];

    public function read(string $path, ?string $class = null): array
    {
        return (new IniDeserialiser)->deserialise($this->contents($path), $class);
    }
}
