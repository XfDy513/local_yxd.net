



//设置类型按钮
function ShoppingType(obj) {
    shopingtype=new Array();  //清空之前选择的
    prevshoopingid='';
    thisbutton="";
    prevshoopingid=$(obj).parent().prev().find('select').val();
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
        $(obj).css({"background":"#FF6801","border-width":"2px","margin":"0px 5px 15px 0px"});
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
//显示商品字段
function getshoppingcatid(){
    $("input[name='shoppingcatid']").each(function(i,item){
        str=item.value;
        var shoppingcatidstatic=false;
        arr=str.split(',');//注split可以用字符或字符串分割
        for(var i=0;i<arr.length;i++)
        {
            if( $("#catidshopping").val()==arr[i] && $("#catidshopping").val()!='0'){
                shoppingcatidstatic=true;
            }
        }
        if(shoppingcatidstatic){
            $(item).parent().attr("style","display:black");
        }else{
            $(item).parent().attr("style","display:none");
        }
    });
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
            htmltrl+=' <select  name="shoppingtypecatid"  onchange="getshopping();" class="form-control select tolast"><option value="0"><?php echo lang_admin("please_choose");?></option></select>';
            htmltrl+='</td>';
            htmltrl+='<td class="shpping-custom-value">';
            htmltrl+='<select  name="categoryid" onchange="setoverlay(this,true)" class="form-control select tolast"><option value="0"><?php echo lang_admin("please_choose");?></option></select>';
            htmltrl+='</td>';
            htmltrl+='<td class="shpping-custom-value input-group"><a onclick="ShoppingType(this)"   class="label label-warning" data-toggle="modal" data-target="#ShoppingType"><?php echo lang_admin("set_up");?><?php echo lang_admin("custom");?></a>';
            htmltrl+='<input type="text"  disabled value="" class="form-control"><input type="hidden" name="hiddenshopping" value="" class="form-control">';
            htmltrl+='</td>';
            htmltrl+='</tr>';
            $(obj).parent().parent().parent().append(htmltrl);
            var htmltrl='<td class="shpping-custom-value">';
            htmltrl+='<input type="button" name="delete" onclick="dropshoppingtype(this)" value=" <?php echo lang_admin("delete");?> " class="btn btn-gray">';
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

//saveshoppingtype 保存组合商品类型
function saveshoppingtype(){
    //保存组合商品
    var newcombined='';
    $("select[name='categoryid']").each(function(j,item) {
        if(item.value != '0'){
            if(newcombined=='') {
                newcombined= $(item).parent().next().find('input[name="hiddenshopping"]').val();
            }else{
                newcombined+='-'+$(item).parent().next().find('input[name="hiddenshopping"]').val();
            }
        }
    });
    $("#combined").val(newcombined); //赋值
}

//删除组合商品
function dropshoppingtype(obj){
    $(obj).parent().parent().remove();
}


//图片上传
$( function () {
    $( "#file_my_colormyimg1" ).fileinput( {
        uploadUrl: '/index.php?case=tool&act=uploadimage3',
        allowedFileExtensions: [ 'jpg', 'png', 'gif' ],
        maxFileSize: 1000,
        language: 'zh',
        maxFilesNum: 1,
        maxFileCount: 1,
        showPreview: false,
        showCaption: false,
        showUploadedThumbs: false
    } ).on( 'fileerror', function ( event, data, msg ) {
        alert( msg );
    } ).on( 'fileuploaded', function ( event, data, previewId, index ) {
        response = data.response;
        if ( response.file_my_colormyimg1.code == '0' ) {
            $('#my_colormyimg1').val(response.file_my_colormyimg1.name);
        } else {
            alert( response.file_my_colormyimg1.msg );
        }
    } );
} );




//加载购买链接
function loadbuyurl(){
    var buyurl=<?php echo $data['buyurl']==""?"{}":$data['buyurl']; ?>;
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
