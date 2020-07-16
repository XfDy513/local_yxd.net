<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class xfconsumption extends table {
    public $name='xfconsumption';
    static $me;
    public static function getInstance() {
        if (!self::$me) {
            $class=new xfconsumption();
            self::$me=$class;
        }
        return self::$me;
    }

    public function attrLabels()
    {
        return array(
            'id' => lang_admin('number'),
            'oid' => lang_admin('order_number'),
            'content' => lang_admin('consumption_content'),
            'menoy' => lang_admin('consumption_amount'),
            'status' => lang_admin('state'),
            'mid' => lang_admin('customer').lang_admin('number'),
            'adddate' => lang_admin('order_time'),
            'trade_no' => lang_admin('payment').lang_admin('number'),
        );
    }

    function getcols($act) {
        return '*';
    }
}