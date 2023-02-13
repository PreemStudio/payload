<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Serialisers;

use PreemStudio\Payload\Contracts\Serialiser;
use Symfony\Component\Yaml\Dumper;

class YamlInlineSerialiser implements Serialiser
{
    public function serialise($input): string
    {
        return (new Dumper())->dump($input, true);
    }
}
