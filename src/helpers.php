<?php

declare(strict_types=1);

use PreemStudio\Payload\Arr;
use PreemStudio\Payload\Csv;
use PreemStudio\Payload\Ini;
use PreemStudio\Payload\Json;
use PreemStudio\Payload\Value;
use PreemStudio\Payload\Xml;
use PreemStudio\Payload\Yaml;
use PreemStudio\Payload\YamlInline;

if (! function_exists('array_serialise')) {
    function array_serialise($input)
    {
        return (new Arr)->serialise($input);
    }
}

if (! function_exists('array_deserialise')) {
    function array_deserialise($contents, $class = null)
    {
        return (new Arr)->deserialise($contents, $class);
    }
}

if (! function_exists('array_read')) {
    function array_read($path, $class = null)
    {
        return (new Arr)->read($path, $class);
    }
}

if (! function_exists('array_write')) {
    function array_write(string $path, mixed $input)
    {
        return (new Arr)->write($path, $input);
    }
}

if (! function_exists('csv_serialise')) {
    function csv_serialise($input)
    {
        return (new Csv)->serialise($input);
    }
}

if (! function_exists('csv_deserialise')) {
    function csv_deserialise($contents, $class = null)
    {
        return (new Csv)->deserialise($contents, $class);
    }
}

if (! function_exists('csv_read')) {
    function csv_read($path, $class = null)
    {
        return (new Csv)->read($path, $class);
    }
}

if (! function_exists('csv_write')) {
    function csv_write(string $path, mixed $input)
    {
        return (new Csv)->write($path, $input);
    }
}

if (! function_exists('ini_serialise')) {
    function ini_serialise($input)
    {
        return (new Ini)->serialise($input);
    }
}

if (! function_exists('ini_deserialise')) {
    function ini_deserialise($contents, $class = null)
    {
        return (new Ini)->deserialise($contents, $class);
    }
}

if (! function_exists('ini_read')) {
    function ini_read($path, $class = null)
    {
        return (new Ini)->read($path, $class);
    }
}

if (! function_exists('ini_write')) {
    function ini_write(string $path, mixed $input)
    {
        return (new Ini)->write($path, $input);
    }
}

if (! function_exists('json_serialise')) {
    function json_serialise($input)
    {
        return (new Json)->serialise($input);
    }
}

if (! function_exists('json_deserialise')) {
    function json_deserialise($contents, $class = null)
    {
        return (new Json)->deserialise($contents, $class);
    }
}

if (! function_exists('json_read')) {
    function json_read($path, $class = null)
    {
        return (new Json)->read($path, $class);
    }
}

if (! function_exists('json_write')) {
    function json_write(string $path, mixed $input)
    {
        return (new Json)->write($path, $input);
    }
}

if (! function_exists('value_serialise')) {
    function value_serialise($input)
    {
        return (new Value)->serialise($input);
    }
}

if (! function_exists('value_deserialise')) {
    function value_deserialise($contents, $class = null)
    {
        return (new Value)->deserialise($contents, $class);
    }
}

if (! function_exists('value_read')) {
    function value_read($path, $class = null)
    {
        return (new Value)->read($path, $class);
    }
}

if (! function_exists('value_write')) {
    function value_write(string $path, mixed $input)
    {
        return (new Value)->write($path, $input);
    }
}

if (! function_exists('xml_serialise')) {
    function xml_serialise($input)
    {
        return (new Xml)->serialise($input);
    }
}

if (! function_exists('xml_deserialise')) {
    function xml_deserialise($contents, $class = null)
    {
        return (new Xml)->deserialise($contents, $class);
    }
}

if (! function_exists('xml_read')) {
    function xml_read($path, $class = null)
    {
        return (new Xml)->read($path, $class);
    }
}

if (! function_exists('xml_write')) {
    function xml_write(string $path, mixed $input)
    {
        return (new Xml)->write($path, $input);
    }
}

if (! function_exists('yaml_serialise')) {
    function yaml_serialise($input)
    {
        return (new Yaml)->serialise($input);
    }
}

if (! function_exists('yaml_deserialise')) {
    function yaml_deserialise($contents, $class = null)
    {
        return (new Yaml)->deserialise($contents, $class);
    }
}

if (! function_exists('yaml_read')) {
    function yaml_read($path, $class = null)
    {
        return (new Yaml)->read($path, $class);
    }
}

if (! function_exists('yaml_write')) {
    function yaml_write(string $path, mixed $input)
    {
        return (new Yaml)->write($path, $input);
    }
}

if (! function_exists('yaml_inline_serialise')) {
    function yaml_inline_serialise($input)
    {
        return (new YamlInline)->serialise($input);
    }
}

if (! function_exists('yaml_inline_deserialise')) {
    function yaml_inline_deserialise($contents, $class = null)
    {
        return (new YamlInline)->deserialise($contents, $class);
    }
}

if (! function_exists('yaml_inline_read')) {
    function yaml_inline_read($path, $class = null)
    {
        return (new YamlInline)->read($path, $class);
    }
}

if (! function_exists('yaml_inline_write')) {
    function yaml_inline_write(string $path, mixed $input)
    {
        return (new YamlInline)->write($path, $input);
    }
}
