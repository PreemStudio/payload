<?php

declare(strict_types=1);

namespace Tests\Unit;

use PreemStudio\Payload\Exceptions\InvalidFileTypeException;
use PreemStudio\Payload\Readers\ArrayReader;
use PreemStudio\Payload\Readers\CsvReader;
use PreemStudio\Payload\Readers\IniReader;
use PreemStudio\Payload\Readers\JsonReader;
use PreemStudio\Payload\Readers\ValueReader;
use PreemStudio\Payload\Readers\XmlReader;
use PreemStudio\Payload\Readers\YamlReader;

it('should read a file', function ($reader) {
    $contents = $reader->read('tests/stubs/data.'.reset($reader->extensions));

    expect($contents)->toEqual(['hello' => 'world']);
})->with([
    'array' => new ArrayReader,
    'ini'   => new IniReader,
    'json'  => new JsonReader,
    'value' => new ValueReader,
    'xml'   => new XmlReader,
    'yaml'  => new YamlReader,
]);

it('should read a CSV file', function () {
    expect((new CsvReader)->read('tests/stubs/data.csv'))->toEqual([['hello'], ['world']]);
});

it('should throw exception when invalid file type', function ($reader) {
    $reader->read('invalid.txt');
})->with([
    'array' => new ArrayReader,
    'csv'   => new CsvReader,
    'ini'   => new IniReader,
    'json'  => new JsonReader,
    'value' => new ValueReader,
    'xml'   => new XmlReader,
    'yaml'  => new YamlReader,
])->throws(InvalidFileTypeException::class);
