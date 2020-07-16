<div class="modal fade" id="template-field-tag" tabindex="-1" role="dialog"
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
                    {lang_admin('custom_field_properties')}
                </h4>
            </div>
            <div class="modal-body">
                <form method="post" name="frmField" id="frmField" action="">
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            {lang_admin('selection_field')}
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select class="fields" style="width: 100%; height: 380px;" name="fields[]" id="fields" multiple="multiple">
                                <optgroup label="{lang_admin('selection_by_ctrl_a')}">
                                </optgroup>
                                <optgroup label="{lang_admin('select_by_ctrl_or_shift')}">
                    <?php
                    //$tplarray=include(ROOT.'/template_admin/'.config::get('template_admin_dir').'/annountag/announ.config.php');
                    //$tplarray=$tplarray['category'];
                    //$tag_config=$data['setting'];
                    $sets = setting::getInstance();
                    $fields = setting::$var['archive'];
                    if(is_array($fields) && !empty($fields)){
                        foreach ($fields as $f){
                            ?>
                            <option value="<?php echo $f['name'];?>"><?php echo $f['cname'];?></option>
                            <?php
                        }
                    }
                    ?>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    {lang_admin('close')}
                </button>
                <button id="saveFieldStyle" type="button" class="btn btn-primary" data-dismiss="modal">{lang_admin('preservation')}
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var fieldHandel;

    $(document).ready(function () {

        $('body.edit .visual-right').on("click", "[data-target='#template-field-tag']", function (e) {
            e.preventDefault();
            fieldHandel = $(this).parent().parent().parent().find('.visual-conent-field');
            //console.log(announHandel.find('.codearea #title_len').html());
            $('#frmField .fields').val(fieldHandel.find('.codearea var.selected').html().split(','));
            //$('#frmAnnoun .num').val(announHandel.find('.codearea #num').html());
            //$('#frmAnnoun .is_date').val(announHandel.find('.codearea #is_date').html());
            //console.log(navHandel);
            //contenthandle.setData(eText);
        });

        $("#saveFieldStyle").click(function (e) {
            e.preventDefault();
            //alert($("input[name=navstyle]:checked").val());
            data = $("#frmField").serialize();
            $.post('{url("template/getfieldlist")}', data, function (res) {
                fieldHandel.html(res);
                //navHandel.html('<div class="nav" rel="nav(' + $("input[name=navstyle]:checked").val() + ')">' + res + '</div>');
            });

            //return false;

        });
    });

</script>