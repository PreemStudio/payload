<?php

declare(strict_types=1);

namespace Tests\Unit;

use BombenProdukt\Payload\Arr;
use BombenProdukt\Payload\Csv;
use BombenProdukt\Payload\Ini;
use BombenProdukt\Payload\Json;
use BombenProdukt\Payload\Value;
use BombenProdukt\Payload\Xml;
use BombenProdukt\Payload\Yaml;
use BombenProdukt\Payload\YamlInline;

it('should encode a blob of data', function ($encoder, $expected): void {
    expect($encoder->encode(['hello' => 'world']))->toEqual($expected);
})->with([
    'array' => [new Arr(), "array (
  'hello' => 'world',
)"],
    'csv' => [new Csv(), 'hello
world
'],
    'ini' => [new Ini(), 'hello = world'],
    'json' => [new Json(), '{"hello":"world"}'],
    'value' => [new Value(), 'a:1:{s:5:"hello";s:5:"world";}'],
    'xml' => [new Xml(), '<?xml version="1.0"?>
<response><hello>world</hello></response>
'],
    'yaml-inline' => [new YamlInline(), "hello: world\n"],
    'yaml' => [new Yaml(), '{ hello: world }'],
]);

it('should decode a value', function ($decoder, $contents): void {
    expect($decoder->decode($contents))->toEqual(['hello' => 'world']);
})->with([
    'array' => [new Arr(), "array ( 'hello' => 'world', )"],
    'ini' => [new Ini(), 'hello = world'],
    'json' => [new Json(), '{"hello":"world"}'],
    'value' => [new Value(), 'a:1:{s:5:"hello";s:5:"world";}'],
    'xml' => [new Xml(), '<?xml version="1.0"?><response><hello>world</hello></response>'],
    'yaml' => [new Yaml(), 'hello: world'],
]);

it('should decode a CSV value', function (): void {
    $contents = (new Csv())->decode('hello
world
');

    expect($contents)->toEqual([['hello'], ['world']]);
});

it('should write a file', function ($writer): void {
    $tempFile = \tempnam(\sys_get_temp_dir(), 'prefix');

    $result = $writer->write($tempFile, ['hello' => 'world']);

    $this->assertTrue($result);
})->with([
    'array' => new Arr(),
    'csv' => new Csv(),
    'ini' => new Ini(),
    'json' => new Json(),
    'value' => new Value(),
    'xml' => new Xml(),
    'yaml-inline' => new YamlInline(),
    'yaml' => new Yaml(),
]);

it('should read a file', function ($reader, $extension): void {
    $contents = $reader->read("tests/stubs/data.{$extension}");

    expect($contents)->toEqual(['hello' => 'world']);
})->with([
    'array' => [new Arr(), 'php'],
    'ini' => [new Ini(), 'ini'],
    'json' => [new Json(), 'json'],
    'value' => [new Value(), 'ser'],
    'xml' => [new Xml(), 'xml'],
    'yaml' => [new Yaml(), 'yml'],
]);

it('should read a CSV file', function (): void {
    expect((new Csv())->read('tests/stubs/data.csv'))->toEqual([['hello'], ['world']]);
});

it('should throw exception when invalid file type', function ($reader): void {
    $reader->read('invalid.txt');
})->with([
    'array' => new Arr(),
    'csv' => new Csv(),
    'ini' => new Ini(),
    'json' => new Json(),
    'value' => new Value(),
    'xml' => new Xml(),
    'yaml' => new Yaml(),
])->throws(\Exception::class);
