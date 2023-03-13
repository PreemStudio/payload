<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Deserialisers;

use PreemStudio\Payload\Contracts\Deserialiser;
use PreemStudio\Payload\Utils\Mapper;

final class JsonDeserialiser implements Deserialiser
{
    public function deserialise(mixed $input, ?string $class = null): array
    {
        $contents = json_decode($input);

        if (! is_null($class)) {
            return (new Mapper)->map($contents, $class);
        }

        return (array) $contents;
    }
}
