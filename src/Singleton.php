<?php

namespace Annotation\Route;

use Annotation\Route\Concerns\Arrayable;
use Annotation\Route\Contracts\ResourceContract;
use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Singleton extends Arrayable implements ResourceContract
{
    public function __construct(
        public string            $singleton,
        public bool              $apiSingleton = false,
        public array|string|null $except = null,
        public array|string|null $only = null,
        public array|string|null $names = null,
        public array|string|null $parameters = null,
        public bool|null         $creatable = null,
        public bool|null         $destroyable = null,
    )
    {
        //
    }
}
