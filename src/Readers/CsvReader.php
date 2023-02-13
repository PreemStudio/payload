<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Readers;

use PreemStudio\Payload\Unserialisers\CsvUnserialiser;

class CsvReader extends Reader
{
    protected $extensions = ['csv'];

    public function read($path, ?string $class = null): array
    {
        return (new CsvUnserialiser())->unserialise($this->contents($path), $class);
    }
}
