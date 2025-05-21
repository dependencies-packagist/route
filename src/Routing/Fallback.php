<?php

namespace Annotation\Route\Routing;

use Annotation\Route\Contracts\RoutingContract;
use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class Fallback implements RoutingContract
{
}
