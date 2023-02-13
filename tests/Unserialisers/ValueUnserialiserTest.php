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

use BrianFaust\Payload\Unserialisers\ValueUnserialiser;

uses(BrianFaust\Tests\Payload\Unserialisers\TestCase::class);


// Helpers
function getInput(): string
{
    return 'a:1:{s:5:"hello";s:5:"world";}';
}

function getUnserialiser(): ValueUnserialiser
{
    return new ValueUnserialiser();
}
