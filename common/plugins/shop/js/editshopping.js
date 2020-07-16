
    $(function () {
        var field="";
        for (i in savename)
        {
            var savenameArry= new Array(); //定义一数组
            savenameArry=savename[i].split(":"); //字符分割
            if(i==0){
                field=field+savenameArry[0];
            }else{
                field=field+','+savenameArry[0];
            }
            var mydata=$("#"+savenameArry[0]+"").val();
            var newsavenameArry= new Array(); //定义一数组
            if(mydata.length>0 && mydata!=""){
                newsavenameArry=mydata.split(/[\s\n]/); //字符分割
            <?php $ss=1;?>
                for (var j=0;j<newsavenameArry.length ;j++ )
                {
                    var newmydata= new Array(); //定义新数组
                    if(j==0){
                        newmydata=newsavenameArry[j].split(":"); //字符分割
                        $("#"+savenameArry[0]+"id"+(j+1)+"").val(newmydata[0]);
                        newmydata=newmydata[1].split(","); //字符分割
                        $("#"+savenameArry[0]+"note"+(j+1)+"").val(newmydata[0]);
                        $("#"+savenameArry[1]+"fh"+(j+1)+"").val(newmydata[1]);
                        $("#"+savenameArry[0]+"mynum"+(j+1)+"").val(newmydata[2]);
                        $("#"+savenameArry[0]+"myimg"+(j+1)+"").val(newmydata[3]);
                        newmydata[3]=newmydata[3]==''?'./common/js/ajaxfileupload/pic.png':newmydata[3];
                        $("#"+savenameArry[0]+"myimg"+(j+1)+"_preview").html("<img src='"+newmydata[3]+"' style='max-width:30px'>");
                    }else{
                        var newIndex=parseInt(j)+1;
                        setsavenameNum(savenameArry[0],"+",newIndex);
                        setonchange(j,savenameArry[0],"-");   //删除上一个框的onchang事件
                        var  htmljd="<tr id='"+savenameArry[0]+newIndex+"' >";
                        newmydata=newsavenameArry[j].split(":"); //字符分割
                        htmljd+="<td class=\"shopping-custom-mode\"><input type='text'  id='"+savenameArry[0]+"id"+newIndex+"' value='"+newmydata[0]+"' class='form-control'></td>";
                        newmydata=newmydata[1].split(","); //字符分割
                        htmljd+="<td class=\"shpping-custom-value\"><input type='text'  id='"+savenameArry[0]+"note"+newIndex+"' value='"+newmydata[0]+"' class='form-control'></td>";
                        htmljd+="<td class=\"shpping-custom-operation\">";
                        htmljd+="<select  type='text'  id='"+savenameArry[0]+"fh"+newIndex+"'  class='form-control select showform'>";
                        if(newmydata[1]=="+"){
                            htmljd+="<option value='+' selected>+</option>";
                        }else{
                            htmljd+="<option value='+'>+</option>";
                        }
                        if(newmydata[1]=="-"){
                            htmljd+="<option value='-' selected>-</option>";
                        }else{
                            htmljd+="<option value='-'>-</option>";
                        }
                        if(newmydata[1]=="*"){
                            htmljd+="<option value='*' selected>*</option>";
                        }else{
                            htmljd+="<option value='*'>*</option>";
                        }
                        if(newmydata[1]=="/"){
                            htmljd+="<option value='/' selected>/</option>";
                        }else{
                            htmljd+="<option value='/'>/</option>";
                        }
                        htmljd+="</select></td>";
                        htmljd+="<td class=\"shpping-custom-price\"><input type='number'  id='"+savenameArry[0]+"mynum"+newIndex+"' value='"+newmydata[2]+"' class='form-control' onKeyUp=\"value=(parseInt((value=value.replace(/\\D/g,''))==''?'0':value,10))\"></td>";
                        htmljd+="<td class=\"shpping-custom-pic\">";

                        htmljd+="<a title=\"<?php echo lang_admin('select_files');?>\" onclick=\"javascript:windowsdig('选择文件','iframe:index.php?case=file&act=updialog&fileinputid="+savenameArry[0]+"myimg"+newIndex+"&getbyid="+savenameArry[0]+"myimg"+newIndex+"_preview&max=1&amp;checkfrom=picshow&admin_dir=admin','900px','480px','iframe')\" href=\"#body\" style=\" float:left; width:30px;\">";
                        var imgurl=newmydata[3]==''?'./common/js/ajaxfileupload/pic.png':newmydata[3];
                        htmljd+="<span id=\""+savenameArry[0]+"myimg"+newIndex+"_preview\"><img src=\""+imgurl+"\" class=\"img-responsive\" width=\"30\"></span>";

                        htmljd+="</a>";
                        htmljd+=" <input type=\"hidden\" name=\""+savenameArry[0]+"myimg"+newIndex+"\" id=\""+savenameArry[0]+"myimg"+newIndex+"\" value=\""+newmydata[3]+"\" class=\"form-control\">";


                        htmljd+="<i class=\"glyphicon glyphicon-remove\" title=\"<?php echo lang_admin('delete');?>\" id=\"thumb_del\" onclick=\"pics_delete('','"+savenameArry[0]+"myimg"+newIndex+"');document.getElementById('"+savenameArry[0]+"myimg"+newIndex+"_preview').innerHTML='<img width=\\'30\\' src=\\'common/js/ajaxfileupload/pic.png\\' style=\\'max-width:30px\\'>';\" type=\"button\" name=\"delbutton\"></i>";

                        htmljd+="</td>";

                        htmljd+="<td><input type='button' name='delete' onclick='mydelete("+newIndex+",\""+savenameArry[0]+"\")' value=' <?php echo lang_admin('delete');?> ' class='btn btn-gray'' /></td>";
                        htmljd+="</tr>";
                        $("#"+savenameArry[0]+0+"").append(htmljd);//插入节点  插入到表格
                    }
                    var newIndex=parseInt(j)+1;
                    if(newIndex == newsavenameArry.length ){
                        newIndex=parseInt(newIndex)+1;
                        setsavenameNum(savenameArry[0],"+",newIndex);
                        setonchange(j,savenameArry[0],"-");   //删除上一个框的onchang事件
                        var  htmljd="<tr id='"+savenameArry[0]+newIndex+"' >";
                        newmydata=newsavenameArry[j].split(":"); //字符分割
                        htmljd+="<td class=\"shopping-custom-mode\"><input type='text'  id='"+savenameArry[0]+"id"+newIndex+"' value='"+newIndex+"' class='form-control'></td>";
                        newmydata=newmydata[1].split(","); //字符分割
                        htmljd+="<td class=\"shpping-custom-value\"><input type='text' onchange='mycopy("+newIndex+",\""+savenameArry[0]+"\")' id='"+savenameArry[0]+"note"+newIndex+"' value='' class='form-control'></td>";
                        htmljd+="<td class=\"shpping-custom-operation\">";
                        htmljd+="<select  type='text'  id='"+savenameArry[0]+"fh"+newIndex+"'  class='form-control select showform'>";
                        htmljd+="<option value='+' selected>+</option>";
                        htmljd+="<option value='-'>-</option>";
                        htmljd+="<option value='*'>*</option>";
                        htmljd+="<option value='/'>/</option>";
                        htmljd+="</select></td>";
                        htmljd+="<td class=\"shpping-custom-price\"><input type='number'  id='"+savenameArry[0]+"mynum"+newIndex+"' value='0' class='form-control' onKeyUp=\"value=(parseInt((value=value.replace(/\\D/g,''))==''?'0':value,10))\"></td>";
                        htmljd+="<td class=\"shpping-custom-pic\">";


                        htmljd+="<a title=\"选择文件\" onclick=\"javascript:windowsdig('选择文件','iframe:index.php?case=file&amp;act=updialog&amp;fileinputid="+savenameArry[0]+"myimg"+newIndex+"&amp;getbyid="+savenameArry[0]+"myimg"+newIndex+"_preview&amp;max=1&amp;checkfrom=picshow&amp;admin_dir=admin','900px','480px','iframe')\" href=\"#body\" style=\" float:left; width:30px;\">";
                        htmljd+="<span id=\""+savenameArry[0]+"myimg"+newIndex+"_preview\"><img src=\"./common/js/ajaxfileupload/pic.png\" class=\"img-responsive\" width=\"30\"></span>";

                        htmljd+="</a>";
                        htmljd+=" <input type=\"hidden\" name=\""+savenameArry[0]+"myimg"+newIndex+"\" id=\""+savenameArry[0]+"myimg"+newIndex+"\" value=\"\" class=\"form-control\">";

                        htmljd+="<i class=\"glyphicon glyphicon-remove\" title=\"<?php echo lang_admin('delete');?>\" id=\"thumb_del\" onclick=\"pics_delete('','"+savenameArry[0]+"myimg"+newIndex+"');document.getElementById('"+savenameArry[0]+"myimg"+newIndex+"_preview').innerHTML='<img src=\\'common/js/ajaxfileupload/pic.png\\' style=\\'max-width:30px\\'>';\" type=\"button\" name=\"delbutton\"></i>";

                        htmljd+="</td>";

                        htmljd+="<td><input type='button' name='delete' onclick='mydelete("+newIndex+",\""+savenameArry[0]+"\")' value=' <?php echo lang_admin('delete');?> ' class='btn btn-gray' /></td>";
                        htmljd+="</tr>";
                        $("#"+savenameArry[0]+0+"").append(htmljd);//插入节点  插入到表格
                    }
                <?php $ss+=1;?>
                }
            }
        }
        $("[name=my_field]").val(field);
        $("#sopingfield").attr("style","display:none");
        //显示商品字段
        getshoppingcatid();
        //编辑栏目的时候
        $("#catidshopping").change(function () {
            //显示商品字段
            getshoppingcatid();
        });
        //组合商品的栏目加载
        getshoppingtypecatid();
        //组合商品加载
        getshopping();
        //弹出框确认键
        $('#btn_pay').click(function () {
            if(shopingtype.length>0){
                var newshoppingtype="";   //返回的隐藏类型
                var newshowshoppingtype="";  //返回的类型
                for(var i=0;i<shopingtype.length;i++){
                    if(shopingtype[i]!=''){
                        if(newshoppingtype==''){
                            newshoppingtype=prevshoopingid+",1#"+shopingtype[i]; //+,1 的原因是  默认买一个
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
                newshoppingtype=prevshoopingid+",1#";
            }
            $(thisbutton).parent().find('input[type="text" ]').val(newshowshoppingtype);
            $(thisbutton).parent().find('input[name="hiddenshopping"]').val(newshoppingtype);
            $("#closmode").trigger("click");  //关闭弹出框
            /*  if($("#combined").val() !=""){
                  var oldshoppingtype=$("#combined").val();
                  var oldshoppingtype=oldshoppingtype.split("-");
                  for(var index=0;index<oldshoppingtype.length;index++){
                      if(oldshoppingtype[index] == newshoppingtype){
                           alert("不可用重复选择同一个商品和同一个类型！");
                           return;
                      };
                  }
              }else{
                  $("#combined").val(newshoppingtype);
              };*/
        });
        //加载购买链接
        loadbuyurl();
    });
//设置类型按钮
function ShoppingType(obj) {
    shopingtype=new Array();  //清空之前选择的
    prevshoopingid='';
    thisbutton="";
    prevshoopingid=$(obj).parent().prev().find('select[name="categoryid"]').val();
    thisbutton=obj;
    //获取分类字段
    var dataname=new Array();
    var data=$("[name=my_field]").val();
    var datanamefield=data.split(",");
    for(var index=0;index<datanamefield.length;index++){
        dataname[index]=datanamefield[index];
    }
    //获取设置的分类
    var dataarraytype=[];
    var oldshoppingtype =$(obj).parent().find('input[name="hiddenshopping"]').val();
    // alert(oldshoppingtype);
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

//选择商品的时候
function setoverlay(obj,static){
    $(obj).parent().next().find('input[type="text" ]').val('');
    $(obj).parent().next().find('input[name="hiddenshopping"]').val('');
    if($(obj).val() !='0'){
        $(obj).parent().next().find('input[name="hiddenshopping"]').val($(obj).val() + ",1#");
        if(static){
            var htmltrl='<tr  class="shopping-custom-field-list">';
            htmltrl+=' <td class="shpping-custom-value">';
            htmltrl+=' <select  name="shoppingtypecatid" onchange="getshopping();" class="form-control select tolast"><option value="0"><?php echo lang_admin("please_choose");?></option></select>';
            htmltrl+='</td>';
            htmltrl+='<td class="shpping-custom-value">';
            htmltrl+='<select  name="categoryid" onchange="setoverlay(this,true)" class="form-control select tolast"><option value="0"><?php echo lang_admin("please_choose");?></option></select>';
            htmltrl+='</td>';
            htmltrl+='<td class="shpping-custom-value input-group"><a onclick="ShoppingType(this)"   class="label label-warning" data-toggle="modal" data-target="#ShoppingType"><?php echo lang_admin("set_up");?><?php echo lang_admin("custom");?></a>';
            htmltrl+='<input type="text"  value="" class="form-control"><input type="hidden" name="hiddenshopping" disabled value="" class="form-control">';
            htmltrl+='</td>';
            htmltrl+='</tr>';
            $(obj).parent().parent().parent().append(htmltrl);
            var htmltrl='<td class="shpping-custom-value">';
            htmltrl+='<a onclick="dropshoppingtype(this)"><i class="glyphicon glyphicon-remove"></i></a>';
            htmltrl+='</td>';
            $(obj).parent().parent().append(htmltrl);
            //去掉上一个选择商品的改变事件
            $(obj).attr('onchange',"setoverlay(this,false)");
            //组合商品加载
            getshoppingtypecatid();
            //组合商品加载
            getshopping();
        }
    }
}



//保存
function mysave() {
    if('{$data["attr2"] }' != ''){
        $('#catid').val($('#catidshopping').val());
    }

    //saveshoppingtype 保存组合商品类型
    saveshoppingtype();

    for (i in savename)
    {
        var savenameArry= new Array(); //定义一数组
        savenameArry=savename[i].split(":"); //字符分割
        $("#"+savenameArry[0]+"").val("");   //先清空多行文本框
        var newData="";
        var savenameArryItem= new Array(); //定义一数组
        savenameArryItem=savenameArry[1].split(","); //字符分割

        for(var i=0;i<savenameArryItem.length;i++){
            var myid= $("#"+savenameArry[0]+"id"+(savenameArryItem[i])+"").val();
            var mynote= $("#"+savenameArry[0]+"note"+(savenameArryItem[i])+"").val();
            var myfh= $("#"+savenameArry[0]+"fh"+(savenameArryItem[i])+"").val();
            var mynum= $("#"+savenameArry[0]+"mynum"+(savenameArryItem[i])+"").val();
            var myimg= $("#"+savenameArry[0]+"myimg"+(savenameArryItem[i])+"").val();
            if(myimg=="./common/js/ajaxfileupload/pic.png"){
                myimg="";
            }
            if((i==0) && (myid.length>0) && (mynote.length>0)  && (myid != undefined) && (mynote != undefined)){
                newData=newData+myid+':'+mynote+','+myfh+','+mynum+','+myimg;
            }else if((i!=0) && (myid.length>0) && (mynote.length>0)  && (myid != undefined) && (mynote != undefined)){
                newData=newData+'\r\n'+myid+':'+mynote+','+myfh+','+mynum+','+myimg;
            }
        }
        $("#"+savenameArry[0]+"").val(newData);   //附上新值
    }

    //保存购买链接
    savebuyurl();
}

function deletemediumtext(name,obj){
    $(obj).parent().parent().prev().prev().remove();
    $(obj).parent().parent().prev().remove();
    $(obj).parent().parent().remove();
    $.get("<?php echo url('field/delete/table/archive',true)?>&name="+name,function () {
        alert("<?php echo lang_admin('successful_deletion');?>");
    })
}

//新增购买链接
function addbuyurl(obj){
    if($("#addbuyurlname").val()=="") {
        alert("<?php echo lang_admin('the_name_cannot_be_empty');?>");
        $("#addbuyurlname").focus();
        return false;
    }
    if($("#addbuyurls").val()=="") {
        alert("<?php echo lang_admin('buyurl');?><?php echo lang_admin('on_null');?>");
        $("#addbuyurls").focus();
        return false;
    }
    var htmlstr="<div class=\"row\"  name=\"buyurldiv\"><div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right\"></div><div class=\"col-xs-12 col-sm-8 col-md-9 col-lg-5 text-left\"><div class=\"form-inline\">\n" +
        "<div class=\"form-group\">\n" +
        "<input type=\"text\" name=\"buyurlname\" placeholder=\"<?php echo lang_admin('name');?>\" value=\""+$("#addbuyurlname").val()+"\" class=\"form-control \">\n" +
        "</div>\n" +
        "<div class=\"input-group\">\n" +
        "<input type=\"text\" name=\"buyurls\" placeholder=\"<?php echo lang_admin('buyurl_html');?>\" value=\""+$("#addbuyurls").val()+"\" class=\"form-control \">\n" +
        "<span class=\"input-group-btn\">\n" +
        "<input type=\"button\" value=\"<?php echo lang_admin('delete');?>\" name=\"restore\" onclick=\"$(this).parent().parent().parent().parent().parent().next().remove();$(this).parent().parent().parent().parent().parent().remove();\" class=\"btn btn-gray\" />\n" +
        "</span>\n" +
        "</div>\n" +
        "</div></div></div>\n" +
        "<div class=\"clearfix blank20\"></div>\n";
    $(obj).parent().parent().parent().parent().parent().parent().prepend(htmlstr);
}

//加载购买链接
function loadbuyurl(){
    var buyurl=<?php echo $data['buyurl'];?>;
    $.each(buyurl, function (key, value) {
        var htmlstr="<div class=\"row\" name=\"buyurldiv\"><div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right\"></div><div class=\"col-xs-12 col-sm-8 col-md-9 col-lg-5 text-left\"><div class=\"form-inline\"  >\n" +
            "<div class=\"form-group\">\n" +
            "<input type=\"text\" name=\"buyurlname\" placeholder=\"<?php echo lang_admin('name');?>\" value=\""+value['buyurlname']+"\" class=\"form-control \">\n" +
            "</div>\n" +
            "<div class=\"input-group\">\n" +
            "<input type=\"text\" name=\"buyurls\" placeholder=\"<?php echo lang_admin('buyurl_html');?>\" value=\""+value['buyurls']+"\" class=\"form-control \">\n" +
            "<span class=\"input-group-btn\">\n" +
            "<input type=\"button\" value=\"<?php echo lang_admin('delete');?>\" name=\"restore\" onclick=\"$(this).parent().parent().parent().parent().parent().next().remove();$(this).parent().parent().parent().parent().parent().remove();\" class=\"btn btn-gray\" />\n" +
            "</span>\n" +
            "</div>\n" +
            "</div></div></div>\n" +
            "<div class=\"clearfix blank20\"></div>\n";
        $("#go-buy").prepend(htmlstr);
    });


}
