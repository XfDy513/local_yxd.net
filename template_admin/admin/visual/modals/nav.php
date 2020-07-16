<div class="modal fade" id="navModel" tabindex="-1" role="dialog"
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
				{lang_admin('navigation_manage')}
                </h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for=""><img src="{$skin_path}/images/visual/modules/nav-1.jpg" class="img-responsive"></label>
                        <input rel="<img src=''>" type="radio" name="navstyle" value="1" checked>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button  type="button" class="btn btn-default" data-dismiss="modal">
                    {lang_admin('close')}
                </button>
                <button id="saveNav" type="button" class="btn btn-primary" data-dismiss="modal">{lang_admin('preservation')}
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var navHandel;

    $(document).ready(function () {

        $('body.edit .visual-right').on("click", "[data-target='#navModel']", function (e) {
            e.preventDefault();
            navHandel = $(this).parent().parent().parent().parent().parent().find('.view');
            //console.log(navHandel);
            //contenthandle.setData(eText);
        });

        $("#saveNav").click(function(e) {
            e.preventDefault();
            //alert($("input[name=navstyle]:checked").val());
            data = {'id':$("input[name=navstyle]:checked").val()};
            $.post('{url("template/getnav")}',data,function(res){
                navHandel.html('<div class="nav" rel="nav('+$("input[name=navstyle]:checked").val()+')">'+res+'</div>');
            });

            //return false;

        });
    });

</script>