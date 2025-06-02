<?php

namespace Annotation\Route\Routing;

use Annotation\Route\Contracts\WhereContract;
use Annotation\Route\Route;
use Attribute;
use Override;

#[Attribute(Attribute::TARGET_METHOD)]
class Fallback extends Route implements WhereContract
{
    public function __construct()
    {
        parent::__construct(
            methods: ['get', 'head'],
            uri: '{fallbackPlaceholder}',
            name: 'fallback',
        );
    }

    #[Override]
    public function toArray(): array
    {
        return [
            'fallbackPlaceholder' => '.*',
        ];
    }
}
