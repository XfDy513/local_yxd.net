<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class table_notification extends table_mode {
	function save_before() {
        front::$post['static']=1;
        front::$post['adddatatime']=date('Y-m-d h:i:s', time());
	}
}