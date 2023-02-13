<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Deserialisers;

use PreemStudio\Payload\Contracts\Deserialiser;
use PreemStudio\Payload\Utils\Mapper;

class ArrayDeserialiser implements Deserialiser
{
    public function deserialise(mixed $input, ?string $class = null): array
    {
        if (! is_array($input)) {
            $input = eval("return $input;");
        }

        if (! is_null($class)) {
            return (new Mapper)->map($input, $class);
        }

        return $input;
    }
}
