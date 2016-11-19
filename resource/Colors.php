<?php

class Colors
{
    public static $TRANSPARENTCOLOR = 'transparent';

    public static $AVAILABLEBACKGROUND = '#FDFEFE';//White
    public static $DISABLEBACKGROUND = '#BBBBBB';//Grey


    public static function getBackGroundColorGoiCauHoi($code)
    {
        include_once __DIR__ . '/../model/GoiCauHoi.php';
        return $code == GoiCauHoi::$AVAILABLE_CODE ? self::$AVAILABLEBACKGROUND : self::$DISABLEBACKGROUND;
    }
}

?>