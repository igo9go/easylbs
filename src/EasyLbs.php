<?php

/*
 * This file is part of the gundy/easylbs.
 *
 * (c) Gundy <62687565@qq.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Gundy\Easylbs\kernel;

use Gundy\Easylbs\Support\Config;

class EasyLbs
{
    protected $config;

    public function __construct(array $config)
    {
        $this->config = new Config($config);
    }

    public function __call($method, $arguments)
    {
        return $this['base']->$method(...$arguments);
    }
}
