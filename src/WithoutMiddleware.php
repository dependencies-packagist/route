<?php

namespace Annotation\Route;

use Annotation\Route\Concerns\Arrayable;
use Annotation\Route\Contracts\RoutingContract;
use Attribute;

#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD)]
class WithoutMiddleware extends Arrayable implements RoutingContract
{
    public array $withoutMiddleware = [];

    public function __construct(string|array $withoutMiddleware = [])
    {
        $this->withoutMiddleware = is_null($withoutMiddleware) ? [] : (is_array($withoutMiddleware) ? $withoutMiddleware : [$withoutMiddleware]);
    }
}
