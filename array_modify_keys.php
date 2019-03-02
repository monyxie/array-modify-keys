<?php

namespace Monyxie;

/**
 * Modify an array's keys by applying a callback to them.
 *
 * @param array $array The subject array.
 * @param callable $callback Callback function to run for each key.
 * The key will be passed to this callback as the first argument.
 * In the case that two different keys become the same after applying the callback,
 * the value of the latter will overwrite the former.
 * @return array
 */
function array_modify_keys(array $array, callable $callback)
{
    $result = [];
    foreach ($array as $key => $value) {
        $newKey = call_user_func($callback, $key);
        $result[$newKey] = $value;
    }

    return $result;
}

/**
 * Recursively modify an array's keys by applying a callback to them.
 *
 * @param array $array The subject array.
 * @param callable $callback Callback function to run for each key.
 * The key will be passed to this callback as the first argument.
 * In the case that two different keys become the same after applying the callback,
 * the value of the latter will overwrite the former.
 * @return array
 */
function array_modify_keys_recursive(array $array, callable $callback)
{
    $result = [];
    foreach ($array as $key => $value) {
        $newKey = call_user_func($callback, $key);
        if (is_array($value)) {
            $result[$newKey] = array_modify_keys_recursive($value, $callback);
        } else {
            $result[$newKey] = $value;
        }
    }

    return $result;
}
