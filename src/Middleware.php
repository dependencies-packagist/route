<?php

namespace Annotation\Route;

use Annotation\Route\Contracts\RouteContract;
use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Middleware implements RouteContract
{
    public array $middleware = [];

    public function __construct(string|array $middleware = [])
    {
        $this->middleware = is_null($middleware) ? [] : (is_array($middleware) ? $middleware : [$middleware]);
    }
}
