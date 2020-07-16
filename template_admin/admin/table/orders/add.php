<div class="main-right-box">
    <h5>{lang_admin('add_orders')}</h5>
    <div class="blank20"></div>
    <div class="box">
        <style type="text/css" media="print">
            .noprint,.navbar,.sidebar,.breadcrumb,.blank30,.copy
            {display:none}
        </style>
        <style type="text/css">
            .hr_style {clear:both; height:1px; background:#333; overflow:hidden;}
            .table {margin:10px 0px;}
            .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {border:none;padding:5px 8px 0px 8px;}
            .table td.shpping-custom-value a {width: 1%;position: relative;
                white-space: nowrap;border-radius: 3px 0px 0px 3px;    line-height: 28px;
                vertical-align: middle;display: table-cell;}
            .shpping-custom-value input.form-control {display: table-cell;position: relative;
                z-index: 2;
                float: left;
                width: 100%;
                max-width:200px;
                margin-bottom: 0;}


        </style>

        <form method="post" name="form1" action="<?php echo modify("/act/".front::$act."/table/".$table.$id);?>" onsubmit="return returnform(this);">
            <!--工具栏-->
            <div class="content-eidt-nav">
                <a id="fullscreen-btn" class="btn btn-default">
                    <i class="icon-frame"></i>
                    {lang_admin('container_fluid')}
                </a>

                <span class="pull-right">



                <input  name="submit" value="1" type="hidden">
                    <button class="btn btn-success" onclick="if(mysave()){returnform(this.form);}" type="button">
                            <span class="glyphicon glyphicon-floppy-disk"></span> <?php echo lang_admin('preservation');?>
                        </button>



                <a href="#" onclick="gotohome()" data-dataurlname="<?php echo lang_admin('home');?>" class="btn btn-default">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>

 <a id="content-eidt-nav-btn" class="btn btn-default" style="display:none;">
                    <i class="icon-close"></i>
					</a>



                </span>
            </div>
            <div id="content-eidt-nav"></div>
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
					<span class="pull-right">{lang_admin('customer_order_date')}：{date('Y-m-d H:i:s',time())}
                        </span>
                            <strong>{lang_admin('order_number')}：<input type="hidden" name="oid" id="oid" value="" class="form-control"></strong>
                        </td>
                    </tr>
                </table>
                <div class="hr_style"></div>
                <table class="table">
                    <tr>
                        <td class="font02"><strong>{lang_admin('column')}</strong></td>
                        <td class="font02"><strong>{lang_admin('shopping')}</strong></td>
                        <td class="shpping-custom-value"><span>{lang_admin('mold')}</span></td>
                        <td class="font02"><strong>{lang_admin('order_quantity')}</strong></td>
                        <td class="font02" style="text-align: right"><strong>{lang_admin('unit_price')}</strong></td>
                        <td class="font02" style="text-align: right"><strong>{lang_admin('subtotal')}</strong></td>
                        <td class="shpping-custom-value"><span>{lang_admin('dosomething')}</span></td>
                    </tr>
                    <tr>
                        <td>
                            <select  name="shoppingtypecatid" onchange="getshopping();" class="form-control select tolast"><option value="0">{lang_admin('please_choose')}</option></select>
                        </td>
                        <td>
                            <select  name="shopaid" onchange="setoverlay(this,true)" class="form-control select tolast"><option value="0">{lang_admin('please_choose')}</option></select>
                        </td>
                        <td class="shpping-custom-value input-group shopping-type">
                            <a onclick="ShoppingType(this)"  class="label label-warning" data-toggle="modal" data-target="#ShoppingType">{lang_admin('set_up')}{lang_admin('mold')}</a>
                            <input type="text" value="" class="form-control" style="display:none;">
                            <input type="hidden" name="hiddenshopping" value="" class="form-control">
                        </td>
                        <td>
                            <button class="shop-number-btn1 btn btn-default" type=button onClick="setadd(this);getmenoy();">
                                <span class="glyphicon glyphicon-menu-up"></span>
                            </button>

                            <input type="text"  value="1" onblur="setthisnum(this);getmenoy();" name='shopnum' class="form-control" style="display:inline-block;width:88px;margin:0px;">

                            <button class="shop-number-btn2 btn btn-default" type=button onClick="setmin(this);getmenoy();">
                                <span class="glyphicon glyphicon-menu-down"></span>
                            </button>

                            </div>
                        </td>
                        <td style="text-align: right">{lang_admin('unit')}<span name="shopprice">0</span></td>
                        <td style="text-align: right">{lang_admin('unit')}<span name="shoptotle">0</span></td>
                    </tr>
                </table>

                <input type="hidden" name="menoy" id="menoy" value="0"/>
                <input type="hidden" name="aid" id="aid" value=""/>
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

                            <strong>{lang_admin('actual_payment')}：{lang_admin('unit')}<span id="shop_alltotle">0</span></strong>



                        </td>
                    </tr>
                </table>

                <div class="hr_style"></div>

                <table class="table">
                    <tr>
                        <td>
                            <p>{lang_admin('customer_name')}：<input type="text" name="pname" id="pname"  value="" class="form-control"></p>
                            <p>{lang_admin('customer_address')}：<input type="text" name="address" id="address"  value="" class="form-control"></p>
                            <p>{lang_admin('tel')}：<input type="text" name="telphone" id="telphone"  value="" class="form-control"></p>
                            <p>{lang_admin('remarks')}：<textarea id="content" name="content" class="form-control" rows="3"></textarea></p>
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
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">   <?php echo form::select('mid',0,user::option(),"");  ?>
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
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
                        {lang_admin('order_status')}：
                    </div>
                    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                        <select id="status" name="status" class="form-control">
                            <option value="0" >{lang_admin('new_orders')}</option>
                            <option value="1" >{lang_admin('yes_buyapps')}</option>
                            <option value="2" >{lang_admin('processing')}</option>
                            <option value="3" >{lang_admin('shipped')}</option>
                            <option value="4" >{lang_admin('payment_has_been_made_pending_review')}</option>
                            <option value="5" >{lang_admin('verify_that_the_customer_has_paid')}</option>
                        </select>
                    </div>
                </div>

                <div class="clearfix blank20"></div>

    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
            {lang_admin('支付方式')}：
        </div>
        <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
            <?php
            $paylist = pay::getInstance()->getrows('', 0);
            if(is_array($paylist)){
                foreach($paylist as $i => $pay) { ?>
                    <?php if($pay['enabled']==1) { ?>
                        <div class="checkbox col-xs-12 col-md-6">
                            <label class="row">
                                <input type="radio" name="payname" value="<?php echo $pay['pay_code'];?>">
                                <img src="<?php echo $pay['pay_image'];?>" height="26">
                                <?php echo $pay['pay_name'];?>
                                <!--<small> <?php /*echo lang('rates');*/?>：<?php /*echo $pay['pay_fee'];*/?>%</small>-->
                            </label>
                        </div>

                    <?php } ?>
                <?php } ?>
            <?php }?>
        </div>
    </div>





                <div class="blank30"></div>


            </form>
    </div>

    <div class="blank30"></div>
</div>
</div>

<script type="text/javascript">
    //商品
    var shopingtype=new Array();
    var prevshoopingid='';  //选择的商品ID
    var thisbutton;
    $(function () {
        //商品的栏目加载
        getshoppingtypecatid();
        //弹出框确认键
        $('#btn_pay').click(function () {
            var num =$(thisbutton).parent().next().find('input[name="shopnum" ]').val();  //数量
            if(shopingtype.length>0){
                var newshoppingtype="";   //返回的隐藏类型
                var newshowshoppingtype="";  //返回的类型
                for(var i=0;i<shopingtype.length;i++){
                    if(shopingtype[i]!=''){
                        if(newshoppingtype==''){
                            newshoppingtype=prevshoopingid+","+num+"#"+shopingtype[i]; //+,
                        }else{
                            newshoppingtype=newshoppingtype+";"+shopingtype[i];
                        }
                        var datafiledname=shopingtype[i].split(":");
                        datafiledname=datafiledname[1].split(",");
                        if(newshowshoppingtype==""){
                            newshowshoppingtype=datafiledname[0];
                        }else{
                            newshowshoppingtype+="-"+datafiledname[0];
                        }
                    }
                }
            }else{
                newshoppingtype=prevshoopingid+","+num+"#";
            }
            $(thisbutton).parent().find('input[type="text" ]').val(newshowshoppingtype);
            $(thisbutton).parent().find('input[name="hiddenshopping"]').val(newshoppingtype);
            getmenoy();  //计算价格
            $("#closmode").trigger("click");  //关闭弹出框
        });
    });
    //设置类型按钮
    function ShoppingType(obj) {
        shopingtype=new Array();  //清空之前选择的
        prevshoopingid='';
        thisbutton="";
        prevshoopingid=$(obj).parent().prev().find('select').val();
        thisbutton=obj;
        //获取分类字段
        var dataname=new Array();
        var data="{$fieldname}";
        var datanamefield=data.split(",");
        for(var index=0;index<datanamefield.length;index++){
            dataname[index]=datanamefield[index];
        }
        //获取设置的分类
        var dataarraytype=[];
        var oldshoppingtype =$(obj).parent().find('input[name="hiddenshopping"]').val();
        var newoldshoppingtype=oldshoppingtype.toString().split("#");
        if(newoldshoppingtype.length>1){
            newoldshoppingtype=newoldshoppingtype[1].toString().split(";");
            for (var i = 0; i < newoldshoppingtype.length; i++) {
                var dataarray=newoldshoppingtype[i].toString().split(":");
                dataarraytype[dataarraytype.length]=dataarray[0];
            }
        }
        if(dataname.length>0){
            for(var index=0;index<dataname.length;index++){
                var	htmldata='<div class="visual-conent-car-btn">';
                var fieldname=dataname[index]+'Modal';
                htmldata+='<div id="'+fieldname+'" class="shop-type-info"><p></p></div>';
                htmldata+='</div>';
                $('#columntype').append(htmldata);
            }
            //设置名字
            setfieldName(dataname,'<?php echo url("archive/getfieldName",false); ?>');
            //加载按钮
            setleixing(dataname,'<?php echo url("archive/getarchiveType",false); ?>',prevshoopingid,dataarraytype);
        }
    }
    //获取名字
    function setfieldName(field,setfieldNameurl){
        $.ajax({
            type : "get",
            url : setfieldNameurl+'&field='+field,
            async : false,
            success : function(data){
                var fieldName=JSON.parse(data);
                var fieldNameArray=fieldName.split(",");
                var datanamefield=field.toString().split(",");
                for(var index=0;index<datanamefield.length;index++){
                    $('#'+datanamefield[index]+'Modal').html('<dt>'+fieldNameArray[index]+'</dt>'+'<dd class="shop-type-list"></dd>');
                }
            }
        });
    }
    //类型加载
    function setleixing(field,setleixingurl,aid,oldshoppingtype){
        var url=setleixingurl+'&aid='+aid;
        $.ajax({
            type : "get",
            url : url,
            async : false,
            success : function(data) {
                var archiveData = JSON.parse(data);
                var datanamefield = field.toString().split(",");
                for (var index = 0; index < datanamefield.length; index++) {
                    if (archiveData==null || archiveData[datanamefield[index]] == 'num' || archiveData[datanamefield[index]] == ''
                        || archiveData[datanamefield[index]] == undefined ) {
                        $('#' + datanamefield[index] + 'Modal').attr("style", "display:none");
                    } else {
                        var dataarray = archiveData[datanamefield[index]].split("\n");
                        for (var i = 0; i < dataarray.length; i++) {
                            var newdataarray = dataarray[i].toString().split(",");
                            var fieldtype = newdataarray[0].toString().split(":");
                            var onclic="onclickprice(this,'"+newdataarray[1]+"','"+newdataarray[2]+"','"+datanamefield[index]+"','"+fieldtype[1]+"','"+fieldtype[0]+"')";
                            if(oldshoppingtype.length>0){
                                var j = $.inArray(datanamefield[index].toString()+','+fieldtype[0].toString(), oldshoppingtype);   //结果：index=1
                                if (j >= 0) {
                                    onclickprice("",newdataarray[1],newdataarray[2],datanamefield[index],fieldtype[1],fieldtype[0]);
                                    var htmldata = '<button style="border-color: rgb(255, 104, 1); border-width: 2px; margin: 0px 5px 15px 0px;" name="'+datanamefield[index]+'Modalbutton" id="'+datanamefield[index]+fieldtype[0]+'"  onclick="' + onclic + '" type="button" data-switch-toggle="animate" class="btn">' + fieldtype[1] + '</button>';
                                }else{
                                    var htmldata = '<button style=" border-width: 2px; margin: 0px 5px 15px 0px;"  name="'+datanamefield[index]+'Modalbutton" id="'+datanamefield[index]+fieldtype[0]+'"  onclick="' + onclic + '" type="button" data-switch-toggle="animate" class="btn">' + fieldtype[1] + '</button>';
                                }
                            }else{
                                var htmldata = '<button  style=" border-width: 2px; margin: 0px 5px 15px 0px;"   name="'+datanamefield[index]+'Modalbutton" id="'+datanamefield[index]+fieldtype[0]+'"  onclick="' + onclic + '" type="button" data-switch-toggle="animate" class="btn">' + fieldtype[1] + '</button>';
                            }
                            $('#' + datanamefield[index] + 'Modal').find('dd.shop-type-list').append(htmldata);
                            var butteid = datanamefield[index] + fieldtype[0];
                            Exists(newdataarray[3], butteid, fieldtype[1])
                        }
                    }
                }
            }
        });
    }
    //商品的栏目加载
    function getshoppingtypecatid(){
        var hrefname="<?php echo modify("/act/getshoppingtypecatid/table/archive"); ?>";
        $.ajax({
            type : "get",
            url : hrefname,
            async : false,
            success : function(data) {
                data = JSON.parse(data);
                $("select[name='shoppingtypecatid']").each(function (j, item) {
                    var selectid = item.value;
                    $(item).html('');
                    var html = "";
                    for (var i = 0; i < data.length; i++) {
                        if (data[i]['aid'] == selectid) {
                            html += "<option value='" + data[i]['aid'] + "' selected>" + data[i]['title'] + "</option>";
                        } else {
                            html += "<option value='" + data[i]['aid'] + "'>" + data[i]['title'] + "</option>";
                        }

                    }
                    $(item).append(html);
                });
            }
        });
    }
    //商品加载
    function getshopping(){
        $("select[name='shoppingtypecatid']").each(function (j, item) {
            var tolastid = item.value;
            if(tolastid!='0'){
                var hrefname = "<?php echo modify("/act/gettolast/table/coupon"); ?>";
                $.get(hrefname, {'tolastid': tolastid}, function (data) {
                    data = JSON.parse(data);
                    var selectid = $(item).parent().next().find("select[name='shopaid']").val();
                    var selectidstatic = true;
                    $(item).parent().next().find("select[name='shopaid']").html('');
                    var html = "<option value='0'>{lang_admin('please_choose')}</option>";
                    for (var i = 0; i < data.length; i++) {
                        if (data[i]['aid'] == selectid) {
                            selectidstatic = false;
                            html += "<option value='" + data[i]['aid'] + "' selected>" + data[i]['title'] + "</option>";
                        } else {
                            html += "<option value='" + data[i]['aid'] + "'>" + data[i]['title'] + "</option>";
                        }
                    }
                    //如果商品选的是0  那么 清空商品的类型
                    if (selectid == '0' || selectidstatic) {
                        $(item).parent().next().next().find('input[type="text" ]').val('')
                        $(item).parent().next().next().find('input[name="hiddenshopping"]').val('');
                    }
                    $(item).parent().next().find("select[name='shopaid']").append(html);
                });
            }
        });
    }
    //选择商品的时候
    function setoverlay(obj,static){
        $(obj).parent().next().find('input[type="text" ]').val('');
        $(obj).parent().next().find('input[name="hiddenshopping"]').val('');
        if($(obj).val() !='0'){
            $(obj).parent().next().find('input[name="hiddenshopping"]').val($(obj).val() + ","+$(obj).parent().next().next().find('input[name="shopnum"]').val()+"#");
            if(static){
                var htmltrl='<tr>';
                htmltrl+=' <td class="shpping-custom-value">';
                htmltrl+=' <select  name="shoppingtypecatid"  onchange="getshopping();" class="form-control select tolast"><option value="0">{lang_admin("please_choose")}</option></select>';
                htmltrl+='</td>';
                htmltrl+='<td class="shpping-custom-value">';
                htmltrl+='<select  name="shopaid" onchange="setoverlay(this,true)" class="form-control select tolast"><option value="0">{lang_admin("please_choose")}</option></select>';
                htmltrl+='</td>';
                htmltrl+='<td class="shpping-custom-value input-group shopping-type"><a onclick="ShoppingType(this)"   class="label label-warning" data-toggle="modal" data-target="#ShoppingType">{lang_admin("set_up")}{lang_admin("mold")}</a>';
                htmltrl+='<input type="text"  value="" class="form-control" style="display:none;"><input type="hidden" name="hiddenshopping" value="" class="form-control">';
                htmltrl+='</td>';
                htmltrl+='<td>';
                htmltrl+='<button class="shop-number-btn1 btn btn-default" type=button  onClick="setadd(this);getmenoy();"><span class="glyphicon glyphicon-menu-up"></span></button>';
                htmltrl+='<input type="text" onblur="setthisnum(this);getmenoy();" value="1" name="shopnum" class="form-control" style="display:inline-block;width:88px;margin:0px 5px;">';
                htmltrl+='<button class="shop-number-btn2 btn btn-default" type=button   onClick="setmin(this);getmenoy();"><span class="glyphicon glyphicon-menu-down"></span></button>';
                htmltrl+='</td>';
                htmltrl+='<td style="text-align: right">{lang_admin("unit")}<span name="shopprice">0</span></td>';
                htmltrl+='<td style="text-align: right">{lang_admin("unit")}<span name="shoptotle">0</span></td>';
                htmltrl+='</tr>';
                $(obj).parent().parent().parent().append(htmltrl);
                var htmltrl='<td class="shpping-custom-value text-center">';
                htmltrl+='<a onclick="dropshoppingtype(this)"><i class="glyphicon glyphicon-remove"></i></a>';
                htmltrl+='</td>';
                $(obj).parent().parent().append(htmltrl);
                //去掉上一个选择商品的改变事件
                $(obj).attr('onchange',"setoverlay(this,false)");
                //商品的栏目加载
                getshoppingtypecatid();
                //商品加载
                getshopping();
            }
        }
        //重算价格
        getmenoy();
    }
    //删除商品
    function dropshoppingtype(obj){
        $(obj).parent().parent().remove();
    }
    //选择类型
    function  onclickprice(obj,fh,num,buttonname,val,key) {
        var nocolor=true;    //选中颜色判断
        if(fh == '+'){
            fh='jia';
        }else if(fh == '-'){
            fh='jian';
        }else if(fh == '*'){
            fh='chen';
        }else if(fh == '/'){
            fh='chu';
        }else{
            fh=fh;
        }
        if(shopingtype.length==0){
            shopingtype[0]=buttonname+','+key+":"+val+","+fh+","+num;
        }
        else{
            var ischunzai=true;
            for(var i=0;i<shopingtype.length;i++){
                var savenameArry= new Array(); //定义一数组
                savenameArry=shopingtype[i].split(":"); //字符分割
                savenameArry=savenameArry[0].split(","); //字符分割
                if(savenameArry[0]==buttonname){
                    if(key==savenameArry[1]){
                        shopingtype.splice(i,1);
                        nocolor=false;
                    }else{
                        shopingtype[i]=buttonname+','+key+":"+val+","+fh+","+num;
                    }
                    ischunzai=false;
                }
            }
            if (ischunzai){
                shopingtype[shopingtype.length]=buttonname+','+key+":"+val+","+fh+","+num;
            }

        }

        $("[name="+buttonname+"Modalbutton]").css({"border-color":"#ccc","border-width":"1px","margin":"1px 6px 16px 1px"});
        $("[name="+buttonname+"Modalbutton]").removeClass("btn-focus");
        if(nocolor){
            $(obj).css({"border-color":"#FF6801","border-width":"2px","margin":"0px 5px 15px 0px"});
            $(obj).addClass("btn-focus");
        }

    }
    //校验文件是否存在  插入图片
    function Exists(url,butteid,fieldtype) {
        $.ajax(url, {
            type: 'get',
            timeout: 1000,
            success: function () {
                var htmldata = '<img src=' + url + ' width="30" height="30" alt=' + fieldtype + '>';
                $("#img" + butteid).prepend(htmldata);
            },
            error: function () {
                return false;
            }
        });

    }
    //计算价格
    function getmenoy(){
        var alltotle=0;
        $("select[name='shopaid']").each(function (j, item) {
            var aid = item.value;
            if(aid!='0'){
                var url='<?php echo url("archive/getarchiveType",false); ?>'+'&aid='+aid;
                $.ajax({
                    type : "get",
                    url : url,
                    async : false,
                    success : function(data) {
                        data = JSON.parse(data);
                        var price=Math.ceil(data['attr2']);                             //单价
                        var num=$(item).parent().next().next().find("input[name='shopnum']").val();  //获取商品数量
                        //获取类型   并且重改数量
                        var new_archiveTypedata="";
                        var archiveTypedata=$(item).parent().next().find('input[name="hiddenshopping"]').val();
                        archiveTypedata = archiveTypedata.split("#");
                        //修改数量
                        var oldnumdata=archiveTypedata[0].split(",");
                        new_archiveTypedata=oldnumdata[0]+","+num;
                        new_archiveTypedata+='#'+archiveTypedata[1];
                        $(item).parent().next().find('input[name="hiddenshopping"]').val(new_archiveTypedata);
                        if(archiveTypedata[1]!=""){
                            archiveTypedata=archiveTypedata[1].split(";");
                            for (var i = 0; i < archiveTypedata.length; i++) {
                                var newarchiveTypedata=archiveTypedata[i].split(":");
                                newarchiveTypedata=newarchiveTypedata[1].split(",");
                                if(newarchiveTypedata[1]=="jia"){
                                    price=price+parseFloat(newarchiveTypedata[2]);
                                }else if(newarchiveTypedata[1]=="jian"){
                                    price=price-parseFloat(newarchiveTypedata[2]);
                                }else if(newarchiveTypedata[1]=="chen"){
                                    price=price*parseFloat(newarchiveTypedata[2]);
                                }else if(newarchiveTypedata[1]=="chu"){
                                    price=price/parseFloat(newarchiveTypedata[2]);
                                }
                            }
                        }
                        var totle=parseFloat(price)*parseFloat(num);         //小计
                        alltotle=alltotle+totle;    //总计
                        $(item).parent().next().next().next().find("span[name='shopprice']").text(price);
                        $(item).parent().next().next().next().next().find("span[name='shoptotle']").text(totle);
                    }
                });
            }
        });
        $("#shop_alltotle").text(alltotle);
        $("#menoy").val(alltotle);
    }
    //加1 数量
    function setadd(obj){
        //获取购物车商品数量
        var getshoppingurl="{url('archive/getarchiveType',false)}"+"&aid="+$(obj).parent().prev().prev().find('select').val();
        $.ajax({
            type : "get",
            url : getshoppingurl,
            async : false,
            success : function(data) {
                var archiveData = JSON.parse(data);
                var thisnum = parseInt($(obj).parent().find("input[name='shopnum']").val()) + 1;
                var inventory = parseInt(archiveData['inventory']);
                if (thisnum > inventory) {
                    alert('数量不能大于库存！');
                } else {
                    $(obj).parent().find("input[name='shopnum']").val(thisnum);
                }
            }
        });
    }
    //减1 数量
    function setmin(obj){
        var thisnum=parseInt($(obj).parent().find("input[name='shopnum']").val())-1;
        if(thisnum<1){
            alert('数量不能小于1！');
        }else{
            $(obj).parent().find("input[name='shopnum']").val(thisnum)
        }
    }
    //修改数量
    function setthisnum(obj){
        //获取购物车商品数量
        var getshoppingurl="{url('archive/getarchiveType',false)}"+"&aid="+$(obj).parent().prev().prev().find('select').val();
        $.ajax({
            type : "get",
            url : getshoppingurl,
            async : false,
            success : function(data) {
                var archiveData = JSON.parse(data);
                var thisnum = parseInt($(obj).val());
                var inventory = parseInt(archiveData['inventory']);
                if (parseInt(thisnum) > parseInt(inventory)) {
                    alert('购买数量不能大于库存！');
                    $(obj).val(inventory);
                }
                if (parseInt(thisnum) < 1) {
                    alert('最低购买一个！');
                    $(obj).val(1);
                }
            }
        });
    }

</script>

<script type="text/javascript">
    //保存
    function mysave(){
        var oid="";
        $("input[name='hiddenshopping']").each(function (j, item) {
            if(item.value != ''){
                oid=oid==""?item.value:oid+"-"+item.value;
            }
        });
        $("#aid").val(oid);
        if(oid==""){
            alert("{lang_admin('not_shopping')}");
            return false;
        }else{
           return  true;
        }
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
                $(".content-eidt-nav").css({
                    "border-bottom":"1px solid #ccc"
                });
                $(".sabit #fullscreen-btn").css("display","inline-block");
                $(".sabit #content-eidt-nav-btn").css("display","inline-block");

            }else{

                $(".content-eidt-nav").removeClass("sabit");
                $(".content-eidt-nav").css({
                    "border-bottom":"none"
                });
                $("#fullscreen-btn").css("display","none");
                $(".important #fullscreen-btn").css("display","inline-block");
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
            $(".content-eidt-nav").removeClass("important");
            $(".content-eidt-nav").css({
                "background-color":"#ffffff"
            });
            $(".content-eidt-nav.sabit").css({
                "padding-right":"15px",
            });
            $(".important #fullscreen-btn").css("display","none");
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

            $(".content-eidt-nav").addClass("important");
            $(".important").css({
                "padding-right":"30px",
                "background-color":"#f5f5f5"
            });
            $(".important #fullscreen-btn").css("display","inline-block");

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