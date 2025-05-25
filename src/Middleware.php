<?php

namespace Annotation\Route;

use Annotation\Route\Concerns\Arrayable;
use Annotation\Route\Contracts\RoutingContract;
use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Middleware extends Arrayable implements RoutingContract
{
    public array $middleware = [];

    public function __construct(string|array $middleware = [])
    {
        $this->middleware = is_null($middleware) ? [] : (is_array($middleware) ? $middleware : [$middleware]);
    }
}
