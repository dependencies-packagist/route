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
        $callable   = fn(array $properties, ReflectionProperty $property) => $property->isStatic() ? $properties : array_merge(
            $properties,
            [$property->getName() => $property->getValue($this)]
        );
        $initial    = [];
        return array_reduce($properties, $callable, $initial);
    }
}
