<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class sms_admin extends admin
{
    function manage_action()
    {
        if (!config::getadmin('sms_username') || !config::getadmin('sms_password')) {
            echo '<script>alert("'.lang_admin('need_to_set_your_user_name_and_password_before_you_can_use_the_SMS_management_feature').'");</script>';
            exit;
        }
        include_once("phprpc/phprpc_client.php");
        $client = new PHPRPC_Client();
        $client->setProxy(NULL);
        $client->useService('http://pay.cmseasy.cn/sms.php');
        $client->setKeyLength(128);
        $client->setEncryptMode(3);
        $info = $client->getInfo(config::get('sms_username'), md5(config::get('sms_password')));
        if(!$info){
            front::flash(lang_admin('check_the_interface_settings_such_as_username_password_and_whether_the_server_can_access_pay_cmseasy_cn'));
            //front::redirect(url(array('config/system')));
        }
        //var_dump(config::get('sms_username'));
        //var_dump(config::get('sms_password'));
        $this->view->status = $info;
        $info[0] = intval($info[0]);
        $info[1] = intval($info[1]);
        $this->view->info = $info;
        if (front::post('submit')) {
            if (front::post('act') == 'test') {
                $rs = sendMsg(front::post('mobile'), 'test');
                if ($rs == '0') {
                    front::flash(lang_admin('send_out').lang_admin('success'));
                } else {
                    front::flash(lang_admin('send_failed_check_user_name_password_or_number_of_remaining_entries') . $rs);
                }
                front::redirect(front::$from);
            }
        } else {
            if ($info[0] < 50) front::flash(lang_admin('your_remaining_text_messages_are_less_than_50_please_recharge_them_in_time'));
        }
        $this->render('sms/manage.php');
        exit;
    }

    function end()
    {
        $this->render();
    }
}