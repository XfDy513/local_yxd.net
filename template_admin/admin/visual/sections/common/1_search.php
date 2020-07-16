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
		<img src="{$base_url}/common/plugins/visual/images/section/search.png">
		<p>{lang_admin('search')}</p>
	</div>
	<div class="view">
		<div class="visual-search">
            <div class="codearea">
				<form name="search" action="#[#$base_url#]#/index.php?case=archive&act=search" method="post" class="search">
					<div class="input-group">
						<input type="text" name="keyword" class="form-control" placeholder="#[#lang('please_enter_search_keywords')#]#">
						<span class="input-group-btn">
							<button class="btn btn-default" name="submit" type="submit">#[#lang('search')#]#</button>
						</span>
					</div>
				</form>
            </div>
            <div class="viewarea">
                <form name="search" class="search">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" placeholder="{lang('please_enter_search_keywords')}">
                        <span class="input-group-btn">
						<button class="btn btn-default" name="submit" type="submit">{lang('search')}</button>
					</span>
                    </div>
                </form>
            </div>
		</div>
	</div>
</div>
<!-- 组件结束 -->