<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Serialisers;

use PreemStudio\Payload\Contracts\Serialiser;
use PreemStudio\Payload\Utils\IniBuilder;

final class IniSerialiser implements Serialiser
{
    public function serialise(mixed $input): string
    {
        return (new IniBuilder)->build($input);
    }
}
