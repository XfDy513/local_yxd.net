<?php
if (!defined('ROOT')) exit('Can\'t Access !');

class wxxcx_admin extends admin
{

    function init()
    {
        if (!front::get('page'))
            front::$get['page'] = 1;
        $this->_pagesize = config::getadmin('manage_pagesize');
    }

    //小程序编辑新增的页面
    function view_action()
    {
        if (front::get('set') == "edit" && front::get('id')) {
            $this->view->data = wxapppage::getInstance()->getrow('page_id="' . front::get('id') . '"');
        }
    }
    //分类页模板
    function categoryview_action(){
        $this->view->data = wxappcategory::getInstance()->getrow('');
        if (front::post('submit')){
            wxappcategory::getInstance()->rec_update(front::$post,'1=1');
            front::redirect(url::modify('act/categoryview', true));
        }
    }
    //新增页面设计
    function addview_action()
    {
        $insertarray = array(
            "page_data" => htmlspecialchars_decode(front::$post['data']),
            "page_name" => front::post('name'),
            "create_time" => time(),
            "update_time" => time(),
        );
        $insert = wxapppage::getInstance()->rec_insert($insertarray);
        $_insertid = wxapppage::getInstance()->insert_id();
        if ($insert > 0) {
            echo json_encode(array("code" => 1, "msg" => lang_admin('update') . lang_admin('success'),
                "url" => url('wxxcx/view/set/edit/id/' . $_insertid)));
            exit;
        }
        echo json_encode(array("code" => 0, "msg" => lang_admin('update').lang_admin('failure')));
        exit;
    }
    //编辑页面设计
    function editview_action()
    {
      /*  front::$post['data']=str_replace("\\","",front::$post['data']);
        echo json_encode(array("code"=>0,"msg"=>front::$post['data']));
        exit;*/
        if(front::post('id')){
            $updatearray=array(
                "page_data"=>htmlspecialchars_decode(front::$post['data']),
                "page_name"=>front::post('name'),
                "update_time"=>time(),
            );
            $update= wxapppage::getInstance()->rec_update($updatearray,'page_id="'.front::post('id').'"');
            if($update>0){
                echo  json_encode(array("code"=>1,"msg"=>lang_admin('update').lang_admin('success'),
                        "url"=>url('wxxcx/view/set/edit/id/'.front::post('id'))));
                exit;
            }
        }
        echo json_encode(array("code"=>0,"msg"=>lang_admin('update').lang_admin('failure')));
        exit;
    }
    //页面设计
    function listview_action()
    {
        $this->_view_table = wxapppage::getInstance()->getrows('',0);
        $this->view->data = $this->_view_table;
    }
    //小程序配置
    function setting_action()
    {
        $this->_view_table = wxapp::getInstance()->getrow('', '1 desc');
        if (front::post('submit') ){
            if (is_array($this->_view_table)){
                wxapp::getInstance()->rec_update(front::$post,'1=1');
            }else{
                wxapp::getInstance()->rec_insert(front::$post);
            }
            front::flash(lang_admin('update').lang_admin('success')."！");
        }
        $this->view->data = $this->_view_table;
    }
    //页面链接
    function links_action(){}


function end()
    {
        $this->render();
    }
}