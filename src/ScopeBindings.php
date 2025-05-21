<?php

namespace Annotation\Route;

use Annotation\Route\Contracts\RouteContract;
use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS)]
class ScopeBindings implements RouteContract
{
    public function __construct(
        public bool $scopeBindings = true,
    )
    {
        //
    }
}
