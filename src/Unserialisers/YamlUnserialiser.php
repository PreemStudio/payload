<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Unserialisers;

use PreemStudio\Payload\Contracts\Unserialiser;
use PreemStudio\Payload\Utils\Mapper;
use Symfony\Component\Yaml\Yaml;

class YamlUnserialiser implements Unserialiser
{
    public function unserialise($input, ?string $class = null): array
    {
        $contents = Yaml::parse($input);

        if (!is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return $contents;
    }
}
