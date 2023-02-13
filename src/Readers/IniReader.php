<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Readers;

use PreemStudio\Payload\Unserialisers\IniUnserialiser;

class IniReader extends Reader
{
    protected array $extensions = ['ini'];

    public function read(string $path, ?string $class = null): array
    {
        return (new IniUnserialiser())->unserialise($this->contents($path), $class);
    }
}
