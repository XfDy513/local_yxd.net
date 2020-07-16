<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class notification extends table
{

    public $name = 'notification';
    public static $me;

    public static function getInstance()
    {
        if (!self::$me) {
            $class = new notification();
            self::$me = $class;
        }
        return self::$me;
    }

    function getcols($act)
    {
        switch ($act) {
            case 'manage':
                return '*';
            default:
                return '*';
        }
    }


}