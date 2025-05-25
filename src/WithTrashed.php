<?php

namespace Annotation\Route;

use Annotation\Route\Concerns\Arrayable;
use Annotation\Route\Contracts\RoutingContract;
use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS)]
class WithTrashed extends Arrayable implements RoutingContract
{
    public function __construct(public bool $withTrashed = true)
    {
        //
    }
}
