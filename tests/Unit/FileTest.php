<?php

declare(strict_types=1);

namespace Tests\Unit;

use PreemStudio\Payload\Exceptions\FileDoesNotExistException;
use PreemStudio\Payload\Utils\File;

test('should get extension from path', function () {
    expect(File::extension('data.json'))->toEqual('json');
});

test('should return true when file exists', function () {
    expect(File::exists(sprintf('%s/../stubs/data.json', __DIR__)))->toBeTrue();
});

test('should return false when files does not exist', function () {
    expect(File::exists('invalid.json'))->toBeFalse();
});

test('should throw exception when getting contents of file that does not exist', function () {
    File::contents('invalid.json');
})->throws(FileDoesNotExistException::class);

test('should get the contents of a file', function () {
    $contents = File::contents(sprintf('%s/../stubs/data.json', __DIR__));

    expect($contents)->toEqual(json_encode(['hello' => 'world']));
});

test('should throw exception when getting file that does not exist', function () {
    File::get('invalid.json');
})->throws(FileDoesNotExistException::class);

test('should get a file', function () {
    $contents = File::get(sprintf('%s/../stubs/data.php', __DIR__));

    expect($contents)->toEqual(['hello' => 'world']);
});
