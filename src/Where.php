<?php

namespace Annotation\Route;

use Annotation\Route\Concerns\Arrayable;
use Annotation\Route\Contracts\WhereContract;
use Attribute;
use Override;

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

    #[Override]
    public function toArray(): array
    {
        return [
            $this->param => $this->constraint,
        ];
    }
}
