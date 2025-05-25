<?php

namespace Annotation\Route\Routing;

use Annotation\Route\Concerns\Arrayable;
use Annotation\Route\Contracts\RoutingContract;
use Attribute;
use Override;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
class Defaults extends Arrayable implements RoutingContract
{
    public function __construct(
        public string $key,
        public string $value,
    )
    {
        //
    }

    public function setValue(string $value): static
    {
        $this->value = $value;
        return $this;
    }

    #[Override]
    public function toArray(): array
    {
        return [
            $this->key => $this->value,
        ];
    }
}
