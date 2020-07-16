<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>{lang_admin('print_merchandise_orders')}</title>

		<style type="text/css" media="print">
		body {margin:0px;}
.main-right-box {margin:0px; padding:0px;}
		.main-right-box h5,
			.noprint,.navbar,.sidebar,.breadcrumb,.blank30,.copy
			{display:none;}
		</style>
		<style type="text/css">
			td{
				font-size:9pt;
				font-family: Arial, Helvetica, sans-serif;
			}
			.table_style {
				border-collapse: collapse;
			}
			.hr_style {
				color: #000000;
			}
			.td01 {
				font-size: 14pt;
			}
			.font01 {
				font-size: medium;
			}
			.font02 {
				font-size: 11pt;
			}
			.font03 {
				font-size: 11pt;
				text-align: center;
			}
			.font04 {
				line-height: 150%;
			}
			#divTest{
                position: absolute;
                z-index: 1000;
                background-color: #D5ECF1;
                width: 100%;
                height:30px;
                left: 0%;
                bottom:0px;
                padding-top:10px;
                text-align:center;
			}
.A4 {
                page-break-before: auto;
                page-break-after: always;
            }
		</style>
    </head>
    <body style="margin: 0">
{loop $viewdata $key $data}
        <?php
        switch($data['status']){
            case 1:
                $data['status']="{lang_admin('complete')}";
                break;
            case 2:
                $data['status']="{lang_admin('processing')}";
                break;
            case 3:
                $data['status']="{lang_admin('shipped')}";
                break;
            case 4:
                $data['status']="{lang_admin('customer_has_paid_pending_review')}";
                break;
            case 5:
                $data['status']="{lang_admin('verify_that_the_customer_has_paid')}";
                break;
            default:
                $data['status']="{lang_admin('new_orders')}";
                break;
        }

        $data['oldmid']=$data['mid'];
        if($data['mid']=='0'){
            $data['mid']="{lang_admin('tourist')}";
        }else{
            $data['mid']="{lang_admin('member')}";
        }

        $string = $data['aid'];
        $_aid = $string;
        $_archivearr=array();    //商品信息
        $source=explode("-",trim($_aid));
        for($index=0;$index<count($source);$index++) {
            $_aidArry = explode("#", trim($source[$index]));
            $_aidArrys = explode(",", trim($_aidArry[0]));
            $datavuel = archive::getInstance()->getrows('aid in ('.$_aidArrys[0].')',100);
            $datavuel[0]['type']=$_aidArry[1];
            $datavuel[0]['num']=$_aidArrys[1];
            $_archivearr[$index]=$datavuel;
        }
        $_somecoupon=array();    //优惠劵信息
        if($data['somecoupon'] != ''){
            if(strpos(trim($data['somecoupon']),',') !== false) {
                $source = explode(",", trim($data['somecoupon']));
                for ($index = 0; $index < count($source); $index++) {
                    $where = " couponid=".$source[$index];
                    $usercoupondata =coupon::getInstance()->getrows($where, 1, 'adddatatime desc','*');
                    $_somecoupon[count($_somecoupon)] = $usercoupondata['0'];
                }
            }else{
                $where = " couponid=".$data['somecoupon'];
                $usercoupondata =coupon::getInstance()->getrows($where, 1, 'adddatatime desc','*');
                $_somecoupon[0] = $usercoupondata['0'];
            }
        }

        $discountid = explode("-",trim($data['oid']));    //获取下单的用户
        $discount=usergroup::getusergrop(user::getuserid($discountid[2])); //获取用户组的折扣
        $isint =usergroup::getisint(user::getuserid($discountid[2]));      //获取是否取整

        //商品总价
        $shoppingtotal = 0;
        //优惠
        $coupontotal = 0;
        //支付手续费
        $freetotal = 0;
        //最终总计
        $listtotal = 0;
        //序号
        $indexno = 0;
        ?>
<div class="A4">
        

		<table align="center" cellpadding="0" cellspacing="0" class="table_style" style="width: 90%">
			<tr>
				<td height="70">
					<table cellpadding="0" cellspacing="0" class="table_style" style="width: 100%">
						<tr>
							<td class="td01"><strong>{get('sitename',true)}{lang_admin('commodity_orders')}</strong></td>
							<td align="right">{$_archive['checked']}</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><hr class="hr_style" noshade="noshade" /></td>
			</tr>
			<tr>
				<td>
					<table style="width: 100%" cellpadding="0" cellspacing="0" class="table_style">
						<tr>
							<td class="font02"><strong class="font02">{lang_admin('order_number')}：{$data['oid']}</strong></td>
							<td class="font02" align="right"><strong>{lang_admin('customer_order_date')}：{date('Y-m-d H:i:s',$data['adddate'])}</strong></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><hr class="hr_style" noshade="noshade" /></td>
			</tr>
			<tr>
				<td align="center">
					<table style="width: 98%" cellpadding="5" cellspacing="0" class="table_style">
						<tr>
                    <td class="font02"><strong>{lang_admin('security_code')}</strong></td>
                    <td class="font02"><strong>{lang_admin('name_of_ordered_goods')}</strong></td>
                    <td class="font02" align="center"><strong>{lang_admin('order_quantity')}</strong></td>
                    <td class="font02"><strong>{lang_admin('mold')}</strong></td>
                    <td class="font02" style="text-align: right"><strong>{lang_admin('unit_price')}</strong></td>
                    <td class="font02" style="text-align: right"><strong>{lang_admin('subtotal')}</strong></td>
						</tr>
                        {loop $_archivearr $keydata $_archivedata}
                        {loop $_archivedata $key $_archive}
                        <?php
                        //重新计算单价
                        $source = explode(";",trim($_archive['type']));

                        $newcname='attr2_'.lang::getistemplate();
                        $attr2=json_decode($_archive['attr2'],true);
                        $_archive['attr2']=is_array($attr2)?$attr2[$newcname]:$_archive['attr2'];

                        $_archive['attr2']=floatval($_archive['attr2'])*$discount/10;   //重算单价  折扣
                        if($isint){                                  //判断取整
                            $_archive['attr2']=round($_archive['attr2']);
                        }
                        for($index=0;$index<count($source);$index++){
                            $sourceArry = explode(":",trim($source[$index]));
                            $sourceArry = explode(",",trim($sourceArry[1]));
                            if($sourceArry[1]=="jia"){
                                $_archive['attr2']=floatval($_archive['attr2'])+floatval($sourceArry[2]);
                            }else if($sourceArry[1]=="jian"){
                                $_archive['attr2']=floatval($_archive['attr2'])-floatval($sourceArry[2]);
                            }else if($sourceArry[1]=="chen"){
                                $_archive['attr2']=floatval($_archive['attr2'])*floatval($sourceArry[2]);
                            }else if($sourceArry[1]=="chu"){
                                $_archive['attr2']=floatval($_archive['attr2'])/floatval($sourceArry[2]);
                            }
                        }

                        $logisticsid = substr($data['oid'],15,1);
                        $where=array();
                        $where['id'] = $logisticsid;
                        $logistics=logistics::getInstance()->getrows($where);
                        if($logistics[0]['cashondelivery']){
                            $logistics[0]['price'] = 0.00;
                        }else{
                            if($logistics[0]['insure']){
                                $logistics[0]['price'] = $logistics[0]['price'] + ($_archive['attr2'] * $orders['pnums'])*($logistics[0]['insureproportion']/100);
                            }
                        }

                        if(!isset($logistics[0]['price'])) $logistics[0]['price']=0;
                        /*$where=array();
                        $where['oid']=$data['oid'];
                        $orders=orders::getInstance()->getrow($where);

                        $pnums = explode(',',$orders['pnums']);
                        $orders['pnums']=$pnums[$key];*/
                        $orders['pnums']=$_archive['num'];

                        $where=array();
                        $where['pay_code']=substr($data['oid'],19);
                        $pay=pay::getInstance()->getrows($where);
                        $pay_fee = $pay[0]['pay_fee'];
                        $pay[0]['pay_fee'] = $pay[0]['pay_fee']/100;
                        $total = $_archive['attr2'] * $orders['pnums']  + ($_archive['attr2'] * $orders['pnums'] * $pay[0]['pay_fee']);
                        //商品总价
                        $shoppingtotal +=  $_archive['attr2'] * $orders['pnums'];
                        //最终总价
                        $listtotal +=$total;
                        //支付手续费总价
                        $freetotal +=$_archive['attr2'] * $orders['pnums'] * $pay[0]['pay_fee'];
                        //序号
                        $indexno+=1;
//获取语言包符号位置
                        load_custom_lang(lang::getlangurlname($_archive['langid']));
                        ?>
                        <tr>

                    <td><?php 
				if((config::getadmin('isecoding') == 1 && $_archive['isecoding'] == '0') || $_archive['isecoding']=='1'){
					echo $_archive['ecoding'];	
				}
				?></td>
                    <td><a href="{url('archive/show/aid/'.$_archive['aid'], false)}" target="_blank">{$_archive['title']}</a></td>
                    <td align="center">{$orders['pnums']}</td>
                    <td><?php
                        if($_archive['type']!=""){
                            $source = explode(";",trim($_archive['type']));
                            for($index=0;$index<count($source);$index++){
                                $sourceArry = explode(":",trim($source[$index]));
                                echo  setting::$var['archive'][$sourceArry[0]]['cname']."：";
                                $sourceArry = explode(",",trim($sourceArry[1]));
                                echo $sourceArry[0]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                            }
                        }else{
                            echo "{lang_admin('typeless')}";
                        }
                        ?></td>
                    <td style="text-align: right">{lang_custom('unit')}{$_archive['attr2']}</td>
                    <td style="text-align: right">{lang_custom('unit')}{$total}</td>
                </tr>
                {/loop}
                {/loop}

 
                      
                        </table>
				</td>
			</tr>
			<tr>
				<td><hr class="hr_style" noshade="noshade" /></td>
			</tr>
			<tr>
				<td>
					<table cellpadding="3" cellspacing="0" class="table_style" style="width: 100%">
						<tr>
							<td valign="top">{lang_admin('remarks')}：{$data['content']}</td>
							<td style="width: 200px" valign="top" class="font04">
								{lang_admin('total_commodity_price')}：{lang_custom('unit')}{$shoppingtotal}<br/>
								{lang_admin('freight')}：{lang_custom('unit')}{$logistics[0]['price']}<br/>
								{lang_admin('service_charge')}：{lang_custom('unit')}{$freetotal}<br/>
								<?php if(count($_somecoupon)>0){?>
									{loop $_somecoupon $keydata $_somecoupondata}

									<?php
										 $coupontotal+=(float)($_somecoupondata['moeny']);
										 $listtotal=(float)($listtotal)-(float)($_somecoupondata['moeny'])
									;?>
{$_somecoupondata['coupontitle']}：-{lang_custom('unit')}{$coupontotal}
								
								{/loop}
                        <?php }?>
                                
								
                        
			</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><hr class="hr_style" noshade="noshade" /></td>
			</tr>
			<tr>
				<td>
					<table cellpadding="3" cellspacing="0" class="table_style" style="width: 100%">
						<tr>
							<td valign="top">&nbsp;</td>
                            <?php   $listtotal+=$logistics[0]['price'];//加运费 ?>
							<td style="width: 200px" valign="top"><span class="font02"><strong>{lang_admin('payment')}：{lang_custom('unit')}{$listtotal}</strong></span></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><hr class="hr_style" noshade="noshade" /></td>
			</tr>
			<tr>
				<td>
					<table cellpadding="3" cellspacing="0" class="table_style" style="width: 100%">
						<tr>
							<td class="font04">{lang_admin('customer_name')}：{$data['pname']} <br />
								{lang_admin('customer_address')}：{$data['address']}
								<br />
								{lang_admin('mobile')}：{$data['telphone']}<br />
								{lang_admin('courier_number')}：{$data['courier_number']}<br />
								{lang_admin('express')}：{$data['expresstype']}
								</td>
							<td valign="top">&nbsp;</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><hr class="hr_style" noshade="noshade" /></td>
			</tr>
			<tr>
				<td>
					<table cellpadding="3" cellspacing="0" class="table_style" style="width: 100%">
						<tr>
							<td class="font04">{lang_admin('address')}：{get('address',true)}&nbsp;&nbsp;&nbsp;&nbsp;{lang_admin('tel')}：{get('tel',true)}&nbsp;&nbsp;&nbsp;&nbsp;{lang_admin('email')}:{get('email',true)}</td>
							<td valign="top">&nbsp;</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
 </div>
     {/loop}

        <div id="divTest" class="noprint" style="top: 869px;">
            <object classid="clsid:8856F961-340A-11D0-A96B-00C04FD705A2" height="0" id="wb" name="wb" width="0" viewastext=""></object>
            <input type="button" id="datasubmit" value="{lang_admin('confirmation_printing')}" name="submit" onclick="javascrīpt:window.print()">
        </div>
        <script type="text/javascript">
            <!--
            var rootel = document.documentElement; //XHTMl

            var bto = document.getElementById('divTest');
            function bt() {
                bto.style.top = (rootel.clientHeight - bto.offsetHeight) + rootel.scrollTop + 'px';
            }
            setInterval("bt()", 1);

        </script>
    </body>
</html>