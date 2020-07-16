<!-- 组件 -->
<div class="lyrow visual-drag-box box-element">
    <span class="drag label btn-group drag-container">
        <button type="button" class="btn btn-black"><i class="icon-grid"></i></button>
        <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
        <ul class="dropdown-menu btn-black-dropdown-menu">
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
			<li><a title="{lang_admin('set_up')}" data-target="#template-announ-tag" role="button" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i>{lang_admin('set_up')}</a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
        </ul>
    </span>
	<div class="preview">
		<img src="{$base_url}/common/plugins/visual/images/section/announ.png">
		<p>{lang_admin('announ_list')}</p>
	</div>
	<div class="view">
		<div class="announ-list">
			<div class="codearea">
				<ul>
					#[#loop announ(<var id="num">1</var>,<var id="title_len">0</var>,<var id="is_date">1</var>) $an#]#
					<li><span>#[#$an['adddate']#]#</span><a title="#[#$an['title']#]#" href="#[#$an['url']#]#"	target="_blank">#[#$an['title']#]#</a></li>
					#[#/loop#]#
				</ul>
			</div>
			<div class="viewarea">
				<ul>
					<li><span>2019-01-01</span><a> {lang_admin('announ_title')}</a></li>
                    <li><span>2019-01-01</span><a> {lang_admin('announ_title')}</a></li>
                    <li><span>2019-01-01</span><a> {lang_admin('announ_title')}</a></li>
                    <li><span>2019-01-01</span><a> {lang_admin('announ_title')}</a></li>
                    <li><span>2019-01-01</span><a> {lang_admin('announ_title')}</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- 组件结束 -->