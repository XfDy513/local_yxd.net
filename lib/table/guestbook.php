<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class guestbook extends table
{
    static $me;

    public static function getInstance()
    {
        if (!self::$me) {
            $class = new guestbook();
            self::$me = $class;
        }
        return self::$me;
    }

    function get_form() {
        return array(
            'isusersee'=>array(
                'selecttype' => 'select',
                'select' => form::arraytoselect(array(1 => lang_admin('yes'), 0 => lang_admin('no'))),
                'default' => 1,
            ),
        );
    }

    public function attrLabels()
    {
        return array(
            'id' => lang_admin('number'),
            'username' => lang_admin('user'),
            'userid' => lang_admin('user').lang_admin('number'),
            'adddate' => lang_admin('time'),
            'state' => lang_admin('state'),
            'gesttel' => lang_admin('tel'),
            'guestemail' => lang_admin('email'),
            'guestqq' => lang_admin('qq'),
            'title' => lang_admin('title'),
            'content' => lang_admin('content'),
            'reply' => lang_admin('reply'),
            'ip' => 'IP'.lang_admin('address'),
        );
    }

    function getcols($act = '')
    {
        return '*';
    }

    public static function url($page = null){
        return url('guestbook/index' . ($page ? '/page/' . $page : ''));
    }
}