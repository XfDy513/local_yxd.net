<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class table_special extends table_mode {
	function save_before() {
		front::$post['specialcontent'] = stripcslashes(htmlspecialchars_decode(front::$post['specialcontent']));
		front::$post['adddate'] = time();
		front::$post['listorder'] = 0;
		front::$post['disabled'] = 0;
	}
}