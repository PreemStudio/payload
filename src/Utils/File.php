<?php

declare(strict_types=1);

namespace PreemStudio\Payload\Utils;

use PreemStudio\Payload\Exceptions\FileDoesNotExistException;

final class File
{
    public static function extension($path): string
    {
        return pathinfo($path, PATHINFO_EXTENSION);
    }

    public static function exists($path): bool
    {
        return file_exists($path);
    }

    public static function contents($path): string
    {
        if (static::exists($path)) {
            return trim(file_get_contents($path));
        }

        throw new FileDoesNotExistException(sprintf('%s is not a valid file', $path));
    }

    public static function get($path): array
    {
        if (static::exists($path)) {
            return require $path;
        }

        throw new FileDoesNotExistException(sprintf('%s is not a valid file', $path));
    }

    public static function put(string $path, string $contents): bool
    {
        return (bool) file_put_contents($path, $contents);
    }
}
