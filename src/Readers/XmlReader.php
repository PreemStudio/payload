<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Readers;

use PreemStudio\Payload\Unserialisers\XmlUnserialiser;

class XmlReader extends Reader
{
    protected $extensions = ['xml'];

    public function read($path, ?string $class = null): array
    {
        return (new XmlUnserialiser())->unserialise($this->contents($path), $class);
    }
}
