<?php
if (!defined('ROOT')) exit('Can\'t Access !');

class express_admin extends admin
{

    function init()
    {
        if (!front::get('page')) front::$get['page'] = 1;
        $this->table = front::get('table');
        $this->_table = new defind($this->table);
    }

    function index_action()
    {
        if(session::get('ver') != 'corp'){
            front::alert(lang_admin('unauthorized_access'));
        }
        $this->_table  =new orders();
        $limit = ((front::get('page') - 1) * 20) . ',20';
        //$where = "mid={$this->view->user['userid']}";
        $where= ' courier_number is  not null  and courier_number<>\'\' ';
        $this->view->data = $this->_table->getrows($where, $limit, 'adddate desc', $this->_table->getcols('manage'));
        if($this->view->data[0]['mid']){
            $cs = new user();
            $this->view->data[0]['mid']=$cs->getusername( $this->view->data[0]['mid']);
        }
    }


    //快递鸟配置
    function config_action(){

        if (front::post('submit') ) {

            $update = $this->_table->rec_update(front::$post, ' userid='.$this->view->user['userid']);
            if ($update < 1) {
                front::flash("{$this->table}".lang_admin('modify').lang_admin('failure')."！");
            } else {
                event::log(lang_admin('modify') .   $this->table  . "userid={$this->view->user['userid']}", lang_admin('success'));
                front::flash(lang_admin('modify').lang_admin('success')."！");
                front::redirect(url::modify('act/index', true));
            }
        }
        $this->view->data = $this->_table->getrow(' userid='.$this->view->user['userid'], '1 desc', '*');
        //$this->render('express/config.php');
    }

    //物流查询
    function querlist_action(){
        if(front::get('expressid') !='' && front::get('expresstype')!='') {
            $this->_table  =new orders();
            $this->_table->querexpress(front::get('expressid'),front::get('expresstype'),$this->view);
        }
    }



function end()
    {
        $this->render();
    }
}