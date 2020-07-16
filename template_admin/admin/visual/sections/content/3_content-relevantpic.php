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
		<img src="{$base_url}/common/plugins/visual/images/section/pictures.png">
		<p>{lang_admin('relevant_picture_list')}</p>
	</div>
	<div class="view">
		<div class="content-relevant">
			<div class="codearea">
				#[#if is_array($likenews)#]#
				<div class="content-relevant-title">
					<h4>#[#$archive['tag']#]#</h4>
					<p>/ #[#lang('relatedcontent')#]#</p>
				</div>
				<div class="content-relevant-list-pic">
					<div class="row">	
						#[#loop $likenews $item#]#
						<div class="col-sm-4">
							<div class="content-relevant-list-pic-item">						
								<div class="content-relevant-list-pic-img">
									<a href="#[$item#['url']#]#" target="_blank"><img alt="#[$item#['stitle']#]#" src="#[$item#['thumb']#]#" /></a>
								</div>
								<div class="content-relevant-list-pic-text">
									<h4>#[$item#['title']#]#</h4>
									<p>#[#cut(strip_tags($archive['introduce']),66)#]#</p>
								</div>
								<div class="content-relevant-list-pic-more">
									<a href="#[$item#['url']#]#" target="_blank">more  &gt;</a>
								</div>
							</div>
						</div>
						#[#/loop#]#
					</div>
				</div>
				#[#/if#]#
			</div>
			<div class="viewarea">
				<div class="content-relevant-title">
					<h4><a>{lang_admin('relevant_picture_list')}</a></h4>
					<p>/ Tag</p>
				</div>
				<div class="content-relevant-list-pic">
					<div class="row">
						<div class="col-sm-4">
							<div class="content-relevant-list-pic-item">						
								<div class="content-relevant-list-pic-img">
									<a><img src="{$base_url}/common/plugins/visual/images/modules/section-pic-1.jpg" /></a>
								</div>
								<div class="content-relevant-list-pic-text">
									<h4>{lang_admin('content_title')}</h4>
                                    <p>{lang_admin('visual_display_content')}…</p>
								</div>
								<div class="content-relevant-list-pic-more">
									<a>more  &gt;</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="content-relevant-list-pic-item">						
								<div class="content-relevant-list-pic-img">
									<a><img src="{$base_url}/common/plugins/visual/images/modules/section-pic-2.jpg" /></a>
								</div>
								<div class="content-relevant-list-pic-text">
									<h4>{lang_admin('content_title')}</h4>
                                    <p>{lang_admin('visual_display_content')}…</p>
								</div>
								<div class="content-relevant-list-pic-more">
									<a>more  &gt;</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="content-relevant-list-pic-item">						
								<div class="content-relevant-list-pic-img">
									<a><img src="{$base_url}/common/plugins/visual/images/modules/section-pic-3.jpg" /></a>
								</div>
								<div class="content-relevant-list-pic-text">
									<h4>{lang_admin('content_title')}</h4>
                                    <p>{lang_admin('visual_display_content')}…</p>
								</div>
								<div class="content-relevant-list-pic-more">
									<a>more  &gt;</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->