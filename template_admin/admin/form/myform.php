


<div class="main-right-box">
<h5>{lang_admin('view_form_information')}</h5>
<div class="blank20"></div>
<div class="box">
<input type="button" name="Submit" value="{lang_admin('return')}" class="btn btn-success" onclick="gotourl(this)"   data-dataurl="{url('form/listform')}">
<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>

<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
 <th class="s_out">{lang_admin('name')}</th>
        <th>{lang_admin('table_name')}</th>
        <th class="manage">{lang_admin('dosomething')}</th>
    </tr>
</thead>
<tbody>
{loop $tables $t}
<tr >
<td class="s_out">{=@setting::$var[$t]['myform']['cname_'.lang::getisadmin()]}
&nbsp;(&nbsp;<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('preview')}"><a href="#" onclick="gotourl(this)"   data-dataurl="{url('table/list/table/'.$t)}" class="j"><font color="red"><?php  $_table=new defind($t); echo $_table->rec_count();?></font></a></span>&nbsp;)
</td>
<td class="catname">{$t}</td>
<td class="manage">

<a  href="#" onclick="gotourl(this)"   data-dataurl="{url('table/list/table/'.$t)}" title="{lang_admin('preview')}"><i class="glyphicon glyphicon-eye-open"></i></a></span>

<a  href="#" onclick="gotourl(this)"   data-dataurl="{url('form/add/form/'.$t,false)}" target="_blank" title="{lang_admin('add_to')}"><i class="glyphicon glyphicon-plus"></i></a>
</td>
</tr>
{/loop}

</tbody>
</table>
    
</div>
<div class="blank30"></div>
</div>
</div>
