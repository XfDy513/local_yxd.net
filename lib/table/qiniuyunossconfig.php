<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class qiniuyunossconfig extends table
{

    public $name = 'qiniuyunoss_config';
    public static $me;

    public static function getInstance()
    {
        if (!self::$me) {
            $class = new qiniuyunossconfig();
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