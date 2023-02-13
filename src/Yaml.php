<?php

declare(strict_types=1);

namespace PreemStudio\Payload;

use PreemStudio\Payload\Normalisers\YamlNormaliser;

class Yaml
{
    protected $normaliser;

    public function __construct()
    {
        $this->normaliser = new YamlNormaliser();
    }

    public function serialise($input): string
    {
        return $this->normaliser->serialiser()->serialise($input);
    }

    public function unserialise($input, ?string $class = null): array
    {
        return $this->normaliser->unserialiser()->unserialise($input, $class);
    }

    public function write($path, $input): bool
    {
        return $this->normaliser->writer()->write($path, $input);
    }

    public function read($input, ?string $class = null): array
    {
        return $this->normaliser->reader()->read($path, $class);
    }
}
