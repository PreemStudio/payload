<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Payload;

final class File
{
    public static function get(string $path): mixed
    {
        if (\file_exists($path)) {
            if (\pathinfo($path, \PATHINFO_EXTENSION) === 'php') {
                return require $path;
            }

            return \trim(\file_get_contents($path));
        }

        throw new \Exception(\sprintf('%s is not a valid file', $path));
    }

    public static function put(string $path, string $contents): bool
    {
        return (bool) \file_put_contents($path, $contents);
    }
}
