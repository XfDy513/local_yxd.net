<div class="modal fade" id="videoModel" tabindex="-1" role="dialog"
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
				{lang_admin('video_manage')}
                </h4>
            </div>
            <div class="modal-body">
                <iframe id="upfileVideoWindow" name="upfilewindow" src="" width="100%" height="560" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var videoHandel;

    function refileVideo(filename,autoplay,width,height){
        //console.log(filename);
        videoHandel.attr('src',filename);
        if(autoplay){
            videoHandel.prop('autoplay',true);
        }else{
            videoHandel.prop('autoplay',false);
        }
        //videoHandel.attr('alt',alt);
        if(width != ''){
            videoHandel.attr('width',width);
        }
        if(height != ''){
            videoHandel.attr('height',height);
        }
    }

    function closeModel(id){
        $('#'+id).modal('hide');
    }

    $(document).ready(function () {
        // alert($('#download-layout').html());

        $('body.edit .visual-right').on("click", "[data-target='#videoModel']", function (e) {
            e.preventDefault();
            videoHandel = $(this).parent().parent().parent().parent().find('.view video');
            //console.log(videoHandel);
            //contenthandle.setData(eText);
        });

        $('#videoModel').on('shown.bs.modal', function (e) {
            //console.log($('.upfilewindow').width());
            $('#upfileVideoWindow').attr('src','index.php?case=file&act=updialog2&checkfrom=videoshow&max=1&admin_dir=<?php echo config::get('admin_dir');?>&width='+$('#upfileVideoWindow').width());
        });
    });
</script>