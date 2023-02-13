<?php

declare(strict_types=1);

namespace Tests\Unit;

use PreemStudio\Payload\Deserialisers\ArrayDeserialiser;
use PreemStudio\Payload\Deserialisers\CsvDeserialiser;
use PreemStudio\Payload\Deserialisers\IniDeserialiser;
use PreemStudio\Payload\Deserialisers\JsonDeserialiser;
use PreemStudio\Payload\Deserialisers\ValueDeserialiser;
use PreemStudio\Payload\Deserialisers\XmlDeserialiser;
use PreemStudio\Payload\Deserialisers\YamlDeserialiser;

it('should deserialise a value', function ($deserialiser, $input) {
    expect($deserialiser->deserialise($input))->toEqual(['hello' => 'world']);
})->with([
    'array' => [new ArrayDeserialiser, "array ( 'hello' => 'world', )"],
    'ini'   => [new IniDeserialiser, 'hello = world'],
    'json'  => [new JsonDeserialiser, '{"hello":"world"}'],
    'value' => [new ValueDeserialiser, 'a:1:{s:5:"hello";s:5:"world";}'],
    'xml'   => [new XmlDeserialiser, '<?xml version="1.0"?><response><hello>world</hello></response>'],
    'yaml'  => [new YamlDeserialiser, 'hello: world'],
]);

it('should deserialise a CSV value', function () {
    $contents = (new CsvDeserialiser)->deserialise('hello
world
');

    expect($contents)->toEqual([['hello'], ['world']]);
});
