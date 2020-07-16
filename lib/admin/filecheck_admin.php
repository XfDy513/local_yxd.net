<?php
if (!defined('ROOT')) exit('Can\'t Access !');

//WWW
class filecheck_admin extends admin {
    function filecheck_action() {
        session::set('actname',lang_admin('文件防护'));
        $this->render();
    }
}
