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
		<img src="{$base_url}/common/plugins/visual/images/section/btn.png">
		<p>{lang_admin('downlink')}</p>
	</div>
	<div class="view">
		<div class="content-downlink">
			<div class="codearea">
				#[#if $archive['attachment_path']#]#
				#[#attachment_js($archive['aid'])#]#
				#[#else#]#
                <a class="visual-content-down-link-btn">#[#lang('nodownload')#]#</a>
				#[#/if#]#
			</div>
			<div class="viewarea">
				<a target="_blank" title="{lang_admin('click_download')}" id="att" href="#" class="visual-content-down-link-btn">{lang_admin('downlink')}</a>
			</div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->