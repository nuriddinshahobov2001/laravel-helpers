<?php

namespace Zintel\LaravelHelpers\Helpers;

class ZintelString
{
    /**
     * 1. Convert the first letter of each word to uppercase.
     *
     * @param  string  $string
     * @return string
     */
    public static function capitalizeWords($string)
    {
        return ucwords(strtolower($string));
    }

    /**
     * 2. Convert a string to kebab case (hyphen-separated lowercase).
     *
     * @param  string  $string
     * @return string
     */
    public static function toKebabCase($string)
    {
        return strtolower(preg_replace('/[A-Z]/', '-$0', $string));
    }

    /**
     * 3. Convert a string to snake case (underscore-separated lowercase).
     *
     * @param  string  $string
     * @return string
     */
    public static function toSnakeCase($string)
    {
        return strtolower(preg_replace('/[A-Z]/', '_$0', $string));
    }

    /**
     * 4. Convert a string to camel case (no spaces or underscores, starting with lowercase).
     *
     * @param  string  $string
     * @return string
     */
    public static function toCamelCase($string)
    {
        return lcfirst(str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $string))));
    }

    /**
     * 5. Check if the string starts with the given substring.
     *
     * @param  string  $string
     * @param  string  $start
     * @return bool
     */
    public static function startsWith($string, $start)
    {
        return substr($string, 0, strlen($start)) === $start;
    }

    /**
     * 6. Check if the string ends with the given substring.
     *
     * @param  string  $string
     * @param  string  $end
     * @return bool
     */
    public static function endsWith($string, $end)
    {
        return substr($string, -strlen($end)) === $end;
    }

    /**
     * 7. Return the substring before the first occurrence of the given character.
     *
     * @param  string  $string
     * @param  string  $delimiter
     * @return string
     */
    public static function before($string, $delimiter)
    {
        return strstr($string, $delimiter, true);
    }

    /**
     * 8. Return the substring after the first occurrence of the given character.
     *
     * @param  string  $string
     * @param  string  $delimiter
     * @return string
     */
    public static function after($string, $delimiter)
    {
        return strstr($string, $delimiter);
    }

    /**
     * 9. Return the substring between two given delimiters.
     *
     * @param  string  $string
     * @param  string  $start
     * @param  string  $end
     * @return string
     */
    public static function between($string, $start, $end)
    {
        return self::before(self::after($string, $start), $end);
    }

    /**
     * 10. Remove all whitespace from the string.
     *
     * @param  string  $string
     * @return string
     */
    public static function removeWhitespace($string)
    {
        return preg_replace('/\s+/', '', $string);
    }

    /**
     * 11. Check if the string contains the given substring.
     *
     * @param  string  $string
     * @param  string  $needle
     * @return bool
     */
    public static function contains($string, $needle)
    {
        return strpos($string, $needle) !== false;
    }

    /**
     * 12. Replace all occurrences of a string within another string.
     *
     * @param  string  $string
     * @param  string  $search
     * @param  string  $replace
     * @return string
     */
    public static function replaceAll($string, $search, $replace)
    {
        return str_replace($search, $replace, $string);
    }

    /**
     * 13. Reverse the characters of a string.
     *
     * @param  string  $string
     * @return string
     */
    public static function reverse($string)
    {
        return strrev($string);
    }

    /**
     * 14. Generate a random string of a given length.
     *
     * @param  int  $length
     * @return string
     */
    public static function randomString($length = 10)
    {
        return bin2hex(random_bytes($length / 2));
    }

    /**
     * 15. Convert a string to lowercase.
     *
     * @param  string  $string
     * @return string
     */
    public static function toLowerCase($string)
    {
        return strtolower($string);
    }

    /**
     * 16. Convert a string to uppercase.
     *
     * @param  string  $string
     * @return string
     */
    public static function toUpperCase($string)
    {
        return strtoupper($string);
    }

    /**
     * 17. Get the length of a string.
     *
     * @param  string  $string
     * @return int
     */
    public static function length($string)
    {
        return strlen($string);
    }

    /**
     * 18. Pad a string to the left with a given character until the string reaches the specified length.
     *
     * @param  string  $string
     * @param  int  $length
     * @param  string  $padChar
     * @return string
     */
    public static function padLeft($string, $length, $padChar = ' ')
    {
        return str_pad($string, $length, $padChar, STR_PAD_LEFT);
    }

    /**
     * 19. Pad a string to the right with a given character until the string reaches the specified length.
     *
     * @param  string  $string
     * @param  int  $length
     * @param  string  $padChar
     * @return string
     */
    public static function padRight($string, $length, $padChar = ' ')
    {
        return str_pad($string, $length, $padChar, STR_PAD_RIGHT);
    }

    /**
     * 20. Truncate a string to a given length, appending "..." if it exceeds the length.
     *
     * @param  string  $string
     * @param  int  $length
     * @return string
     */
    public static function truncate($string, $length)
    {
        return strlen($string) > $length ? substr($string, 0, $length) . '...' : $string;
    }

    /**
     * 21. Convert a string to an array of words.
     *
     * @param  string  $string
     * @return array
     */
    public static function toArray($string)
    {
        return preg_split('/\s+/', $string);
    }

    /**
     * 22. Capitalize the first letter of a string.
     *
     * @param  string  $string
     * @return string
     */
    public static function capitalizeFirstLetter($string)
    {
        return ucfirst(strtolower($string));
    }

    /**
     * 23. Remove a specific character from the beginning of a string.
     *
     * @param  string  $string
     * @param  string  $char
     * @return string
     */
    public static function removeFirstCharacter($string, $char)
    {
        if (substr($string, 0, 1) === $char) {
            return substr($string, 1);
        }
        return $string;
    }

    /**
     * 24. Remove a specific character from the end of a string.
     *
     * @param  string  $string
     * @param  string  $char
     * @return string
     */
    public static function removeLastCharacter($string, $char)
    {
        if (substr($string, -1) === $char) {
            return substr($string, 0, -1);
        }
        return $string;
    }

    /**
     * 25. Check if a string is a valid email address.
     *
     * @param  string  $string
     * @return bool
     */
    public static function isValidEmail($string)
    {
        return filter_var($string, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * 26. Check if a string is a valid URL.
     *
     * @param  string  $string
     * @return bool
     */
    public static function isValidUrl($string)
    {
        return filter_var($string, FILTER_VALIDATE_URL) !== false;
    }

    /**
     * 27. Convert a string to title case (capitalize the first letter of each word).
     *
     * @param  string  $string
     * @return string
     */
    public static function toTitleCase($string)
    {
        return ucwords(strtolower($string));
    }

    /**
     * 28. Check if a string is empty or contains only whitespace.
     *
     * @param  string  $string
     * @return bool
     */
    public static function isEmpty($string)
    {
        return trim($string) === '';
    }

    /**
     * 29. Generate a slug from a string (lowercase, hyphen-separated).
     *
     * @param  string  $string
     * @return string
     */
    public static function generateSlug($string)
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
    }

    /**
     * 30. Check if a string contains only alphabetic characters.
     *
     * @param  string  $string
     * @return bool
     */
    public static function isAlpha($string)
    {
        return ctype_alpha($string);
    }

    /**
     * 31. Check if a string contains only numeric characters.
     *
     * @param  string  $string
     * @return bool
     */
    public static function isNumeric($string)
    {
        return ctype_digit($string);
    }

    /**
     * 32. Escape HTML characters in a string.
     *
     * @param  string  $string
     * @return string
     */
    public static function escapeHtml($string)
    {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }

    /**
     * 33. Remove all HTML tags from a string.
     *
     * @param  string  $string
     * @return string
     */
    public static function stripHtmlTags($string)
    {
        return strip_tags($string);
    }

    /**
     * 34. Find the position of the first occurrence of a substring in a string.
     *
     * @param  string  $string
     * @param  string  $substring
     * @return int|false
     */
    public static function findFirstOccurrence($string, $substring)
    {
        return strpos($string, $substring);
    }

    /**
     * 35. Find the position of the last occurrence of a substring in a string.
     *
     * @param  string  $string
     * @param  string  $substring
     * @return int|false
     */
    public static function findLastOccurrence($string, $substring)
    {
        return strrpos($string, $substring);
    }

    /**
     * 36. Repeat a string a given number of times.
     *
     * @param  string  $string
     * @param  int  $times
     * @return string
     */
    public static function repeat($string, $times)
    {
        return str_repeat($string, $times);
    }

    /**
     * 37. Split a string into an array by a given delimiter.
     *
     * @param  string  $string
     * @param  string  $delimiter
     * @return array
     */
    public static function splitByDelimiter($string, $delimiter)
    {
        return explode($delimiter, $string);
    }

    /**
     * 38. Check if a string matches a regular expression pattern.
     *
     * @param  string  $pattern
     * @param  string  $string
     * @return bool
     */
    public static function matchesPattern($pattern, $string)
    {
        return preg_match($pattern, $string) === 1;
    }

    /**
     * 39. Replace the first occurrence of a substring with another string.
     *
     * @param  string  $string
     * @param  string  $search
     * @param  string  $replace
     * @return string
     */
    public static function replaceFirst($string, $search, $replace)
    {
        return preg_replace('/' . preg_quote($search, '/') . '/', $replace, $string, 1);
    }

    /**
     * 40. Replace the last occurrence of a substring with another string.
     *
     * @param  string  $string
     * @param  string  $search
     * @param  string  $replace
     * @return string
     */
    public static function replaceLast($string, $search, $replace)
    {
        return preg_replace('/' . preg_quote($search, '/') . '(?!.*' . preg_quote($search, '/') . ')/', $replace, $string);
    }

    /**
     * 41. Convert a string to a URL-safe string (URL encode).
     *
     * @param  string  $string
     * @return string
     */
    public static function toUrlSafe($string)
    {
        return urlencode($string);
    }

    /**
     * 42. Decode a URL-encoded string.
     *
     * @param  string  $string
     * @return string
     */
    public static function fromUrlSafe($string)
    {
        return urldecode($string);
    }

    /**
     * 43. Check if a string is a valid JSON string.
     *
     * @param  string  $string
     * @return bool
     */
    public static function isJson($string)
    {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }

    /**
     * 44. Encode a string to JSON format.
     *
     * @param  string  $string
     * @return string
     */
    public static function toJson($string)
    {
        return json_encode($string);
    }

    /**
     * 45. Decode a JSON string to an array.
     *
     * @param  string  $string
     * @return mixed
     */
    public static function fromJson($string)
    {
        return json_decode($string, true);
    }

    /**
     * 46. Add the given prefix to the beginning of a string.
     *
     * @param  string  $string
     * @param  string  $prefix
     * @return string
     */
    public static function addPrefix($string, $prefix)
    {
        return $prefix . $string;
    }

    /**
     * 47. Add the given suffix to the end of a string.
     *
     * @param  string  $string
     * @param  string  $suffix
     * @return string
     */
    public static function addSuffix($string, $suffix)
    {
        return $string . $suffix;
    }

    /**
     * 48. Check if a string is a valid UUID.
     *
     * @param  string  $string
     * @return bool
     */
    public static function isUuid($string)
    {
        return preg_match('/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/', $string) === 1;
    }

    /**
     * 49. Remove all digits from a string.
     *
     * @param  string  $string
     * @return string
     */
    public static function removeDigits($string)
    {
        return preg_replace('/\d/', '', $string);
    }

    /**
     * 50. Remove all non-alphabetical characters from a string.
     *
     * @param  string  $string
     * @return string
     */
    public static function removeNonAlpha($string)
    {
        return preg_replace('/[^a-zA-Z]/', '', $string);
    }
}
