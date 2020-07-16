<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class usergroup extends table {

    static $me;

    public static function getInstance()
    {
        if (!self::$me) {
            $class = new usergroup();
            $class->init();
            self::$me = $class;
        }
        return self::$me;
    }

    function get_form() {
        return array(
            'isadministrator'=>array(
                'selecttype'=>'select',
                'select'=>form::arraytoselect(array(0=>lang_admin('user_group'),1=>lang_admin('management_group'))),
                'default'=>0,
            ),
            'isint'=>array(
                'selecttype'=>'select',
                'select'=>form::arraytoselect(array(0=>lang_admin('no'),1=>lang_admin('yes'))),
                'default'=>1,
            ),
        );
    }

	function getcols($act) {
		return $this->getcolslist();
	}
	function init() {
        $this->group = $this->getrows(null, 99, 'groupid DESC');
        $name = array();
        $isadministrator= array();
        foreach ($this->group as $g) {
            if(front::$user['groupid'] == 2 || $g['groupid'] > front::$user['groupid']) {
                $name[$g['groupid']] = $g['name'];
                $isadministrator[$g['groupid']] = $g['isadministrator'];
            }
        }
        $this->names = $name;
        $this->isadministrators = $isadministrator;
	}
	/*public static function getInstance() {
		$class=new usergroup();
		$class->init();
		return $class;
	}*/
	static function name($groupid) {
		static $names;
		if (!isset($name)) {
			$group=usergroup::getInstance();
			$name=$group->names;
		}
		if (isset($name[$groupid]))
			return $name[$groupid];
		else
			return false;
	}
    static function isadministrator($groupid) {
        static $isadministrators;
        if (!isset($isadministrator)) {
            $group=usergroup::getInstance();
            $isadministrator=$group->isadministrators;
        }
        if (isset($isadministrator[$groupid]))
            return $isadministrator[$groupid];
        else
            return false;
    }

	static function option() {
		$group=usergroup::getInstance();
		return $group->names;
	}
	
	public static function getRoles($groupid){
		$group = usergroup::getInstance();
		$groups = $group->getrow("groupid='$groupid'");
		if($groups['powerlist'] != ''){
			return unserialize($groups['powerlist']);
		}
	}

    //查询用户组信息是否取整
    public static function getisint($groupid){
        $group = usergroup::getInstance();
        $groups = $group->getrow("groupid='$groupid'");
        if (is_array($groups)){
            return $groups['isint'];
        }
        return '1';

    }

	//查询用户组信息折扣
    public static function getusergrop($groupid){
        $group = usergroup::getInstance();
        $groups = $group->getrow("groupid='$groupid'");
        if($groups['discount'] >0  && $groups['discount']< 10){
            return $groups['discount'];
        }else{
            return 10;
        }

    }
}