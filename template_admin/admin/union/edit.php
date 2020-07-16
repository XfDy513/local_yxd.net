
<div class="main-right-box">
<h5>{lang_admin('settlement')}</h5>
<div class="blank20"></div>
<div class="box" id="box">


<form method="post" name="form1" action="<?php if(front::$act=='edit') $id="/id/".$data[$primary_key]; else $id=''; echo modify("/act/".front::$act."/table/".$table.$id);?>"
      onsubmit="return returnform(this);">


<div class="blank20"></div>
<div id="tagscontent" class="right_box">

<table border="0" cellspacing="0" cellpadding="0" name="table1" id="table1" width="100%">

<tbody>

<tr>
<td width="19%" align="right">{lang_admin('username')}</td>
<td width="1%">&nbsp;</td>
<td width="70%">
{$data['username']} 
</td>
</tr>

<tr>
<td width="19%" align="right">{lang_admin('point_settlement_interest_rate')}</td>
<td width="1%">&nbsp;</td>
<td width="70%">
{form::getform('profitmargin',$form,$field,$data)}&nbsp;%
</td>
</tr>
</table>
</div>

<div class="blank20"></div>
    <input  name="submit" value="1" type="hidden">
    <input type="submit" value="{lang_admin('submitted')}" class="btn btn-primary btn-lg" />

</form>

<div class="blank30"></div>
</div>
</div>