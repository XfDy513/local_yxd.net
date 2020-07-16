<?php
if (!defined('ROOT'))
    exit('Can\'t Access !');
class index_act extends act {
    function index_action() {
    	$this->check_pw();
        if(config::get('list_index_php')==1){
            echo "<script>window.location.href = '/index-'+'".lang::getistemplate()."'+'.html';</script>";
            exit;
        }

        /*$_style = config::get('template_dir') ? config::get('template_dir') : 'default';
        if(!file_exists(TEMPLATE .'/'.$_style. '/index/index_'.lang::getistemplate().'.html')){
            copy(TEMPLATE.'/'.$_style . '/index/index.html',TEMPLATE .'/'.$_style. '/index/index_'.lang::getistemplate().'.html');
        }*/

    /*    $this->render('index/index_'.lang::getistemplate().'.html');
        exit;*/
    }
    function end() {
        if (front::$debug)
            $this->render('style/index.html');
        else
            $this->render();
    }
}