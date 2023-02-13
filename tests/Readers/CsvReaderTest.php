<?php

declare(strict_types=1);

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use BrianFaust\Payload\Readers\CsvReader;

// Helpers
function should_read_file()
{
    $reader = test()->getReader();

    $contents = $reader->read(
        sprintf('%s/../stubs/data.'.test()->getFileExtension(), __DIR__)
    );

    expect($contents)->toEqual([['hello'], ['world']]);
}

function getFileExtension(): string
{
    return 'csv';
}

function getReader(): CsvReader
{
    return new CsvReader();
}
