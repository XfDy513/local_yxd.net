<div class="main-right-box">
<h5>{lang_admin('friendship_link_configuration')}</h5>
<div class="blank20"></div>
<div class="box" id="box">

    <a href="#" onclick="gotourl(this)" data-dataurl="<?php echo url('table/list/table/friendlink');?>" class="btn btn-secondary" >{lang_admin('return')}</a>

    <div class="blank30"></div>
    <div class="line"></div>
    <div class="blank30"></div>
<form name="settingform" id="settingform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('type')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::textarea('types',get('types')?get('types'):$settings['types'],'class="textarea"')}
</div>
</div>
<div class="clearfix blank30"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('for_example')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{lang_admin('type_one')}<br />{lang_admin('type_tow')}
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

