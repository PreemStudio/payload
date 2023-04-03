<?php

declare(strict_types=1);

namespace Tests\Unit;

use Exception;
use PreemStudio\Payload\File;

test('should throw exception when getting contents of file that does not exist', function (): void {
    File::get('invalid.json');
})->throws(Exception::class);

test('should get the contents of a file', function (): void {
    $contents = File::get(\sprintf('%s/../stubs/data.json', __DIR__));

    expect($contents)->toEqual(\json_encode(['hello' => 'world']));
});

test('should throw exception when getting file that does not exist', function (): void {
    File::get('invalid.json');
})->throws(Exception::class);

test('should get a file', function (): void {
    $contents = File::get(\sprintf('%s/../stubs/data.php', __DIR__));

    expect($contents)->toEqual(['hello' => 'world']);
});
