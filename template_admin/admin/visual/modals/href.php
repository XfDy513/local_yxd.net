<div class="modal fade href-config" id="hrefModel" tabindex="-1" role="dialog"
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
                    {lang_admin('link')}
                </h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>{lang_admin('connection_address')}</label>
                    <input id="url" placeholder="{lang_admin('connection_address')}" name="url" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label>{lang_admin('open_mode')}</label>
                    <select id="target" name="target" class="form-control">
                        <option value="">{lang_admin('default')}</option>
                        <option value="_self">{lang_admin('original_window')}</option>
                        <option value="_blank">{lang_admin('new_window')}</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button  type="button" class="btn btn-default" data-dismiss="modal">
                    {lang_admin('close')}
                </button>
                <button id="btn_saveHref" type="button" class="btn btn-primary" data-dismiss="modal">{lang_admin('preservation')}
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var hrefHandel;

    $(document).ready(function () {
        // alert($('#download-layout').html());

        $('body.edit .visual-right').on("click", "[data-target='#hrefModel']", function (e) {
            e.preventDefault();
            hrefHandel = $(this).parent().parent().parent().parent().parent().find('.view img,.view i,.view em');
            $('.href-config #url').val(hrefHandel.parent().attr('href'));
            $('.href-config #target').val(hrefHandel.parent().attr('target'));
            //console.log(hrefHandel.parent());
        });

        $("#btn_saveHref").click(function(e) {
            e.preventDefault();
            if(hrefHandel.parent()[0].tagName != 'A') {
                hrefHandel.wrap('<a target="' + $('.href-config #target').val() + '" href="#" onclick="gotourl(this)"   data-dataurl="' + $('.href-config #url').val() + '"></a>');
            }else{
                hrefHandel.parent().attr('href',$('.href-config #url').val());
                hrefHandel.parent().attr('target',$('.href-config #target').val());
            }

        });
    });
</script>