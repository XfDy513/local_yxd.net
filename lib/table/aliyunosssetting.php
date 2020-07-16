<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class aliyunosssetting extends table
{

    public $name = 'aliyunosssetting';
    public static $me;

    public static function getInstance()
    {
        if (!self::$me) {
            $class = new aliyunosssetting();
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
            'oss_setting' => array(
                'selecttype' => 'select',
                'select' => form::arraytoselect(array(0 => '仅网站附件目录', 1 => '仅OSS',2=>"附件与OSS")),
                'default' => '0',
            ),
        );
    }




}