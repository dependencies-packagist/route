<?php

namespace Annotation\Route;

use Annotation\Route\Concerns\Arrayable;
use Annotation\Route\Contracts\WhereContract;
use Attribute;

#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class Where extends Arrayable implements WhereContract
{
    public function __construct(
        public string $param,
        public string $constraint,
    )
    {
        //
    }
}
