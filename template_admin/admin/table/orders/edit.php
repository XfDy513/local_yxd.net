<div class="main-right-box">

    <div class="box" id="box">
        <style type="text/css" media="print">
            .noprint,.navbar,.sidebar,.breadcrumb,.blank30,.copy
            {display:none}
        </style>
        <style type="text/css">
            .hr_style {clear:both; height:1px; background:#333; overflow:hidden;}
            .table {margin:10px 0px;}
            .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {border:none;padding:5px 8px 0px 8px;}

        </style>

        <form method="post" name="form1" action="<?php if(front::$act=='edit') $id="/id/".$data[$primary_key]; else $id=''; echo modify("/act/".front::$act."/table/".$table.$id);?>"
              onsubmit="return returnform(this);">

            <h5>
                {lang_admin('editing_orders')}
                <!--工具栏-->
                <div class="content-eidt-nav pull-right">
                    <a id="fullscreen-btn" class="btn btn-default">
                        <i class="icon-frame"></i>
                        {lang_admin('container_fluid')}
                    </a>

                    <span class="pull-right">



                <input  name="submit" value="1" type="hidden">
                    <button class="btn btn-success" type="submit">
                            <span class="glyphicon glyphicon-floppy-disk"></span> <?php echo lang_admin('preservation');?>
                        </button>



                <a href="#" onclick="gotohome()" data-dataurlname="<?php echo lang_admin('home');?>" class="btn btn-default">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                     <a id="content-eidt-nav-btn" class="btn btn-default" style="display:none;">
                    <i class="icon-close"></i>
					</a>
<a class="btn btn-default"  href="#" onclick="gotourl(this)"   data-dataurl="<?php echo url('table/list/table/orders') ;?>" data-dataurlname="<?php echo lang_admin('order_list');?>">
    {lang_admin('return_list')}
</a>
                </span>
                </div>
            </h5>
            <div id="content-eidt-nav"></div>
            <div class="blank20"></div>

            <?php
            switch($data['status']){
                case 1:
                    $data['status']=lang_admin('complete');
                    break;
                case 2:
                    $data['status']=lang_admin('processing');
                    break;
                case 3:
                    $data['status']=lang_admin('shipped');
                    break;
                case 4:
                    $data['status']=lang_admin('customer_has_paid_pending_review');
                    break;
                case 5:
                    $data['status']=lang_admin('verify_that_the_customer_has_paid');
                    break;
                default:
                    $data['status']=lang_admin('new_orders');
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
                $datavuel = archive::getInstance()->getrows('aid in ('.$_aidArrys[0].')',1);
                $datavuel[0]['num']=$_aidArrys[1];
                $datavuel[0]['type']=$_aidArry[1];
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

            $freetotal=0;
            $listtotal = 0;



            ?>
            <div id="print" class="table-responsive">
                <table class="table">
                    <tr>
                        <td height="70">
                            <strong>{get('sitename',true)}{lang_admin('commodity_orders')}</strong>
                        </td>
                    </tr>
                </table>
                <div class="hr_style"></div>
                <table class="table">
                    <tr>
                        <td>
					<span class="pull-right">{lang_admin('customer_order_date')}：{date('Y-m-d H:i:s',$data['adddate'])}
                        </span>
                            <strong>{lang_admin('order_number')}：{$data['oid']}</strong>

                        </td>
                    </tr>
                </table>
                <div class="hr_style"></div>
                <table class="table">

                    <tr>
                        <td class="font02"><strong>{lang_admin('security_code')}</strong></td>
                        <td class="font02"><strong>{lang_admin('name_of_ordered_goods')}</strong></td>
                        <td class="font02"><strong>{lang_admin('total_output_quantity')}</strong></td>
                        <td class="font02"><strong>{lang_admin('logistics_types')}</strong></td>
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
                    //手续费
                    $freetotal+=($_archive['attr2'] * $orders['pnums'] * $pay[0]['pay_fee']);
                    //总价
                    $listtotal +=$total;
                    $shoppingtotal +=$total;
                    //获取语言包符号位置
                    if ($_archive['langid'] !="")
                    load_custom_lang(lang::getlangurlname($_archive['langid']));

                    ?>

                    <tr>

                        <td>{$_archive['ecoding']}</td>
                        <td><a href="{url('archive/show/aid/'.$_archive['aid'], false)}" target="_blank">{$_archive['title']}</a></td>
                        <td>{$orders['pnums']}</td>
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
                                echo "无类型";
                            }
                            ?></td>
                        <td style="text-align: right">{lang_custom('unit')}{$_archive['attr2']}</td>
                        <td style="text-align: right">{lang_custom('unit')}{$total}</td>
                    </tr>
                    {/loop}
                    {/loop}

                    <?php if(count($_somecoupon)>0){?>
                    {/loop}

                    <tr>
                        <td colspan="6" style="padding:0px;">
                            <div class="hr_style"></div>
                        </td>
                    </tr>


                    <tr>
                        <td colspan="5" valign="middle">
                            {lang_admin('remarks')}：{$data['content']}
                        </td>
                        <td valign="middle" align="right">
                            <div class="blank10"></div>

                            <p>{lang_admin('total_commodity_price')}：{lang_custom('unit')}{$shoppingtotal}</p>
                            <p>{lang_admin('freight')}：+{lang_custom('unit')}{$logistics['0']['price']}</p>

                            <?php $listtotal-=$data['admindiscounts'];$listtotal=$listtotal>0?$listtotal:0;?>
                            <p>{lang_admin('payment_of_handling_fees')}：+{lang_custom('unit')}{$freetotal}</p>
                            <p>
                                <?php if(count($_somecoupon)>0){?>
                                    {loop $_somecoupon $keydata $_somecoupondata}
                                    {$_somecoupondata['coupontitle']}
                                    <?php
                                    $coupontotal+=(float)($_somecoupondata['moeny']);
                                    $listtotal=(float)($listtotal)-(float)($_somecoupondata['moeny'])
                                    ;?>
                                    {/loop}：-{lang_custom('unit')}{$coupontotal}

                                <?php }?>
                            </p>
                            {if $data['status']==0}
                            <p>{lang_admin('manual_discount')}：{form::getform('admindiscounts',$form,$field,$data,'class="form-control"')}</p>
                            {/if}
                    </tr>

                    <?php   $listtotal=$listtotal+$logistics[0]['price'];//加运费 ?>
                    <input type="hidden" name="menoy" id="menoy" value="{$listtotal}"/>
                    </td>
                    </tr>
                </table>
                <?php   $listtotal=$listtotal+$logistics[0]['price'];//加运费 ?>
                <input type="hidden" name="menoy" id="menoy" value="{$listtotal}"/>
                <?php $listtotal-=$data['admindiscounts'];$listtotal=$listtotal>0?$listtotal:0;?>
                <div class="hr_style"></div>
                <table class="table">
                    <tr>
                        <td colspan="6">
                            <form method="post" name="form1" action="<?php if(front::$act=='edit') $id="/id/".$data[$primary_key]; else $id=''; echo modify("/act/".front::$act."/table/".$table.$id);?>"
                                  onsubmit="return returnform(this);">
                                <div class="form-group">
                                    <label for="exampleInputName2">{lang_admin('express_type')}：</label>
                                    <select id="expresstype" name="expresstype" class="form-control" style="display: inline-block; width:auto;">
                                        <option value="SF" selected>{lang_admin('express_sf')}</option>
                                        <option value="HTKY" >{lang_admin('express_htky')}</option>
                                        <option value="ZTO" >{lang_admin('express_zto')}</option>
                                        <option value="STO" >{lang_admin('express_sto')}</option>
                                        <option value="YTO" >{lang_admin('express_yto')}</option>
                                        <option value="YD" >{lang_admin('express_yd')}</option>
                                        <option value="YZPY" >{lang_admin('express_yzpy')}</option>
                                        <option value="EMS" >{lang_admin('fill_in_the_number_of_push_items_up_to_10')}</option>
                                        <option value="HHTT" >{lang_admin('express_hhtt')}</option>
                                        <option value="JD" >{lang_admin('express_jd')}</option>
                                        <option value="UC" >{lang_admin('express_uc')}</option>
                                        <option value="DBL" >{lang_admin('express_dbl')}</option>
                                        <option value="ZJS" >{lang_admin('express_zjs')}</option>
                                        <option value="TNT" >{lang_admin('express_tnt')}</option>
                                        <option value="UPS" >{lang_admin('adding_user_groups')}</option>
                                        <option value="DHL" >{lang_admin('express_dhl')}</option>
                                        <option value="FEDEX" >{lang_admin('express_fedex')}</option>
                                        <option value="FEDEX_GJ" >{lang_admin('express_fedex_gj')}</option>
                                    </select>
                                    <script type="text/javascript">
                                        if("{$data['expresstype']}"!=''){
                                            $('#expresstype').val("{$data['expresstype']}");
                                        }

                                    </script>
                                </div>
                                <div class="form-group">
                                    <label>{lang_admin('courier_number')}：</label>
                                    <input type="text" name="courier_number" id="courier_number" value="{$data['courier_number']}" class="form-control" style="display: inline-block; width:auto;" />
                                </div>

                        </td>
                        <td align="right">

                            <?php   $listtotal=$listtotal+$logistics[0]['price'];//加运费 ?>
                            <input type="hidden" name="menoy" id="menoy" value="{$listtotal}"/>
                            <?php $listtotal-=$data['admindiscounts'];$listtotal=$listtotal>0?$listtotal:0;?>
                            <strong>{lang_admin('actual_payment')}：{lang_custom('unit')}{$listtotal}</strong>



                        </td>
                    </tr>
                </table>

                <div class="hr_style"></div>

                <table class="table">
                    <tr>
                        <td>
                            <p>{lang_admin('customer_name')}：{$data['pname']}</p>
                            <p>{lang_admin('customer_address')}：{$data['address']}</p>
                            <p>{lang_admin('send_cell_phone_verification_code')}：{$data['telphone']}</p>
                        </td>
                    </tr>
                </table>
                <div class="hr_style"></div>

                <table class="table">
                    <tr>
                        <td>
                            {lang_admin('address')}：{get('address',true)}&nbsp;&nbsp;&nbsp;&nbsp;{lang_admin('tel')}：{get('tel',true)}&nbsp;&nbsp;&nbsp;&nbsp;{lang_admin('email')}:{get('email',true)}
                        </td>
                    </tr>
                </table>

            </div>

            <div class="hr_style"></div>

            <div class="clearfix blank20"></div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('membership_name')}：</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">{getusername($data['oldmid'])}（{$data['mid']}）
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('order_status')}：</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <font color="red">{$data['status']}</font>
                </div>
            </div>
            <div class="clearfix blank20"></div>


            <?php
            if($data['orderlog']){
                echo '<div style="border:1px solid #CCC">';
                $data['orderlog'] = unserialize($data['orderlog']);
                echo lang_admin('payment_type').'：'.$data['orderlog']['code'].'&nbsp;&nbsp;';
                if($data['orderlog']['code']=='alipay'){
                    echo lang_admin('email').'：'.rawurldecode($data['orderlog']['buyer_email']).'&nbsp;&nbsp;';
                    echo lang_admin('payment_time').'：'.rawurldecode($data['orderlog']['gmt_payment']).'&nbsp;&nbsp;';
                    echo lang_admin('amount_of_money').'：'.$data['orderlog']['total_fee'].'&nbsp;&nbsp;';
                    echo lang_admin('id').'：'.$data['orderlog']['trade_no'].'&nbsp;&nbsp;';
                }
                echo '</div>';
            }
            ?>
            <form method="post" name="form1" action="<?php if(front::$act=='edit') $id="/id/".$data[$primary_key]; else $id=''; echo modify("/act/".front::$act."/table/".$table.$id);?>"  onsubmit="return checkform();">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
                        {lang_admin('change_status')}：
                    </div>
                    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                        <select id="status" name="status" class="form-control">
                            <option value="0" selected>{lang_admin('new_orders')}</option>
                            <option value="2" >{lang_admin('processing')}</option>
                            <option value="3" >{lang_admin('shipped')}</option>
                            <option value="4" >{lang_admin('payment_has_been_made_pending_review')}</option>
                            <option value="5" >{lang_admin('verify_that_the_customer_has_paid')}</option>
                            <option value="1" >{lang_admin('installation_completed_2_seconds_later_jump_to_the_background')}</option>
                        </select>
                    </div>
                </div>

                <div class="clearfix blank20"></div>



                <div class="line"></div>
                <div class="blank30"></div>
                <input  name="submit" value="1" type="hidden">
                <input type="submit"  value="{lang_admin('submitted')}" class="btn btn-primary btn-lg"/>


            </form>
    </div>

    <div class="blank30"></div>
</div>
</div>

<script type="text/javascript">
    function CallPrint(strid){
        var prtContent = document.getElementById(strid);
        var WinPrint = window.open('','','letf=0,top=0,width=800,height=600,toolbar=1,scrollbars=1,status=1,menubar=1');
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
        //prtContent.innerHTML=strOldOne;
    }
</script>

<!-- 商品字段选择 -->
<div class="modal fade" id="ShoppingType" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo lang_admin("combined_commodity_type");?></h4>
            </div>
            <div class="modal-body">
                <forme>
                    <div id="columntype"></div>
                </forme>
            </div>
            <div class="modal-footer">
                <button type="button" id="closmode" class="btn btn-danger" data-dismiss="modal"><?php echo lang_admin("close");?></button>
                <button id="btn_pay" type="button" class="btn btn-primary"><?php echo lang_admin("sure");?></button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    <!--
    $(document).ready(function(){
        $(window).scroll(function() {
            var top = $("#content-eidt-nav").offset().top; //获取指定位置
            var scrollTop = $(window).scrollTop();  //获取当前滑动位置
            if(scrollTop > top){                 //滑动到该位置时执行代码

                $(".content-eidt-nav").addClass("sabit");

                $(".sabit #fullscreen-btn").css("display","inline-block");
                $(".sabit #content-eidt-nav-btn").css("display","inline-block");

            }else{
                $(".content-eidt-nav").removeClass("sabit");
                $("#fullscreen-btn").css("display","none");
                $(".fixed #fullscreen-btn").css("display","inline-block");
                $("#content-eidt-nav-btn").css("display","none");
            }
        });
    });


    $(document).ready(function(){
        $("#content-eidt-nav-btn").click(function(){

            $(".content-eidt-nav").removeClass("sabit");
        });
    });
    //-->
</script>
<script type="text/javascript">
    <!--
    var fullscreen = false;
    let btn = document.getElementById('fullscreen-btn');
    let fullarea = document.getElementById('box')
    btn.addEventListener('click',function(){
        if (fullscreen) {
            // 退出全屏
            $(".content-eidt-nav").removeClass("fixed");
            $(".content-eidt-nav").css({
                "background-color":"#ffffff"
            });
            $(".content-eidt-nav.sabit").css({
                "padding-right":"15px",
            });
            $(".fixed #fullscreen-btn").css("display","none");
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            }
        } else {
            // 进入全屏
            $("#box").css({
                "overflow":"hidden",
                "overflow-y":"auto"
            });
            $(".content-eidt-nav").addClass("fixed");

            $(".fixed #fullscreen-btn").css("display","inline-block");

            if (fullarea.requestFullscreen) {
                fullarea.requestFullscreen();
            } else if (fullarea.webkitRequestFullScreen) {
                fullarea.webkitRequestFullScreen();
            } else if (fullarea.mozRequestFullScreen) {
                fullarea.mozRequestFullScreen();
            } else if (fullarea.msRequestFullscreen) {
                // IE11
                fullarea.msRequestFullscreen();
            }
        }
        fullscreen = !fullscreen;
    });
    //-->
</script>





