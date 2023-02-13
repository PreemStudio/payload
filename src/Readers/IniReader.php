<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Readers;

use PreemStudio\Payload\Unserialisers\IniUnserialiser;

class IniReader extends Reader
{
    protected $extensions = ['ini'];

    public function read($path, ?string $class = null): array
    {
        return (new IniUnserialiser())->unserialise($this->contents($path), $class);
    }
}
