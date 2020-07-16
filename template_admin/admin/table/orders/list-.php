<div class="main-right-box">
<h5>订单列表</h5>
<div class="blank20"></div>
<div class="box">

<a href="{$base_url}/index.php?case=pay&act=list&table=pay&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-success">支付方式</a>

<a href="{$base_url}/index.php?case=logistics&act=list&table=logistics&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-info">配货设置</a>

<input class="btn btn-primary" type="button" value=" 订单管理设置 " onclick="javascript:window.location.href='{url::create('config/system/set/orders')}'" />

    <input  class="btn btn-danger" type="submit" value=" 批量打印 " name="print-list"/>

<div class="blank30"></div>
 
<form name="listform" id="listform"  action="<?php echo uri();?>" method="post">
<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
<th class="s_out"><input title="点击可全选本页的所有项目"  onclick="CheckAll(this.form)" type="checkbox" name="chkall" class="checkbox" /> </th>
<th class="catid"><!--id-->编号</th>
<th class="catname"><!--oid-->订单号</th>
<th class="catname"><!--pname-->账号名</th>
    <th class="catname"><!--pname-->姓名</th>
    <th class="catname"><!--pname-->电话</th>
<th class="htmldir"><!--status-->状态</th>
<th class="htmldir"><!--adddate-->下单时间</th>
<th class="manage">操作</th>
</tr>

</thead>
<tbody>
{loop $data $d}
<tr class="s_out">

<td ><input onclick="c_chang(this)" type="checkbox"  value="{$d.$primary_key}" name="select[]" class="checkbox" /> </td>
<?php
switch($d['status']){
				case 1:
				$d['status']='处理中';
				break;
				case 2:
				$d['status']='已发货';
				break;
				case 3:
				$d['status']='完成';
				break;
				default:
				$d['status']='待支付';
				break;	
			}
?>
<td class="catid">{$d['id']}</td>
<td class="catname">{$d['oid']}</td>
<td class="catname" align="left"><?php if($d['mid']==0){echo '游客';}else{ ?>{getusername($d['mid'])}<?php } ?></td>
    <td class="catname" align="left">{$d['pname']}</td>
    <td class="catname" align="left">{$d['telphone']}</td>
<td class="htmldir">{$d['status']}</td>
<td class="htmldir">{date('Y-m-d H:i:s',$d['adddate'])}</td>

<td class="manage">
    <a href="<?php echo modify("act/view/table/$table/id/$d[$primary_key]");?>" target="_blank"  title="打印"><i class="glyphicon glyphicon-print"></i></a>
<a href="<?php echo modify("act/edit/table/$table/id/$d[$primary_key]");?>" title="处理"><i class="glyphicon glyphicon-eye-open"></i></a> 
<a onclick="javascript: return confirm('确实要删除吗?');" href="<?php echo modify("/act/delete/table/$table/id/$d[$primary_key]/token/$token");?>" title="{lang_admin('delete')}"><i class="glyphicon glyphicon-trash"></i></a>
</td>
</tr>
{/loop}

</tbody>
</table>

<div class="blank30"></div>
<div class="page"><?php if(get('table')!='type' && front::get('case')!='field') echo pagination::html($record_count); ?></div>
<div class="blank30"></div>
</div>

<div class="line"></div>
<div class="blank30"></div>

<input type="hidden" name="batch" id="batch" value="">
<input  class="btn btn-secondary" type="button" value=" 删除 " name="delete" onclick="if(getSelect(this.form) && confirm('确实要删除ID为('+getSelect(this.form)+')的记录吗?')){this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='delete'; this.form.submit();}"/>
<input  class="btn btn-danger" type="submit" value=" 清空 " name="delete" onclick="qk()"/>
<input  class="btn btn-primary" type="button" value=" 导出 " name="export" onclick="this.form.action='<?php echo modify("/act/batch/table/$table/token/$token");?>'; this.form.batch.value='export'; this.form.submit();"/>

    <input  class="btn btn-success" type="submit" value=" 批量打印 " name="print-list"/>

</form>

 <script>
     function qk(){
         if(confirm('确实要清空记录吗?')) {
             var inputs = document.getElementsByTagName("input");
             var boxs = [];
             for (let i = 0; i < inputs.length; i++) {
                 if (inputs[i].type == "checkbox") {
                     inputs[i].checked=true;
                 }
             }

             document.getElementById("listform").action = '<?php echo modify('act/batch',true);?>';
             document.getElementById("batch").value='delete';
         }
     }
 </script>
<div class="blank30"></div>
</div>
</div>
