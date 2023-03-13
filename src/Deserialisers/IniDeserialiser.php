<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Deserialisers;

use PreemStudio\Payload\Contracts\Deserialiser;
use PreemStudio\Payload\Utils\Mapper;

final class IniDeserialiser implements Deserialiser
{
    public function deserialise(mixed $input, ?string $class = null): array
    {
        $contents = json_decode(json_encode(parse_ini_string($input, true)));

        if (! is_null($class)) {
            return (new Mapper)->map($contents, $class);
        }

        return (array) $contents;
    }
}
