<?php

namespace Zintel\LaravelHelpers\Helpers;

class ZintelArray
{
    /**
     * 1. Check if a value exists in an array.
     *
     * @param  array  $array
     * @param  mixed  $value
     * @return bool
     */
    public static function valueExists(array $array, $value)
    {
        return in_array($value, $array);
    }

    /**
     * 2. Get the first element of an array.
     *
     * @param  array  $array
     * @return mixed
     */
    public static function firstElement(array $array)
    {
        return reset($array);
    }

    /**
     * 3. Get the last element of an array.
     *
     * @param  array  $array
     * @return mixed
     */
    public static function lastElement(array $array)
    {
        return end($array);
    }

    /**
     * 4. Check if an array is associative (i.e., not a sequential array).
     *
     * @param  array  $array
     * @return bool
     */
    public static function isAssociative(array $array)
    {
        return array_keys($array) !== range(0, count($array) - 1);
    }

    /**
     * 5. Flatten a multi-dimensional array into a single-dimensional array.
     *
     * @param  array  $array
     * @return array
     */
    public static function flatten(array $array)
    {
        return iterator_to_array(new \RecursiveIteratorIterator(new \RecursiveArrayIterator($array)), false);
    }

    /**
     * 6. Merge two arrays.
     *
     * @param  array  $array1
     * @param  array  $array2
     * @return array
     */
    public static function merge(array $array1, array $array2)
    {
        return array_merge($array1, $array2);
    }

    /**
     * 7. Remove duplicate values from an array.
     *
     * @param  array  $array
     * @return array
     */
    public static function unique(array $array)
    {
        return array_unique($array);
    }

    /**
     * 8. Sort an array in ascending order.
     *
     * @param  array  $array
     * @return array
     */
    public static function sortAscending(array $array)
    {
        sort($array);
        return $array;
    }

    /**
     * 9. Sort an array in descending order.
     *
     * @param  array  $array
     * @return array
     */
    public static function sortDescending(array $array)
    {
        rsort($array);
        return $array;
    }

    /**
     * 10. Reverse the order of elements in an array.
     *
     * @param  array  $array
     * @return array
     */
    public static function reverse(array $array)
    {
        return array_reverse($array);
    }

    /**
     * 11. Get a random element from an array.
     *
     * @param  array  $array
     * @return mixed
     */
    public static function randomElement(array $array)
    {
        return $array[array_rand($array)];
    }

    /**
     * 12. Slice an array based on offset and length.
     *
     * @param  array  $array
     * @param  int  $offset
     * @param  int  $length
     * @return array
     */
    public static function slice(array $array, $offset, $length)
    {
        return array_slice($array, $offset, $length);
    }

    /**
     * 13. Get the sum of the values in an array.
     *
     * @param  array  $array
     * @return int|float
     */
    public static function sum(array $array)
    {
        return array_sum($array);
    }

    /**
     * 14. Get the average of the values in an array.
     *
     * @param  array  $array
     * @return float
     */
    public static function average(array $array)
    {
        return array_sum($array) / count($array);
    }

    /**
     * 15. Get the difference between two arrays.
     *
     * @param  array  $array1
     * @param  array  $array2
     * @return array
     */
    public static function difference(array $array1, array $array2)
    {
        return array_diff($array1, $array2);
    }

    /**
     * 16. Merge an array of arrays into a single array.
     *
     * @param  array  $array
     * @return array
     */
    public static function mergeArrays(array $array)
    {
        return array_merge(...$array);
    }

    /**
     * 17. Find the intersection of two arrays.
     *
     * @param  array  $array1
     * @param  array  $array2
     * @return array
     */
    public static function intersection(array $array1, array $array2)
    {
        return array_intersect($array1, $array2);
    }

    /**
     * 18. Check if a key exists in an array.
     *
     * @param  array  $array
     * @param  mixed  $key
     * @return bool
     */
    public static function keyExists(array $array, $key)
    {
        return array_key_exists($key, $array);
    }

    /**
     * 19. Get the keys of an array.
     *
     * @param  array  $array
     * @return array
     */
    public static function getKeys(array $array)
    {
        return array_keys($array);
    }

    /**
     * 20. Get the values of an array.
     *
     * @param  array  $array
     * @return array
     */
    public static function getValues(array $array)
    {
        return array_values($array);
    }

    /**
     * 21. Combine two arrays into a single array where the first array contains keys and the second array contains values.
     *
     * @param  array  $keys
     * @param  array  $values
     * @return array
     */
    public static function combine(array $keys, array $values)
    {
        return array_combine($keys, $values);
    }

    /**
     * 22. Get the difference between arrays, keeping the keys.
     *
     * @param  array  $array1
     * @param  array  $array2
     * @return array
     */
    public static function differenceWithKeys(array $array1, array $array2)
    {
        return array_diff_key($array1, $array2);
    }

    /**
     * 23. Add an element to the end of an array.
     *
     * @param  array  $array
     * @param  mixed  $value
     * @return array
     */
    public static function push(array $array, $value)
    {
        array_push($array, $value);
        return $array;
    }

    /**
     * 24. Remove the last element from an array.
     *
     * @param  array  $array
     * @return mixed
     */
    public static function pop(array $array)
    {
        return array_pop($array);
    }

    /**
     * 25. Prepend an element to the start of an array.
     *
     * @param  array  $array
     * @param  mixed  $value
     * @return array
     */
    public static function unshift(array $array, $value)
    {
        array_unshift($array, $value);
        return $array;
    }

    /**
     * 26. Remove the first element from an array.
     *
     * @param  array  $array
     * @return mixed
     */
    public static function shift(array $array)
    {
        return array_shift($array);
    }

    /**
     * 27. Group an array by a given key.
     *
     * @param  array  $array
     * @param  string  $key
     * @return array
     */
    public static function groupBy(array $array, $key)
    {
        return collect($array)->groupBy($key)->toArray();
    }

    /**
     * 28. Chunk an array into smaller arrays of the specified size.
     *
     * @param  array  $array
     * @param  int  $size
     * @return array
     */
    public static function chunk(array $array, $size)
    {
        return array_chunk($array, $size);
    }

    /**
     * 29. Filter an array using a callback function.
     *
     * @param  array  $array
     * @param  callable  $callback
     * @return array
     */
    public static function filter(array $array, callable $callback)
    {
        return array_filter($array, $callback);
    }

    /**
     * 30. Map an array using a callback function.
     *
     * @param  array  $array
     * @param  callable  $callback
     * @return array
     */

    /**
     * 30. Map an array using a callback function.
     *
     * @param  array  $array
     * @param  callable  $callback
     * @return array
     */
    public static function map(array $array, callable $callback)
    {
        return array_map($callback, $array);
    }

    /**
     * 31. Apply a callback to each element of an array.
     *
     * @param  array  $array
     * @param  callable  $callback
     * @return void
     */
    public static function each(array $array, callable $callback)
    {
        array_walk($array, $callback);
    }

    /**
     * 32. Get the difference between arrays, preserving keys.
     *
     * @param  array  $array1
     * @param  array  $array2
     * @return array
     */
    public static function diff(array $array1, array $array2)
    {
        return array_diff_assoc($array1, $array2);
    }

    /**
     * 33. Get an array of the array’s values, indexed by keys.
     *
     * @param  array  $array
     * @param  mixed  $search
     * @return array
     */
    public static function search(array $array, $search)
    {
        return array_search($search, $array);
    }

    /**
     * 34. Combine the values of an array into a single string.
     *
     * @param  array  $array
     * @param  string  $glue
     * @return string
     */
    public static function join(array $array, $glue = ',')
    {
        return implode($glue, $array);
    }

    /**
     * 35. Convert a string to an array.
     *
     * @param  string  $string
     * @param  string  $delimiter
     * @return array
     */
    public static function explode($string, $delimiter = ',')
    {
        return explode($delimiter, $string);
    }

    /**
     * 36. Extract a slice of an array and preserve keys.
     *
     * @param  array  $array
     * @param  int  $offset
     * @param  int  $length
     * @return array
     */
    public static function sliceWithKeys(array $array, $offset, $length)
    {
        return array_slice($array, $offset, $length, true);
    }

    /**
     * 37. Convert a multidimensional array into a flat array of key/value pairs.
     *
     * @param  array  $array
     * @return array
     */
    public static function flattenAssoc(array $array)
    {
        $result = [];
        array_walk_recursive($array, function ($value, $key) use (&$result) {
            $result[$key] = $value;
        });
        return $result;
    }

    /**
     * 38. Get a random sample from an array.
     *
     * @param  array  $array
     * @param  int  $count
     * @return array
     */
    public static function randomSample(array $array, $count)
    {
        return array_rand(array_flip($array), $count);
    }

    /**
     * 39. Find the keys of the elements that are equal to a given value.
     *
     * @param  array  $array
     * @param  mixed  $value
     * @return array
     */
    public static function keysOf(array $array, $value)
    {
        return array_keys($array, $value);
    }

    /**
     * 40. Filter an array by keys.
     *
     * @param  array  $array
     * @param  callable  $callback
     * @return array
     */
    public static function filterByKeys(array $array, callable $callback)
    {
        return array_filter($array, $callback, ARRAY_FILTER_USE_KEY);
    }

    /**
     * 41. Replace values in an array using keys from another array.
     *
     * @param  array  $array
     * @param  array  $replacement
     * @return array
     */
    public static function replace(array $array, array $replacement)
    {
        return array_replace($array, $replacement);
    }

    /**
     * 42. Add elements to the beginning of an array.
     *
     * @param  array  $array
     * @param  mixed  $value
     * @return int
     */
    public static function prepend(array &$array, $value)
    {
        return array_unshift($array, $value);
    }

    /**
     * 43. Find the intersection of multiple arrays.
     *
     * @param  array  ...$arrays
     * @return array
     */
    public static function multiIntersect(array ...$arrays)
    {
        return call_user_func_array('array_intersect', $arrays);
    }

    /**
     * 44. Check if an array is empty.
     *
     * @param  array  $array
     * @return bool
     */
    public static function isEmpty(array $array)
    {
        return empty($array);
    }

    /**
     * 45. Check if an array is not empty.
     *
     * @param  array  $array
     * @return bool
     */
    public static function isNotEmpty(array $array)
    {
        return !empty($array);
    }

    /**
     * 46. Check if all elements in an array satisfy a condition.
     *
     * @param  array  $array
     * @param  callable  $callback
     * @return bool
     */
    public static function every(array $array, callable $callback)
    {
        return array_reduce($array, function ($carry, $item) use ($callback) {
            return $carry && $callback($item);
        }, true);
    }

    /**
     * 47. Check if any element in an array satisfies a condition.
     *
     * @param  array  $array
     * @param  callable  $callback
     * @return bool
     */
    public static function some(array $array, callable $callback)
    {
        return array_reduce($array, function ($carry, $item) use ($callback) {
            return $carry || $callback($item);
        }, false);
    }

    /**
     * 48. Merge two arrays by key, with a custom callback to handle duplicate keys.
     *
     * @param  array  $array1
     * @param  array  $array2
     * @param  callable  $callback
     * @return array
     */
    public static function mergeWithCallback(array $array1, array $array2, callable $callback)
    {
        return array_merge_recursive($array1, $array2);
    }

    /**
     * 49. Create a multidimensional array by splitting an array into chunks of size.
     *
     * @param  array  $array
     * @param  int  $size
     * @return array
     */
    public static function chunkBySize(array $array, $size)
    {
        return array_chunk($array, $size);
    }

    /**
     * 50. Get the difference between arrays based on the values of a specific column.
     *
     * @param  array  $array1
     * @param  array  $array2
     * @param  string  $column
     * @return array
     */
    public static function diffByColumn(array $array1, array $array2, $column)
    {
        return array_udiff($array1, $array2, function ($a, $b) use ($column) {
            return $a[$column] <=> $b[$column];
        });
    }
}

