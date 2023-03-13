<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Serialisers;

use PreemStudio\Payload\Contracts\Serialiser;
use Symfony\Component\Yaml\Dumper;

final class YamlInlineSerialiser implements Serialiser
{
    public function serialise(mixed $input): string
    {
        return (new Dumper)->dump($input, 1);
    }
}
