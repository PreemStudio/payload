<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Writers;

use PreemStudio\Payload\Serialisers\ArraySerialiser;

class ArrayWriter extends Writer
{
    public function write(string $path, mixed $input): bool
    {
        $contents = (new ArraySerialiser)->serialise($input);

        return $this->put($path, "<?php

 return $contents;");
    }
}
