<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class atlasmap extends table {
    public $name='atlasmap';
    static $me;
    public static function getInstance() {
        if (!self::$me) {
            $class=new orders();
            self::$me=$class;
        }
        return self::$me;
    }


    function getcols($act) {
        return '*';
    }





}