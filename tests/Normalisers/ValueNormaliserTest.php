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

use BrianFaust\Payload\Normalisers\ValueNormaliser;

uses(BrianFaust\Tests\Payload\Normalisers\TestCase::class);


// Helpers
function getNormaliser(): ValueNormaliser
{
    return new ValueNormaliser();
}
