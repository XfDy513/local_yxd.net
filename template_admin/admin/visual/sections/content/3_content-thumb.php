<!-- 模块样例一 -->
<div class="lyrow visual-drag-box box-element visual-inline-block">
    <span class="drag label btn-group drag-container">
        <button type="button" class="btn btn-black"><i class="icon-grid"></i></button>
        <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
        <ul class="dropdown-menu btn-black-dropdown-menu">
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
        </ul>
    </span>
	<div class="preview">
		<img src="{$base_url}/common/plugins/visual/images/section/picture.png">
		<p>{lang_admin('thumbnail')}</p>
	</div>
	<div class="view">
		<div class="content-thumb">
			<div class="codearea">
				<img src="#[#$archive['thumb']#]#" class="img-responsive" alt="#[#$archive['stitle']#]#" />
			</div>
			<div class="viewarea">
				<img src="{$base_url}/common/plugins/visual/images/modules/section-pic-1.jpg" class="img-responsive" alt="{lang_admin('content_title')}" />
			</div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->