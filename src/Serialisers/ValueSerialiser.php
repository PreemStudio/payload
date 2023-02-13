<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Serialisers;

use PreemStudio\Payload\Contracts\Serialiser;

class ValueSerialiser implements Serialiser
{
    public function serialise(mixed $input): string
    {
        return serialize($input);
    }
}
