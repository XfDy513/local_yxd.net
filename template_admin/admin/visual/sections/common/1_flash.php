<!-- 组件 -->
<div class="visual-drag-box box-element visual-inline-block">
    <span class="drag label btn-group drag-container">
        <button type="button" class="btn btn-black"><i class="icon-grid"></i></button>
        <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
        <ul class="dropdown-menu btn-black-dropdown-menu">
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
            <li><a title="{lang_admin('video')}" data-target="#flashModel" role="button" data-toggle="modal"><i class="glyphicon glyphicon-facetime-video"></i>{lang_admin('video')}</a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
        </ul>
    </span>
    <div class="preview">
        <img src="{$base_url}/common/plugins/visual/images/section/flash.png">
        <p>Flash</p>
    </div>
    <div class="view">
        <div class="visual-flash">
            <object data="http://player.youku.com/player.php/sid/XNDA1MTIzOTM2MA==/v.swf" type="application/x-shockwave-flash" width="100%" height="100%">
                <param name="movie" value="http://player.youku.com/player.php/sid/XNDA1MTIzOTM2MA==/v.swf" />
                <param name="wmode" value="transparent" />
                <param name="autostart" value="0" />
            </object>
        </div>
    </div>
</div>
<!-- 组件结束 -->