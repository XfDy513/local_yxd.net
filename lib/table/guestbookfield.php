<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class guestbookfield extends table
{
    static $me;

    public static function getInstance()
    {
        if (!self::$me) {
            $class = new guestbookfield();
            self::$me = $class;
        }
        return self::$me;
    }

    function getcols($act = '')
    {
        return '*';
    }
    function get_form()
    {
        return array(
            'isnull' => array(
                'selecttype' => 'radio',
                'select' => form::arraytoselect(array(0 => lang_admin('no'), 1 => lang_admin('yes'))),
                'default' => 0,
            ),
            'isshow' => array(
                'selecttype' => 'radio',
                'select' => form::arraytoselect(array(0 => lang_admin('no'), 1 => lang_admin('yes'))),
                'default' => 1,
            ),

        );
    }


    public static function url($page = null){
        return url('guestbookfield/index' . ($page ? '/page/' . $page : ''));
    }
}