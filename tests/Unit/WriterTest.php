<?php

declare(strict_types=1);

namespace Tests\Unit;

use PreemStudio\Payload\Writers\ArrayWriter;
use PreemStudio\Payload\Writers\CsvWriter;
use PreemStudio\Payload\Writers\IniWriter;
use PreemStudio\Payload\Writers\JsonWriter;
use PreemStudio\Payload\Writers\ValueWriter;
use PreemStudio\Payload\Writers\XmlWriter;
use PreemStudio\Payload\Writers\YamlInlineWriter;
use PreemStudio\Payload\Writers\YamlWriter;

it('should write a file', function ($writer) {
    $tempFile = tempnam(sys_get_temp_dir(), 'prefix');

    $result = $writer->write($tempFile, ['hello' => 'world']);

    $this->assertTrue($result);
})->with([
    'array'       => new ArrayWriter,
    'csv'         => new CsvWriter,
    'ini'         => new IniWriter,
    'json'        => new JsonWriter,
    'value'       => new ValueWriter,
    'xml'         => new XmlWriter,
    'yaml-inline' => new YamlInlineWriter,
    'yaml'        => new YamlWriter,
]);
