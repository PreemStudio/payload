<?php

declare(strict_types=1);

namespace BombenProdukt\Payload;

final class Ini extends AbstractNormalizer
{
    public function encode(mixed $contents): string
    {
        return $this->build($contents);
    }

    public function decode(mixed $contents): array
    {
        return \json_decode(\json_encode(\parse_ini_string($contents, true)), true, \JSON_THROW_ON_ERROR);
    }

    private function build(array $data, $depth = 0, $prevKey = null)
    {
        $valueOutput = null;
        $arrayOutput = null;

        $position = 0;

        foreach ($data as $key => $val) {
            if (\is_array($val)) {
                if ($depth === 0) {
                    $arrayOutput .= "\n[{$key}]\n";
                }

                $arrayOutput .= $this->build($val, $depth + 1, $key);
            } else {
                $valStr = $this->escape($val);

                if ($depth > 1) {
                    if ($key !== $position) {
                        if (\ctype_digit((string) $key)) {
                            $position = $key;
                        }

                        $valueOutput .= "{$prevKey}[{$key}] = {$valStr}\n";
                    } else {
                        $valueOutput .= "{$prevKey}[] = {$valStr}\n";
                    }

                    $position++;
                } else {
                    $valueOutput .= "{$key} = {$valStr}\n";
                }
            }
        }

        $output = "{$valueOutput}\n{$arrayOutput}";

        return $depth ? \ltrim($output) : \trim($output);
    }

    private function escape($value)
    {
        $value = (string) $value;

        if (empty($value)) {
            return 'false';
        } elseif ($value === '1') {
            return 'true';
        }

        if (\is_numeric($value)) {
            return (string) $value;
        }

        if (\is_string($value) && \ctype_alnum($value) && !\is_numeric($value)) {
            return (string) $value;
        }

        return \var_export($value, true);
    }
}
