<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Deserialisers;

use PreemStudio\Payload\Contracts\Deserialiser;
use PreemStudio\Payload\Utils\Mapper;

class ValueDeserialiser implements Deserialiser
{
    public function deserialise(mixed $input, ?string $class = null): array
    {
        $contents = unserialize($input);

        if (! is_null($class)) {
            return (new Mapper)->map($contents, $class);
        }

        return $contents;
    }
}
