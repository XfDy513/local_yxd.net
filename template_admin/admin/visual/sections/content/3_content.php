<!-- 模块样例一 -->
<div class="lyrow visual-drag-box box-element">
    <span class="drag label btn-group drag-container">
        <button type="button" class="btn btn-black"><i class="icon-grid"></i></button>
        <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
        <ul class="dropdown-menu btn-black-dropdown-menu">
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
        </ul>
    </span>
	<div class="preview">
		<img src="{$base_url}/common/plugins/visual/images/section/content.png">
		<p>{lang_admin('content')}</p>
	</div>
	<div class="view">
		<div id="print" class="content-text">
			<div class="codearea">
				#[#$archive['content']#]#
                #[#if $pages>1#]#
                <!-- 内页分页 -->

                <div class="column-pagination">
                    #[#archive_pagination($archive)#]#
                </div>

                #[#/if#]#
			</div>
			<div class="viewarea">
                {lang_admin('visual_display_content')}
			</div>
		</div>
	</div>
    <div class="clearfix"></div>
</div>
<!-- 模块样例一结束 -->