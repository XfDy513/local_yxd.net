<div class="main-right-box">
<h5>{lang_admin('editorial_voting_items')}</h5>
<div class="blank20"></div>
<div class="box" id="box">

<form method="post" name="form1" action="<?php if(front::$act=='edit') $id="/id/".$data[$primary_key]; else $id=''; echo modify("/act/".front::$act."/table/".$table.$id."/bid/".front::$get['bid']);?>"
      onsubmit="return returnform(this);">

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('name')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('name',$form,$field,$data,'class="form-control"')}</div>
</div>


<div class="line"></div>
<div class="blank30"></div>
    <input  name="submit" value="1" type="hidden">
<input type="submit"  value="{lang_admin('submitted')}" class="btn btn-primary btn-lg"/>
</form>
<div class="blank30"></div>
</div>
</div>

