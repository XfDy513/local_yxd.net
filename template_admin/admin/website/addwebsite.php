<style type="text/css">
.main .main-right-box {
position: absolute;
top:130px;
right:30px;
left:30px;
bottom:30px;
}
</style>

<div class="main-right-box">
<h5>{lang_admin('adding_sites')}</h5>
<div class="blank20"></div>
<div class="box" id="box">

    <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=website&act=listwebsite&admin_dir={get('admin_dir',true)}&site=default" title="{lang_admin('language_item')}" class="btn btn-default">{lang_admin('return_multi_sign_on')}</a>
    <div class="blank20"></div>
    <div class="line"></div>
    <div class="blank20"></div>

<form method="post" name="form1" action="<?php if(front::$act=='edit') $id="/id/".$data[$primary_key]; else $id=''; echo modify("/act/".front::$act."/table/".$table.$id);?>"
      onsubmit="return returnform(this);"     >

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('site_name')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<input type="text" name="name" id="name" value="{lang_admin('new_site')}" class="form-control" />
<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('please_fill_in_the_name_of_the_site_eg_hong_kong_website')}"></span></div>
</div>
<div class="clearfix blank30"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('configuration_file')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<input type="text" name="path" id="path" value="new" class="form-control" />
<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('please_fill_in_the_name_of_the_site_s_configuration_file_such_as_hk')}"></span></div>
</div>
<div class="clearfix blank30"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('site_url')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<input type="text" name="site_url" id="site_url" value="http://new.cmseasy.com/" class="form-control" />
    <p class="tips-p">{lang_admin('Input_format')}</p>
<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('please_fill_in_the_complete_url_of_the_site')}"></span></div>
</div>
<div class="clearfix blank30"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('site_pictures')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
    {form::upload_image('site_websiteimg',$data['site_websiteimg'])}
    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('please_select_site_pictures')}"></span>
</div>
</div>
<div class="clearfix blank30"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('ftp_site_user_name')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<input type="text" name="site_username" id="site_username" value="admin" class="form-control" />
<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('please_fill_in_the_site_user_name_that_is_login_background_account')}"></span></div>
</div>
<div class="clearfix blank30"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('site_password')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<input type="password" name="site_password" id="site_password" value="admin" class="form-control" />
<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('please_fill_in_the_site_user_password_that_is_login_background_password')}"></span></div>
</div>
<div class="clearfix blank30"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('site_background_catalog')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<input type="text" name="site_admindir" id="site_admindir" value="admin" class="form-control" />
<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('please_fill_in_the_site_background_directory_that_is_the_background_access_address_such_as_admin')}"></span></div>
</div>
<div class="clearfix blank30"></div>

<!--<div class="blank10"></div>
<div style="width:100%; height:1px; border-bottom:1px solid #D9E6F4"></div>
<div class="blank10"></div>

<div class="hid_box">
<strong>{lang_admin('database')}服务器</strong>
<div class="hbox" style="background:none;">
<input type="text" name="hostname" id="hostname" value="127.0.0.1"   size="40" class="skey"/> <img src="{$skin_admin_path}/images/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px; /"> <span class="tips icon-info">请填写站点的{lang_admin('database')}主机，例如"127.0.0.1"</span> <br /><br />
</div>
</div>

<div class="hid_box">
<strong>{lang_admin('database')}用户</strong>
<div class="hbox" style="background:none;">
<input type="text" name="user" id="user" value="user"   size="40" class="skey"/> <img src="{$skin_admin_path}/images/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px; /"> <span class="tips icon-info">请填写站点的{lang_admin('database')}用户，例如"root"</span><br /><br />
</div>
</div>

<div class="hid_box">
<strong>{lang_admin('database')}密码</strong>
<div class="hbox" style="background:none;">
<input type="text" name="password" id="password" value="password"   size="40" class="skey"/> <img src="{$skin_admin_path}/images/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px; /"> <span class="tips icon-info">请填写站点的{lang_admin('database')}密码，例如"123456"</span><br /><br />
</div>
</div>

<div class="hid_box">
<strong>{lang_admin('database')}名称</strong>
<div class="hbox" style="background:none;">
<input type="text" name="database" id="database" value="sql"   size="40" class="skey"/> <img src="{$skin_admin_path}/images/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px; /"> <span class="tips icon-info">请填写站点的{lang_admin('database')}名称，例如"hkcmseasy"</span><br /><br />
</div>
</div>

<div class="hid_box">
<strong>{lang_admin('database')}表前缀</strong>
<div class="hbox" style="background:none;">
<input type="text" name="prefix" id="prefix" value="cmseasy_new_"   size="40" class="skey"/> <img src="{$skin_admin_path}/images/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px; /"> <span class="tips icon-info">请填写站点的{lang_admin('database')}表前缀，例如"cmseasy_"</span><br /><br />
</div>
</div>
<input type="button" class="button" value="检查{lang_admin('database')}" onclick="checkmysql()" /><span id="checkloading" style="display:none"><font color="blue">检查中...</font></span><span id="returnmessage"></span>

<div class="blank10"></div>
<div style="width:100%; height:1px; border-bottom:1px solid #D9E6F4"></div>
<div class="blank10"></div>

<div class="hid_box">
<strong>FTP IP地址</strong>
<div class="hbox" style="background:none;">
<input type="text" name="ftpip" id="ftpip" value="127.0.0.1"   size="40" class="skey"/> <img src="{$skin_admin_path}/images/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px; /"> <span class="tips icon-info">请填写站点的FTP ip地址，例如"127.0.0.1"</span><br /><br />
</div>
</div>

<div class="hid_box">
<strong>FTP 端口</strong>
<div class="hbox" style="background:none;">
<input type="text" name="ftpport" id="ftpport" value="21"   size="40" class="skey"/> <img src="{$skin_admin_path}/images/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px; /"> <span class="tips icon-info">请填写站点的FTP端口，例如"21"</span><br /><br />
</div>
</div>

<div class="hid_box">
<strong>FTP {lang_admin('username')}称</strong>
<div class="hbox" style="background:none;">
<input type="text" name="ftpuser" id="ftpuser" value="user"   size="40" class="skey"/> <img src="{$skin_admin_path}/images/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px; /"> <span class="tips icon-info">请填写站点的FTP用户，例如"hkftp"</span><br /><br />
</div>
</div>

<div class="hid_box">
<strong>FTP 用户密码</strong>
<div class="hbox" style="background:none;">
<input type="text" name="ftppwd" id="ftppwd" value="password"   size="40" class="skey"/> <img src="{$skin_admin_path}/images/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px; /"> <span class="tips icon-info">请填写站点的FTP登陆密码，例如"123456"</span><br /><br />
</div>
</div>

<div class="hid_box">
<strong>FTP 文件目录</strong>
<div class="hbox" style="background:none;">
<input type="text" name="ftppath" id="ftppath" value="/"   size="40" class="skey"/> <img src="{$skin_admin_path}/images/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px; /"> <span class="tips icon-info">请填写站点的FTP根目录，例如"/"</span><br /><br />
</div>
</div>
<input type="button" value="检查FTP" class="button" onclick="checkftp()" />
<span id="checkftploading" style="display:none"><font color="blue">检查中...</font></span><span id="returnftpmessage"></span>	
-->

<div class="blank10"></div>

<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
    <input  name="submit" value="1" type="hidden">
    <input type="submit" value="{lang_admin('submitted')}" class="btn btn-primary" />
    </form>
    
    
  
<div class="blank30"></div>
</div>
</div>
</div>
  

<script type="text/javascript">
function checkmysql(){
	$('#checkloading').show();
	var host = $("#hostname").val();
	var user = $("#user").val();
	var pwd = $("#password").val();
	$.ajax({
		url: '<?php echo url('website/checkmysql',true);?>',
		data:'host='+host+'&user='+user+'&pwd='+pwd+'&request='+Math.random()*5,
		type: 'GET',
		dataType: 'html',
		timeout: 30000,
		success: function(data){
			$('#checkloading').hide();
			$('#returnmessage').html(data);
		},
		error: function(data){
			$('#checkloading').hide();
			$('#returnmessage').html("{lang_admin('please_try_again')}");
		}		
	});
}
function checkftp(){
	$('#checkftploading').show();
	var ftpip = $("#ftpip").val();
	var ftpuser = $("#ftpuser").val();
	var ftppwd = $("#ftppwd").val();
	$.ajax({
		url: '<?php echo url('website/checkftp',true);?>',
		data:'ftpip='+ftpip+'&ftpuser='+ftpuser+'&ftppwd='+ftppwd+'&request='+Math.random()*5,
		type: 'GET',
		dataType: 'html',
		timeout: 30000,
		success: function(data){
			$('#checkftploading').hide();
			$('#returnftpmessage').html(data);
		},
		error: function(data){
			$('#returnftpmessage').html("{lang_admin('please_try_again')}");
		}		
	});
}
</script>