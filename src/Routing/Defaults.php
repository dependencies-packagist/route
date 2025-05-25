<?php

namespace Annotation\Route\Routing;

use Annotation\Route\Concerns\Arrayable;
use Annotation\Route\Contracts\RoutingContract;
use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
class Defaults extends Arrayable implements RoutingContract
{
    public function __construct(
        public string $key,
        public string $value,
    )
    {
        //
    }
}
