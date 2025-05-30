<?php

namespace Annotation\Route\Route;

use Annotation\Route\Route;
use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class Get extends Route
{
    public function __construct(
        ?string      $uri = null,
        ?string      $name = null,
        array|string $middleware = [],
        array|string $withoutMiddleware = [],
    )
    {
        parent::__construct(
            methods: ['get'],
            uri: $uri,
            name: $name,
            middleware: $middleware,
            withoutMiddleware: $withoutMiddleware
        );
    }
}
