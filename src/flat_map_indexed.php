<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Generator;
use Traversable;

/**
 * Returns an array containing the results of applying $fn to the items of the $coll
 * and flattening the results.
 *
 * Function $fn should accept the value of the item as the first argument
 * and optionally the key of the item as the second argument.
 *
 * @param callable                    $fn   function with signature Closure(mixed): array|Traversable|Generator
 * @param array|Traversable|Generator $coll collection of values
 *
 */
function flat_map_indexed(callable $fn, $coll): array
{
    return flatten(map_indexed($fn, $coll));
}
