<?php

namespace Annotation\Route\Routing;

use Annotation\Route\Concerns\Arrayable;
use Annotation\Route\Contracts\ConfigContract;
use Attribute;
use Override;

#[Attribute(Attribute::TARGET_CLASS)]
class Config extends Arrayable implements ConfigContract
{
    public function __construct(
        public string $key,
        public mixed  $value = null,
    )
    {
        //
    }

    public function setValue(mixed $value): static
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
