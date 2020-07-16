<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class wxapp extends table
{

    public $name = 'wxapp';
    public static $me;

    public static function getInstance()
    {
        if (!self::$me) {
            $class = new wxapp();
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

    function get_form()
    {
        return array(
        );
    }


}