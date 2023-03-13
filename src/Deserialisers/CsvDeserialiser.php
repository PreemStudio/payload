<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Deserialisers;

use League\Csv\Reader;
use PreemStudio\Payload\Contracts\Deserialiser;
use PreemStudio\Payload\Utils\Mapper;

final class CsvDeserialiser implements Deserialiser
{
    public function deserialise(mixed $input, ?string $class = null): array
    {
        $reader = Reader::createFromString($input);

        $contents = [];

        foreach ($reader as $record) {
            $contents[] = $record;
        }

        if (! is_null($class)) {
            return (new Mapper)->map($contents, $class);
        }

        return $contents;
    }
}
