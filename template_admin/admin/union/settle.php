
<div class="main-right-box">
<h5>{lang_admin('settlement')}</h5>
<div class="blank20"></div>
<div class="box" id="box">

<div id="tagscontent" class="right_box">

<table border="0" cellspacing="0" cellpadding="0" name="table1" id="table1" width="100%">
<thead>
<tr class="th">
<th colspan=6>{lang_admin('settlement_information')}</th> 
</tr> 
</thead>
<tbody>
<tr> 
<td class="tablerowhighlight">{lang_admin('username')}</td> 
<td class="tablerowhighlight">{lang_admin('point_number')}</td> 
<td class="tablerowhighlight">{lang_admin('profit_margin')}</td> 
<td class="tablerowhighlight">{lang_admin('amount_of_money')}</td> 
<td class="tablerowhighlight">{lang_admin('accounts')}</td> 
<td class="tablerowhighlight">{lang_admin('dosomething')}</td> 
</tr> 
<form method="post" name="myform" action="<?php echo uri();?>"> 
<tr> 
<td class="tablerow" width="15%">{$data['username']}</td> 
<td class="tablerow" width="17%">{$data['point']}</td> 
<td class="tablerow" width="19%">{$data['profitmargin']}%</td> 
<td class="tablerow" width="13%"><font color="red"><?php echo $data['point']*($data['profitmargin']/100);?>元</font></td> 
<td class="tablerow" width="30%">{$data['payaccount']}</td> 
<td class="tablerow" width="15%"> 
<input type="hidden" name="settleexpendamount" value="{$data['point']}"> 
<input type="hidden" name="profitmargin" value="{$data['profitmargin']}"> 
<input type="hidden" name="payaccount" value="{$data['payaccount']}"> 
<input type="submit" name="submit" value="{lang_admin('confirm')}" <?php if($data['point']*($data['profitmargin']/100)==0){?> disabled="disabled" <?php }?> /> 
</td> 
</tr> 
</body>
</form> 
</table> 

<table border="0" cellspacing="0" cellpadding="0" name="table1" id="table1" width="100%">
<thead>
<tr class="th"> 
<th colspan=4>{lang_admin('user_information')}</th> 
</tr> 
</thead>
<tbody>
<tr> 
<td colspan=2 class="tablerowhighlight">{lang_admin('statistical_information')}</td> 
<td colspan=2 class="tablerowhighlight">{lang_admin('user_information')}</td> 
</tr> 
<tr> 
<td class="tablerow" width="20%">{lang_admin('visited_times')}</td>
<td class="tablerow" width="20%">{$data['visits']} {lang_admin('second')}</td> 
<td class="tablerow" width="20%">{lang_admin('username')}</td> 
<td class="tablerow" width="40%">{$data['username']}</td> 
</tr> 
<tr> 
<td class="tablerow">{lang_admin('number_of_users')}</td> 
<td class="tablerow">{$data['registers']} 个</td> 
<td class="tablerow">{lang_admin('full_name')}</td> 
<td class="tablerow">{$data['nickname']}</td> 
</tr> 
<tr> 
<td class="tablerow">{lang_admin('cumulative_points')}</td> 
<td class="tablerow"><?php echo $data['totalexpendamount'] + $data['point'];?></td> 
<td class="tablerow">{lang_admin('accounts')}</td> 
<td class="tablerow"><font color="red">{$data['payaccount']}</font></td> 
</tr> 
<tr> 
<td class="tablerow">{lang_admin('total_number_of_settled_user_points')}</td>
<td class="tablerow">{$data['totalexpendamount']}</td> 
<td class="tablerow">{lang_admin('tel')}</td> 
<td class="tablerow">{$data['tel']}</td> 
</tr> 
<tr> 
<td class="tablerow">{lang_admin('total_settled_amount')}</td> 
<td class="tablerow">{$data['totalpayamount']} 元</td> 
<td class="tablerow">{lang_admin('website')}</td> 
<td class="tablerow">{$data['website']}</td> 
</tr> 
<tr> 
<td class="tablerow">{lang_admin('accumulated_points_of_users_in_the_current_period')}</td> 
<td class="tablerow">{$data['point']}</td> 
<td class="tablerow">{lang_admin('email')}</td> 
<td class="tablerow">{$data['e_mail']}</td> 
</tr> 
<tr> 
<td class="tablerow">{lang_admin('current_settlement_amount')}</td> 
<td class="tablerow"><?php echo $data['point']*($data['profitmargin']/100);?> {lang_admin('unit')}</td> 
<td class="tablerow">{lang_admin('qq')}</td>
<td class="tablerow">{$data['qq']}</td> 
</tr> 
<tr> 
<td class="tablerow">{lang_admin('current_profit_margin')}</td> 
<td class="tablerow">{$data['profitmargin']}%</td> 
<td class="tablerow">{lang_admin('registration_ip_time')}</td> 
<td class="tablerow">{$data['regip']} / {date('Y-m-d H:i:s',$data['regtime'])}</td> 
</tr> 
<tr> 
<td class="tablerow">{lang_admin('current_profit_margin')}</td> 
<td class="tablerow">{$data['lastpayamount']} {lang_admin('unit')}</td> 
<td class="tablerow">{lang_admin('registration_ip_time')}</td> 
<td class="tablerow">{$data['address']}</td> 
</tr> 
<tr> 
<td class="tablerow">{lang_admin('previous_settlement_amount')}</td>
<td class="tablerow">{if $data['lastpaytime']}{date('Y-m-d H:i:s',$data['lastpaytime'])}{/if}</td> 
<td class="tablerow"></td> 
<td class="tablerow"></td> 
</tr> 
</tbody>
</table> 

</div>

<div class="blank30"></div>
</div>
</div>