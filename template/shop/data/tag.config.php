<?php
$path = ROOT . '/template/' . config::get('template_shopping_dir') . '/tpltag/';
$tagfileList = listDirOne($path, 'html');
$categoryarray = $contentarray = $specialarray = $typearray = array();
foreach ($tagfileList as $value) {
    $path = str_replace('\\', '/', $path);
    $value = str_replace($path, '', $value);
    if (substr($value, 0, 16) == 'tag_shop_content') {
        $contentarray[$value] = $value;
    }
    if (substr($value, 0, 17) == 'tag_shop_category') {
        $categoryarray[$value] = $value;
    }
    if (substr($value, 0, 16) == 'tag_shop_special') {
        $specialarray[$value] = $value;
    }
    if (substr($value, 0, 13) == 'tag_shop_type') {
        $typearray[$value] = $value;
    }

}
return array(
    'shopcontent' => $contentarray,
    'shopcategory' => $categoryarray,
    'shopspecial' => $specialarray,
    'shoptype' => $typearray,
);
?>