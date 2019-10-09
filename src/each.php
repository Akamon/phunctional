<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Apply a $fn to all the items of the $coll
 *
 * Similar to `array_walk` but allowing generators too.
 * Function $fn should accept the value of the item as the first argument
 * and optionally the key of the item as the second argument.
 *
 * @param callable          $fn   function to apply to every item in the collection
 * @param array|Traversable $coll collection of values to apply the function
 */
function each(callable $fn, $coll): void
{
    foreach ($coll as $key => $value) {
        $fn($value, $key);
    }
}
