<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class tag extends table {
    public  $name='b_tag';
    static $instance;
    public static function getInstance()
    {
        if (self::$instance == null) {
            $class = new tag();
            self::$instance = new $class();
        }
        return self::$instance;
    }
    function getcols($act) {
    	switch ($act) {
    		case 'list':
    			return '*';
    		case 'modify':
    			return '*';
    		case 'manage':
    			return '*';
    		default: return '1';
    	}
    }

    function get_form() {
        return array(
          /*  'catid'=>array(
                'selecttype'=>'select',
                'select'=>form::arraytoselect(category::getoptionconnent(0,'tolast')),
                'default'=>intval(get('catid')),
                'regex'=>'/\d+/',
                'filter'=>'is_numeric',
            ),*/
            'htmlrule' => array(
                'selecttype' => 'select',
                'select' => form::arraytoselect(getHtmlRule('tag')),
                'default' => '',
            ),
        );
    }
    
    function url($tag,$page=1,$lang='') {
    	if(front::$get['t'] == 'wap'){
    		
    		if(config::getadmin('wap_tag_html')=='1'){
    			$otag = new tag();
    			$row = $otag->getrow("tagname='$tag'");
    			$tagid= $row['tagid'];
    			$pinyin = pinyin::get($tag);
    			return config::get('base_url').'/tags'.config::getadmin("staticlang").'wap/'.$pinyin.config::getadmin("staticlang").$tagid.config::getadmin("staticlang").$page.'.html';
    		}
    		if(front::$rewrite){
    			return config::get('base_url').'/tags'.config::getadmin("staticlang").'wap'.config::getadmin("staticlang").urlencode($tag).config::getadmin("staticlang").$page.'.htm';
    		}
    		return url::create('tag/show/t/wap/tag/'.urlencode($tag).($page>1?'/page/'.$page:''),false);

    	}
    	if(config::getadmin('tag_html')){
		//静态   tags_cn   区分语言包
    		/*$pinyin = pinyin::get($tag);*/
            if ($lang==""){
                $lang=lang::getisadmin();
            }
            $html_prefix = config::get('html_prefix')?trim(config::get('html_prefix'),'/'):'';
            $rule = tag::gethtmlrule($tag, 'listhtmlrule');
            $otag = self::getInstance();
            $row = $otag->getrow("tagname='$tag'");
            $tagid= $row['tagid'];
            $rule = str_replace('{$dir}', $row['htmldir'], $rule);
            $rule = str_replace('{$tagid}', $tagid, $rule);
            $rule=str_replace('{$lang}',$lang,$rule);
            if ($page) $rule = str_replace('{$page}', $page, $rule);
            else $rule = preg_replace('/\(.*?\)/', '', $rule);
            $rule = preg_replace('%/\.html$%', '/index.html', $rule);
            $rule = preg_replace('/[\(\)]/', '', $rule);
            $rule = preg_replace('%[\\/]index\.htm(l)?%', '', $rule);
            $rule = rtrim($rule, '/');
            $rule = trim($rule, '\\');
          /*  $rule = str_replace('/1.html', '', $rule);*/
            $path = config::get('base_url') .$html_prefix. '/' . $rule;
            //echo $path;
            return $path;

    	}
    	if(front::$rewrite){
    		return config::get('base_url').'/tags'.config::getadmin("staticlang").urlencode($tag).config::getadmin("staticlang").$page.'.html';
    	}

    	return url::create('tag/show/tag/'.urlencode($tag).($page>1?'/page/'.$page:''),false);
    }


    static function gethtmlrule($tagname, $tag = 'listhtmlrule')
    {

        $tagdata =  self::getInstance()->getrow("tagname='$tagname'");

        if ($tagdata['htmlrule'] && $tag == 'listhtmlrule') return $tagdata['htmlrule'];
        $default = array(
            'listhtmlrule' => '{$dir}/{$page}-{$lang}.html',
        );
        if (isset($default[$tag])) return $default[$tag];
    }

    static function getadminTags() {
    	$data=array();
    	$data[0] = lang_admin('please_choose');
    	$otag = new tag();
    	$row = $otag->getrows('langid='.lang::getlangid(lang::getisadmin()),0,'tagid ASC');
    	if(is_array($row)){
    		foreach ($row as $arr){
    			$data[$arr['tagname']] = $arr['tagname'];
    		}
    	}

    	return $data;
    }

    //获取当前栏目下的所有tag  (栏目校验去掉了  无用了)
    /*static function getadminTagslist($catid='0',$num=0) {
        $data=array();
        $data[0] = lang_admin('please_choose');
        $otag = new tag();
        $where='langid='.lang::getlangid(lang::getistemplate());
        if ($catid){
            $where.=" and (FIND_IN_SET ('".$catid."',ranges) or ranges='')";
        }
        $row = $otag->getrows($where,$num,'tagid ASC');
        return $row;
    }*/

    //判断tag是否存在  不存在则新增
    static function getistag($tagname=null) {

        $otag = new tag();
        $where='langid='.lang::getlangid(lang::getisadmin()).' and tagname="'.$tagname.'"';
        $row = $otag->getrow($where);
        if (is_array($row)){
            return array("state"=>1,"message"=>"tag".lang_admin("already_exists"));
        }else{
            return array("state"=>0,"message"=>"tag".lang_admin("nonentity"));
        }
    }

    static function getTags($catid='0',$aid='0',$num=0) {
    	$data=array();
    	$data[0] = lang_admin('please_choose');
    	$where='langid='.lang::getlangid(lang::getistemplate());
    	/*if ($catid){
            $where.=" and FIND_IN_SET ('".$catid."',ranges)";
        }*/
        $row="";
    	if ($aid){
            $where.=" and aid=".$aid;
            $archivedata = archive::getInstance()->getrow($where);
            $row=$archivedata['tag'];
        }else{
            $where.=" and  catid in (". category::sonall($catid,true).")";
            $archivedata = archive::getInstance()->getrows($where,0);
            if (is_array($archivedata))
                foreach ($archivedata as $key=>$val){
                    if ($row==""){
                        $row=$val['tag'];
                    }else{
                        if ($val['tag'] != ""){
                            $newval = explode(',',$val['tag']);
                            for($index=0;$index<count($newval);$index++){
                                $newrow=explode(',',$row);
                                if(!in_array($newval[$index], $newrow)){
                                    $row=$row.','.$newval[$index];
                                }
                            }
                        }
                    }
                }
        }

    	if(isset($row)){
            $newrow = explode(',',$row);
            for($index=0;$index<count($newrow);$index++){
                if ($num>0 && $index<$num)
                $data[$newrow[$index]] =$newrow[$index];
            }
    	}
    	return $data;
    }
    static function gettempalteTags($catid='0') {
        $categorydata=category::getInstance()->getrow("catid=".$catid);
    	$otag = new tag();
    	$where='langid='.lang::getlangid(lang::getistemplate());
    	if ($categorydata['catname']){
            $where.=" and (ranges LIKE '%".$categorydata['catname']."%')";
        }
    	$row = $otag->getrows($where,0,'tagid ASC');
    	return $row;
    }
    
    function urls($tagstring) {
        $tags=explode(',',$tagstring);
        $urls=array();
        foreach($tags as $tag) {
            if($tag)
                $urls[$tag]=$this->url($tag);
        }
        return $urls;
    }
    function pagination() {
        return template('system/tag_pagination.html');
    }
}