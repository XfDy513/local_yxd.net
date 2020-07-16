<!-- 组件 -->
<div class="lyrowv position-move visual-drag-box box-element">
    <span class="drag label container-box-menu">
        <ul>
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i></a></li>
            <li><a title="{lang_admin('move_up')}" class="div-up"><i class="glyphicon glyphicon-arrow-up"></i></a></li>
            <li><a title="{lang_admin('move_down')}" class="div-down"><i class="glyphicon glyphicon-arrow-down"></i></a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i></a></li>
        </ul>
    </span>
	<div class="preview">
		<img src="{$base_url}/common/plugins/visual/images/section/pictures.png">
		<p>{lang_admin('cslide')}</p>
	</div>
	<div class="view">
		<div class="visual-cslide">
             <span class="drag label btn-group drag-container">
				<button type="button" class="btn btn-black"><i class="icon-grid"></i></button>
				<button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
				<ul class="dropdown-menu btn-black-dropdown-menu">
					<li><a title="{lang_admin('set_up')}" href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=config&act=system&set=slide&admin_dir={get('admin_dir',true)}&site=default" target="_blank"><i class="glyphicon glyphicon-pencil"></i>{lang_admin('set_up')}</a></li>
					<li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
				</ul>
			</span>
			<div class="custtag" rel="template 'system/cslide.html'">
				{template 'system/cslide.html'}
			</div>
		</div>
	</div>
</div>
<!-- 组件结束 -->