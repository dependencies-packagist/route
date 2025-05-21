<?php

namespace Annotation\Route\Routing;

use Annotation\Route\Contracts\RoutingContract;
use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Config implements RoutingContract
{
    public function __construct(
        public string $key,
        public mixed  $value = null,
    )
    {
        //
    }
}
