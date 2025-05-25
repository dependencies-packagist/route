<?php

namespace Annotation\Route\Concerns;

use ReflectionClass;
use ReflectionProperty;

/**
 * @template TKey of array-key
 * @template TValue
 */
class Arrayable
{
    /**
     * Get the instance as an array.
     *
     * @return array<TKey, TValue>
     */
    public function toArray(): array
    {
        $class      = new ReflectionClass($this);
        $properties = $class->getProperties(ReflectionProperty::IS_PUBLIC);
        $callback   = static fn(array $carry, ReflectionProperty $property) => array_merge($carry, [
            $property->getName() => $property->getValue($this),
        ]);
        return array_reduce($properties, $callback, []);
    }
}
