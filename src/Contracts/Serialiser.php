<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Contracts;

interface Serialiser
{
    public function serialise(mixed $input): string;
}
