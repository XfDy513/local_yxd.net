<div class="modal fade" id="template-type-tag" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="glyphicon glyphicon-remove"></i>
                            </span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
				{lang_admin('type_label_attributes')}
                </h4>
            </div>
            <div class="modal-body">
                <form method="post" name="frmtype" id="frmtype" action="">
                    <input type="hidden" name="tagfrom" value="type" class="form-control">
                    <input type="hidden" name="id" value="" class="form-control id">
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                           {lang_admin('name')}
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <input placeholder="{lang_admin('please_enter_the_name_of_the_type_label')}" type="text" name="name" value="" class="name form-control">

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <?php
                    $tplarray=include(ROOT.'/template/'.config::get('template_dir').'/tpltag/tag.config.php');
                    $tplarray=$tplarray['type'];
                    $tag_config=$data['setting'];
                    ?>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
						{lang_admin('type')}
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">

                            <?php echo form::select('typeid', $tag_config['typeid'],type::option(0,lang_admin('all_type')));?>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
							{lang_admin('title')}
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="spname" name="tyname" class="form-control select tyname">
                                <option value="1">
								{lang_admin('yes')}
                                </option>
                                <option value="0">
								{lang_admin('no')}
                                </option>
                            </select>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('whether_to_call_the_subtitle_silently')}"></span>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
						{lang_admin('subtitle')}
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="subtitle" name="subtitle" class="form-control select subtitle">
                                <option value="1">
								{lang_admin('yes')}
                                </option>
                                <option value="0">
								{lang_admin('no')}
                                </option>
                            </select>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('whether_to_call_the_subtitle_silently')}"></span>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
						{lang_admin('type_picture')}
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="tyimage" name="tyimage" class="form-control select tyimage">
                                <option value="1">
								{lang_admin('yes')}
                                </option>
                                <option value="0">
								{lang_admin('no')}
                                </option>
                            </select>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('whether_to_call_the_description_picture')}"></span>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
						{lang_admin('special_content')}
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="typecontent" name="typecontent" class="form-control select tycontent">
                                <option value="1">
								{lang_admin('yes')}
                                </option>
                                <option value="0">
								{lang_admin('no')}
                                </option>
                            </select>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('whether_to_invoke_the_topic_description')}"></span>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
						{lang_admin('number_of_intercepted_words')}
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <input type="text" id="len" name="len" value="-1" class="len form-control">
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('1_no_limit_0_no_call')}"></span>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            {lang_admin('label_template')}
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            {form::select('tagtemplate', $tag_config['tagtemplate'], $tplarray)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right"
                                  title=""
                                  title="{lang_admin('label_template')}文件存放在&nbsp;template/当前使用模板目录/tpltag/tag_type_*.html!">
                                    </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button  type="button" class="btn btn-default" data-dismiss="modal">
                    {lang_admin('close')}
                </button>
                <button id="saveType" type="button"    class="btn btn-primary" data-dismiss="modal">{lang_admin('preservation')}
                </button>
            </div>
        </div>
    </div>
</div>
<!-- 标签弹出框 -->
<script type="text/javascript">
    var typeHandle;
    $(document).ready(function () {
        $("#saveType").click(function(e) {
            e.preventDefault();
            if($('#frmtype .name').val() == ''){
                alert("{lang_admin('please_fill_in_the_label_name')}");
                $('#frmtype .name').focus();
                return false;
            }
            data = $('#frmtype').serialize();
            //console.log(data);
            $.post('{url("template/savetag")}',data,function(res){
                $('#frmtype')[0].reset();
                $('#frmtype .id').val('');
                typeHandle.html(res);
            });
        });
        $('body.edit .visual-right').on("click","[data-target='#template-type-tag']",function(e) {
            e.preventDefault();
            typeHandle = $(this).parent().parent().parent().parent().find('.view');
            var eText = typeHandle.find('.tag .tagname').html();
            $.post('{url("template/gettag")}',{'tag':eText},function(res){
                //console.log(res);
                $('#frmtype .id').val(res.id);
                $('#frmtype .name').val(res.name);
                $('#frmtype .typeid').val(res.setting.typeid);
                $('#frmtype .tyname').val(res.setting.tyname);
                $('#frmtype .subtitle').val(res.setting.subtitle);
                $('#frmtype .tyimage').val(res.setting.tyimage);
                $('#frmtype .tycontent').val(res.setting.tycontent);
                $('#frmtype .len').val(res.setting.len);
                $('#frmtype .tagtemplate').val(res.setting.tagtemplate);
            },'json');
        });


    });
</script>