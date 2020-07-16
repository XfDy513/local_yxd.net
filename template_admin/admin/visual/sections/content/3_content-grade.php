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
		<img src="{$base_url}/common/plugins/visual/images/section/grade.png">
		<p>{lang_admin('grade')}</p>
	</div>
	<div class="view">	
		<div class="content-rating">
			<div class="codearea">
				<span>#[#lang('rating')#]#：</span>#[#$archive['strgrade']#]#
			</div>
			<div class="viewarea">
				<span>{lang_admin('grade')}：</span>
                <i class='glyphicon glyphicon-star'></i>
                <i class='glyphicon glyphicon-star'></i>
                <i class='glyphicon glyphicon-star'></i>
                <i class='glyphicon glyphicon-star-empty'></i>
                <i class='glyphicon glyphicon-star-empty'></i>
			</div>	
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->