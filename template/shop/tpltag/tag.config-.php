<?php
$path = ROOT . '/template/' . config::get('template_shopping_dir') . '/tpltag/';
$tagfileList = listDirOne($path, 'html');
$categoryarray = $contentarray = $specialarray = array();
foreach ($tagfileList as $value) {
    $path = str_replace('\\', '/', $path);
    $value = str_replace($path, '', $value);
    if (substr($value, 0, 15) == 'tag_content') {
        $contentarray[$value] = $value;
    }
    if (substr($value, 0, 16) == 'tag_category') {
        $categoryarray[$value] = $value;
    }

}
return array(
    'shopcontent' => $contentarray,
    'shopcategory' => $categoryarray,
);
?>