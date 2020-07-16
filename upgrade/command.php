<?php


if(file_exists('upgrade/config/config_cn.php')) {

    $configtmp = include(ROOT.'/config/config_cn.php'); //获取原config的配置数组
    $newconfigcn = file_get_contents('upgrade/config/config_cn.php'); //获取新config数组结构内容
    $newconfigen = file_get_contents('upgrade/config/config_en.php'); //获取新config数组结构内容
    $newconfigjp = file_get_contents('upgrade/config/config_jp.php'); //获取新config数组结构内容
    $newconfigsk = file_get_contents('upgrade/config/config_sk.php'); //获取新config数组结构内容

    $configtmpfile = file_get_contents('config/config_cn.php'); //获取原config的文件内容
    file_put_contents('upgrade/config/config_cn.tmp.php', $configtmpfile); //写入原config的文件内容

    file_put_contents('config/config_cn.php', $newconfigcn); //把原config文件结构更新为新的config文件结构
    file_put_contents('config/config_en.php', $newconfigen); //把原config文件结构更新为新的config文件结构
    file_put_contents('config/config_jp.php', $newconfigjp); //把原config文件结构更新为新的config文件结构
    file_put_contents('config/config_sk.php', $newconfigsk); //把原config文件结构更新为新的config文件结构

    $exec = function ($path) use ($configtmp) {
        $var = $configtmp;
        //$path = ROOT . '/config/config_cn.php';
        $config_code = file_get_contents($path);
        $siteconfig = include $path;
        if (is_array($var)){
            foreach ($var as $key => $value) {
                $value = str_replace("'", "\'", $value);
                $value = str_replace(array("\n", "\r"), "", $value);
                $config_code = preg_replace("%(\'$key\'=>)\'.*?\'(,\s*//)%i", "$1'$value'$2", $config_code);
                //var_dump($config_code);
            }
        }else {
            if (!$key || !$value)
                return;
            $config_code = preg_replace("/(\'$var\'=>array.+?\'$key\'=>)\'.*?\',/i", "$1'$value',", $config_code);
        }
        file_put_contents($path, $config_code);
        config::$modify_state = 1;
    };
    $exec('config/config_cn.php');
    $exec('config/config_en.php');
    $exec('config/config_jp.php');
    $exec('config/config_sk.php');
}


//判断目录是否存在
if(file_exists(ROOT."/lib/default/database_admin.php"))
{
    unlink(ROOT."/lib/default/database_admin.php");
}

if(file_exists(ROOT."/lib/admin/manage_act.php"))
{
    unlink(ROOT."/lib/admin/manage_act.php");
}



