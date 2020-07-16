<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class expressconfig extends table
{
    static $me;

    function getcols($act=null)
    {
         return '*';
    }

    function get_form()
    {
        return array(
            'ishtml' => array(
                'selecttype' => 'radio',
                'select' => form::arraytoselect(array(0 => lang_admin('inherit'), 1 => lang_admin('generate'), 2 => lang_admin('no_generate'))),
                'default' => 0,
            ),
        );
    }

    public static function getInstance()
    {
        if (!self::$me) {
            $class = new type();
            $class->init();
            self::$me = $class;
        }
        return self::$me;
    }


}