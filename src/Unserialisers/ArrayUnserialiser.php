<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Unserialisers;

use PreemStudio\Payload\Contracts\Unserialiser;
use PreemStudio\Payload\Utils\Mapper;

class ArrayUnserialiser implements Unserialiser
{
    public function unserialise($input, ?string $class = null): array
    {
        if (! is_array($input)) {
            $input = eval("return $input;");
        }

        if (! is_null($class)) {
            return (new Mapper())->map($input, $class);
        }

        return $input;
    }
}
