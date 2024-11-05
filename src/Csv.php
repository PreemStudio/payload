<?php

declare(strict_types=1);

namespace BaseCodeOy\Payload;

use League\Csv\Reader;
use League\Csv\Writer;

final class Csv extends AbstractNormalizer
{
    public function encode(mixed $contents): string
    {
        $writer = Writer::createFromString('');

        if (\is_array(\reset($contents))) {
            $writer->insertOne(\array_keys(\reset($contents)));
        } else {
            $writer->insertOne(\array_keys($contents));
        }

        if (\is_array(\reset($contents))) {
            $writer->insertAll($contents);
        } else {
            $writer->insertOne($contents);
        }

        return $writer->toString();
    }

    public function decode(mixed $contents): array
    {
        $result = [];

        foreach (Reader::createFromString($contents) as $record) {
            $result[] = $record;
        }

        return $result;
    }
}
