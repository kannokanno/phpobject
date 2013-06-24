<?php
/**
 * Created by IntelliJ IDEA.
 * User: shunsuke
 * Date: 2013/05/31
 * Time: 6:39
 * To change this template use File | Settings | File Templates.
 */
class Constants
{
    //TODO 本当にこの書き方で良いのか？？
    private static $NAME_INDEX = 0;
    private static $MEMBER_KIND_INDEX = 1;
    private static $CHARGE_INDEX = 2;

    public function __set($name, $value)
    {
        //アクセスさせない
    }

    public static function nameIndex()
    {
        return self::$NAME_INDEX;
    }

    public static function memberKindIndex()
    {
        return self::$MEMBER_KIND_INDEX;
    }

    public static function chargeIndex()
    {
        return self::$CHARGE_INDEX;
    }
}