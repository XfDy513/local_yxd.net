<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class invoice_act extends act
{
    protected $_table;

    function init()
    {
        $appconfig = new appconfig();
        $appconfigdata=$appconfig->getrow(array("appname"=>'invoice','name'=>'istemshow'));
        if(!$appconfigdata['value']){
            exit(lang('unauthorized_access'));
        }
        $user = array();
        $guest = front::get('guest');
        $guestuser = array();
        $this->_user = new user;
        if ($guest == '1' && config::get('opguestadd')) {
            $guestuser = $user = array(
                'userid' => 0,
                'username' => 'Guest',
                'nickname' => lang('tourist'),
                'groupid' => 0,
                'checked' => 1,
                'intro' => 'Guest',
                'point' => '',
                'introducer' => '',
            );
        }
        else {
            $username = cookie::get('login_username');
            $password = cookie::get('login_password');
            if ($username != '' && $password != '') {
                $guestuser = $user = $this->_user->getrow(array('username' => $username));
                if (front::cookie_encode($user['password']) != $password) {
                    $guestuser = $user = array();
                }
            }
        }
        $this->view->guestuser = $guestuser;
        if (!$user && front::$act != 'login' && front::$act != 'register') front::redirect(url::create('user/login'));
        $this->view->user = $user;
        $this->table = front::get('manage');
        if ($this->table <> 'invoice'
            && $this->table <> 'xfconsumption'
        ) {
            throw new HttpErrorException(404,lang('page_does_not_exist'),404);
        }
        $this->_table = new $this->table;
        $this->_table->getFields();
        $this->view->form = $this->_table->get_form();
        $this->_pagesize = config::get('manage_pagesize');
        $this->view->manage = $this->table;
        $this->view->primary_key = $this->_table->primary_key;
        if (!front::get('page')) front::$get['page'] = 1;
        $manage = 'table_' . $this->table;
        $this->manage = new $manage;
    }


    //充值 消费记录
    function consumptionlist_action()
    {
        $limit = ((front::get('page') - 1) * 10) . ',10';
        $where = "mid={$this->view->user['userid']}";
        $this->view->manage =front::get('manage');
        $this->_view_table = $this->_table->getrows($where, $limit, 'adddate desc', $this->_table->getcols('manage'));
        $this->view->record_count = $this->_table->record_count;

        //查询已经申请的发票
        $invoicedata=invoice::getInstance()->getrows("1=1",0);
        $data=array();
        foreach ($invoicedata as $val){
            $data[count($data)]=$val['oid'];
        }
        $this->view->invoicedata =$data;
        $this->fetch="invoice/consumptionlist.html";
    }

    //申请发票
    function  invoice_action(){
        if(front::get('oid') && front::get('xftype')){
            $code = explode('-', front::get('oid'));
            if(front::get('xftype')==1){
                $userid = $code[2];
            }else{
                $userid = $code[1];
            }
            //不可申请他人发票
            if($userid!=user::getusersid()){
                echo '<script type="text/javascript">
                  alert("' .lang('no_invoice_other_oid') . '");
                  window.location.href="' . url('manage/consumptionlist/manage/xfconsumption') . '";
                 </script>';
                exit;
            }
            $xfdata=xfconsumption::getInstance()->getrow("oid='".front::get('oid')."'");
            $data=array(
                "oid"=>front::get('oid'),
                "menoy"=>$xfdata['menoy']?$xfdata['menoy']:0,
                "email"=>user::getuseremail($userid),
                );
            $this->_view_table =$data;
        }
        elseif(front::post('submit')){
            //发票判断重复
            $datadata=$this->_table->getrow("oid='".front::post('oid')."'");
            if (is_array($datadata)){
                echo '<script type="text/javascript">
                alert("' .lang('invoice_double_oid') . '");
                window.location.href="' . url('invoice/consumptionlist/manage/xfconsumption') . '";
                </script>';
                exit;
            }

            //发票申请时间
            front::$post['adddate'] = date('Y-m-d H:i:s',time());
            $insert = $this->_table->rec_insert(front::$post);
            if ($insert < 1) {
                front::flash(lang('invoice_failure'));
            }
            else {
                front::flash(lang('invoice_success'));
                front::redirect(url('invoice/invoicelist/manage/invoice'));
            }
        }
        else{
            echo '<script type="text/javascript">
            alert("' . lang('no_invoice_oid') . '");
            window.location.href="' . url('invoice/consumptionlist/manage/xfconsumption') . '";
            </script>';
            exit;
        }
        $this->fetch="invoice/invoice.html";
    }

    //开票记录
    function invoicelist_action(){
        $limit = ((front::get('page') - 1) * 10) . ',10';
        $where = "1=1";
        if (front::get('static')!=""){
            $where.= " and static=".front::get('static');
        }
        $this->view->manage =front::get('manage');
        $this->_view_table = $this->_table->getrows($where, $limit, 'adddate desc', $this->_table->getcols('manage'));
        $this->view->record_count = $this->_table->record_count;
        $this->fetch="invoice/invoicelist.html";
    }


    function view($table)
    {
        $this->view->data = $table['data'];
        $this->view->field = $table['field'];
    }

    function end()
    {
        if (!isset($this->_view_table)) return;
        if (!isset($this->_view_table['data']))
            $this->_view_table['data'] = $this->_view_table;
        $this->_view_table['field'] = $this->_table->getFields();
        $this->view->fieldlimit = $this->_table->getcols(front::$act == 'list' ? 'user_manage' : 'user_modify');
        $this->view($this->_view_table);
        if (front::$debug)
            $this->render('style/index.html');
        else{
            $tpl = '../'.config::get('template_user_dir').'/'.$this->fetch;
            $this->render($tpl);
        }

    }
}