<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Unit;

use BaseCodeOy\Payload\File;

test('should throw exception when getting contents of file that does not exist', function (): void {
    File::get('invalid.json');
})->throws(\Exception::class);

test('should get the contents of a file', function (): void {
    $contents = File::get(\sprintf('%s/../stubs/data.json', __DIR__));

    expect($contents)->toEqual(\json_encode(['hello' => 'world']));
});

test('should throw exception when getting file that does not exist', function (): void {
    File::get('invalid.json');
})->throws(\Exception::class);

test('should get a file', function (): void {
    $contents = File::get(\sprintf('%s/../stubs/data.php', __DIR__));

    expect($contents)->toEqual(['hello' => 'world']);
});
