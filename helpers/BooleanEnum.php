<?php

namespace abhimanyu\enum\helpers;

/**
 * @author Abhimanyu Saharan <abhimanyu@teamvulcans.com>
 */
class BooleanEnum
{
    const TRUE = 1;
    const FALSE = 0;

    public static $list = [
        self::TRUE => 'true',
        self::FALSE => 'false'
    ];
}