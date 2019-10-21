<?php

/*
 * This file is part of the gundy/easylbs.
 *
 * (c) Gundy <62687565@qq.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Gundy\Easylbs;

use Gundy\Easylbs\Kernel\Support\Str;

class Factory
{
    public static function make($name, array $config)
    {
        $namespace = Str::studly($name);
        $application = "\\Gundy\Easylbs\\{$namespace}\\Application";

        return new $application($config);
    }

    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}
