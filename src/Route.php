<?php

namespace Annotation\Route;

use Annotation\Route\Contracts\RouteContract;
use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class Route implements RouteContract
{
    public array $methods;

    public array $middleware;

    public array $withoutMiddleware;

    public static array $verbs = ['GET', 'HEAD', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'];

    public function __construct(
        array|string   $methods,
        public string  $uri,
        public ?string $name = null,
        array|string   $middleware = [],
        array|string   $withoutMiddleware = [],
    )
    {
        $this->methods           = array_map(static fn(string $verb) => in_array(
            $upperVerb = strtoupper($verb), self::$verbs
        ) ? $upperVerb : $verb, static::wrap($methods));
        $this->middleware        = static::wrap($middleware);
        $this->withoutMiddleware = static::wrap($withoutMiddleware);
    }

    public static function wrap($value): array
    {
        if (is_null($value)) {
            return [];
        }

        return is_array($value) ? $value : [$value];
    }
}
