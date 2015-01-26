<?php

namespace abhimanyu\enum\helpers;

use Exception;

/**
 * Class EnumException
 *
 * @author Abhimanyu Saharan <abhimanyu@teamvulcans.com>
 * @package abhimanyu\enum\helpers
 */
class EnumException extends Exception
{
    /**
     * Creates a new exception for a name that is not
     * valid for a type
     *
     * @param string $type The name of the type
     * @param string $name The name of the value
     *
     * @return EnumException The new exception
     */
    public static function invalidName($type, $name)
    {
        return new self("The type \"$type\" does not have a value named \"$name\".");
    }

    /**
     * Creates a new exception for a value that is not
     * valid for a type
     *
     * @param string $type The name of the type
     * @param string $value The invalid value
     *
     * @return EnumException The new exception
     */
    public static function invalidValue($type, $value)
    {
        if (is_object($value)) {
            $value = get_class($value);
        } elseif (is_bool($value) || is_null($value)) {
            $value = var_export($value, true);
        }

        return new self(sprintf('The type "%s" does not have a name for the value "%s".', $type, $value));
    }
}