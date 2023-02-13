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

use BrianFaust\Payload\Unserialisers\CsvUnserialiser;



// Helpers
function should_unserialise_input()
{
    $unserialiser = test()->getUnserialiser();

    $contents = $unserialiser->unserialise(test()->getInput());

    expect($contents)->toEqual([['hello'], ['world']]);
}

function getInput(): string
{
    return 'hello
world
';
}

function getUnserialiser(): CsvUnserialiser
{
    return new CsvUnserialiser();
}
