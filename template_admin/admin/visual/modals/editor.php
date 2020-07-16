<div class="modal fade" id="editorModal" tabindex="-1" role="dialog"
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
                    {lang_admin('edit')}
                </h4>
            </div>
            <div class="modal-body">
                <p>
                    <textarea id="contenteditor" style="visibility: hidden; display: none;"></textarea>
                </p>
            </div>
            <div class="modal-footer">
                <button  type="button" class="btn btn-default" data-dismiss="modal">
                    {lang_admin('close')}
                </button>
                <button id="saveeditor" type="button" class="btn btn-primary" data-dismiss="modal">{lang_admin('preservation')}
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var editorHandel;

    $(document).ready(function () {
        // alert($('#download-layout').html());

        $('body.edit .visual-right').on("click", "[data-target='#editorModal']", function (e) {
            e.preventDefault();
            editorHandel = $(this).parent().parent().parent().parent().parent().find('.view');
            editor.setData(editorHandel.html());
            console.log(editorHandel);
            //contenthandle.setData(eText);
        });
        $("#saveeditor").click(function(e) {
            e.preventDefault();
            editorHandel.html(editor.getData());
        });
    });
</script>