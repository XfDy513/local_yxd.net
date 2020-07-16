<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class reply extends table {
    public $name='reply';
    static $me;
    public static function getInstance() {
        if (!self::$me) {
            $class=new reply();
            self::$me=$class;
        }
        return self::$me;
    }

    function getcols($act) {
        return '*';
    }
}