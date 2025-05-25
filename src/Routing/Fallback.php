<?php

namespace Annotation\Route\Routing;

use Annotation\Route\Concerns\Arrayable;
use Annotation\Route\Contracts\RoutingContract;
use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class Fallback extends Arrayable implements RoutingContract
{
}
