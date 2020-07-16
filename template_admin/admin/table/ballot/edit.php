
<div class="main-right-box">
<h5>{lang_admin('editorial_voting')}</h5>
<div class="blank20"></div>
<div class="box" id="box">

    <a href="#" onclick="gotourl(this)" data-dataurl="<?php echo url('table/list/table/ballot');?>" class="btn btn-secondary" >{lang_admin('return')}</a>

    <div class="blank30"></div>
    <div class="line"></div>
    <div class="blank30"></div>

<form method="post" name="form1" action="<?php if(front::$act=='edit') $id="/id/".$data[$primary_key]; else $id=''; echo modify("/act/".front::$act."/table/".$table.$id);?>"
      onsubmit="return returnform(this);">
<input type="hidden" name="onlymodify" value=""/>


<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('title')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('title',$form,$field,$data)}
</div>

<div class="blank30"></div>

<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('mold')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('type',$form,$field,$data)}
</div>

<div class="blank30"></div>


<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('browse_the_vote')}</div>
<div class="col-xs-8 col-sm-8 col-md-9 col-lg-10 text-left">
{form::getform('viewgroupid',$form,$field,$data)}
</div>

<div class="blank30"></div>


<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('participation_in_voting')}</div>
<div class="col-xs-8 col-sm-8 col-md-7 col-lg-5 text-left">
{form::getform('votegroupid',$form,$field,$data)}
</div>

<div class="blank30"></div>


<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('view_the_results')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('resgroupid',$form,$field,$data)}
</div>

<div class="blank30"></div>



<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('voting_deadline')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('enddate',$form,$field,$data)}
</div>


<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
<input  name="submit" value="1" type="hidden">
<input type="submit"  value="{lang_admin('submitted')}" class="btn btn-primary btn-lg">

</form>

<div class="blank30"></div>
</div>
</div>

