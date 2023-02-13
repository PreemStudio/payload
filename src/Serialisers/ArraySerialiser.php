<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Serialisers;

use PreemStudio\Payload\Contracts\Serialiser;

class ArraySerialiser implements Serialiser
{
    public function serialise($input): string
    {
        return var_export($input, true);
    }
}
