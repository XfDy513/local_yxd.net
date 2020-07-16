<div class="main-right-box">
<h5>{lang_admin('aliyun_oss_setting')}</h5>
<div class="blank20"></div>
<div class="box" id="box">


<ul class="nav nav-tabs" role="tablist">
<!--<li><a href="{$base_url}/index.php?case=database&act=baker&admin_dir={get('admin_dir',true)}&site=default">{lang_admin('manage_data')}</a></li>

<li><a href="{$base_url}/index.php?case=adminlogs&act=manage&admin_dir={get('admin_dir',true)}&site=default">{lang_admin('log_manage')}</a></li>
<li><a href="{$base_url}/index.php?case=database&act=str_replace&admin_dir={get('admin_dir',true)}&site=default">{lang_admin('replace_strings')}</a></li>
<li><a href="{$base_url}/index.php?case=database&act=wordpress&admin_dir={get('admin_dir')}&site=default">{lang_admin('import_wordpress_data')}</a></li>
<li><a href="{$base_url}/index.php?case=database&act=inputdede&admin_dir={get('admin_dir')}&site=default">{lang_admin('import_dede_data')}</a></li>-->
<li class="active"><a href="{$base_url}/index.php?case=aliyunoss&act=list&admin_dir={get('admin_dir')}&site=default">OSS</a></li>

</ul>

<div class="blank30"></div>


<form name="listform" id="listform"  action="<?php echo uri();?>" method="post">

    <input class="btn btn-primary" type="button" value=" {lang_admin('aliyun_oss_setting')} " onclick="gotourl(this)"   data-dataurl="index.php?case=aliyunoss&act=setting&admin_dir={get('admin_dir')}" data-dataurlname="{lang_admin('aliyun_oss_setting')}" />
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
        {loop $filedata['Foldername'] $filename}
        <tr>
            <?php
            $newosswhere=str_replace('*', '/', $osswhere);
            $filename=str_replace($newosswhere,'',$filename);
            $filename=substr($filename,0,strlen($filename)-1)
            ?>
            <td>{$filename}</td>
            <td>
                {if $osswhere!=''}
                <?php $newosswheres=substr($newosswhere,0,strlen($newosswhere)-1);  ?>
                <a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo url("aliyunoss/list/filewhere/".$newosswheres.'*'.$filename);?>"  title="{lang_admin('see')}" class="btn btn-gray">{lang_admin('see')}</a>
                {else}
                <a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo url("aliyunoss/list/filewhere/".$filename);?>"  title="{lang_admin('see')}" class="btn btn-gray">{lang_admin('see')}</a>

                {/if}
            </td>
        </tr>
        {/loop}
        {loop $filedata['filename'] $filename}
        <tr>
            <!--<td class="s_out"><input onclick="c_chang(this)" type="checkbox" value="{$filename}" name="select[]" class="checkbox" /> </td>-->
            <?php
            $newosswhere=str_replace('*', '/', $osswhere);
            $filename=str_replace($newosswhere,'',$filename);
            ?>
            <td>{$filename}</td>
            <td>
                <a href="#" onclick="gotourl(this)"   data-dataurl="{url('aliyunoss/delete/filename/'.$filename.'/osswhere/'.$osswhere)}" title="{lang_admin('see')}" class="btn btn-gray">{lang_admin('see')}</a>
                <a href="#" onclick="gotourl(this)"   data-dataurl="{url('aliyunoss/dowen/filename/'.$filename.'/osswhere/'.$osswhere)}"  title="{lang_admin('download')}" class="btn btn-default">
                    {lang_admin('download')}
                </a >
            </td>
        </tr>
        {/loop}
        </table>
    </div>
    <div class="blank30"></div>
    <div class="line"></div>
    <div class="blank30"></div>

    <div class="page"><?php  echo pagination::adminhtml($filedata['record_count']); ?></div>
    <div class="blank10"></div>

  <!--  <input type="button" value="{lang_admin('delete')}" name="delete" onclick="if(getSelect(this.form)){this.form.action='<?php /*echo modify('aliyunoss/drop',true);*/?>';this.form.submit();}" class="btn btn-success"/>
-->
</form>

    <link rel="stylesheet" href="{$base_url}/common/js/jquery/ui/css/ui.datepicker.css" type="text/css" media="screen" title="core css file" charset="utf-8" />
<!--</form>-->

<div class="blank30"></div>
</div>
</div>