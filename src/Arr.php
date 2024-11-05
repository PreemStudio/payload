<?php

declare(strict_types=1);

namespace BaseCodeOy\Payload;

final class Arr extends AbstractNormalizer
{
    public function encode(mixed $contents): string
    {
        return \var_export($contents, true);
    }

    public function decode(mixed $contents): array
    {
        if (\is_array($contents)) {
            return $contents;
        }

        return eval("return {$contents};");
    }

    public function write(string $path, mixed $contents): bool
    {
        return File::put($path, '<?php return '.$this->encode($contents).';');
    }
}
