<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class wxappcategory extends table
{

    public $name = 'wxapp_category';
    public static $me;

    public static function getInstance()
    {
        if (!self::$me) {
            $class = new wxappcategory();
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