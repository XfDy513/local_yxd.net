<div class="modal fade" id="template-content-shop-tag" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" name="close" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="glyphicon glyphicon-remove"></i>
                            </span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    {lang_admin('attribute')}
                </h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frmshopcontent" name="frmshopcontent" action="">
                    <input type="hidden" name="id" class="id" value="">
                    <input type="hidden" name="tagfrom" value="shopcontent" class="form-control">

                    <div class="row">

                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            {lang_admin('name')}
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <input placeholder="{lang_admin('please_enter_the_signature_name_of_the_field_target')}" type="text" name="name" value="" class="name form-control">

                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>

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
                            <a class="btn btn-default" name="contentshpadvanced">{lang_admin('advanced_mode')}</a>
                            <div class="blank20"></div>
                        </div>
                    </div>

                    <div name="contentshpadvancedDIV" style="display:none;">
                            <div class="row">
                                <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                                    {lang_admin('subcolumn')}
                                </div>
                                <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                                    <select id="son" name="son" class="form-control select son">
                                        <option value="1">
                                            {lang_admin('yes')}
                                        </option>
                                        <option value="0">
                                            {lang_admin('no')}
                                        </option>

                                    </select>
                                </div>
                            </div>
                            <div class="clearfix blank20">
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                                    {lang_admin('type')}
                                </div>
                                <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                                    {form::select('typeid', $tag_config['typeid'], type::option())}
                                </div>
                            </div>
                            <div class="clearfix blank20">
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                                    {lang_admin('special')}
                                </div>
                                <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                                    {form::select('spid', $tag_config['spid'], special::option())}
                                </div>
                            </div>
                            <div class="clearfix blank20">
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                                    {lang_admin('number_of_caption_intercepted_words')}
                                </div>
                                <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                                    <input type="text" name="length" id="length" value="20" class="length form-control" oninput="value=value.replace(/[^\d]/g,'')">
                                </div>
                            </div>
                            <div class="clearfix blank20">
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                                    {lang_admin('introduction_of_intercepted_words')}
                                </div>
                                <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                                    <input type="text" name="introduce_length" id="introduce_length" value="-1" class="form-control introduce_length">
                                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="" title="{lang_admin('1_no_limit_0_no_call')}" oninput="value=value.replace(/[^\d]/g,'')">
                                        </span>
                                </div>
                            </div>
                            <div class="clearfix blank20">
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                                    {lang_admin('sort')}
                                </div>
                                <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                                    <select id="ordertype" name="ordertype" class="form-control ordertype select">
                                        <option value="adddate-desc">
                                            {lang_admin('contact_informationupdate_in_reverse_chronological_order')}
                                        </option>
                                        <option value="aid-desc">
                                            {lang_admin('latest_in_reverse_order_of_aids')}
                                        </option>
                                        <option value="aid-asc">
                                            {lang_admin('earliest_in_order_of_aids')}
                                        </option>
                                        <option value="view-desc">
                                            {lang_admin('hottest_in_reverse_order_of_view')}
                                        </option>
                                        <option value="comment_num-desc">
                                            {lang_admin('comments_in_reverse_order_of_comment_num')}
                                        </option>
                                        <option value="rand()">
                                            {lang_admin('random')}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix blank20">
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                                    {lang_admin('call_top_content')}
                                </div>
                                <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                                    <select id="istop" name="istop" class="form-control istop select">
                                        <option value="0">
                                            {lang_admin('no')}
                                        </option>
                                        <option value="1">
                                            {lang_admin('yes')}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix blank20">
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                                    {lang_admin('number_of_call_records')}
                                </div>
                                <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                                    <input type="text" name="limit" id="limit" value="3" class="limit form-control" oninput="value=value.replace(/[^\d]/g,'')">
                                </div>
                            </div>
                            <div class="row" style="display:none ">
                                <input   type="text" name="tagcontent" id="tagcontent" value=" " class="name form-control">
                                <input   type="text" name="onlymodify" id="onlymodify" value=" " class="name form-control">
                            </div>
                            <div class="clearfix blank20">
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                                    {lang_admin('thumbnail')}
                                </div>
                                <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                                    <input type="checkbox" value="1" class="thumb"  id="thumbcheckbox"  >
                                    <input type="hidden" name="thumb" id="thumb" value="off" />
                                    <script>
                                        $("#thumbcheckbox").click(function(){
                                            if ($(this).is(":checked")) {
                                                $("[name=thumb]").val("on");
                                            } else {
                                                $("[name=thumb]").val("off");
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="clearfix blank20">
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                                    {lang_admin('recommendation_bit')}
                                </div>
                                <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                                    <?php
                                    $tplarray=include(ROOT.'/template/'.config::get('template_shopping_dir').'/tpltag/tag.config.php');
                                    $tplarray=$tplarray['shopcontent'];
                                    $set=settings::getInstance();
                                    $sets=$set->getrow(array('tag'=>'table-archive'));
                                    $ds=unserialize($sets['value']);
                                    preg_match_all('%\(([\d\w\/\.-]+)\)(\S+)%s',$ds['attr1'],$result,PREG_SET_ORDER);
                                    $sdata=array();
                                    foreach ($result as $res) $sdata[$res[1]]=$res[2];
                                    echo form::select('attr1', $tag_config['attr1'], $sdata);
                                    ?>
                                </div>
                            </div>
                            <div class="clearfix blank20">
                            </div>
                            <div class="row tag-template">
                                <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                                    {lang_admin('label_template')}
                                </div>
                                <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                                    <p class="p-tips"><i class="icon-info"></i> {lang_admin('if_you_are_not_familiar_with_the_operation_please_do_not_modify_the_following_options')}</p>
                                    <div class="clearfix blank5"> </div>
                                    {form::select('tagtemplate', $tag_config['tagtemplate'], $tplarray)}
                                </div>
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
                <button id="saveshopcontent" type="button" class="btn btn-primary" data-dismiss="modal">{lang_admin('preservation')}
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var currenteditor;
    $(document).ready(function () {
        $('body.edit .visual-right').on("click","[data-target='#template-content-shop-tag']",function(e) {
            e.preventDefault();
            currenteditor = $(this).parent().parent().parent().parent().find('.view');
            var eText = currenteditor.find('.tag .tagname').html();
            $.post('{url("template/getshoptag")}',{'tag':eText},function(res){
                console.log(res);
                if(res.tagname!="" && res.tagname!=undefined) {
                    currenteditor.find('.tag .tagname').html(res.tagname);     //修改html的内容
                }

                $('#frmshopcontent .id').val(res.id);
                $('#frmshopcontent .name').val(res.name);
                $('#frmcontent #tagcontent').val(res.tagcontent);
                $('#frmcontent #onlymodify').val(res.setting.onlymodify);
                $('#frmshopcontent .catid').val(res.setting.catid);
                $('#frmshopcontent .son').val(res.setting.son);
                $('#frmshopcontent .typeid').val(res.setting.typeid);
                $('#frmshopcontent .spid').val(res.setting.spid);
                $('#frmshopcontent .length').val(res.setting.length);
                $('#frmshopcontent .introduce_length').val(res.setting.introduce_length);
                $('#frmshopcontent .ordertype').val(res.setting.ordertype);
                $('#frmshopcontent .istop').val(res.setting.istop);
                $('#frmshopcontent .limit').val(res.setting.limit);

                $('#frmcontent #thumbcheckbox').attr('checked',res.setting.thumb=='1');
                if (res.setting.thumb=='1' || res.setting.thumb=='on'){
                    $('#frmcontent #thumb').val('on');
                }else{
                    $('#frmcontent #thumb').val('off');
                }
                if (res.setting.attr1==0){
                    res.setting.attr1="";
                }
                $('#frmshopcontent #attr1').val(res.setting.attr1);
                $('#frmshopcontent .tagtemplate').val(res.setting.tagtemplate);
            },'json');
            console.log(eText);
            //contenthandle.setData(eText);
        });

        //打开高级模式
        $("[name=contentshpadvanced]").click(function(e) {
            if($('[name=contentshpadvancedDIV]').attr('class')=='down'){
                $('[name=contentshpadvancedDIV]').attr('style','display:none;');
                $("[name=contentshpadvancedDIV]").removeClass();
            }else{
                $('[name=contentshpadvancedDIV]').attr('style','display:block;');
                $("[name=contentshpadvancedDIV]").addClass("down");
            }
        });

        //关闭  拖出的时候调用
        $("[name=close]").click(function(e) {
            if (publicalert){
               /* publicprev.next().remove();*/
                publicnext.remove();
                publicalert=false;  //还原
            }
        });


        $("#saveshopcontent").click(function(e) {
            e.preventDefault();
            //currenteditor.html("已");
            if($('#frmshopcontent .name').val() == ''){
                alert("{lang_admin('please_fill_in_the_label_name')}");
                $('#frmshopcontent .name').focus();
                return false;
            }
            if($('#frmshopcontent .catid').val()=='0'){
                alert("{lang_admin('please_select_the_column')}");
                $('#frmshopcontent .catid').focus();
                return false;
            }
            data = $('#frmshopcontent').serialize();

            $.post('{url("template/saveshoptag")}',data,function(res){
                $('#frmshopcontent')[0].reset();
                $('#frmshopcontent .id').val('');
                if (!publicalert){
                    currenteditor.html(res);
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