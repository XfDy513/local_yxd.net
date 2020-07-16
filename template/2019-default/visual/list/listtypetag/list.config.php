<?php
$path = ROOT.'/template/'.config::get('template_dir').'/visual/list/listtypetag/';
$tagfileList = listDirOne($path, 'html');
$names = array(
    'list.html' => '分类文字列表',
    'list_loop.html' => '分类子栏目内容列表',
    'list_loop_pic.html' => '分类子栏目图列表',
    'list_page.html' => '分类单页',
    'list_pic.html' => '分类图片列表',
    'list_products.html' => '分类商品列表',
	'list_text.html' => '分类文字描述列表',
    'list_text_pic.html' => '分类图片文字描述列表',
);
$array = array();
foreach($tagfileList as $value){
    $path = str_replace('\\', '/', $path);
    $value = str_replace($path, '', $value);
    if(substr($value,0,4)=='list'){
        $array[$value] = isset($names[$value]) && $names[$value] != '' ? $value.'('.$names[$value].')' : $value;
    }
}
return $array;