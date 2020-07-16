<!-- 组件 -->
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
		<img src="{$skin_admin_path}/images/visual/section/friendlink.png">
		<p>友情链接文字</p>
	</div>
	<div class="view">
		<div class="visual-friendlink-txt">
			<div class="codearea">
                #[#loop friendlink('text',0,24) $flink#]#
				<a href="#[#$flink['url']#]#" target="_blank">#[#$flink['name']#]#</a>
				#[#/loop#]#
			</div>
			<div class="viewarea">
				<a>友情链接</a><a>友情链接</a><a>友情链接</a><a>友情链接</a><a>友情链接</a><a>友情链接</a>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>
</div>
<!-- 组件结束 -->