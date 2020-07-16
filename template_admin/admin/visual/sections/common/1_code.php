<!-- 模块样例一 -->
<div class="visual-drag-box box-element visual-inline-block">
    <span class="drag label btn-group drag-container">
        <button type="button" class="btn btn-black"><i class="icon-grid"></i></button>
        <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
        <ul class="dropdown-menu btn-black-dropdown-menu">
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
            <li><a title="{lang_admin('source_code')}" data-target="#codeModel" role="button" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i>{lang_admin('set_up')}</a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
        </ul>
    </span>
    <div class="preview">
        <img src="{$base_url}/common/plugins/visual/images/section/embed.png">
        <p>{lang_admin('source_code')}</p>
    </div>
	<div class="view">
		<div class="visual-code-box">
			<div class="visual-code"></div>
			<div class="visual-code-show">
                <div class="visual-code-show-content">
                    源码
                </div>
            </div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->