<?php
$path = ROOT.'/template/'.config::get('template_dir').'/visual/list/listspecialtag/';
$tagfileList = listDirOne($path, 'html');
$names = array(
    'list.html' => '专题文字列表',
    'list_page.html' => '专题单页',
    'list_pic.html' => '专题图片列表',
    'list_products.html' => '专题商品列表',
	'list_text.html' => '专题文字描述列表',
    'list_text_pic.html' => '专题图片文字描述列表',
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