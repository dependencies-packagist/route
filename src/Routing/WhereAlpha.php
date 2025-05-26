<?php

namespace Annotation\Route\Routing;

use Annotation\Route\Where;
use Attribute;

#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class WhereAlpha extends Where
{
    public function __construct(string $param)
    {
        $this->param      = $param;
        $this->constraint = '[a-zA-Z]+';
    }
}
