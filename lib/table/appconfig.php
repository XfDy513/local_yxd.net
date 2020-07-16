<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class appconfig extends table {
    public $name='app_config';
    static $me;
    public static function getInstance() {
        if (!self::$me) {
            $class=new appconfig();
            self::$me=$class;
        }
        return self::$me;
    }

    function getcols($act) {
        return '*';
    }
}