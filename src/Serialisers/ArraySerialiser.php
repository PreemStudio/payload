<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Serialisers;

use PreemStudio\Payload\Contracts\Serialiser;

final class ArraySerialiser implements Serialiser
{
    public function serialise(mixed $input): string
    {
        return var_export($input, true);
    }
}
