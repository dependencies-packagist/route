<?php

namespace Annotation\Route;

use Annotation\Route\Contracts\RouteContract;
use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Domain implements RouteContract
{
    public function __construct(
        public string $domain,
    )
    {
        //
    }
}
