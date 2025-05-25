<?php

namespace Annotation\Route;

use Annotation\Route\Concerns\Arrayable;
use Annotation\Route\Contracts\RoutingContract;
use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Domain extends Arrayable implements RoutingContract
{
    public function __construct(
        public string $domain,
    )
    {
        //
    }
}
