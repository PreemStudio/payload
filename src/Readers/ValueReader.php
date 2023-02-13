<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Readers;

use PreemStudio\Payload\Unserialisers\ValueUnserialiser;

class ValueReader extends Reader
{
    protected $extensions = ['ser'];

    public function read(string $path, ?string $class = null): array
    {
        return (new ValueUnserialiser())->unserialise($this->contents($path), $class);
    }
}
