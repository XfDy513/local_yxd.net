<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class invoice extends table {
    public $name='invoice';
    static $me;
    public static function getInstance() {
        if (!self::$me) {
            $class=new invoice();
            self::$me=$class;
        }
        return self::$me;
    }

    function getcols($act) {
        return '*';
    }
}