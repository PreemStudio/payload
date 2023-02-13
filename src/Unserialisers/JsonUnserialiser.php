<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Unserialisers;

use PreemStudio\Payload\Contracts\Unserialiser;
use PreemStudio\Payload\Utils\Mapper;

class JsonUnserialiser implements Unserialiser
{
    public function unserialise(mixed $input, ?string $class = null): array
    {
        $contents = json_decode($input);

        if (! is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return (array) $contents;
    }
}
