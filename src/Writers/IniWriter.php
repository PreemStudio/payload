<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Writers;

use PreemStudio\Payload\Serialisers\IniSerialiser;

class IniWriter extends Writer
{
    public function write($path, $input): bool
    {
        return $this->put($path, (new IniSerialiser())->serialise($input));
    }
}
