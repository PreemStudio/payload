<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Readers;

use PreemStudio\Payload\Deserialisers\ValueDeserialiser;

final class ValueReader extends Reader
{
    public array $extensions = ['ser'];

    public function read(string $path, ?string $class = null): array
    {
        return (new ValueDeserialiser)->deserialise($this->contents($path), $class);
    }
}
