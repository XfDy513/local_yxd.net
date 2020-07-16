<!-- 取色 -->
<link href="{$base_url}/common/css/bootstrap/bootstrap-3.3.7/plugins/colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet">
<script type="text/javascript" src="{$base_url}/common/css/bootstrap/bootstrap-3.3.7/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>

<script type="text/javascript">
    $(function () {
        $('#txtcolor').colorpicker();
    });
</script>

<div class="main-right-box">
<h5>{lang_admin('edit_label')}</h5>
<div class="blank20"></div>
<div class="box" id="box">


<form method="post" name="form1" action="<?php if(front::$act=='edit') $id="/id/".$data[$primary_key]; else $id=''; echo modify("/act/".front::$act."/table/".$table.$id);?>"
      onsubmit="return returnform(this);">
<input type="hidden" name="onlymodify" value=""/>
<input class="btn btn-secondary" type="button" value=" {lang_admin('return_list')} " onclick="gotourl(this)"
       data-dataurl="index.php?case=table&act=list&table=tag&admin_dir={get('admin_dir',true)}" />

<div class="blank30"></div>

    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('name')}</div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 text-left">
            <input type="text" name="tagname" id="tagname" value="{$data['tagname']}" class="form-control " disabled>
        </div>
    </div>
    <div class="clearfix blank20"></div>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('catalog_name')}</div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 text-left">
            <input type="text" name="htmldir" id="htmldir" value="{$data['htmldir']}" class="form-control " disabled>
        </div>
    </div>
    <div class="clearfix blank20"></div>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('txt_size')}</div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 text-left">
            <div class="input-group">
                {form::getform('txtsize',$form,$field,$data)}
                <span class="input-group-btn">
                    <a class="btn btn-default">
                        px
                    </a>
                </span>
                </span>
            </div>
        </div>
    </div>
    <div class="clearfix blank20"></div>

    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('txt_color')}</div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 text-left">
            <div id="txtcolor" class="input-group">
                {form::getform('txtcolor',$form,$field,$data)}
                <span class="input-group-addon">
                            <i class="glyphicon glyphicon-adjust"></i>
                        </span>
            </div>
        </div>
    </div>
    <div class="clearfix blank20"></div>
  <!--  <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('scope_of_use')}</div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 text-left">
             <input type="text"  id="ranges" value="{$data['ranges']}" class="form-control " disabled>
             <input type="text"  id="ranges" value="{$data['ranges']}" class="form-control " disabled>
        </div>
    </div>
    <div class="clearfix blank20"></div>-->

    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">URL</div>
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">
            {form::getform('htmlrule',$form,$field,$data,'')}
            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('if_you_are_not_familiar_with_the_operation_please_do_not_modify_the_following_options')}"></span>
        </div>
    </div>
    <div class="blank30"></div>
    <div class="line"></div>
    <div class="blank30"></div>

    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-3 col-lg-2 text-left"></div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 text-left">
            <input  name="submit" value="1" type="hidden">
            <input type="submit"   value="{lang_admin('submitted')}" class="btn btn-primary btn-lg"/>
        </div>
    </div>


</form>


    <div class="blank30"></div>
</div>
</div>

