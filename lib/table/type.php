<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class type extends table
{
    static $me;

    function getcols($act)
    {
        return '*';
    }

    function get_form()
    {
        return array(
            'parentid' => array(
                'selecttype' => 'select',
                'select' => form::arraytoselect(type::getoption(0, 'isnotlast')),
                'default' => get('parentid'),
            ),
            'thumb' => array(
                'filetype' => 'thumb',
            ),
            'ishtml' => array(
                'selecttype' => 'radio',
                'select' => form::arraytoselect(array(0 => lang_admin('inherit'), 1 => lang_admin('generate'), 2 => lang_admin('no_generate'))),
                'default' => 0,
            ),
            'isshow' => array(
                'selecttype' => 'radio',
                'select' => form::arraytoselect(array(1 => lang_admin('normal_display'), 0 => lang_admin('forbidden'))),
                'default' => 1,
            ),
            'langid'=>array(
                'selecttype'=>'select',
                'select'=>form::arraytoselect(lang::option(0,'tolast')),
                'default'=>lang::getlangid(lang::getisadmin()),
            ),
            'ispages' => array(
                'selecttype' => 'radio',
                'select' => form::arraytoselect(array(1 => lang_admin('paging'), 0 => lang_admin('single_page'))),
                'default' => 1,
            ),
            'includecatarchives' => array(
                'selecttype' => 'radio',
                'select' => form::arraytoselect(array(1 => lang_admin('include'), 0 => lang_admin('no_include'))),
                'default' => 1,
            ),
            'stype' => array(//'tips'=>"&nbsp;被调用的格式 type(\$typeid,'标记')",
            ),
            'htmlrule' => array(
                //'tips'=>" 默认：{?type::gethtmlrule(get('id'))}",
                'selecttype' => 'select',
                'select' => form::arraytoselect(getTypeHtmlRule('type')),
                'default' => '',
            ),
            'listhtmlrule' => array(
                //'tips'=>" 默认：{?type::gethtmlrule(get('id'),'listhtmlrule')}",
                'selecttype' => 'select',
                'select' => form::arraytoselect(getTypeHtmlRule('type')),
                'default' => '',
            ),
            'showhtmlrule' => array(//'tips'=>" 默认：{?type::gethtmlrule(get('id'),'showhtmlrule')}",
            ),
            'image' => array(
                'filetype' => 'thumb',
            ),
            'template' => array(
                'selecttype' => 'select',
                'select' => form::arraytoselect(front::$view->archive_tpl_list('type/list')),
                'default' => "{?type::gettemplate(get('id'),'listtemplate',false)}",
                //'tips'=>" 默认：{?type::gettemplate(get('id'))}",
            ),
            'listtemplate' => array(
                'selecttype' => 'select',
                'select' => form::arraytoselect(front::$view->archive_tpl_list('type/list')),
                'default' => "{?type::gettemplate(get('id'),'listtemplate',false)}",
                //'tips'=>" 默认：{?type::gettemplate(get('id'),'listtemplate')}",
            ),
            'isNavigation' => array(
                'selecttype' => 'select2',
                'select' => form::arraytoselect(array(0 => lang_admin('no_show'),1 => lang_admin('show'))),
                'default' => '0',
            ),
            'isscreening' => array(
                'selecttype' => 'radio',
                'select' => form::arraytoselect(array(1 => lang_admin('join_screening'), 0 => lang_admin('unfilter'))),
                'default' => '0',
            ),
        );
    }

    public static function getInstance()
    {
        if (!self::$me) {
            $class = new type();
            $class->init();
            self::$me = $class;
        }
        return self::$me;
    }

    public static function getTemplateInstance()
    {
        if (!self::$me) {
            $class = new type();
            $class->templateinit();
            self::$me = $class;
        }
        return self::$me;
    }

    function templateinit()
    {
        $_type = $this->getrows("langid=".lang::getlangid(lang::getistemplate()), 1000, '`listorder` desc,1');
        $type = array();
        foreach ($_type as $one) {
            if (!front::$admin && !$one['isshow']) continue;
            $type[$one['typeid']] = $one;
        }
        $this->type = $type;
        $parent = array();
        foreach ($type as $one) {
            $parent[$one['typeid']] = $one['parentid'];
        }
        $this->parent = $parent;
        $this->tree = new tree($parent);
    }

    function init()
    {
        $_type = $this->getrows(null, 1000, '`listorder` desc,1');
        $type = array();
        foreach ($_type as $one) {
            if (!front::$admin && !$one['isshow']) continue;
            $type[$one['typeid']] = $one;
        }
        $this->type = $type;
        $parent = array();
        foreach ($type as $one) {
            $parent[$one['typeid']] = $one['parentid'];
        }
        $this->parent = $parent;
        $this->tree = new tree($parent);
    }

    function son($id)
    {
        //增加语言包过滤
        $where = '  langid = "'.lang::getlangid(lang::getisadmin()).'"';
        $_type = $this->getrows($where, 1000, '`listorder` desc,1');
        $type = array();
        foreach ($_type as $one) {
            if (!front::$admin && !$one['isshow']) continue;
            $type[$one['typeid']] = $one;
        }
        $this->type = $type;
        $parent = array();
        foreach ($type as $one) {
            $parent[$one['typeid']] = $one['parentid'];
        }
        $this->parent = $parent;
        $this->tree = new tree($parent);
        return $this->tree->get_son($id);
    }
    function sonTemplate($id)
    {
        //增加语言包过滤
        $where = '  langid = "'.lang::getlangid(lang::getistemplate()).'"';
        $_type = $this->getrows($where, 1000, '`listorder` desc,1');
        $type = array();
        foreach ($_type as $one) {
            if (!front::$admin && !$one['isshow']) continue;
            $type[$one['typeid']] = $one;
        }
        $this->type = $type;
        $parent = array();
        foreach ($type as $one) {
            $parent[$one['typeid']] = $one['parentid'];
        }
        $this->parent = $parent;
        $this->tree = new tree($parent);
        return $this->tree->get_son($id);
    }

    function sons($id)
    {
        if (!isset($this->tree)) $this->init();
        $sons = array();
        $this->tree->get_sons($id, $sons);
        return $sons;
    }

    //获取所有子分类id
    static function sonall($catid,$mystatu = false){
        //增加语言包过滤
        $type = self::getInstance();
        if (is_array($type->son($catid)))
            foreach ($type->son($catid) as $_catid) {
                if ($type->sonall!=""){
                    $type->sonall.=','.$_catid;
                }else{
                    $type->sonall.=$_catid;
                }
                if (is_array($type->son($_catid))){
                    $type->sonall($_catid);
                }
            }
        if ($mystatu){
            if ($type->sonall!=""){
                $type->sonall.=','.$catid;
            }else{
                $type->sonall.=$catid;
            }
        }
        return $type->sonall;
    }

    function hasson($id)
    {
        return self::getInstance()->tree->has_son($id);
    }

    function getparents($id, $up = true)
    {
        if (!isset($this->tree)) $this->init();
        return $this->tree->get_parents($id);
    }

    function getparent($id)
    {
        if (isset($this->tree->parent[$id])) return $this->tree->parent[$id];
        else return false;
    }

    function getposition($id)
    {
        if (!isset($this->tree)) $this->init();
        $position = $this->tree->get_parents($id);
        return $position;
    }

    function getposition1($id)
    {
        if (!isset($this->tree)) $this->init();
        $position = $this->tree->get_parents1($id);
        return $position;
    }

    static function gettopparent($id)
    {
        $position = self::getInstance()->getposition($id);
        return $position[count($position) - 1];
    }

    static function getparentsid($id, $up = true)
    {
        $category = self::getInstance();
        if (!isset($category->tree)) $category->init();
        return $category->tree->get_parents($id);
    }

    function htmlpath($id)
    {
        if (!isset($this->tree)) $this->init();
        $positions = $this->tree->get_parents($id);
        $path = array();
        foreach ($positions as $_id) {
            if ($_id && isset($this->type[$_id])) $path[] = $this->type[$_id]['htmldir'];
        }
        return implode('/', $path);
    }

    static function option($typeid = 0, $tag = 'all', &$option = array(0 => '请选择...'), &$level = 0)
    {
        $type = self::getInstance();
        if (is_array($type->son($typeid))) foreach ($type->son($typeid) as $_typeid) {
            if (!self::check($_typeid, $tag)) continue;
            $strpre = $level > 0 ? str_pad('', $level * 12, '&nbsp;') . '└&nbsp;' : '';
            $option[$_typeid] = $strpre . $type->type[$_typeid]['typename'];
            if (is_array($type->son($_typeid))) {
                $level++;
                self::option($_typeid, $tag, $option, $level);
                $level--;
            }
        }
        return $option;
    }
    static function getoption($typeid = 0, $tag = 'all', &$option = array(0 => '请选择...'), &$level = 0)
    {
        if(session::get("typeoption_".lang::getisadmin())){
            return session::get("typeoption_".lang::getisadmin());
        }
        $option=self::option($typeid,$tag,$option,$level);
        session::set("typeoption_".lang::getisadmin(),$option);
        return $option;
    }

    static function name($typeid)
    {
        $type = self::getInstance();
        if (isset($type->type[$typeid]['typename'])) {
            return $type->type[$typeid]['typename'];
        } else {
            return '';
        }
    }

    static function image($typeid)
    {
        $type = self::getInstance();
        if (isset($type->type[$typeid]['image'])) return config::get('base_url') . '/' . $type->type[$typeid]['image'];
        else return '';
    }

    static function url($typeid, $page = null,$lang='')
    {
        if ($lang==""){
            $lang=lang::getisadmin();
        }
        //var_dump($typeid);
        if (front::$get['t'] == 'wap') {
            if (config::get('wap_type_php')==1) {
                    $type = self::getInstance();
                    $rule = type::gethtmlrule($typeid, 'listhtmlrule');
                    $rule = str_replace('{$caturl}', $type->htmlpath($typeid), $rule);
                    $rule = str_replace('{$catid}', $typeid, $rule);
                    $rule = str_replace('{$dir}', $type->type[$typeid]['htmldir'], $rule);
                    $rule=str_replace('{$lang}',$lang,$rule);
                    if ($page) {
                        $rule = str_replace('{$page}', $page, $rule);
                    } else {
                        $rule = preg_replace('/(type-.*?)\.html$/', 'index.html', $rule);
                    }
                    $rule = preg_replace('%/\.html$%', '/index.html', $rule);
                    $rule = preg_replace('/[\(\)]/', '', $rule);
                    $rule = preg_replace('%[\\/]index\.htm(l)?%', '', $rule);
                    $rule = rtrim($rule, '/');
                    $rule = trim($rule, '\\');
                $sp = substr(config::get('base_url'), -1, 1) == '/' ? '' : '/';
                return config::get('base_url') . $sp . 'type-wap/' . $rule;
            } else  if (config::get('wap_type_php')==2){
                return url('type/list/t/wap/typeid/' . $typeid . ($page ? '/page/' . $page : ''));
            }
        }

        if (!type::getishtml($typeid) && !front::$rewrite) {
            return url('type/list/typeid/' . $typeid . ($page ? '/page/' . $page : ''));
        } else if (front::$rewrite) {
            $sp = substr(config::get('base_url'), -1, 1) == '/' ? '' : '/';
            return config::get('base_url') . $sp . 'typelist-' . $typeid . '-' . $page.'-'.$lang . '.html';
        } else {
            $type = self::getInstance();
            $rule = type::gethtmlrule($typeid, 'listhtmlrule');
            $rule = str_replace('{$caturl}', $type->htmlpath($typeid), $rule);
            $rule = str_replace('{$catid}', $typeid, $rule);
            $rule = str_replace('{$dir}', $type->type[$typeid]['htmldir'], $rule);
            $rule=str_replace('{$lang}',$lang,$rule);
            if ($page>1) $rule = str_replace('{$page}', $page, $rule);
           /* else $rule = preg_replace('/(type-.*?)\.html$/', 'index.html', $rule);*/
            else $rule = str_replace('{$page}', "index", $rule);

            //else $rule=preg_replace('/(^\/.*?\.html)/',"/index.html",$rule);
            $rule = preg_replace('%/\.html$%', '/index.html', $rule);
            $rule = preg_replace('/[\(\)]/', '', $rule);
            $rule = preg_replace('%[\\/]index\.htm(l)?%', '', $rule);
            $rule = rtrim($rule, '/');
            $rule = trim($rule, '\\');
            //$sp = substr(config::get('base_url'), -1, 1) == '/' ? '' : '/';
            //var_dump(config::get('base_url'));
            //var_dump($sp);exit;
            $html_prefix =  '';
            if (config::get('html_prefix')){
                $html_prefix = trim(config::get('html_prefix'),'/').'/';
            }
            //var_dump(rtrim(config::get('base_url'),'/').'/' . $html_prefix . 'type/' . $rule);
            return rtrim(config::get('base_url'),'/').'/' . $html_prefix . 'type/' . $rule;
        }
    }

    static function getpositionlink($typeid)
    {
        $type = self::getInstance();
        if (!isset($type->type[$typeid])) return;
        $position = $type->getposition($typeid);
        $links = array();
        if (!$typeid) return $links;
        foreach ($position as $order => $id) {
            $links[$order]['id'] = $id;
            $links[$order]['name'] = @$type->type[$id]['typename'];
            $links[$order]['url'] = self::url($id);
        }
        return $links;
    }

    static function getpositionhtml($typeid)
    {
        $s = ' &gt; ';
        $html = '';
        foreach (self::getpositionlink($typeid) as $link) {
            $html .= "<a href=\"$link[url]\">$link[name]</a>" . $s;
        }
        return preg_replace("%$s$%", '', $html);
    }

    static function getpositionlink1($typeid)
    {
        $type = self::getInstance();
        if (!isset($type->type[$typeid])) return;
        $position = $type->getposition($typeid);
        $links = array();
        if (!$typeid) return $links;
        foreach ($position as $order => $id) {
            $links['id'] = $id;
            $links['name'] = @$type->type[$id]['typename'];
            $links['url'] = self::url($id);
            break;
        }
        return $links;
    }

    static function getpositionlink2($typeid)
    {
        $type = self::getInstance();
        if (!isset($type->type[$typeid])) return;
        $position = $type->getposition1($typeid);
        $links = array();
        if (!$typeid) return $links;
        foreach ($position as $order => $id) {
            $links[$order]['id'] = $id;
            $links[$order]['name'] = @$type->type[$id]['typename'];
            $links[$order]['url'] = self::url($id);
        }
        return $links;
    }

    static function gettemplate($typeid, $tag = 'listtemplate', $up = true)
    {
        if (!$typeid && front::get('parentid')) $typeid = front::get('parentid');
        $type = self::getInstance();
        if (@$type->type[$typeid]['template'] && $tag == 'listtemplate') return $type->type[$typeid]['template'];
        if (@$type->type[$typeid][$tag]) return $type->type[$typeid][$tag];
        if (!$up) return;
        $parents = $type->getparents($typeid, true);
        ksort($parents);
        foreach ($parents as $pid) {
            if ($pid == $typeid) continue;
            if (@$type->type[$pid][$tag]) return $type->type[$pid][$tag];
        }
        $default = array(
            'listtemplate' => 'type/list.html',
        );
        if (isset($default[$tag])) return $default[$tag];
    }

    static function gethtmlrule($typeid, $tag = 'listhtmlrule')
    {
        if (!$typeid && front::get('parentid')) $typeid = front::get('parentid');
        $type = self::getInstance();
        //var_dump($typeid);
        //var_dump($type->type);exit;
        if (@$type->type[$typeid]['htmlrule'] && $tag == 'listhtmlrule') return $type->type[$typeid]['htmlrule'];
        $parents = $type->getparents($typeid, true);
        ksort($parents);
        foreach ($parents as $pid) {
            if ($pid == $typeid) continue;
            if (@$type->type[$pid][$tag]) return $type->type[$pid][$tag];
        }

        $default = array(
            'listhtmlrule' => '{$caturl}/{$page}.html',
            'showhtmlrule' => '{$caturl}/{$aid}(-{$page}).html',
        );
        if (isset($default[$tag])) return $default[$tag];
    }

    static function getWapishtml($typeid)
    {
        $type = self::getInstance();
        if (@$type->type[$typeid]['ishtml'] == '1') return true;
        if (@$type->type[$typeid]['ishtml'] == '2') return false;
        $parents = $type->getparents($typeid, true);
        ksort($parents);
        foreach ($parents as $pid) {
            if ($pid == $typeid) continue;
            if (@$type->type[$pid]['ishtml'] == '1') return true;
            if (@$type->type[$pid]['ishtml'] == '2') return false;
        }
        if (config::getadmin('wap_type_php') == '1') return true;
        if (config::getadmin('wap_type_php') == '2') return false;
        return false;
    }

    static function getishtml($typeid)
    {
        $type = self::getInstance();
        if (@$type->type[$typeid]['ishtml'] == '1') return true;
        if (@$type->type[$typeid]['ishtml'] == '2') return false;
        $parents = $type->getparents($typeid, true);
        ksort($parents);
        foreach ($parents as $pid) {
            if ($pid == $typeid) continue;
            if (@$type->type[$pid]['ishtml'] == '1') return true;
            if (@$type->type[$pid]['ishtml'] == '2') return false;
        }
        if (config::getadmin('list_type_php') == '1') return true;
        if (config::getadmin('list_type_php') == '2') return false;
        return false;
    }


    static function getarcishtml($arc)
    {
        if (config::getadmin('list_type_php') == '1') return true;
        if (config::getadmin('list_type_php') == '2') return false;
        if ($arc['ishtml']) return true;
        if (self::getishtml($arc['typeid'])) return true;
        return false;
    }
    static function getwaparcishtml($arc)
    {
        if (config::getadmin('wap_type_php') == '1') return true;
        if (config::getadmin('wap_type_php') == '2') return false;
        if ($arc['ishtml']) return true;
        if (self::getWapishtml($arc['typeid'])) return true;
        return false;
    }

    static function getattr($typeid, $attr)
    {
        $type = self::getInstance();
        if (@$type->type[$typeid][$attr]) return $type->type[$typeid][$attr];
        $parents = $type->getparents($typeid, true);
        ksort($parents);
        foreach ($parents as $pid) {
            if ($pid == $typeid) continue;
            if (@$type->type[$pid][$attr]) return $type->type[$typeid][$attr];
        }
        return false;
    }

    static function getwidthofthumb($typeid)
    {
        $width = self::getattr($typeid, 'thumb_width');
        if (!$width) $width = config::get('thumb_width');
        return $width;
    }

    static function getheightofthumb($typeid)
    {
        $height = self::getattr($typeid, 'thumb_height');
        if (!$height) $height = config::get('thumb_height');
        return $height;
    }

    static function gettypedata($_typeid = 0, &$data = array(), &$level = 0)
    {
        $type = self::getInstance();
        $types = $type->son($_typeid);
        foreach ($types as $typeid) {
            $info_ = $type->type[$typeid];
            $strpre = $level > 0 ? str_pad('', $level * 12, '&nbsp;') . '└&nbsp;' : '';
            $info_['typename'] = $strpre . $info_['typename'] . '<font color="Blue">' . (self::check($typeid, 'islast') ? ('(' . countarchiveformtype($typeid) . ')') : '') . '</font>';
            $info_['level'] = $level;
            $data[] = $info_;
            if (is_array($type->son($typeid))) {
                $level++;
                self::gettypedata($typeid, $data, $level);
                $level--;
            }
        }
        return $data;
    }

    //分类ID  $mystatu是否包含自己
    public static function listtypedata_new($_typeid = 0,$mystatu = false)
    {
        if (session::get("listtypedata_new_".lang::getisadmin())) {
            return session::get("listtypedata_new_".lang::getisadmin());
        }
        $class = new type();
        $where = 'langid = "'.lang::getlangid(lang::getisadmin()).'"';
        if ($_typeid>0){
            $where.=" and typeid in (".$class->sonall($_typeid,$mystatu).")";
        }
        $cats=array();
        $_category = $class->getrows($where, 1000, '`listorder` desc,1');
            foreach($_category as $key=>$category){
                $_category[$key]['url'] = type::url($category['typeid']);
                $cats[$category['typeid']]=$_category[$key];
            }

            $tree = array(); //格式化好的树
            foreach ($cats as $key=>$item)
                if (isset($cats[$item['parentid']]))
                    $cats[$item['parentid']]['children'][] = &$cats[$item['typeid']];
                else
                    $tree[] = &$cats[$item['typeid']];

            if( $_typeid==0){
                foreach ($tree as $key=>$item)
                    if ($item['parentid']>0) unset($tree[$key]);
            }
        session::set("listtypedata_new_".lang::getisadmin(),$tree);
            return $tree;


    }
    //分类列表
    public static function gethtmltypedata_new($tree,$children=false,$leveldiv=0,$token){
            $html = '';
            foreach($tree as $t)
            {
                if($t['children'] == '')
                {
                    $html .= '<tr onmouseover="m_over(this)" onmouseout="m_out(this)" lang="'.$leveldiv.'" ';
                    $html .= ($children?'name="leveldiv" style="display:none"':"").'" >';
                    $html .= '<input type="hidden" id="typeid'.$t['typeid'].'" name="typeid'.$t['typeid'].'" value="'.$t['typeid'].'" >';
                    $html .= '<td class="s_out"><input onclick="c_chang(this)" type="checkbox" value="'.$t['typeid'].'" name="select[]"> </td>';
                    $html .= '<td class="sort"><input type="text" name="listorder'.$t['typeid'].'" onchange="setchange(\''.$t['typeid'].'\');"  id="listorder'.$t['typeid'].'" value="'.$t['listorder'].'" class="form-control "></td>';
                    $html .= '<!--<td class="id">'.$t['typeid'].'</td>-->';
                    $html .= '<td class="catname">';
                    $html .= '<a class="child"></a><div class="input-group">';
                    $html .= '';
                    $fhcatname="";
                    for ($i=0;$i<=$leveldiv;$i++){
                        if ($i==0){
                            continue;
                        }else if($i==1){
                            $fhcatname="<span class=\"input-group-addon indent\"></span><span class=\"input-group-addon indent\"></span>";
                        }else{
                            $fhcatname="<span class=\"input-group-addon indent\"></span>".$fhcatname;
                        }
                    }
                    $html .=$fhcatname. '<input type="text" name="typename'.$t['typeid'].'" id="typename'.$t['typeid'].'"  onchange="setchange(\''.$t['typeid'].'\');" value="'.$t['typename'].'" class="form-control "></td>';
                    $html .= '<td class="htmldir">';
                    $html .= '<span class="hotspot" onmouseover="tooltip.show(\''.lang_admin('category_file_storage_directory_directory_must_be_in_english_or_pinyin_no_space_in_the_middle').'\');" onmouseout="tooltip.hide();">'.$t['htmldir'].'</span>';
                    $html .= '</td>';
                    $html .= '<td class="manage">';
                    $html .= '<a href="#" onclick="gotourl(this)"   data-dataurl="'.modify("/act/edit/table/type/id/".$t['typeid']).'" title="'.lang_admin('edit').'" class="btn btn-gray" data-dataurlname="'.lang_admin('editorial_category').'">'.lang_admin('edit').'</a>';
                    $html .= '<div class="btn-group">';
                    $html .= '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                    $html .= lang_admin('more').'<span class="caret"></span>';
                    $html .= '</button>';
                    $html .= '<ul class="dropdown-menu">';
                    $html .= ' <li><a href="'.url("type/list/typeid/".$t['typeid'],false).'" target="_blank" title="'.lang_admin('see').'">'.lang_admin('see').'</a></li>';
                    $html .= '<li><a href="#" onclick="gotourl(this)"   data-dataurl="'.modify("/act/list/table/archive/search_typeid/".$t['typeid']).'" title="'.lang_admin('content_management').'" data-dataurlname="'.lang_admin('content_management').'">'.lang_admin('administration').'</a></li>';
                    $html .= '<li role="separator" class="divider"></li>';
                    $html .= '<li><a onclick="if(confirm(\''.lang_admin('are_you_sure_you_want_to_delete_it').'\')){gotourl(this);};" href="#"  ';
                    $html .= 'data-dataurl="'.modify("/act/delete/table/type/id/".$t['typeid']."/token/".$token).'"';
                    $html .= 'title="'.lang_admin('delete').'">'.lang_admin('delete').'</a></li>';
                    $html .= '</ul>';
                    $html .= '</div>';
                    $html .= '</td>';
                    $html .= '</tr>';
                }
                else
                {
                    $html .= '<tr onmouseover="m_over(this)" onmouseout="m_out(this)" lang="'.$leveldiv.'" ';
                    $html .= ($children?'name="leveldiv" style="display:none"':"").'" >';
                    $html .= '<input type="hidden" id="typeid'.$t['typeid'].'" name="typeid'.$t['typeid'].'" value="'.$t['typeid'].'" >';
                    $html .= '<td class="s_out"><input onclick="c_chang(this)" type="checkbox" value="'.$t['typeid'].'" name="select[]"> </td>';
                    $html .= '<td class="sort"><input type="text" name="listorder'.$t['typeid'].'" id="listorder'.$t['typeid'].'" onchange="setchange(\''.$t['typeid'].'\');" value="'.$t['listorder'].'" class="form-control "></td>';
                    $html .= '<!--<td class="id">'.$t['typeid'].'</td>-->';
                    $indenta="";
                    for ($i=0;$i<=$leveldiv;$i++){
                        if ($i==0){
                            continue;
                        }else if($i==1){
                            $indenta="<span class=\"input-group-addon indent\"></span>";
                        }else{
                            $indenta="<span class=\"input-group-addon indent\"></span>".$indenta;
                        }
                    }
                    $html .= '<td class="catname">';
                    $html .= $indenta.'<a onclick="child(this);loadowntype('.$t['typeid'].',this);" title="'.lang_admin('click_to_expand_and_close').'" class="child"><i class="glyphicon glyphicon-menu-down"></i></a>';
                    $html .= '<div class="input-group">';
                   $html .=  $fhcatname.'<input type="text" name="typename'.$t['typeid'].'" id="typename'.$t['typeid'].'"  onchange="setchange(\''.$t['typeid'].'\');" value="'.$t['typename'].'" class="form-control ">';
                    $html .= '</div></td>';
                    $html .= '<td class="htmldir">';
                    $html .= '<span class="hotspot" onmouseover="tooltip.show(\''.lang_admin('category_file_storage_directory_directory_must_be_in_english_or_pinyin_no_space_in_the_middle').'\');" onmouseout="tooltip.hide();">'.$t['htmldir'].'</span>';
                    $html .= '</td>';
                    $html .= '<td class="manage">';
                    $html .= '<a href="#" onclick="gotourl(this)"   data-dataurl="'.modify("/act/edit/table/type/id/".$t['typeid']).'" title="'.lang_admin('edit').'" class="btn btn-gray" data-dataurlname="'.lang_admin('editorial_category').'">'.lang_admin('edit').'</a>';
                    $html .= '<div class="btn-group">';
                    $html .= '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                    $html .= lang_admin('more').'<span class="caret"></span>';
                    $html .= '</button>';
                    $html .= '<ul class="dropdown-menu">';
                    $html .= ' <li><a href="'.url("type/list/typeid/".$t['typeid'],false).'" target="_blank" title="'.lang_admin('see').'">'.lang_admin('see').'</a></li>';
                    $html .= '<li><a href="#" onclick="gotourl(this)"   data-dataurl="'.modify("/act/list/table/archive/search_typeid/".$t['typeid']).'" title="'.lang_admin('content_management').'" data-dataurlname="'.lang_admin('content_management').'">'.lang_admin('administration').'</a></li>';
                    $html .= '<li role="separator" class="divider"></li>';
                    $html .= '<li><a onclick="if(confirm(\''.lang_admin('are_you_sure_you_want_to_delete_it').'\')){gotourl(this);};" href="#"  ';
                    $html .= 'data-dataurl="'.modify("/act/delete/table/type/id/".$t['typeid']."/token/".$token).'"';
                    $html .= 'title="'.lang_admin('delete').'">'.lang_admin('delete').'</a></li>';
                    $html .= '</ul>';
                    $html .= '</div>';
                    $html .= '</td>';
                    $html .= '</tr>';
                    //$html .=self::gethtmltypedata_new($t['children'],true,$leveldiv+1,$token);
                }
            }
            return $html;
    }
    //分类最大ID
    public static function maxid_new(){
        $type = self::getInstance();
        $typedata=$type->getrow(null,"typeid desc ");
        if (is_array($typedata))
        return $typedata['typeid'];

        return 0;
    }



    static function listtypedata($_typeid = 0, &$data = array(), &$level = 0)
    {
        $type = self::getInstance();
        $types = $type->son($_typeid);
        foreach ($types as $typeid) {
            $info_ = $type->type[$typeid];
            $strpre = $level > 0 ? str_pad('', $level * 12, '&nbsp;') . '└&nbsp;' : '';
            $info_['typename'] = $strpre . $info_['typename'];
            $info_['url'] = type::url($info_['typeid']);
            $info_['level'] = $level;
            $info_['parentid'] = $type->getparent($info_['typeid']);
            $data[] = $info_;
            if (is_array($type->son($typeid))) {
                $level++;
                self::listtypedata($typeid, $data, $level);
                $level--;
            }
        }
        return $data;
    }
    static function getlisttypedata($_typeid = 0, &$data = array(), &$level = 0)
    {
        if (session::get("typedata_" . lang::getisadmin())) {
            return  session::get("typedata_" . lang::getisadmin());
        }
        $option=self::listtypedata($_typeid,$data,$level);
        session::set("typedata_".lang::getisadmin(),$option);
        return $option;

    }

    static function check($typeid, $tag = 'isnotlast')
    {
        return true;
        $_type = self::getInstance();
        $type = $_type->type[$typeid];
        if ($tag == 'islast' && !$type['islast']) return false;
        if ($tag == 'isnotlast' && $type['islast']) return false;
        if ($tag == 'tolast') {
            if ($_type->type[$typeid]['islast']) return true;
            $sons = $_type->sons($typeid);
            foreach ($sons as $tid) {
                if ($_type->type[$tid]['islast']) return true;
            }
            return false;
        }
        return true;
    }

    static function htmlcache($typeid)
    {
    }


    static function listdata($parentid = 0, $limit = 10, $order = 'typeid asc', $where = null, $includeson = true)
    {
        $type = new type();
        $where = 'parentid=' . ($parentid ? $parentid : '0') . ($where ? ' and ' . $where : '');
        $types = $type->getrows($where, $limit, $order);
        foreach ($types as $order => $type) {
            $types[$order]['url'] = type::url($type['typeid']);
        }
        return $types;
    }

    public static function typies()
    {
        $cache_id =lang::getistemplate().'/type/all/typies';
        if (cache::get($cache_id))
            return cache::get($cache_id);
        else {
            $type = new type();
            $where = 'langid = "' . lang::getlangid(lang::getistemplate()) . '" and  isshow=1';
            $cats = array();
            $_type = $type->getrows($where, 1000, 'listorder=0,listorder asc');
            foreach ($_type as $key => $type) {
                if (front::get('t') == 'wap' && !$type['ismobilenav']) {
                    continue;
                }
                $_type[$key]['url'] = type::url($type['typeid'], 1);
                $cats[$type['typeid']] = $_type[$key];
            }

            $tree = array(); //格式化好的树
            foreach ($cats as $key => $item)
                if (isset($cats[$item['parentid']]))
                    $cats[$item['parentid']]['children'][] = &$cats[$item['typeid']];
                else
                    $tree[] = &$cats[$item['typeid']];

            foreach ($tree as $key => $item)
                if ($item['parentid'] > 0) unset($tree[$key]);

            cache::set($cache_id, $tree);
            return $tree;
        }
    }

    public static function deletesession(){
        if (session::get("typeoption_".lang::getisadmin())) {
            session::del("typeoption_" . lang::getisadmin());
        }
        if (session::get("typedata_".lang::getisadmin())) {
            session::del("typedata_" . lang::getisadmin());
        }
        if (session::get("listtypedata_new_".lang::getisadmin())) {
            session::del("listtypedata_new_" . lang::getisadmin());
        }
    }

}