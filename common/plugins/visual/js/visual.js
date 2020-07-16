function supportstorage() {
    if (typeof window.localStorage=='object')
        return true;
    else
        return false;
}

function handleSaveLayout1() {
    var e = $(".visual-right").html();
    if (!stopsave && e != window.demoHtml) {
        stopsave++;
        window.demoHtml = e;
        saveLayout1();
        stopsave--;
    }
}


function handleSaveLayout() {
    var e = $(".visual-right").html();
    if (e != window.demoHtml) {
        saveLayout();
        window.demoHtml = e
    }
}

var layouthistory;
function saveLayout1(){
    var data = layouthistory;
    if (!data) {
        data={};
        data.count = 0;
        data.list = [];
    }
    if (data.list.length>data.count) {
        for (i=data.count;i<data.list.length;i++)
            data.list[i]=null;
    }
    data.list[data.count] = window.demoHtml;
    data.count++;
    if (supportstorage()) {
        localStorage.setItem("layoutdata",JSON.stringify(data));
    }
    layouthistory = data;
	//console.log(data);
    	/*$.ajax({
        type: "POST",
        url: "/build/saveLayout",
        data: { layout: $('.visual-right').html() },
        success: function(data) {
            //updateButtonsVisibility();
        }
    });*/
}


function handleJsIds() {
    handleModalIds();
    handleAccordionIds();
    handleCarouselIds();
    handleTabsIds()
}


//自动生成class类
function handleJsClass(e,t) {
    div = $(e.target).find('.view>div');
    //console.log(div);
    div.each(function() {
        $(this).removeClass(function(index, classname){
            //console.log(index);
            arr = classname.split(' ');
            var r = '';
            for(key in arr){
                var re = /^layout_\d+$/gi;
                if(re.test(arr[key])) {
                    r += arr[key] + " ";
                }
            }
            return r;
        });
        var t = randomNumber();
    });
}


function handleAccordionIds() {
    var e = $(".visual-right #myAccordion");
    var t = randomNumber();
    var n = "panel-" + t;
    var r;
    e.attr("id", n);
    e.find(".panel").each(function(e, t) {
        r = "panel-element-" + randomNumber();
        $(t).find(".panel-title").each(function(e, t) {
            $(t).attr("data-parent", "#" + n);
            $(t).attr("href", "#" + r)
        });
        $(t).find(".panel-collapse").each(function(e, t) {
            $(t).attr("id", r)
        })
    })
}

function handleCarouselIds() {
    var e = $(".visual-right #myCarousel");
    var t = randomNumber();
    var n = "carousel-" + t;
    e.attr("id", n);
    e.find(".carousel-indicators li").each(function(e, t) {
        $(t).attr("data-target", "#" + n)
    });
    e.find(".left").attr("href", "#" + n);
    e.find(".right").attr("href", "#" + n)
}

function handleModalIds() {
    var e = $(".visual-right #myModalLink");
    var t = randomNumber();
    var n = "modal-container-" + t;
    var r = "modal-" + t;
    e.attr("id", r);
    e.attr("href", "#" + n);
    e.next().attr("id", n)
}

function handleTabsIds() {
    var e = $(".visual-right #myTabs");
    var t = randomNumber();
    var n = "tabs-" + t;
    e.attr("id", n);
    e.find(".tab-pane").each(function(e, t) {
        var n = $(t).attr("id");
        var r = "panel-" + randomNumber();
        $(t).attr("id", r);
        $(t).parent().parent().find("a[href=#" + n + "]").attr("href", "#" + r)
    })
}

function randomNumber() {
    return randomFromInterval(1, 1e6)
}

function randomFromInterval(e, t) {
    return Math.floor(Math.random() * (t - e + 1) + e)
}

function gridSystemGenerator() {
    $(".lyrow .preview input").bind("keyup",
        function() {
            var e = 0;
            var t = "";
            var n = false;
            var r = $(this).val().split(" ", 12);
            $.each(r,
                function(r, i) {
                    if (!n) {
                        if (parseInt(i) <= 0) n = true;
                        e = e + parseInt(i);
                        t += '<div class="col-md-' + i + '"><div class="row column ui-sortable"></div></div>'
                    }
                });
            if (e == 12 && !n) {
                $(this).parent().next().children().html(t);
                $(this).parent().prev().show()
            } else {
                $(this).parent().prev().hide()
            }
        })
}

function configurationElm(e, t) {
    $(".visual-right").delegate(".configuration > a", "click", function(e) {
        e.preventDefault();
        var t = $(this).parent().next().next().children();
        $(this).toggleClass("active");
        t.toggleClass($(this).attr("rel"))
    });
    $(".visual-right").delegate(".configuration .dropdown-menu a", "click", function(e) {
        e.preventDefault();
        var t = $(this).parent().parent();
        var n = t.parent().parent().next().next().children();
        t.find("li").removeClass("active");
        $(this).parent().addClass("active");
        var r = "";
        t.find("a").each(function() {
            r += $(this).attr("rel") + " "
        });
        t.parent().removeClass("open");
        n.removeClass(r);
        n.addClass($(this).attr("rel"))
    })
}


function clearDemo() {
    $(".visual-right").empty()
    layouthistory = null;
    if (supportstorage())
        localStorage.removeItem("layoutdata");
}

function removeMenuClasses() {
    $("#menu-layoutit li button").removeClass("active")
}

function changeStructure(e, t) {
    $("#download-layout ." + e).removeClass(e).addClass(t)
}

function cleanHtml(e) {
    $(e).parent().append($(e).children().html())
}

function downloadLayoutSrc() {
	formatSrc = getLayoutSrc();
    $("#download-layout").html(formatSrc);
    $("#downloadModal textarea").empty();
    $("#downloadModal textarea").val(formatSrc)
}

function undoLayout() {
    var data = layouthistory;
    //console.log(data);
    if (data) {
        if (data.count<2) return false;
        window.demoHtml = data.list[data.count-2];
        data.count--;
        $('.visual-right').html(window.demoHtml);
        if (supportstorage()) {
            localStorage.setItem("layoutdata",JSON.stringify(data));
        }
        return true;
    }
    return false;
}

function redoLayout() {
    var data = layouthistory;
    if (data) {
        if (data.list[data.count]) {
            window.demoHtml = data.list[data.count];
            data.count++;
            $('.visual-right').html(window.demoHtml);
            if (supportstorage()) {
                localStorage.setItem("layoutdata",JSON.stringify(data));
            }
            return true;
        }
    }
    return false;
}

function ReplaceAll(str, sptr, sptr1){
    while (str.indexOf(sptr) >= 0){
        str = str.replace(sptr, sptr1);
    }
    return str;
}


function getLayoutSrc() {
    var e = "";
    $("#download-layout").children().html($(".visual-right").html());
    var t = $("#download-layout").children();
	t.find('.tag').each(function(i){
		$(this).html($(this).find('.tagname').html());
	});
	t.find('.view .nav').each(function(i){
		$(this).replaceWith("{"+$(this).attr('rel')+"}");
	});

	//源码输入框转换
	t.find('.view .visua-code-show').each(function(i){
        code = $(this).siblings('.visua-code').html();
        $(this).siblings('.visua-code').remove();
        $(this).replaceWith(code);
	    //$(this).parent().html($(this).val());
	    //console.log($(this).val());
	    //$(this).replaceWith($(this).val());
    });

    t.find('.view .custtag').each(function(i){
        $(this).replaceWith("{"+$(this).attr('rel')+"}");
    });

    //大括号转码
    t.find('.view .viewarea').each(function(i){
        code = $(this).siblings('.codearea').html();
        code = ReplaceAll(code,'#[#','{');
        code = ReplaceAll(code,'#]#','}');
        $(this).siblings('.codearea').remove();
        $(this).replaceWith(code);
    });
    t.find(".preview, .configuration, .drag, .remove,.edit").remove();
    t.find("var.selected").remove();
    t.find(".lyrow").addClass("removeClean");
    t.find(".box-element").addClass("removeClean");
    t.find(".lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
	t.find(".lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
	t.find(".lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".lyrow .lyrow .lyrow .lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".lyrow .lyrow .lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".lyrow .lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".removeClean").remove();
    $("#download-layout .column").removeClass("ui-sortable");
    $("#download-layout .row-fluid").removeClass("clearfix").children().removeClass("column");
    if ($("#download-layout .container").length > 0) {
        changeStructure("row-fluid", "row")
    }
	//console.log($("#download-layout").html());
    formatSrc = $.htmlClean($("#download-layout").html(), {
        format: true,
        allowedAttributes: [["id"], ["preload"],["target"],["width"],["height"],["style"],["face"],["src"],["autoplay"],["controls"],['color'],['size'],["class"], ["data-toggle"], ["data-target"], ["data-parent"], ["role"], ["data-dismiss"], ["data-icomoon"],["aria-labelledby"], ["aria-hidden"], ["data-slide-to"], ["data-slide"],["data-src"],["data-sub-html"],["data-ride"],["data-sub-html"],["role"],["aria-hidden"],["onerror"],["href"],["center"],["aria-expanded"],["script"],["link"],["rel"],["placeholder"],["onfocus"],["onblur"],["onclick"]]
    });
    formatSrc = formatSrc.replace(/\(&quot;/g,"('");
    formatSrc = formatSrc.replace(/&quot;\)/g,"')");
    return formatSrc;
}

var currentDocument = null;
var timerSave = 2e3;
var stopsave = 0;
var startdrag = 0;
var demoHtml = $(".visual-right").html();


$(window).resize(function() {
    $("body").css("min-height", $(window).height() - 90);
    $(".visual-right").css("min-height", $(window).height() - 160)
});

//清空规则
function restoreData(){
    return false;
    if (supportstorage()) {
        layouthistory = JSON.parse(localStorage.getItem("layoutdata"));
        if (!layouthistory) return false;
        window.demoHtml = layouthistory.list[layouthistory.count-1];
        if (window.demoHtml) $(".visual-right").html(window.demoHtml);
    }

}
//判断框颜色   空框加上颜色  右侧拖拽功能
/*
function setbackcolor2(){

    $("#visual-right .lyrow .view .ui-sortable").each(function(j){
        if($(this).find(".visual-drag-box").length>0){
            $(this).removeAttr('style');
        }else{
            $(this).css({
                "background-color":"rgb(250, 255, 189,  0.5)",
                "min-height":"40px"
            });
        }
    });
    // container-fluid-box 不能插入  container-box
    $(".container-fluid-box").each(function(j,e){
        //全屏不能插入全屏
        if( $(this).find(".container-fluid-box").length>0){
            //全屏不能插入全屏
            $(this).find(".container-fluid-box").remove();
            //全屏 不能插入宽屏
            $(this).find(".container-box").remove();
           /!* stopsave++;
            if (undoLayout()) initContainer();
            stopsave--;*!/
        }
    });
    $(".container-box").each(function(j,e){
        //宽屏 不能插入全屏  //宽屏 不能插入宽屏
        if( $(this).find(".container-fluid-box").length>0 || $(this).find(".container-box").length>0){
              //宽屏 不能插入全屏
            $(this).find(".container-fluid-box").remove();
             //宽屏 不能插入宽屏
             $(this).find(".container-box").remove();
          /!*  stopsave++;
            if (undoLayout()) initContainer();
            stopsave--;*!/
        }
    });
    oldvisual=$(".visual-right").html();
}
*/

/*拖动规则*/
var nosortable=false;
var nosortablepublicnext;
function initContainer(){
    $(".visual-right, .visual-right .column").sortable({
        connectWith: ".column",
        opacity: 1,
        handle: ".drag",
        start: function(e,t) {
            if (!startdrag) stopsave++;
            startdrag = 1;
            var zz=$(this);
        },
        change: function(e, t) {
            //先删原来的上下箭头
            $('.ui-sortable-helper-arrow-bottom').remove();
            //在指定的地方 增加上下箭头
            $('.ui-sortable-placeholder').before("<div class=\"ui-sortable-helper-arrow-bottom\">\n" +
                    "        <span class=\"arrow arrow-down\"></span>\n" +
                    "    </div>\n");
            //判断组件不能拖入全屏
            setckeck(e.target.innerHTML);
        },
        beforeStop: function(e,t) {
            publicprev=$(".ui-sortable-helper-arrow-bottom").prev();  //获取上一个节点
            publicnext=$(".ui-sortable-helper-arrow-bottom").next();  //获取下一个
            if(nosortable){
                $(".visual-right").html(oldvisual);
            }
            //先删原来的上下箭头
            $('.ui-sortable-helper-arrow-bottom').remove();

        },
        stop: function(e,t) {
           // setbackcolor2();  //判断框颜色
            if(stopsave>0) stopsave--;
            startdrag = 0;
            setbackcolorl(); //判断框颜色  判断宽屏和全屏  还原
            oldvisual=$(".visual-right").html();
        }
    });
    configurationElm();
}

//拖出 弹出框和节点获取
var publicalert=false;
var publicprev;
var publicnext;
var publictagname;
function alerttag(targethtml,isbuytag,buymodulesname) {
    var str = /({|#\[#)tag_(category|content|shop_content|shop_category)_(.*?)(}|#]#)/g;
    var targethtmldata=targethtml.match(str);
    if(targethtmldata!=null){
        var eText = targethtmldata[0];
        if (eText!=""){
            //增加条件
            publicalert=true;
            if(isbuytag) {
                $.post(template_gettag, {'tag': eText,"buymodulesname":buymodulesname}, function (res) {
                    publictagname = eText;
                    var neweText = eText.replace('{','');
                    neweText = neweText.replace('}','');
                    var newbuymodulesname=res['buymodulesname'][neweText];

                    var category = new RegExp('category');//要查找的字符串为'category'
                    var content = new RegExp('content');
                    var shop_content = new RegExp('shop_content');
                    var shop_category = new RegExp('shop_category');
                    //边栏收缩
                    if ($("#visual-left-btn").hasClass('closed')) {
                        $('.visual-left').animate({left: '-280px'});
                        $("#visual-left-btn").removeClass('closed');
                        $('#visual-right').animate({'margin-left': '0px'});
                        $('#visual-top').animate({'margin-left': '50px'});
                        $('#visual-bottom').animate({'margin-left': '50px'});
                        $('#visual-left-btn').animate({left: '50px'});
                    }
                    if (category.test(eText)) {
                        //字符串存
                        $('#frmcategory .id').val("");
                        $('#frmcategory .name').val("");
                        $('#frmcategory .textnum').val(res.setting.textnum?res.setting.textnum:newbuymodulesname.textnum);
                        $('#frmcategory .titlenum').val(res.setting.titlenum?res.setting.titlenum:newbuymodulesname.titlenum);
                        $('#frmcategory .catid').val(res.setting.catid?res.setting.catid:newbuymodulesname.catid);
                        $('#frmcategory .tagtemplate').val(res.setting.tagtemplate?res.setting.tagtemplate:newbuymodulesname.tagtemplate);
                        $("#tag-template").attr("style", "display: none;");
                        $("[name='tag-template']").attr("style", "display: none;");

                        //打开弹出框
                        $('#template-category-tag').modal({
                            backdrop: 'static',//点击空白处不关闭
                            keyboard: false,//按下ESC时不关闭
                            show: true//默认不显示
                        });
                    }
                    else if (content.test(eText)) {
                        //清空
                        $('#frmcontent .id').val("");
                        $('#frmcontent .name').val("");
                        $('#frmcontent #tagcontent').val(res.tagcontent?res.tagcontent:newbuymodulesname.tagcontent);
                        $('#frmcontent .catid').val(res.setting.catid?res.setting.catid:newbuymodulesname.catid);
                        $('#frmcontent #onlymodify').val(res.setting.onlymodify?res.setting.onlymodify:newbuymodulesname.onlymodify);
                        $('#frmcontent .son').val(res.setting.son?res.setting.son:newbuymodulesname.son);
                        $('#frmcontent .typeid').val(res.setting.typeid?res.setting.typeid:newbuymodulesname.typeid);
                        $('#frmcontent .spid').val(res.setting.spid?res.setting.spid:newbuymodulesname.spid);
                        $('#frmcontent .length').val(res.setting.length?res.setting.length:newbuymodulesname.length);
                        $('#frmcontent .introduce_length').val(res.setting.introduce_length?res.setting.introduce_length:newbuymodulesname.introduce_length);
                        $('#frmcontent .ordertype').val(res.setting.ordertype?res.setting.ordertype:newbuymodulesname.ordertype);
                        $('#frmcontent .istop').val(res.setting.istop?res.setting.istop:newbuymodulesname.istop);
                        $('#frmcontent .limit').val(res.setting.limit?res.setting.limit:newbuymodulesname.limit);
                        $('#frmcontent #thumbcheckbox').attr('checked', res.setting.thumb == '1');
                        res.setting.thumb=res.setting.thumb?res.setting.thumb:newbuymodulesname.thumb;
                        if (res.setting.thumb == '1' || res.setting.thumb == 'on') {
                            $('#frmcontent #thumb').val('on');
                        } else {
                            $('#frmcontent #thumb').val('off');
                        }
                        res.setting.attr1=res.setting.attr1!=""?res.setting.attr1:newbuymodulesname.attr1;
                        if (res.setting.attr1 == 0) {
                            res.setting.attr1 = "";
                        }
                        $('#frmcontent #attr1').val(res.setting.attr1);
                        $('#frmcontent .tagtemplate').val(res.setting.tagtemplate?res.setting.tagtemplate:newbuymodulesname.tagtemplate);

                        $("#tag-content-template").attr("style", "display: none;");
                        $("[name='tag-content-template']").attr("style", "display: none;");

                        //打开弹出框
                        $('#template-content-tag').modal({
                            backdrop: 'static',//点击空白处不关闭
                            keyboard: false,//按下ESC时不关闭
                            show: true//默认不显示
                        });
                    }
                    else if (shop_category.test(eText)) {
                        //清空
                        $('#frmshopcategory .id').val("");
                        $('#frmshopcategory .name').val("");
                        $('#frmshopcategory .textnum').val(res.setting.textnum?res.setting.textnum:newbuymodulesname.textnum);
                        $('#frmshopcategory .titlenum').val(res.setting.titlenum?res.setting.titlenum:newbuymodulesname.titlenum);
                        $('#frmshopcategory .catid').val(res.setting.catid?res.setting.catid:newbuymodulesname.catid);
                        $('#frmshopcategory .tagtemplate').val(res.setting.tagtemplate?res.setting.tagtemplate:newbuymodulesname.tagtemplate);

                        $("#tag-categoryshop-template").attr("style", "display: none;");
                        $("[name='tag-categoryshop-template']").attr("style", "display: none;");

                        //打开弹出框
                        $('#template-category-shop-tag').modal({
                            backdrop: 'static',//点击空白处不关闭
                            keyboard: false,//按下ESC时不关闭
                            show: true//默认不显示
                        });
                    }
                    else if (shop_content.test(eText)) {
                        $('#frmcontent .id').val("");
                        $('#frmcontent .name').val("");
                        $('#frmcontent #tagcontent').val(res.tagcontent?res.tagcontent:newbuymodulesname.tagcontent);
                        $('#frmcontent #onlymodify').val(res.setting.onlymodify?res.setting.onlymodify:newbuymodulesname.onlymodify);
                        $('#frmshopcontent .catid').val(res.setting.catid?res.setting.catid:newbuymodulesname.catid);
                        $('#frmshopcontent .son').val(res.setting.son?res.setting.son:newbuymodulesname.son);
                        $('#frmshopcontent .typeid').val(res.setting.typeid?res.setting.typeid:newbuymodulesname.typeid);
                        $('#frmshopcontent .spid').val(res.setting.spid?res.setting.spid:newbuymodulesname.spid);
                        $('#frmshopcontent .length').val(res.setting.length?res.setting.length:newbuymodulesname.length);
                        $('#frmshopcontent .introduce_length').val(res.setting.introduce_length?res.setting.introduce_length:newbuymodulesname.introduce_length);
                        $('#frmshopcontent .ordertype').val(res.setting.ordertype?res.setting.ordertype:newbuymodulesname.ordertype);
                        $('#frmshopcontent .istop').val(res.setting.istop?res.setting.istop:newbuymodulesname.istop);
                        $('#frmshopcontent .limit').val(res.setting.limit?res.setting.limit:newbuymodulesname.limit);

                        $('#frmcontent #thumbcheckbox').attr('checked', res.setting.thumb == '1');
                        res.setting.thumb=res.setting.thumb?res.setting.thumb:newbuymodulesname.thumb;
                        if (res.setting.thumb == '1' || res.setting.thumb == 'on') {
                            $('#frmcontent #thumb').val('on');
                        } else {
                            $('#frmcontent #thumb').val('off');
                        }
                        res.setting.attr1=res.setting.attr1!=""?res.setting.attr1:newbuymodulesname.attr1;
                        if (res.setting.attr1 == 0) {
                            res.setting.attr1 = "";
                        }
                        $('#frmshopcontent #attr1').val(res.setting.attr1);
                        $('#frmshopcontent .tagtemplate').val(res.setting.tagtemplate?res.setting.tagtemplate:newbuymodulesname.tagtemplate);

                        $("#tag-contentshop-template").attr("style", "display: none;");
                        $("[name='tag-contentshop-template']").attr("style", "display: none;");

                        //打开弹出框
                        $('#template-content-shop-tag').modal({
                            backdrop: 'static',//点击空白处不关闭
                            keyboard: false,//按下ESC时不关闭
                            show: true//默认不显示
                        });
                    }
                }, 'json');
            }
            else{
                publictagname=eText;
                var category = new RegExp('category');//要查找的字符串为'category'
                var content = new RegExp('content');
                var shop_content = new RegExp('shop_content');
                var shop_category = new RegExp('shop_category');
                //边栏收缩
                if($("#visual-left-btn").hasClass('closed')){
                    $('.visual-left').animate({left: '-280px'});
                    $("#visual-left-btn").removeClass('closed');
                    $('#visual-right').animate({'margin-left' : '0px'});
                    $('#visual-top').animate({'margin-left' : '50px'});
                    $('#visual-bottom').animate({'margin-left' : '50px'});
                    $('#visual-left-btn').animate({left: '50px'});
                }
                if(category.test(eText)) {
                    //字符串存
                    //清空
                    $('#frmcategory .id').val("");
                    $('#frmcategory .name').val("");
                    $('#frmcategory .textnum').val("0");
                    $('#frmcategory .titlenum').val("0");
                    $('#frmcategory .catid').val("0");
                    $('#frmcategory .tagtemplate').val("");
                    $("#tag-template").removeAttr("style");
                    $("[name='tag-template']").removeAttr("style");
                    //打开弹出框
                    $('#template-category-tag').modal({
                        backdrop:'static',//点击空白处不关闭
                        keyboard: false,//按下ESC时不关闭
                        show:true//默认不显示
                    });
                }
                else if(content.test(eText)){
                    //清空
                    $('#frmcontent .id').val("");
                    $('#frmcontent .name').val("");
                    $('#frmcontent #tagcontent').val("");
                    $('#frmcontent .catid').val(0);
                    $('#frmcontent #onlymodify').val("");
                    $('#frmcontent .son').val(0);
                    $('#frmcontent .typeid').val(0);
                    $('#frmcontent .spid').val(0);
                    $('#frmcontent .length').val(20);
                    $('#frmcontent .introduce_length').val(20);
                    $('#frmcontent .ordertype').val("");
                    $('#frmcontent .istop').val(0);
                    $('#frmcontent .limit').val(10);
                    $('#frmcontent #thumbcheckbox').attr('checked',0);
                    $('#frmcontent #thumb').val('on');
                    $("#tag-content-template").removeAttr("style");
                    $("[name='tag-content-template']").removeAttr("style");
                    //打开弹出框
                    $('#template-content-tag').modal({
                        backdrop:'static',//点击空白处不关闭
                        keyboard: false,//按下ESC时不关闭
                        show:true//默认不显示
                    });
                }
                else if(shop_category.test(eText)){
                    //清空
                    $('#frmshopcategory .id').val("");
                    $('#frmshopcategory .name').val("");
                    $('#frmshopcategory .textnum').val(0);
                    $('#frmshopcategory .titlenum').val(0);
                    $('#frmshopcategory .catid').val(0);
                    $('#frmshopcategory .tagtemplate').val("");
                    $("#tag-categoryshop-template").removeAttr("style");
                    $("[name='tag-categoryshop-template']").removeAttr("style");

                    //打开弹出框
                    $('#template-category-shop-tag').modal({
                        backdrop:'static',//点击空白处不关闭
                        keyboard: false,//按下ESC时不关闭
                        show:true//默认不显示
                    });
                }
                else if(shop_content.test(eText)){
                    //清空
                    $('#frmshopcontent .id').val("");
                    $('#frmshopcontent .name').val("");
                    $('#frmcontent #tagcontent').val("");
                    $('#frmcontent #onlymodify').val("");
                    $('#frmshopcontent .catid').val(0);
                    $('#frmshopcontent .son').val(0);
                    $('#frmshopcontent .typeid').val(0);
                    $('#frmshopcontent .spid').val(0);
                    $('#frmshopcontent .length').val(20);
                    $('#frmshopcontent .introduce_length').val(20);
                    $('#frmshopcontent .ordertype').val("");
                    $('#frmshopcontent .istop').val(0);
                    $('#frmshopcontent .limit').val(10);
                    $('#frmcontent #thumbcheckbox').attr('checked',0);
                    $('#frmcontent #thumb').val('on');
                    $("#tag-contentshop-template").removeAttr("style");
                    $("[name='tag-contentshop-template']").removeAttr("style");
                    //打开弹出框
                    $('#template-content-shop-tag').modal({
                        backdrop:'static',//点击空白处不关闭
                        keyboard: false,//按下ESC时不关闭
                        show:true//默认不显示
                    });
                }
            }
        }
    }
}

//判断组件不能拖入全屏
function setckeck(moduleshtml){
        //获取当前位置的组件   返回数组
        var  elem = $(".ui-sortable-placeholder").parentsUntil('.visual-right');
        if (elem.length==0)  nosortable=false;
        for (var i=0;i<elem.length;i++)
        {
            //判断拖拽是否有全屏
            if(moduleshtml.indexOf("container-fluid-box")>=0){
                //全屏不能 插入到全屏 也不能插入到宽屏
                if($(elem[i]).find('.container-fluid-box').length>0 || $(elem[i]).find('.container-box').length>0){
                    //先删原来的上下箭头
                    //$('.ui-sortable-helper-arrow-bottom').remove();
                    //指定位置生成删除
                    //$('.ui-sortable-placeholder').remove();
                    //条件
                    nosortable=true;
                    break;
                }else{
                    nosortable=false;
                }
            }
            //判断拖拽是否有宽屏
            else if (moduleshtml.indexOf("container-box")>=0){
                //宽屏 不能插入宽屏
                if($(elem[i]).find('.container-box').length>0){
                    //先删原来的上下箭头
                    //$('.ui-sortable-helper-arrow-bottom').remove();
                    //指定位置生成删除
                    //$('.ui-sortable-placeholder').remove();
                    //条件
                    nosortable=true;
                    break;
                }else{
                    nosortable=false;
                }
            }
        }

}

//判断框颜色   空框加上颜色  判断宽屏和全屏  还原
function setbackcolorl(){
    $("#visual-right .lyrow .view .ui-sortable").each(function(j){
        if($(this).find(".visual-drag-box").length>0){
            $(this).removeAttr('style');
        }else{
            $(this).css({
                "background-color":"rgb(250, 255, 189,  0.5)",
                "min-height":"40px"
            });

        }
    });

   // container-fluid-box 不能插入  container-box
    $(".container-fluid-box").each(function(j,e){
           /* //全屏不能插入全屏
            $(this).find(".container-fluid-box").remove();
            //全屏 不能插入宽屏
            $(this).find(".container-box").remove();*/
           //$(this).find(".container-box").length>0 ||  全屏 不能插入宽屏
        if ($(this).find(".container-fluid-box").length>0) {
            $(".visual-right").html(oldvisual);
        }
    });
    $(".container-box").each(function(j,e){
           /* //宽屏 不能插入全屏
            $(this).find(".container-fluid-box").remove();
            //宽屏 不能插入宽屏
            $(this).find(".container-box").remove();*/
           if ($(this).find(".container-box").length>0 ||  $(this).find(".container-fluid-box").length>0) {
               $(".visual-right").html(oldvisual);
           }
    });
    oldvisual=$(".visual-right").html();
}

//保存判断框颜色   去掉全部颜色
function savebackcolorl(){
    $("#visual-right .lyrow .view .ui-sortable").each(function(j){
            $(this).removeAttr('style');
    });
}


//拖入规则
var oldvisual=null;  //还原的页面
$(document).ready(function() {
    restoreData();
    $("body").css("min-height", $(window).height() - 90);
    $(".visual-right").css("min-height", $(window).height() - 160);
    $(".visual-right, .visual-right .column").sortable({
        connectWith: ".column",
        opacity: .35,
        handle: ".drag",
        cursor: 'move',
        tolerance: "pointer"
    });
    //布局拖入规则
    $(".visual-left #tab_3  .lyrow").draggable({
        connectToSortable: ".visual-right",
        helper: "clone",
        handle: ".drag",
        start: function(e,t) {
            handleJsClass(e,t);
            if (!startdrag) stopsave++;
            startdrag = 1;
        },
        drag: function(e, t) {
 	//先删原来的上下箭头
            $('.ui-sortable-helper-arrow-bottom').remove();
            //在指定的地方 增加上下箭头
            $('.ui-sortable-placeholder').before("<div class=\"ui-sortable-helper-arrow-bottom\">\n" +
                "        <span class=\"arrow arrow-down\"></span>\n" +
                "    </div>\n");
            t.helper.width(400);
        },
        stop: function(e, t) {
	//拖动结束 先删 上下箭头
            $('.ui-sortable-helper-arrow-bottom').remove();
            $(".visual-right .column").sortable({
                opacity: .35,
                connectWith: ".column",
                start: function(e,t) {
                    if (!startdrag) stopsave++;
                    startdrag = 1;
                },
                stop: function(e,t) {
                    if(stopsave>0) stopsave--;
                    startdrag = 0;
                }
            });
            if(stopsave>0) stopsave--;
            startdrag = 0;
            setbackcolorl();  //判断框颜色
            //$(e.toElement).css("background","red");   插入的位置节点
        }
    });
    //模块拖入规则
    $(".visual-left #tab_2 .visual-drag-box ").draggable({
        connectToSortable: ".visual-right .column",
        helper: "clone",
        handle: ".drag",
        start: function(e,t) {
            if (!startdrag) stopsave++;
            startdrag = 1;
        },
        drag: function(e, t) {
//先删原来的上下箭头
            $('.ui-sortable-helper-arrow-bottom').remove();
            //在指定的地方 增加上下箭头
            if(!nosortable)
            $('.ui-sortable-placeholder').before("<div class=\"ui-sortable-helper-arrow-bottom\">\n" +
                "        <span class=\"arrow arrow-down\"></span>\n" +
                "    </div>\n");
            nosortablepublicnext=$(".ui-sortable-placeholder").next();  //获取下一个
            t.helper.width(125);
           /* $(t.helper[0]).html("<div class=\"ui-sortable-helper-arrow-top\">\n" +
                "        <span class=\"arrow arrow-up\"></span>\n" +
                "    </div>\n" +
                "    <div class=\"ui-sortable-helper-arrow-bottom\">\n" +
                "        <span class=\"arrow arrow-down\"></span>\n" +
                "    </div>\n");*/
        },
        stop: function(e, t) {
            if(nosortable){
                nosortablepublicnext.prev().remove();
            }else
            alerttag(e.target.innerHTML,false);  //弹出框编辑标签

            //拖动结束 先删 上下箭头
            $('.ui-sortable-helper-arrow-bottom').remove();
            handleJsIds();
            if(stopsave>0) stopsave--;
            startdrag = 0;
            setbackcolorl();  //判断框颜色
        }
    });
    //组件拖入规则
    $(".visual-left #tab_1 .lyrow").draggable({
        connectToSortable: ".visual-right",
        helper: "clone",
        handle: ".drag",
        start: function(e,t) {
            if (!startdrag) stopsave++;
            startdrag = 1;
        },
        drag: function(e, t) {
            //先删原来的上下箭头
            $('.ui-sortable-helper-arrow-bottom').remove();
            //在指定的地方 增加上下箭头
            if(!nosortable)
            $('.ui-sortable-placeholder').before("<div class=\"ui-sortable-helper-arrow-bottom\">\n" +
                "        <span class=\"arrow arrow-down\"></span>\n" +
                "    </div>\n");
            nosortablepublicnext=$(".ui-sortable-placeholder").next();  //获取下一个
            t.helper.width(239);
        },
        stop: function(e,t) {
            if(nosortable){
                nosortablepublicnext.prev().remove();
            }else
            alerttag(e.target.innerHTML,false);  //弹出框编辑标签
            //拖动结束 先删 上下箭头
            $('.ui-sortable-helper-arrow-bottom').remove();
            handleJsIds();
            if(stopsave>0) stopsave--;
            startdrag = 0;
            setbackcolorl();  //判断框颜色

        }
    });
    //购买组件拖入规则
    $(".visual-left #tab_4 .lyrow").draggable({
        connectToSortable: ".visual-right",
        helper: "clone",
        handle: ".drag",
        start: function(e,t) {
            if (!startdrag) stopsave++;
            startdrag = 1;
        },
        drag: function(e, t) {
            //先删原来的上下箭头
            $('.ui-sortable-helper-arrow-bottom').remove();
            //在指定的地方 增加上下箭头
            if(!nosortable)
                $('.ui-sortable-placeholder').before("<div class=\"ui-sortable-helper-arrow-bottom\">\n" +
                    "        <span class=\"arrow arrow-down\"></span>\n" +
                    "    </div>\n");
            nosortablepublicnext=$(".ui-sortable-placeholder").next();  //获取下一个
            t.helper.width(239)
        },
        stop: function(e,t) {
            if(nosortable){
                nosortablepublicnext.prev().remove();
            }else {
                var buymodulesname = $(this).next().html();
                alerttag(e.target.innerHTML, true, buymodulesname);  //弹出框编辑标签
            }
            //拖动结束 先删 上下箭头
            $('.ui-sortable-helper-arrow-bottom').remove();
            handleJsIds();
            if(stopsave>0) stopsave--;
            startdrag = 0;
            setbackcolorl();  //判断框颜色

        }
    });
    initContainer();


    $("[data-target='#downloadModal']").click(function(e) {
        e.preventDefault();
        downloadLayoutSrc()
    });
    $("#download").click(function() {
        downloadLayout();
        return false
    });
    $("#downloadhtml").click(function() {
        downloadHtmlLayout();
        return false
    });
    $("#edit").click(function() {
        $("body").removeClass("devpreview sourcepreview");
        $("body").addClass("edit");
        removeMenuClasses();
        $(this).addClass("active");
        return false
    });
    $("#clear").click(function(e) {
        e.preventDefault();
        clearDemo()
    });
    $("#devpreview").click(function() {
        $("body").removeClass("edit sourcepreview");
        $("body").addClass("devpreview");
        removeMenuClasses();
        $(this).addClass("active");
        return false
    });
    $("#sourcepreview").click(function() {
        $("body").removeClass("edit");
        $("body").addClass("devpreview sourcepreview");
        removeMenuClasses();
        $(this).addClass("active");
        return false
    });
    $(".nav-header").click(function() {
        $(".visual-left .boxes, .visual-left .rows").hide();
        $(this).next().slideDown()
    });
    //removeElm();
    //console.log('2222');
    configurationElm();
    gridSystemGenerator();
    setInterval(function() {handleSaveLayout1()}, timerSave);

    $('#undo').click(function(){
        stopsave++;
        //console.log(stopsave);
        if (undoLayout()) initContainer();
        stopsave--;
    });
    $('#redo').click(function(){
        stopsave++;
        if (redoLayout()) initContainer();
        stopsave--;
    });
	setbackcolorl();  //判断框颜色
    oldvisual=$(".visual-right").html(); //先加载
});