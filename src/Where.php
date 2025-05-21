<?php

namespace Annotation\Route;

use Annotation\Route\Contracts\WhereContract;
use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
class Where implements WhereContract
{
    public function __construct(
        public string $param,
        public string $constraint,
    )
    {
        //
    }
}
