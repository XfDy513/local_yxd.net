<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class special extends table
{

    public $name = 'b_special';
    public static $me;

    public static function getInstance()
    {
        if (!self::$me) {
            $class = new special();
            self::$me = $class;
        }
        return self::$me;
    }

    function getcols($act)
    {
        switch ($act) {
            case 'manage':
                return 'spid,title,banner,listorder,htmldir';
            default:
                return '*';
        }
    }


    static function getishtml($spid)
    {
        if (empty($spid)) return false;
        if (config::getadmin('list_special_php') == '1') return true;
        if (config::getadmin('list_special_php') == '2') return false;
        $special = self::getInstance();
        $_special = $special->getrow('spid=' . $spid);
        if (@$_special[$spid]['ishtml'] == '1') return true;

        return false;
    }
    static function getiswaphtml($spid)
    {
        if (empty($spid)) return false;
        if (config::getadmin('wap_special_php') == '1') return true;
        if (config::getadmin('wap_special_php') == '2') return false;
        $special = self::getInstance();
        $_special = $special->getrow('spid=' . $spid);
        if (@$_special[$spid]['ishtml'] == '1') return true;

        return false;
    }


    function get_form()
    {
        return array(
            'banner' => array(
                'filetype' => 'thumb',
            ),
            'ishtml' => array(
                'selecttype' => 'radio',
                'select' => form::arraytoselect(array(0 => lang_admin('no_generate'), 1 => lang_admin('generate'), 2 => lang_admin('inherit'))),
                'default' => 0,
            ),
            'langid'=>array(
                'selecttype'=>'select',
                'select'=>form::arraytoselect(lang::option(0,'tolast')),
                'default'=>lang::getlangid(lang::getisadmin()),
            ),
            'template' => array(
                'selecttype' => 'select',
                'select' => form::arraytoselect(front::$view->special_tpl_list()),
                //'tips'=>" 默认：{?category::gettemplate(get('id'),'showtemplate')}",
            ),
            'isscreening' => array(
                'selecttype' => 'radio',
                'select' => form::arraytoselect(array(1 => lang_admin('join_screening'), 0 => lang_admin('unfilter'))),
                'default' => '0',
            ),
            'htmlrule' => array(
                'selecttype' => 'select',
                'select' => form::arraytoselect(getHtmlRule('special')),
                'default' => '',
            ),

        );
    }

    static function url($spid, $ishtml = false, $page = 1,$htmldir="",$lang='')
    {
        $ishtml = special::getishtml($spid);
        $ruledata=special::getInstance()->getrow("spid=".$spid);
        if ($lang==""){
            $lang=lang::getisadmin();
        }
        if (front::$get['t'] == 'wap') {
            if ($ishtml) {
                return config::get('site_url') . 'special'.config::getadmin("staticlang").'wap/' . $spid  . config::getadmin("staticlang") . $page . config::get('lang_type').'/list'.config::getadmin("staticlang").'' . $page . '.html';
            } else {
                return url::create('special/show/t/wap/spid/' . $spid . ($page > 1 ? '/page/' . $page : ''), false);
            }
        }

        if (config::getadmin('html_prefix')) $html_prefix = '/' . trim(config::getadmin('html_prefix'), '/');
        if (!$ishtml && !front::$rewrite) {
            return url::create('special/show/spid/'. $spid . ($page > 1 ? '/page/' . $page : ''), false);
        } else if (front::$rewrite) {
            return config::get('site_url') . 'speciallist'.config::getadmin("staticlang").'' . $spid . config::getadmin("staticlang") . $page . '.html';
        } else {
            $rule = special::gethtmlrule($spid, 'listhtmlrule');
            $rule = str_replace('{$dir}', $ruledata['htmldir'], $rule);
            $rule = str_replace('{$spid}', $spid, $rule);
            $rule=str_replace('{$lang}',$lang,$rule);
            if ($page) $rule = str_replace('{$page}', $page, $rule);
            else $rule = preg_replace('/\(.*?\)/', '', $rule);
            $rule = preg_replace('%/\.html$%', '/index.html', $rule);
            $rule = preg_replace('/[\(\)]/', '', $rule);
            $rule = preg_replace('%[\\/]index\.htm(l)?%', '', $rule);
            $rule = rtrim($rule, '/');
            $rule = trim($rule, '\\');
            /*$rule = str_replace('/1.html', '', $rule);*/
            $path = config::get('base_url') .$html_prefix. '/' . $rule;
            //echo $path;
            return $path;

           // return config::get('base_url') .$html_prefix .'/special/'.$htmldir.'/' . $spid . '-'.config::get('lang_type').'/list'.config::getadmin("staticlang").'' . $page . '.html';
        }
    }

    static function gethtmlrule($spid, $tag = 'listhtmlrule')
    {
        $special = self::getInstance()->getrow("spid='".$spid."'");

        if ($special['htmlrule'] && $tag == 'listhtmlrule') return $special['htmlrule'];
        $default = array(
            'listhtmlrule' => '{$dir}/{$page}.html',
        );
        if (isset($default[$tag])) return $default[$tag];
    }

    function pagination()
    {
        return template('system/special_pagination.html');
    }

    public static function option($prop = "请选择...")
    {
        //$sp = new special();
        $sp = special::getInstance();
        //增加语言包过滤
        $where = '  langid =  "'.lang::getlangid(lang::getisadmin()).'"';
        $sps = $sp->getrows($where, 500);
        $options = array(0 => $prop);
        foreach ($sps as $sp) {
            $options[$sp['spid']] = $sp['title'];
        }
        return $options;
    }
    static function getoption($prop = "请选择...")
    {
        if(session::get("specialoption_".lang::getisadmin())){
            return session::get("specialoption_".lang::getisadmin());
        }
        $option=self::option($prop);
        session::set("specialoption_".lang::getisadmin(),$option);
        return $option;
    }


    function gettitle($spid)
    {
        if (empty($spid)) return;
        $sp = new special();
        $sp = $sp->getrow('spid=' . $spid);
        return $sp['title'];
    }



    function listdata($limit = 10)
    {
        $special = new special();
        $specials = $special->getrows('', $limit);
        foreach ($specials as $order => $sp) {
            $specials[$order]['url'] = special::url($sp['spid'], $sp['ishtml']);
        }
        return $specials;
    }

    public static function deletesession(){

        if (session::get("specialoption_".lang::getisadmin())) {
            session::del("specialoption_" . lang::getisadmin());
        }
    }

}