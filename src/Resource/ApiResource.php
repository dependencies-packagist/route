<?php

namespace Annotation\Route\Resource;

use Annotation\Route\Resource;
use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class ApiResource extends Resource
{
    public function __construct(
        public string            $resource,
        public array|string|null $except = null,
        public array|string|null $only = null,
        public array|string|null $names = null,
        public array|string|null $parameters = null,
        public bool|null         $shallow = null,
    )
    {
        parent::__construct(
            resource: $resource,
            apiResource: true,
            except: $except,
            only: $only,
            names: $names,
            parameters: $parameters,
            shallow: $shallow,
        );
    }
}
