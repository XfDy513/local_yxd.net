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
		<img src="{$base_url}/common/plugins/visual/images/section/pages.png">
		<p>{lang_admin('column_page')}</p>
	</div>
	<div class="view">
		<div class="column-pagination">
			<div class="codearea">
				#[#if isset($pages)#]#
				#[#category_pagination($catid)#]#
				#[#/if#]#
			</div>
			<div class="viewarea">
				<nav>
					<ul class="pagination">
						<li class="active"><a>1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a href="#">7</a></li>
						<li><a href="#">8</a></li>
						<li><a href="#l" aria-label="Next"><span aria-hidden="true">&gt;</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- 组件结束 -->