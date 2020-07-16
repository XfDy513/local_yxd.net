<div class="main-right-box">
<h5>{lang_admin('adding_inner_chain')}</h5>
<div class="blank20"></div>
<div class="box" id="box">

    <a href="#" onclick="gotourl(this)" data-dataurl="<?php echo url('table/list/table/linkword');?>" class="btn btn-secondary" >{lang_admin('return')}</a>

    <div class="blank30"></div>
    <div class="line"></div>
    <div class="blank30"></div>

<form method="post" name="form1" action="<?php if(front::$act=='edit') $id="/id/".$data[$primary_key]; else $id=''; echo modify("/act/".front::$act."/table/".$table.$id);?>"
      onsubmit="return returnform(this);">
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('link_words')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('linkword',$form,$field,$data)}
</div>
</div>


<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">URL</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('linkurl',$form,$field,$data)}
<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="" title="{lang_admin('leave_blank_for_search_links')}"></span>
</div>
</div>
<div class="clearfix blank20"></div>

    
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('weight')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('linkorder',$form,$field,$data)}
<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="" title="{lang_admin('the_bigger_the_number_the_higher_the_weight')}"></span>
</div>
</div>
<div class="clearfix blank20"></div>

    
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('frequency')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('linktimes',$form,$field,$data)}
<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="" title="{lang_admin('the_number_of_links_that_appear_in_a_piece_of_content')}"></span>
</div>
</div>
<div class="clearfix blank20"></div>

<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
<input  name="submit" value="1" type="hidden">
<input type="submit" value=" {lang_admin('submitted')} " class="btn btn-primary btn-lg" />
</form>
<div class="blank30"></div>
</div>
</div>

