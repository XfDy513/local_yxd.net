

<div class="main-right-box">
<h5>{lang_admin('replace_database_characters')}</h5>
<div class="blank20"></div>
<div class="box" id="box">

<ul class="nav nav-tabs" role="tablist">
    <li>
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=database&act=baker&admin_dir={get('admin_dir',true)}&site=default" data-dataurlname="{lang_admin('manage_data')}">
            {lang_admin('manage_data')}
        </a>
    </li>
    <li>
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=adminlogs&act=manage&admin_dir={get('admin_dir',true)}&site=default" data-dataurlname="{lang_admin('log_manage')}">
            {lang_admin('log_manage')}
        </a>
    </li>
    <li class="active">
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=database&act=str_replace&admin_dir={get('admin_dir',true)}&site=default" data-dataurlname="{lang_admin('replace_strings')}">
            {lang_admin('replace_strings')}
        </a>
    </li>
<!-- <li><a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=database&act=phpwebinsert&admin_dir={get('admin_dir',true)}&site=default">导入PHPweb数据</a></li> -->
<!--<li><a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=database&act=wordpress&admin_dir={get('admin_dir')}&site=default">{lang_admin('import_wordpress_data')}</a></li>
<li><a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=database&act=inputdede&admin_dir={get('admin_dir')}&site=default">{lang_admin('import_dede_data')}</a></li>-->
</ul>

<div class="blank30"></div>

<script type="text/javascript">

    $(document).ready(function() {

        $('#stable').change(function() {
            showfield($('#stable').val());
        });

    });


    function showfield(table) {
        $.ajax({
            url: '<?php echo url('database/dbfield_select',true);?>',
            data:'&stable='+table,
            type: 'POST',
            dataType: 'json',
            timeout: 1000,
            error: function(){

            },
            success: function(data){
                $('#'+data.id).html(data.content);
            }
        });
    }
</script>

<form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('data_sheet')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::select('stable',0,$tables,'style="font-size:12px"')}
</div>
</div>
<div class="clearfix blank20"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('hold')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::textarea('replace1','','cols="50" rows="3"')}
</div>
</div>
<div class="clearfix blank20"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('replace_with')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::textarea('replace2','','cols="50" rows="3"')}
</div>
</div>
<div class="clearfix blank20"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('condition')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::input('where','','size="60"')}
</div>
</div>
<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"></div>
        <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
            <input type="hidden" name="batch" id="batch" value="" class="form-control">
<input value="1" type="hidden">
{form::submit()}
        </div>
    </div>
</form>

<div class="blank30"></div>
</div>
</div>
