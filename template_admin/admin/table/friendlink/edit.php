<div class="main-right-box">
<h5>{lang_admin('editing_friendship_links')}</h5>
<div class="blank20"></div>
<div class="box" id="box">
    <a href="#" onclick="gotourl(this)" data-dataurl="<?php echo url('table/list/table/friendlink');?>" class="btn btn-secondary" >{lang_admin('return')}</a>

    <div class="blank30"></div>
    <div class="line"></div>
    <div class="blank30"></div>
<script type="text/javascript">
    function checkform(obj) {
        if($("#linktype").val()=="") {
            alert("{lang_admin('please_select_the_type')}");
            return false;
        }

        if($("#name").val()=="") {
            alert("{lang_admin('please_fill_in_the_name')}");
            $("#name").focus();
            return false;
        }
        if($("#url").val()=="") {
            alert("{lang_admin('please_fill_in_the_link')}");
            $("#url").focus();
            return false;
        }
        if($("#state").val()=="") {
            alert("{lang_admin('please_select_the_status')}");
            return false;
        }
        returnform(obj);
        return false;
    }
</script>

<form method="post" name="form1" action="<?php if(front::$act=='edit') $id="/id/".$data[$primary_key]; else $id=''; echo modify("/act/".front::$act."/table/".$table.$id);?>"
      onsubmit="return checkform(this);">
<input type="hidden" name="onlymodify" value=""/>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('mold')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('linktype',$form,$field,$data)}
</div>
</div>
<div class="clearfix blank20"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('category')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('typeid',$form,$field,$data)}
</div>
</div>
<div class="clearfix blank20"></div>
                           
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('name')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('name',$form,$field,$data)}
</div>
</div>
<div class="clearfix"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('sort')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('listorder',$form,$field,$data)}
</div>
</div>
<div class="clearfix blank20"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('link')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('url',$form,$field,$data)}
</div>
</div>
<div class="clearfix"></div>
                            
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">LOGO</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('logo',$form,$field,$data)}
</div>
</div>
<div class="clearfix blank20"></div>
                            
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('brief_introduction')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('introduce',$form,$field,$data)}
</div>
</div>
<div class="clearfix blank20"></div>
                            
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('username')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('username',$form,$field,$data)}
</div>
</div>
<div class="clearfix blank20"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('state')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('state',$form,$field,$data)}
</div>
</div>


<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
    <input  name="submit" value="1" type="hidden">
<input type="submit"   value=" {lang_admin('submitted')} " class="btn btn-primary btn-lg" />
</form>
<div class="blank30"></div>
</div>
</div>

