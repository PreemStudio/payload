<?php

declare(strict_types=1);

namespace Tests\Unit;

use PreemStudio\Payload\Serialisers\ArraySerialiser;
use PreemStudio\Payload\Serialisers\CsvSerialiser;
use PreemStudio\Payload\Serialisers\IniSerialiser;
use PreemStudio\Payload\Serialisers\JsonSerialiser;
use PreemStudio\Payload\Serialisers\ValueSerialiser;
use PreemStudio\Payload\Serialisers\XmlSerialiser;
use PreemStudio\Payload\Serialisers\YamlInlineSerialiser;
use PreemStudio\Payload\Serialisers\YamlSerialiser;

it('should serialise a blob of data', function ($serialiser, $expected) {
    expect($serialiser->serialise(['hello' => 'world']))->toEqual($expected);
})->with([
    'array'       => [new ArraySerialiser, "array (
  'hello' => 'world',
)"],
    'csv'         => [new CsvSerialiser, 'hello
world
'],
    'ini'         => [new IniSerialiser, 'hello = world'],
    'json'        => [new JsonSerialiser, '{"hello":"world"}'],
    'value'       => [new ValueSerialiser, 'a:1:{s:5:"hello";s:5:"world";}'],
    'xml'         => [new XmlSerialiser, '<?xml version="1.0"?>
<response><hello>world</hello></response>
'],
    'yaml-inline' => [new YamlInlineSerialiser, "hello: world\n"],
    'yaml'        => [new YamlSerialiser, '{ hello: world }'],
]);
