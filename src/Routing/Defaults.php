<?php

namespace Annotation\Route\Routing;

use Annotation\Route\Contracts\RoutingContract;
use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
class Defaults implements RoutingContract
{
    public function __construct(
        public string $key,
        public string $value,
    )
    {
        //
    }
}
