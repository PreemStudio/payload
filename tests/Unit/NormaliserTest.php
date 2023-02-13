<?php

declare(strict_types=1);

namespace Tests\Unit;

use PreemStudio\Payload\Contracts\Deserialiser;
use PreemStudio\Payload\Contracts\Serialiser;
use PreemStudio\Payload\Normalisers\ArrayNormaliser;
use PreemStudio\Payload\Normalisers\CsvNormaliser;
use PreemStudio\Payload\Normalisers\IniNormaliser;
use PreemStudio\Payload\Normalisers\JsonNormaliser;
use PreemStudio\Payload\Normalisers\ValueNormaliser;
use PreemStudio\Payload\Normalisers\XmlNormaliser;
use PreemStudio\Payload\Normalisers\YamlInlineNormaliser;
use PreemStudio\Payload\Normalisers\YamlNormaliser;
use PreemStudio\Payload\Readers\Reader;
use PreemStudio\Payload\Writers\Writer;

it('should have a serialiser, deserialiser, reader and writer', function ($normaliser) {
    $this->assertInstanceOf(Serialiser::class, $normaliser->serialiser());
    $this->assertInstanceOf(Deserialiser::class, $normaliser->deserialiser());
    $this->assertInstanceOf(Reader::class, $normaliser->reader());
    $this->assertInstanceOf(Writer::class, $normaliser->writer());
})->with([
    'array'       => new ArrayNormaliser,
    'csv'         => new CsvNormaliser,
    'ini'         => new IniNormaliser,
    'json'        => new JsonNormaliser,
    'value'       => new ValueNormaliser,
    'xml'         => new XmlNormaliser,
    'yaml-inline' => new YamlInlineNormaliser,
    'yaml'        => new YamlNormaliser,
]);
