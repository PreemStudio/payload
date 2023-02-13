<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Readers;

use PreemStudio\Payload\Unserialisers\YamlUnserialiser;

class YamlReader extends Reader
{
    protected array $extensions = ['yaml', 'yml'];

    public function read(string $path, ?string $class = null): array
    {
        return (new YamlUnserialiser())->unserialise($this->contents($path), $class);
    }
}
