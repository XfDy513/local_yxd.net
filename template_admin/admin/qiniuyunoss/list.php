<div class="main-right-box">
<h5>{lang_admin('log_manage')}</h5>
<div class="blank20"></div>
<div class="box" id="box">


<ul class="nav nav-tabs" role="tablist">
<!--<li><a href="{$base_url}/index.php?case=database&act=baker&admin_dir={get('admin_dir',true)}&site=default">{lang_admin('manage_data')}</a></li>

<li><a href="{$base_url}/index.php?case=adminlogs&act=manage&admin_dir={get('admin_dir',true)}&site=default">{lang_admin('log_manage')}</a></li>
<li><a href="{$base_url}/index.php?case=database&act=str_replace&admin_dir={get('admin_dir',true)}&site=default">{lang_admin('replace_strings')}</a></li>
<li><a href="{$base_url}/index.php?case=database&act=wordpress&admin_dir={get('admin_dir')}&site=default">{lang_admin('import_wordpress_data')}</a></li>
<li><a href="{$base_url}/index.php?case=database&act=inputdede&admin_dir={get('admin_dir')}&site=default">{lang_admin('import_dede_data')}</a></li>-->
<li class="active"><a href="#"  onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=qiniuyunoss&act=list&admin_dir={get('admin_dir')}&site=default">OSS</a></li>

</ul>

<div class="blank30"></div>


<form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);" >
    <input class="btn btn-success" type="button" value="设置七牛云OSS" onclick="gotourl(this)"   data-dataurl="index.php?case=qiniuyunoss&act=setting&admin_dir={get('admin_dir')}" />

    <div class="blank30"></div>

    <div class="table-responsive">
        <table class="table table-hover">
        <thead>
        <tr class="th">
            <th class="s_out">文件/文件夹</th>
        <th>{lang_admin('dosomething')}</th>
        </tr>
        </thead>
        <tbody>
        {loop $filedata $filename}
        <tr>
            <?php
                 $newosswhere=  str_replace('*', '/',$osswhere);
                if($newosswhere!=''){
                    $filename['key']=str_replace($newosswhere,'',$filename['key']);
                }
                 $newfilename =explode("/",$filename['key']);
                if(count($newfilename)>1){
            ?>
            <td>{$newfilename[0]}</td>
            <td>
                {if $osswhere!=''}
                <a href="<?php echo url("qiniuyunoss/list/filewhere/".$osswhere.$newfilename[0]);?>"  title="{lang_admin('see')}">
                    <i class="glyphicon glyphicon-eye-open"></i>
                </a>
                {else}
                <a href="<?php echo url("qiniuyunoss/list/filewhere/".$newfilename[0]);?>"  title="{lang_admin('see')}">
                    <i class="glyphicon glyphicon-eye-open"></i>
                </a>
                {/if}

            </td>
            <?php
                    }else{
            ?>
                <td>{$filename['key']}</td>
                <td>
                    <a href="#"  onclick="gotourl(this)"   data-dataurl="{url('qiniuyunoss/delete/filename/'.$filename['key'].'/osswhere/'.$osswhere)}"><i class="glyphicon glyphicon-trash"> </i></a>
                    <a  target="_blank" href = "{url('qiniuyunoss/dowen/filename/'.$filename['key'].'/osswhere/'.$osswhere)}"  title="{lang_admin('download')}" >
                        <i class="glyphicon glyphicon-download-alt"></i >
                    </a >

                </td>
            <?php  } ?>
        </tr>
        {/loop}
        </table>
    </div>
    <div class="blank30"></div>
    <div class="line"></div>
    <div class="blank30"></div>

    <div class="page"><?php  echo pagination::adminhtml($record_count); ?></div>
    <div class="blank10"></div>
</form>

    <link rel="stylesheet" href="{$base_url}/common/js/jquery/ui/css/ui.datepicker.css" type="text/css" media="screen" title="core css file" charset="utf-8" />
<!--</form>-->

<div class="blank30"></div>
</div>
</div>