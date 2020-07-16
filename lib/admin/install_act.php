<?php

if (!defined('ROOT'))
    exit('Can\'t Access !');

class install_act extends act
{

    function init()
    {
        load_custom_admin_lang('cn'); //安装时候取自定义语言包
        header('Cache-control: private, must-revalidate');
        if (self::installed())
            exit(lang_custom_admin('the_system_is_installed_To_install_again_delete_the_file').' /data/locked ! ');
        //set_time_limit(0);
    }

    function index_action()
    {

        $this->view->mysqli = extension_loaded('mysqli');

         if(!(PHP_VERSION>=5.4)){
            if($this->view->connerror){
                $this->view->connerror[count($this->view->connerror)]=lang_admin('php_version').helper::yes(false);
            }else{
                $this->view->connerror[0]=lang_admin('php_version').helper::yes(false);
            }
         }
         if(!(extension_loaded('mysqli'))){
            if($this->view->connerror){
                $this->view->connerror[count($this->view->connerror)]='php_mysqli:'.lang_admin('not_installed').helper::yes(false);
            }else{
                $this->view->connerror[0]='php_mysqli:'.lang_admin('not_installed').helper::yes(false);
            }
         }
         if(!(front::file_mode_info(ROOT.'/cache')>=2)){
            if($this->view->connerror){
                $this->view->connerror[count($this->view->connerror)]=lang_admin('catalog').'cache '.helper::yes(false);
            }else{
                $this->view->connerror[0]=lang_admin('catalog').'cache'.helper::yes(false);
            }
         }
         if(!(front::file_mode_info(ROOT.'/config')>=2)){
            if($this->view->connerror){
                $this->view->connerror[count($this->view->connerror)]=lang_admin('catalog').'config'.helper::yes(false);
            }else{
                $this->view->connerror[0]=lang_admin('catalog').'config'.helper::yes(false);
            }
        }
         if(!(front::file_mode_info(ROOT.'/config/config_database.php')>=2)){
            if($this->view->connerror){
                $this->view->connerror[count($this->view->connerror)]=lang_admin('catalog').'config/config_database.php'.helper::yes(false);
            }else{
                $this->view->connerror[0]=lang_admin('catalog').'config/config_database.php'.helper::yes(false);
            }
        }
         if(!(front::file_mode_info(ROOT.'/data')>=2)){
          if($this->view->connerror){
              $this->view->connerror[count($this->view->connerror)]=lang_admin('catalog').'data'.helper::yes(false);
          }else{
              $this->view->connerror[0]=lang_admin('catalog').'data'.helper::yes(false);
          }
      }
         if(!(front::file_mode_info(ROOT.'/install')>=2)){
           if($this->view->connerror){
               $this->view->connerror[count($this->view->connerror)]=lang_admin('catalog').'install'.helper::yes(false);
           }else{
               $this->view->connerror[0]=lang_admin('catalog').'install'.helper::yes(false);
           }
       }
         if(!(front::file_mode_info(ROOT.'/template')>=2)){
           if($this->view->connerror){
               $this->view->connerror[count($this->view->connerror)]=lang_admin('catalog').'template'.helper::yes(false);
           }else{
               $this->view->connerror[0]=lang_admin('catalog').'template'.helper::yes(false);
           }
       }
         if(!(front::file_mode_info(ROOT.'/html/upload')>=2)){
           if($this->view->connerror){
               $this->view->connerror[count($this->view->connerror)]=lang_admin('catalog').'upload    '.helper::yes(false);
           }else{
               $this->view->connerror[0]=lang_admin('catalog').'upload'.helper::yes(false);
           }
       }

        if (front::get('step') == 3 && isset(front::$post['dosubmit'])) {
            $this->view->mysql_pass = false;
            front::$post['prefix'] = strtolower(front::$post['prefix']);
            config::modify(array('type' => 'mysqli'),null,null,true);
            if(!function_exists('mysqli_connect')){
                alerterror(lang_custom_admin('install_and_open_the_PHP_MYSQLI_extension'));
                return;
            }
            if (front::post('hostname')!="" && front::post('user')!=""&& front::post('password')!=""){
                $connect = @mysqli_connect(front::post('hostname'), front::post('user'), front::post('password'));
            }else{
                $connect="";
            }
            //2019 04 23  front::post('createdb') &&   去除安装数据库勾选框   ln
            $databaseName=@mysqli_query($connect,"SHOW DATABASES LIKE '" . front::post('database')."'");
            if (!empty($databaseName) && !@mysqli_select_db($connect, front::post('database'))) {
                @mysqli_query($connect, "CREATE DATABASE " . front::post('database'));
                @mysqli_query($connect, "ALTER DATABASE `$_POST[database]` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
            }
            session::set("langnamewhere","0");
            session::set("admin_lang_cn","0");
            session::set("admin_lang_en","0");
            session::set("admin_lang_sk","0");
            session::set("admin_lang_jp","0");
            if (!mysqli_connect_errno()) {
                if(!front::get('test')){
                 
                    //判断语言包选择   中文不管勾不勾都必选
                    if(front::$post['admin_lang_cn']){
                        session::set('admin_lang_cn',front::$post['admin_lang_cn']);
                    }else{
                        session::set('admin_lang_cn','');
                    }
                    if(front::$post['admin_lang_en']){
                        session::set('admin_lang_en',front::$post['admin_lang_en']);
                    }else{
                        session::set('admin_lang_en','');
                    }
                    if(front::$post['admin_lang_sk']){
                        session::set('admin_lang_sk',front::$post['admin_lang_sk']);
                    }else{
                        session::set('admin_lang_sk','');
                    }
                    if(front::$post['admin_lang_jp']){
                        session::set('admin_lang_jp',front::$post['admin_lang_jp']);
                    }else{
                        session::set('admin_lang_jp','');
                    }
                    if(front::post('default_lang')){
                        session::set('default_lang',front::post('default_lang'));
                    }
                    //如果都不选择的话  就默认中文
                    //if(!(front::$post['admin_lang_cn'] && front::$post['admin_lang_en'] && front::$post['admin_lang_sk']&& front::$post['admin_lang_jp'])){
                        //session::set('admin_lang_cn','cn');
                    //}
                    $db = @mysqli_select_db($connect, front::post('database'));
                    if ($db) {
                        $this->view->mysql_pass = true;
                        session::set('testdata',front::$post['testdata']);
                        $database=array( 'hostname'=>front::post('hostname'),
                            'database'=>front::post('database'),
                            'user'=>front::post('user'),
                            'password'=>front::post('password'),
                            'prefix'=>front::post('prefix'),
                            'encoding'=>'utf8',);

                        config::modify($database,null,null,true);   //true为了修改的是数据库文件config_database.php
                      /*  front::redirect(url('install/index/step/3', true));*/
                        if (front::post('admin_password')=="" || front::post('admin_username')=="" || front::post('admin_password') <> front::post('admin_password2')) {
                            $this->view->adminerror = true;
                        }else {
                            $this->instalsqltype = session::get('testdata');
                            $this->smodarr = front::post('smod');
                            $this->prepare();
                          
                        }
                    }else{
                        $this->view->dberror = true;
                    }
					  
                }
                else{
                    if (front::post('hostname')!="" && front::post('user')!=""&& front::post('password')!="" && front::post('database')!="") {
                        $database = array('hostname' => front::post('hostname'),
                            'database' => front::post('database'),
                            'user' => front::post('user'),
                            'password' => front::post('password'),
                            'prefix' => front::post('prefix'),
                            'encoding' => 'utf8',);
                        config::modify($database, null, null, true);   //true为了修改的是数据库文件config_database.php
                        if ($this->view->connerror) {
                            $this->view->connerror[count($this->view->connerror)] = lang_custom_admin('database_connection') . lang_custom_admin('failure');
                        } else {
                            $this->view->connerror[0] = lang_custom_admin('database_connection') . lang_custom_admin('success');
                        }
                    }else{
                        $this->view->connerror[count($this->view->connerror)] = lang_custom_admin('database_connection') . lang_custom_admin('failure');
                    }
                }
            }
            else{
                if($this->view->connerror){
                    $this->view->connerror[count($this->view->connerror)]=lang_custom_admin('database_connection').lang_custom_admin('failure').mysqli_connect_errno().':'.mysqli_connect_error();
                }else{
                    $this->view->connerror[0]=lang_custom_admin('database_connection').lang_custom_admin('failure').mysqli_connect_errno().':'.mysqli_connect_error();
                }
            }
        }
        $this->render();
    }

    private function prepare()
    {
        set_time_limit(0);
        if ($this->instalsqltype) {
            $sqlquery = file_get_contents(ROOT . '/install/data/install_testdb.sql');
        } else {
            $sqlquery = file_get_contents(ROOT . '/install/data/install.sql');
        }
        if (!$sqlquery) {
            exit(lang_custom_admin('database_file_does_not_exist'));
        }
        $sqlquery = str_replace('cmseasy_', config::getdatabase('database', 'prefix'), $sqlquery);
        $sqlquery = str_replace('\'admin\'', '\'' . front::post('admin_username') . '\'', $sqlquery);
        $sqlquery = str_replace('\'21232f297a57a5a743894a0e4a801fc3\'', '\'' . md5(front::post('admin_password')) . '\'', $sqlquery);
        $sqlquery = str_replace('\'admin@admin.com\'', '\'' .front::post('admin_email') . '\'', $sqlquery);

        file_put_contents(ROOT . '/data/install.data', $sqlquery);
        if(session::get('admin_lang_cn')){
            if(session::get('langnamewhere')){
                session::set("langnamewhere",session::get('langnamewhere').",'".session::get('admin_lang_cn')."'");
            }else{
                session::set("langnamewhere","'".session::get('admin_lang_cn')."'");
            }
            $sqlquerycn = file_get_contents(ROOT . '/install/data/install_lang_'.session::get('admin_lang_cn').'.sql');
            if($sqlquerycn){
                $sqlquerycn = str_replace('cmseasy_', config::getdatabase('database', 'prefix'), $sqlquerycn);
                file_put_contents(ROOT . '/data/install.data', $sqlquerycn,FILE_APPEND);
            }
        }
        if(session::get('admin_lang_en')){
            if(session::get('langnamewhere')){
                session::set("langnamewhere",session::get('langnamewhere').",'".session::get('admin_lang_en')."'");
            }else{
                session::set("langnamewhere","'".session::get('admin_lang_en')."'");
            }
            $sqlqueryen = file_get_contents(ROOT . '/install/data/install_lang_'.session::get('admin_lang_en').'.sql');
            if($sqlqueryen){
                $sqlqueryen = str_replace('cmseasy_', config::getdatabase('database', 'prefix'), $sqlqueryen);
                file_put_contents(ROOT . '/data/install.data', $sqlqueryen,FILE_APPEND);
            }
        }
        if(session::get('admin_lang_sk')){
            if(session::get('langnamewhere')){
                session::set("langnamewhere",session::get('langnamewhere').",'".session::get('admin_lang_sk')."'");
            }else{
                session::set("langnamewhere","'".session::get('admin_lang_sk')."'");
            }
            $sqlquerysk = file_get_contents(ROOT . '/install/data/install_lang_'.session::get('admin_lang_sk').'.sql');
            if($sqlquerysk){
                $sqlquerysk = str_replace('cmseasy_', config::getdatabase('database', 'prefix'), $sqlquerysk);
                file_put_contents(ROOT . '/data/install.data', $sqlquerysk,FILE_APPEND);
            }
        }
        if(session::get('admin_lang_jp')){
            if(session::get('langnamewhere')){
                session::set("langnamewhere",session::get('langnamewhere').",'".session::get('admin_lang_jp')."'");
            }else{
                session::set("langnamewhere","'".session::get('admin_lang_jp')."'");
            }
            $sqlqueryjp = file_get_contents(ROOT . '/install/data/install_lang_'.session::get('admin_lang_jp').'.sql');
            if($sqlqueryjp){
                $sqlqueryjp = str_replace('cmseasy_', config::getdatabase('database', 'prefix'), $sqlqueryjp);
                file_put_contents(ROOT . '/data/install.data', $sqlqueryjp,FILE_APPEND);
            }
        }
        front::redirect(url::create('install/view'));
    }

    function database_action()
    {
       set_time_limit(0);
        $data_file = ROOT . '/data/install.data';
 
        if (file_exists($data_file) == false)
            exit(lang_custom_admin('database_file_does_not_exist'));

        $sqlquery = file_get_contents($data_file);

        $mysql = new user();
        $sqlquery = str_replace("\r", "", $sqlquery);
        $sqls = preg_split("/;(--)*[ \t]{0,}\n/", $sqlquery);
        $nerrCode = "";

        $sqls2 = array();
        foreach ($sqls as $i => $q) {
            $q = trim($q);
            if ($q != '') {
                $sqls2[] = $q;
            }
        }

        echo '<script type="text/javascript">setInterval(function(){window.scrollTo(0,document.body.scrollHeight);},300);</script>';
        echo '<style>*{line-height:180%;font-size:12px;color:#888;}</style>';
        foreach ($sqls2 as $i => $q) {

            echo str_pad(' ', 1024, ' ');

            if (preg_match('/CREATE TABLE (.*?) \(/i', $q, $match) > 0) {

                echo lang_custom_admin('installing_data_sheet').'	' . $match[1] . '...<br>';
            }

            if (!$mysql->query($q)) {
                $nerrCode .= lang_custom_admin('implementation')."： <font color='blue'>$q</font> ".lang_custom_admin('error')."</font><br>";
            }
        }

        @unlink($data_file);

        //修改默认语言包 为CN
        $lang = new lang();
        if(session::get('langnamewhere')){   //语言包安装  设置可用
            $lang->rec_update('static=0,isdefault=0','1=1');
            $lang->rec_update('static=1',' langurlname in ('.session::get('langnamewhere').')');
        }
        //先修改全部 为默认cn
        $lang->rec_query(' UPDATE '.config::getdatabase('database','prefix').'user SET templatelang="cn",adminlang="cn"  ');
        //然后修改当前数据  然后修改用户取默认设置的语言包
        if(session::get('default_lang')){
            $lang->rec_update('isdefault=1',' langurlname = "'.session::get('default_lang').'"' );
            $lang->rec_query(' UPDATE '.config::getdatabase('database','prefix').'user SET templatelang="'.session::get(default_lang).'",adminlang="'.session::get(default_lang).'"  ');
        }else{
            $lang->rec_update('isdefault=1',' langurlname = "cn"' );
        }

 $http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';
				$site_url=$http_type.$_SERVER['HTTP_HOST'].'/';
				config::modifyalllang(array('site_url' => $site_url));

				  config::modifyalllang(array('cookie_password' => sha1(get_hash())));
                            config::modifyalllang(array('install_admin' => front::post('admin_username')));

        echo lang_custom_admin('data_table_installation_complete');
        echo '<script type="text/javascript">setTimeout(function(){window.top.location="' . url::create('install/success') . '";},1000);</script>';
    }

    function view_action()
    {
        $this->render();
    }

    function success_action()
    {
        front::$view->langurlname="";
        file_put_contents(ROOT . '/data/locked', 'install-locked !');
        front::remove(ROOT.'/install');
        @unlink(ROOT . '/install/index.php');
        $this->render();
    }


}