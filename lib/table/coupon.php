<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class coupon extends table
{

    public $name = 'coupon';
    public static $me;

    public static function getInstance()
    {
        if (!self::$me) {
            $class = new coupon();
            self::$me = $class;
        }
        return self::$me;
    }

    function getcols($act)
    {
        switch ($act) {
            case 'manage':
                return 'couponid,coupontitle,couponuse,couponrange,overlay,satisfy,moeny,quantity,usedquantity,overduedate,adddatatime,couponyard,isexchange,exchangepoints,statu';
            default:
                return '*';
        }
    }

    function get_form()
    {
        return array(
            'overlay' => array(
                'selecttype' => 'select',
                'select' => form::arraytoselect(array(0 =>lang_admin('no'), 1 => lang_admin('yes'))),
                'default' => 0,
            ),
            'langid'=>array(
                'selecttype'=>'select',
                'select'=>form::arraytoselect(lang::option(0,'tolast')),
                'default'=>lang::getlangid(lang::getisadmin()),
            ),
            'isexchange' => array(
                'selecttype' => 'select',
                'select' => form::arraytoselect(array(1 => lang_admin('convertibility'), 0 => lang_admin('non_convertible'))),
                'default' => '1',
            ),
            'statu' => array(
                'selecttype' => 'select',
                'select' => form::arraytoselect(array(1 => lang_admin('take_effect'), 0 => lang_admin('invalid'))),
                'default' => '1',
            ),
        );
    }

    public static function option($prop = array(0 => '请选择...'))
    {
        //$sp = new special();
        $sp = coupon::getInstance();
        $sps = $sp->getrows('', 500);
        $options = array(0 => $prop[0]);
        foreach ($sps as $sp) {
            $options[$sp['spid']] = $sp['title'];
        }
        return $options;
    }

    function gettitle($spid)
    {
        if (empty($spid)) return;
        $sp = new special();
        $sp = $sp->getrow('couponid=' . $spid);
        return $sp['coupontitle'];
    }

    function getcouponid($spid)
    {
        if (empty($spid)) return ;
        $sp = new coupon();
        $sp = $sp->getrows('couponid=' . $spid,'1','adddatatime desc','*');
        return $sp[0];
    }


}