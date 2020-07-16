<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class consumption extends table {
    public $name='consumption';
    static $me;
    public static function getInstance() {
        if (!self::$me) {
            $class=new consumption();
            self::$me=$class;
        }
        return self::$me;
    }

    public function attrLabels()
    {
        return array(
            'id' => lang_admin('number'),
            'oid' => lang_admin('order_number'),
            'menoy' => lang_admin('amount_of_money'),
            'status' => lang_admin('state'),
            'mid' => lang_admin('customer').lang_admin('number'),
            'adddate' => lang_admin('order_time'),
            's_status' => lang_admin('payment').lang_admin('state'),
            'trade_no' => lang_admin('payment').lang_admin('number'),
        );
    }

    function getcols($act) {
        return '*';
    }
}