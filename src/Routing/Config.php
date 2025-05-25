<?php

namespace Annotation\Route\Routing;

use Annotation\Route\Concerns\Arrayable;
use Annotation\Route\Contracts\ConfigContract;
use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Config extends Arrayable implements ConfigContract
{
    public function __construct(
        public string $key,
        public mixed  $value = null,
    )
    {
        //
    }
}
