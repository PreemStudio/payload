<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Serialisers;

use League\Csv\Writer;
use PreemStudio\Payload\Contracts\Serialiser;

final class CsvSerialiser implements Serialiser
{
    public function serialise(mixed $input): string
    {
        $writer = Writer::createFromString('');

        if (is_array(reset($input))) {
            $writer->insertOne(array_keys(reset($input)));
        } else {
            $writer->insertOne(array_keys($input));
        }

        if (is_array(reset($input))) {
            $writer->insertAll($input);
        } else {
            $writer->insertOne($input);
        }

        return $writer->toString();
    }
}
