<!-- 模块样例一 -->
<div class="lyrow ui-draggable visual-drag-box box-element visual-inline-block">
    <span class="drag label btn-group drag-container">
        <button type="button" class="btn btn-black"><i class="icon-grid"></i></button>
        <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
        <ul class="dropdown-menu btn-black-dropdown-menu">
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
        </ul>
    </span>
	<div class="preview">
		<img src="{$base_url}/common/plugins/visual/images/section/adddate.png">
		<p>{lang_admin('announ_time')}</p>
	</div>
	<div class="view">
		<div class="content-adddate column">
			<div class="codearea">
				<span>#[#lang('adddate')#]#：</span>#[#$announ['adddate']#]#
			</div>
			<div class="viewarea">
				<span>{lang_admin('add_time')}：</span>2018-01-01 00:00:00
			</div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->