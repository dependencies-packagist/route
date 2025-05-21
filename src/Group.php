<?php

namespace Annotation\Route;

use Annotation\Route\Contracts\RouteContract;
use Attribute;

#[Attribute(Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
class Group implements RouteContract
{
    public function __construct(
        public ?string $prefix = null,
        public ?string $domain = null,
        public ?string $as = null,
        public ?array  $where = [],
    )
    {
        //
    }
}
