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

use BrianFaust\Payload\Unserialisers\ArrayUnserialiser;

uses(BrianFaust\Tests\Payload\Unserialisers\TestCase::class);


// Helpers
function getInput(): string
{
    return "array ( 'hello' => 'world', )";
}

function getUnserialiser(): ArrayUnserialiser
{
    return new ArrayUnserialiser();
}
