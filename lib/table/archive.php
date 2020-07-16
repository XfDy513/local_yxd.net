<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class archive extends table {
    function getcols($act) {
        switch ($act) {
            case 'list':
                return '*';
            case 'modify':
                return '*'.$this->mycols();
            case 'manage':
                return '*';
            case 'user_modify':
                return '*'.$this->mycols();
            case 'user_manage':
                return '*';
            default: return '1';
        }
    }
    function get_verify() {
        return array(
        );
    }
    function get_form() {
        return array(
                'catid'=>array(
                        'selecttype'=>'select',
                        'select'=>form::arraytoselect(category::getoptionconnent(0,'tolast')),
                        'default'=>intval(get('catid')),
                        'regex'=>'/\d+/',
                        'filter'=>'is_numeric',
                ),
                'langid'=>array(
                    'selecttype'=>'select',
                    'select'=>form::arraytoselect(lang::option(0,'tolast')),
                    'default'=>lang::getlangid(lang::getisadmin()),
                ),
                'catidshopping'=>array(
                    'selecttype'=>'select',
                    'select'=>form::arraytoselect(category::getoptionshopping('0','tolast')),
                    'default'=>intval(get('catid')),

                    'regex'=>'/\d+/',
                    'filter'=>'is_numeric',
                ),
                'title' => array(
                        'placeholder' => lang_admin('fill_in_the_title_of_the_article_here'),
                ),
                'typeid'=>array(
                        'selecttype'=>'select',
                        'select'=>form::arraytoselect(type::getoption(0,'tolast')),
                        'default'=>intval(get('typeid')),
                        'regex'=>'/\d+/',
                        'filter'=>'is_numeric',
                ),
				'toppost'=>array(
                        'selecttype'=>'select',
                        'select'=>form::arraytoselect(array(0=>lang_admin('not_set_the_top'),2=>lang_admin('column_top'),3=>lang_admin('set_the_top_of_the_whole_station'))),
                        'default'=>0,
                        'regex'=>'/\d+/',
                        'filter'=>'is_numeric',
                ),
                'ishtml'=>array(
                        'selecttype'=>'radio',
                        'select'=>form::arraytoselect(array(0=>lang_admin('inherit'),1=>lang_admin('generate'),2=>lang_admin('no_generate'))),
                ),
                'isecoding'=>array(
                    'selecttype'=>'radio',
                    'select'=>form::arraytoselect(array(0=>lang_admin('inherit'),1=>lang_admin('lang_open'),2=>lang_admin('lang_no_open'))),
                    'default'=>0,
                ),
                'checked'=>array(
                        'selecttype'=>'radio',
                        'default' => 1,
                        'select'=>form::arraytoselect(form::yesornotoarray(lang_admin('to_examine'))),
                ),
                'image'=>array(
                        'filetype'=>'image',
                ),
                'thumb'=>array(
                        'filetype'=>'thumb',
                ),
                'displaypos'=>array(
                        'selecttype'=>'checkbox',
                        //'select'=>form::arraytoselect(array(1=>'首页推荐',2=>'首页焦点',3=>'首页头条',4=>'列表页推荐',5=>'内容页推荐')),
                ),
                'htmlrule'=>array(
                        //'tips'=>" 默认：{?category::gethtmlrule(get('id'),'showhtmlrule')}",
                ),
                'template'=>array(
                        'selecttype'=>'select',
                        'select'=>form::arraytoselect(front::$view->archive_tpl_list('archive/show')),
                        //'tips'=>" 默认：{?category::gettemplate(get('id'),'showtemplate')}",
                ),
                'templateshopping'=>array(
                    'selecttype'=>'select',
                   'select'=>form::arraytoselect(front::$view->archive_shoppingtpl_list('archive/show')),
                     //'tips'=>" 默认：{?category::gettemplate(get('id'),'showtemplate')}",
                ),
				'templatewap'=>array(
                        'selecttype'=>'select',
                        'select'=>form::arraytoselect(front::$view->mobile_tpl_list('archive/show')),
                        //'tips'=>" 默认：{?category::gettemplate(get('id'),'showtemplate')}",
                ),
                'showform'=>array(
                        'selecttype'=>'select',
                        'select'=>form::arraytoselect(get_my_tables_list()),
                        'default'=>"0",
                ),
                'introduce_len'=>array(
                        'default'=>config::getadmin('archive_introducelen')
                ),
                'iscomment'=>array(
                        'selecttype'=>'radio',
                        'select'=>form::arraytoselect(array('1'=>lang_admin('lang_Allow'),'0'=>lang_admin('lang_no_Allow'))),
                ),
                'attr1'=>array(
                        'selecttype'=>'checkbox',
                        'select'=>form::arraytoselect($this->getattrs(1)),
                ),
                'grade'=>array(
                        'selecttype'=>'radio',
                        'select'=>form::arraytoselect(array(0,1,2,3,4,5)),
                ),
                'pics'=>array(
                        'filetype'=>'image2',
                ),
                'author'=>array(
                        'tips'=>' ',
                ),
                'attr3'=>array(
                        'tips'=>' ',
                ),
                'htmlrule'=>array(
                        'selecttype'=>'select',
                        'select'=>form::arraytoselect(getHtmlRule('archive')),
                        'default'=>'',
                ),
        		'tag_option'=>array(
        				'selecttype'=>'select',
        				'select'=>form::arraytoselect(tag::getadminTags()),
        		),
				
        );
    }
    function get_form_field() {
        $arr=array(0=>'全站使用');
        return array(
                'catid'=>array(
                        'selecttype'=>'select',
                        'select'=>form::arraytoselect(category::getoption(0,'tolast',$arr)),
                        'default'=>intval(get('catid')),
                        'regex'=>'/\d+/',
                        'filter'=>'is_numeric',
                ),
                'ishtml'=>array(
                        'selecttype'=>'radio',
                        'select'=>form::arraytoselect(array(0=>lang_admin('inherit'),1=>lang_admin('generate'),2=>lang_admin('no_generate'))),
                ),
                'checked'=>array(
                        'selecttype'=>'radio',
                        'default' => 1,
                        'select'=>form::arraytoselect(form::yesornotoarray(lang_admin('to_examine'))),
                ),
                'image'=>array(
                        'filetype'=>'image',
                ),
                'displaypos'=>array(
                        'selecttype'=>'checkbox',
                        'select'=>form::arraytoselect(array(1=>lang_admin('home_page_recommendation'),2=>lang_admin('home_page_focus'),
                                                            3=>lang_admin('home_page_headlines'),4=>lang_admin('list_page_recommendation'),5=>lang_admin('conent_page_recommendation'))),
                ),
                'htmlrule'=>array(
                        //'tips'=>" 默认：{?category::gethtmlrule(get('id'),'showhtmlrule')}",
                ),
                'template'=>array(
                        'selecttype'=>'select',
                        'select'=>form::arraytoselect(front::$view->archive_tpl_list()),
                        //'tips'=>" 默认：{?category::gettemplate(get('id'),'showtemplate')}",
                ),
                'introduce_len'=>array(
                        'default'=>config::getadmin('archive_introducelen'),
                ),
                'attr1'=>array(
                        'selecttype'=>'checkbox',
                        'select'=>form::arraytoselect($this->getattrs(1)),
                ),
                'author'=>array(
                        'tips'=>' ',
                ),
                'attr3'=>array(
                        'tips'=>' ',
                ),
        );
    }
    public function get_where($act) {
        switch ($act) {
            case 'list':
                return '';
            case 'manage':
                $where='aid>0';
                if (front::get('needcheck')) $where .=" and checked=0";
                return $where;
            case 'user_manage':
                $where='aid>0';
                if (front::get('needcheck') != ''){
                    $where .=" and checked=".front::get('needcheck');
                }else if(isset(front::$get['needcheck']) && front::get('needcheck') == 0){
                    $where .= " and checked=1";
                }

                return $where;
            default: return '0';
        }
    }
    public static function getInstance() {
        $class=new archive();
        return $class;
    }

    static function url($info,$page=null,$relative=false,$lang='') {
        //var_dump($info);exit;
        if ($info['linkto']) return $info['linkto'];
        if ($lang==""){
            $lang=lang::getisadmin();
        }
        
        if(front::$ismobile == true){
        	if (config::getadmin('wap_html_prefix')){
        		$html_prefix='/'.trim(config::getadmin('wap_html_prefix'),'/');
        	}
        	if(front::$rewrite){
        		if (!$page){
        			return config::getadmin('site_url').'show-wap-'.$info['aid'].'-'.$lang.'.htm';
        		}else{
        			return config::getadmin('site_url').'show-wap-'.$info['aid'].'-'.$page.'-'.$lang.'.htm';
        		}
        	}
        	$type=category::getInstance();
        	if($info['iswaphtml'] == 2){
        		return url::create('archive/show/t/wap/aid/'.$info['aid'],false);
        	}
        	
        	if (!category::getarciswaphtml($info)){
        		if ($page){
        			return url::create('archive/show/t/wap/aid/'.$info['aid'].'/page/'.$page,false);
	        	}else{
	        		return url::create('archive/show/t/wap/aid/'.$info['aid'],false);
	        	}
        	}else {
        		if ($info['htmlrule']){
        			$rule=$info['htmlrule'];
        		}else{
        			$rule=category::gethtmlrule($info['catid'],'showhtmlrule');
        		}

        		$rule=str_replace('{$caturl}',$type->htmlpath($info['catid']),$rule);
        		$rule=str_replace('{$dir}',$type->category[$info['catid']]['htmldir'],$rule);
        		$rule=str_replace('{$catid}',$info['catid'],$rule);
        		$rule=str_replace('{$aid}',$info['aid'],$rule);
        		$rule=str_replace('{$lang}',$lang,$rule);

        		if ($page){
        			$rule=str_replace('{$page}',$page,$rule);
        		}else{
        			$rule=preg_replace('/\(.*?\)/','',$rule);
        			$rule=str_replace('-{$page}','',$rule);
        		}
        		$rule=preg_replace('/[\(\)]/','',$rule);
        		$rule=preg_replace('%[\\/]index\.htm1%','',$rule);
        		$rule=rtrim($rule,'/');
        		$rule=trim($rule,'\\');

        		if ($relative) return $html_prefix.'/'.$rule;
        		return config::getadmin('base_url').$html_prefix.'/'.$rule;
        	}
        }
        
        if (config::getadmin('html_prefix')){
            $html_prefix='/'.trim(config::getadmin('html_prefix'),'/');
        }
        $type = category::getInstance();
        if($info['ishtml'] == 2){
        	return url::create('archive/show/aid/'.$info['aid'],false);
        }
        if (!category::getarcishtml($info) ||front::$rewrite){
            if ($page){
                return url::create('archive/show/aid/'.$info['aid'].'/page/'.$page);
            }else{
                return url::create('archive/show/aid/'.$info['aid'],false);
            }
        } else {
            //var_dump($info);
            $rule = category::gethtmlrule($info['catid'],'showhtmlrule');
            //var_dump($rule);
            if ($info['htmlrule']){
                $rule = $info['htmlrule'];
            }else{
                category::getInstance()->init();
                $rule = category::gethtmlrule($info['catid'],'showhtmlrule');
            }

            $rule=str_replace('{$caturl}',$type->htmlpath($info['catid']),$rule);
            $rule=str_replace('{$dir}',$type->category[$info['catid']]['htmldir'],$rule);
            $rule=str_replace('{$catid}',$info['catid'],$rule);
            $rule=str_replace('{$aid}',$info['aid'],$rule);
            $rule=str_replace('{$lang}',$lang,$rule);
            //var_dump($rule);var_dump($page);exit;
            if ($page){
                $rule=str_replace('{$page}',$page,$rule);
            }else{
                $rule=preg_replace('/\(.*?\)/','',$rule);
                $rule=str_replace('-{$page}','',$rule);
            }
            $rule=preg_replace('/[\(\)]/','',$rule);
            $rule=preg_replace('%[\\/]index\.htm1%','',$rule);
            $rule=rtrim($rule,'/');
            $rule=trim($rule,'\\');

            if ($relative) return $html_prefix.'/'.$rule;
            return config::getadmin('base_url').$html_prefix.'/'.$rule;
        }
    }
    static function countarchiveformtype($catid) {
        $arc=archive::getInstance();
        return $arc->rec_count('typeid='.$catid);
    }
    static function countarchiveformcategory($catid) {
        $arc=archive::getInstance();
        return $arc->rec_count('catid='.$catid);
    }
    function getattrs($att_order=1) {
        $attr='attr'.$att_order;
        $sets=settings::getInstance()->getrow(array('tag'=>'table-archive'));
        if (!is_array($sets)) return;
        $data=unserialize($sets['value']);
        $newattr='attr1_'.lang::getisadmin();
        $data['attr1']=$data[$newattr];

        preg_match_all('%\(([\d\w\/\.-]+)\)(\S+)%m',$data[$attr],$result,PREG_SET_ORDER);
        $data=array();
        foreach ($result as $res)
            $data[$res[1]]=$res[2];
        return $data;
    }

	function getcids($aid){
        //$cat = category::getInstance();
        $cid = $this->getrow(array('aid'=>$aid),'1 desc','catid');
        return $cid['catid'];
    }

    static function getarchivename($aid){
        $archive = new archive();
        $cid = $archive->getrow(array('aid'=>$aid),'1 desc','title');
        return $cid['title'];
    }

    //查询内容
     function getarchive($aid){
        $archive = new archive();
        $cid = $archive->getrows("aid='".$aid."'", 1);
        return $cid[0];
    }

    //查询内容标题
    function getarchivetitle($aid){
        $archive = new archive();
        $cid = $archive->getrows("aid='".$aid."'", 1);
        if (is_array($cid)){
            return $cid[0]['title'];
        }else{
            return '';
        }
    }

    static function getgrade($grade) {
        $count=5;
        $path=config::getadmin('base_url').'/';
        $star1="<span class='glyphicon glyphicon-star'></span>";
        $star2="<span class='glyphicon glyphicon-star-empty'></span>";
        $str="";
        for ($i=0;$i <$count;$i++) {
            if ($i <$grade) {
                $str .= $star1;
            }
            else {
                $str .= $star2;
            }
        }
        return $str;
    }

    //点赞增删
    function setpraise($aid){
        $archive = new archive();
        $archivedata= $archive->getrows("aid='".$aid."'", 1);
        if (isset($archivedata[0]['praise']))
            $archivepraise= $archivedata[0]['praise'];
        $messagelist= array();
        $messagelist[0]='1';
        if($archivepraise !=''){
            $iscz=false;
            $source = explode(",",trim($archivepraise));
            for($index=0;$index<count($source);$index++){
                if($source[$index] ==session::get('username')) {
                    $iscz=true;
                }
            }
            if($iscz){
                $source = explode(",",trim($archivepraise));
                $archivepraise='';  //先清空
                for($index=0;$index<count($source);$index++){
                    if($source[$index]!=session::get('username')) {
                        $archivepraise=$archivepraise.','.$source[$index];
                    }
                }
                if( strpos($archivepraise, ',') !== false){
                    $archivepraise = substr($archivepraise,1,strlen($archivepraise));
                }
                $messagelist[0]='0';
            }else{
                $archivepraise=$archivepraise.','.session::get('username');
            }
        }else{
            $archivepraise=session::get('username');
        }

        //修改用户的收藏
        if($archivepraise==''){
            $messagelist[1]='0';
        }else{
            if( strpos($archivepraise, ',') !== false){
                $source = explode(",",trim($archivepraise));
                $messagelist[1]=count($source);
            }else{
                $messagelist[1]='1';
            }
        }
        $setarchivedata = array('praise' => $archivepraise);
        $archive->rec_update($setarchivedata, "aid='".$aid."'");

        return $messagelist;
    }
}