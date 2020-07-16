<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>打印商品订单</title>

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
		</style>
    </head>
    <body style="margin: 0">
        <?php
        switch($data['status']){
            case 1:
                $data['status']='完成';
                break;
            case 2:
                $data['status']='处理中';
                break;
            case 3:
                $data['status']='已发货';
                break;
            case 4:
                $data['status']='客户已付款，待审核';
                break;
            case 5:
                $data['status']='核实，客户已付款！';
                break;
            default:
                $data['status']='新订单';
                break;
        }

        $data['oldmid']=$data['mid'];
        if($data['mid']=='0'){
            $data['mid']='游客';
        }else{
            $data['mid']='会员';
        }

        $string = $data['aid'];
        $_aid = $string;
        $_archivearr=array();    //商品信息
        $source=explode("-",trim($_aid));
        for($index=0;$index<count($source);$index++) {
            $_aidArry = explode("#", trim($source[$index]));
            $_aidArrys = explode(",", trim($_aidArry[0]));
            $datavuel = archive::getInstance()->getrows('aid in ('.$_aidArrys[0].')',100);
            $datavuel[0][type]=$_aidArry[1];
            $datavuel[0][num]=$_aidArrys[1];
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

        

		<table align="center" cellpadding="0" cellspacing="0" class="table_style" style="width: 90%">
			<tr>
				<td height="70">
					<table cellpadding="0" cellspacing="0" class="table_style" style="width: 100%">
						<tr>
							<td class="td01"><strong>{get('sitename',true)}商品订单</strong></td>
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
							<td class="font02"><strong class="font02">订单号：{$data['oid']}</strong></td>
							<td class="font02" align="right"><strong>客户下单日期：{date('Y-m-d H:i:s',$data['adddate'])}</strong></td>
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
                    <td class="font02"><strong>防伪码</strong></td>
                    <td class="font02"><strong>订购商品名称</strong></td>
                    <td class="font02" align="center"><strong>数量</strong></td>
                    <td class="font02"><strong>类型</strong></td>
                    <td class="font02" style="text-align: right"><strong>单价</strong></td>
                    <td class="font02" style="text-align: right"><strong>小计</strong></td>
						</tr>
                        {loop $_archivearr $keydata $_archivedata}
                        {loop $_archivedata $key $_archive}
                        <?php
                        //重新计算单价
                        $source = explode(".",trim($_archive['type']));
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
                        $freetotal +=$_archive['attr2'] * $orders['pnums'] * $pay[0][pay_fee];
                        //序号
                        $indexno+=1;
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
                            $source = explode(".",trim($_archive['type']));
                            for($index=0;$index<count($source);$index++){
                                $sourceArry = explode(":",trim($source[$index]));
                                echo  setting::$var['archive'][$sourceArry[0]]['cname']."：";
                                $sourceArry = explode(",",trim($sourceArry[1]));
                                echo $sourceArry[0]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                            }
                        }else{
                            echo "无类型";
                        }
                        ?></td>
                    <td style="text-align: right">{lang_admin('unit')}{$_archive['attr2']}</td>
                    <td style="text-align: right">{lang_admin('unit')}{$total}</td>
                </tr>
                {/loop}
                {/loop}

 <?php if(count($_somecoupon)>0){?>

                        <?php }?>
                        {loop $_somecoupon $keydata $_somecoupondata}

                        <?php
                             $coupontotal+=(float)($_somecoupondata['moeny']);
                             $listtotal=(float)($listtotal)-(float)($_somecoupondata['moeny'])
                        ;?>
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
							<td valign="top">备注：{$data['content']}</td>
							<td style="width: 200px" valign="top" class="font04">
								商品总价：{lang_custom('unit')}{$shoppingtotal}<br/>
								运费：{lang_custom('unit')}{$logistics[0]['price']}<br/>
								手续费：{lang_custom('unit')}{$freetotal}<br/>
                                {$_somecoupondata['coupontitle']}：-{lang_custom('unit')}{$coupontotal}
								
                        
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
							<td style="width: 200px" valign="top"><span class="font02"><strong>实付费用：{lang_custom('unit')}{$listtotal}</strong></span></td>
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
							<td class="font04">客户姓名：{$data['pname']} <br />
								客户地址：{$data['address']}
								<br />
								手机：{$data['telphone']}<br />
								快递单号：{$data['courier_number']}<br />
								快递：{$data['expresstype']}
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
							<td class="font04">{lang('address')}：{get('address',true)}&nbsp;&nbsp;&nbsp;&nbsp;{lang('tel')}：{get('tel',true)}&nbsp;&nbsp;&nbsp;&nbsp;{lang('email')}:{get('email',true)}</td>
							<td valign="top">&nbsp;</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>


        <div id="divTest" class="noprint" style="top: 869px;">
            <object classid="clsid:8856F961-340A-11D0-A96B-00C04FD705A2" height="0" id="wb" name="wb" width="0" viewastext=""></object>
            <input type="button" id="datasubmit" value="确认打印" name="submit" onclick="javascrīpt:window.print()">
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