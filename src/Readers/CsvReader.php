<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Readers;

use PreemStudio\Payload\Deserialisers\CsvDeserialiser;

final class CsvReader extends Reader
{
    public array $extensions = ['csv'];

    public function read(string $path, ?string $class = null): array
    {
        return (new CsvDeserialiser)->deserialise($this->contents($path), $class);
    }
}
