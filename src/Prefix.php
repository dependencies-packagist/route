<?php

namespace Annotation\Route;

use Annotation\Route\Concerns\Arrayable;
use Annotation\Route\Contracts\RoutingContract;
use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Prefix extends Arrayable implements RoutingContract
{
    public function __construct(
        public string $prefix,
    )
    {
        //
    }
}
