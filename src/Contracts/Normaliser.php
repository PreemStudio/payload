<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Contracts;

use PreemStudio\Payload\Readers\Reader;
use PreemStudio\Payload\Writers\Writer;

interface Normaliser
{
    public function serialiser(): Serialiser;

    public function deserialiser(): Deserialiser;

    public function writer(): Writer;

    public function reader(): Reader;
}
