<?php

namespace Annotation\Route;

use Annotation\Route\Concerns\Arrayable;
use Annotation\Route\Contracts\RoutingContract;
use Attribute;

#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD)]
class ScopeBindings extends Arrayable implements RoutingContract
{
    public function __construct(
        public bool $scopeBindings = true,
    )
    {
        //
    }
}
