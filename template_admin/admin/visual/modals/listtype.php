<div class="modal fade" id="template-list-type-tag" tabindex="-1" role="dialog"
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
				{lang_admin('list_style')}
                </h4>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <?php
                    $tplarray=include(ROOT.'/template/'.config::get('template_dir').'/visual/list/listtypetag/list.config.php');
                    //$tplarray=$tplarray['category'];
                    //$tag_config=$data['setting'];
                    ?>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
						{lang_admin('list_template')}
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <?php echo form::select('typelisttemplate', '', $tplarray);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right"
                                  title=""
                                  title="{lang_admin('label_template')}文件存放在&nbsp;template_admin/当前使用模板目录/listtag/list_*.html!">
                                    </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    {lang_admin('close')}
                </button>
                <button id="saveTypeListStyle" type="button" class="btn btn-primary" data-dismiss="modal">{lang_admin('preservation')}
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var typeListHandel;

    $(document).ready(function () {

        $('body.edit .visual-right').on("click", "[data-target='#template-list-type-tag']", function (e) {
            e.preventDefault();
            typeListHandel = $(this).parent().parent().parent().parent().find('.view');
            //console.log(navHandel);
            //contenthandle.setData(eText);
        });

        $("#saveTypeListStyle").click(function (e) {
            e.preventDefault();
            //alert($("input[name=navstyle]:checked").val());
            data = {'listtemplate': $("#typelisttemplate").val()};
            $.post('{url("template/gettypelist")}', data, function (res) {
                typeListHandel.html(res);
                //navHandel.html('<div class="nav" rel="nav(' + $("input[name=navstyle]:checked").val() + ')">' + res + '</div>');
            });

            //return false;

        });
    });

</script>