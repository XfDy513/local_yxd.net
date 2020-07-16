<div class="modal fade" id="template-category-shop-tag" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"  name="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="glyphicon glyphicon-remove"></i>
                            </span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    {lang_admin('attribute')}
                </h4>
            </div>
            <div class="modal-body">
                <form method="post" name="frmshopcategory" id="frmshopcategory" action="">
                    <input type="hidden" name="tagfrom" value="shopcategory" class="form-control">
                    <input type="hidden" name="id" value="" class="form-control id">

                       <div class="row" >

                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                           {lang_admin('name')}
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <input placeholder="{lang_admin('please_enter_the_signature_name_of_the_field_target')}" type="text" name="name" value="" class="name form-control">

                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>
                    <?php
                    $tplarray=include(ROOT.'/template/'.config::get('template_shopping_dir').'/tpltag/tag.config.php');
                    $tplarray=$tplarray['shopcategory'];
                    $tag_config=$data['setting'];
                    ?>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
						{lang_admin('column')}
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            {form::select('catid', $tag_config['catid'], category::optionshopping())}
                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">  </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <a class="btn btn-default" name="categoryshopadvanced">{lang_admin('advanced_mode')}</a>
                            <div class="blank20"></div>
                        </div>
                    </div>

                    <div name="categoryshopadvancedDIV" style="display:none;">

                            <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                                {lang_admin('number_of_headings')}
                            </div>
                            <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                                <input placeholder="{lang_admin('please_enter_the_caption_text_restriction')}" type="text" name="titlenum" value="" class="titlenum form-control" oninput="value=value.replace(/[^\d]/g,'')">

                            </div>
                            <div class="clearfix blank20"> </div>
							<div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                                {lang_admin('number_of_column_words')}
                            </div>
                            <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                                <input placeholder="{lang_admin('please_enter_text_restrictions_on_cover_content')}" type="text" name="textnum" value="" class="textnum form-control" oninput="value=value.replace(/[^\d]/g,'')">

                            </div>
                            <div class="clearfix blank20"> </div>

                            <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                                {lang_admin('label_template')}
                            </div>
                            <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                                <p class="p-tips"><i class="icon-info"></i> {lang_admin('if_you_are_not_familiar_with_the_operation_please_do_not_modify_the_following_options')}</p>
                                <div class="clearfix blank5"> </div>
                                {form::select('tagtemplate', $tag_config['tagtemplate'], $tplarray)}
                            </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button  type="button" name="close" class="btn btn-default" data-dismiss="modal">
                    {lang_admin('close')}
                </button>
                <button id="saveshopcategory" type="button" class="btn btn-primary" data-dismiss="modal">{lang_admin('preservation')}
                </button>
            </div>
        </div>
    </div>
</div>
<!-- 标签弹出框 -->
<script type="text/javascript">
    var currenteditor1;
    $(document).ready(function () {
        $('body.edit .visual-right').on("click","[data-target='#template-category-shop-tag']",function(e) {
            e.preventDefault();
            currenteditor1 = $(this).parent().parent().parent().siblings('.view');
            var eText = currenteditor1.find('.tag .tagname').html();
            $.post('{url("template/getshoptag")}',{'tag':eText},function(res){
                console.log(res);
                if(res.tagname!="" && res.tagname!=undefined) {
                    currenteditor1.find('.tag .tagname').html(res.tagname);     //修改html的内容
                }

                $('#frmshopcategory .id').val(res.id);
                $('#frmshopcategory .name').val(res.name);
                $('#frmshopcategory .textnum').val(res.setting.textnum);
                $('#frmshopcategory .titlenum').val(res.setting.titlenum);
                $('#frmshopcategory .catid').val(res.setting.catid);
                $('#frmshopcategory .tagtemplate').val(res.setting.tagtemplate);
            },'json');
        });

        //打开高级模式
        $("[name=categoryshopadvanced]").click(function(e) {
            if($('[name=categoryshopadvancedDIV]').attr('class')=='down'){
                $('[name=categoryshopadvancedDIV]').attr('style','display:none;');
                $("[name=categoryshopadvancedDIV]").removeClass();
            }else{
                $('[name=categoryshopadvancedDIV]').attr('style','display:block;');
                $("[name=categoryshopadvancedDIV]").addClass("down");
            }
        });

        //关闭  拖出的时候调用
        $("[name=close]").click(function(e) {
            if (publicalert){
              /*  publicprev.next().remove();*/
                publicnext.remove();
                publicalert=false;  //还原
            }
        });


        $("#saveshopcategory").click(function(e) {
            e.preventDefault();
            if($('#frmshopcategory .name').val() == ''){
                alert("{lang_admin('please_fill_in_the_label_name')}");
                $('#frmshopcategory .name').focus();
                return false;
            }
            if($('#frmshopcategory .textnum').val() == ''){
                alert("{lang_admin('please_fill_in_the_text_restrictions')}");
                $('#frmshopcategory .textnum').focus();
                return false;
            }
            if($('#frmshopcategory .titlenum').val() == ''){
                alert("{lang_admin('please_fill_in_the_caption_text_restriction')}");
                $('#frmshopcategory .titlenum').focus();
                return false;
            }
            if($('#frmshopcategory .catid').val()=='0'){
                alert("{lang_admin('please_select_the_column')}");
                $('#frmshopcategory .catid').focus();
                return false;
            }
            data = $('#frmshopcategory').serialize();
            $.post('{url("template/saveshoptag")}',data,function(res){
                $('#frmshopcategory')[0].reset();
                $('#frmshopcategory .id').val('');
                if (!publicalert){
                    currenteditor1.html(res);
                }else{
                    if (publicprev.length>0) {
                        var nextdata=publicprev.next().html();
                        nextdata=nextdata.replace(publictagname,'<div id="publictagname"></div>');
                        publicprev.next().html(nextdata);
                        publictagname="";
                        $("#publictagname").parent().parent().html(res);
                        oldvisual=$(".visual-right").html();   //记录
                    }else{
                        $(".visual-right").html(oldvisual);//还原
                    }
                    publicalert=false;  //还原
                }
            });
        });
    });

    $(document).ready(function(){
        $(".advanced-mode-btn").click(function(){
            $(".advanced").toggle(300);
        });
    });
</script>