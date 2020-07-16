<!-- 组件 -->
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
		<img src="{$base_url}/common/plugins/visual/images/section/pages.png">
		<p>{lang_admin('codearea')}</p>
	</div>
	<div class="view">		
		<div class="content-archivep-archiven">
			<div class="codearea">
				#[#if $archive['p']['aid']#]#
				<span class="content-archivep"><a href="#[#$archive['p']['url']#]#"><strong>#[#lang('archivep')#]#</strong>#[#$archive['p']['title']#]#</a></span>
				#[#else#]#
				<span class="content-archivep"><a><strong>#[#lang('archivep')#]#</strong>#[#lang('nopage')#]#</a></span>
				#[#/if#]#
				#[#if $archive['n']['aid']#]#
				<span class="content-archiven"><a href="#[#$archive['n']['url']#]#"><strong>#[#lang('archiven')#]#</strong>#[#$archive['n']['title']#]#</a></span>
				#[#else#]#
				<span class="content-archiven"><a><strong>#[#lang('archiven')#]#</strong>#[#lang('nopage')#]#</a></span>
				#[#/if#]#
                <div class="clearfix"></div>
			</div>
			<div class="viewarea">
				<span class="content-archivep"><a><strong>{lang('archivep')}</strong> {lang('content_title')}</a></span>
				<span class="content-archiven"><a><strong>{lang('archiven')}</strong> {lang('content_title')}</a></span>
                <div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<!-- 组件结束 -->