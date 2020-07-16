<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class table_guestbookfield extends table_mode {

    function vaild()
    {
        if (!front::post('name')  &&  front::get('act')!='edit') {
            front::flash(lang_admin('please_fill_in').lang_admin('field_name'));
            return false;
        }
        if(!front::post('name') &&  front::get('act')=='add'){
            $guestbookfielddata=guestbookfield::getInstance()->getrow(array("name"=>front::post('name')));
            if($guestbookfielddata){
                front::flash(lang_admin('field_name').lang_admin('repetition'));
                return false;
            }
        }
        return true;
    }
}