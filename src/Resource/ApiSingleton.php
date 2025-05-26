<?php

namespace Annotation\Route\Resource;

use Annotation\Route\Singleton;
use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class ApiSingleton extends Singleton
{
    public function __construct(
        public string            $resource,
        public array|string|null $except = null,
        public array|string|null $only = null,
        public array|string|null $names = null,
        public array|string|null $parameters = null,
        public bool|null         $creatable = null,
        public bool|null         $destroyable = null,
    )
    {
        parent::__construct(
            singleton: $resource,
            apiSingleton: true,
            except: $except,
            only: $only,
            names: $names,
            parameters: $parameters,
            creatable: $creatable,
            destroyable: $destroyable,
        );
    }
}
