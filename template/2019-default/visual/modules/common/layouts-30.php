<!-- 组件 -->
<div class="lyrow position-move visual-drag-box box-element">
    <span class="drag label btn-group drag-container">
		<button type="button" class="btn btn-black" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-grid"></i></button>
		<button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
		<ul class="dropdown-menu btn-black-dropdown-menu">
			<li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
			<li><a title="{lang_admin('set_up')}" data-target="#codeModel" role="button" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i>{lang_admin('set_up')}</a></li>
			<li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
		</ul>
	</span>
    <div class="preview">
        <img src="{$skin_path}/images/visual/modules/layouts-30.jpg" alt="自定义标题">
        <p>自定义标题</p>
    </div>
    <div class="view">
        <div class="visual-code">
            <div class="custom-title">
				<div class="title20">
					<p contenteditable="true">
						Custom Title
					</p>
					<h4 contenteditable="true">
						自定义标题
					</h4>
				</div>
            </div>
        </div>
        <div class="visual-code-show">
            <div class="custom-title">
				<div class="title20">
					<p contenteditable="true">
						Custom Title
					</p>
					<h4 contenteditable="true">
						自定义标题
					</h4>
				</div>
            </div>
        </div>
    </div>
</div>
<!-- 组件结束 -->