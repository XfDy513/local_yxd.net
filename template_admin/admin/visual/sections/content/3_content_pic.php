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
		<img src="{$base_url}/common/plugins/visual/images/section/pictures.png">
		<p>
			{lang_admin('content_page_multigraph')}
		</p>
	</div>
	<div class="view">
	<div class="swiper-container content-picture">
		<div class="codearea">
			
				<div class="swiper-wrapper" id="lightgallery" role="listbox">
					#[#loop $archive['pics'] $i $pic#]#
					<div class="swiper-slide"#[#if $i==1#]# active#[#/if#]#" data-src="#[#$pic['url']#]#" data-sub-html="#[#$pic['alt']#]#">
						<div class="content-picture-tiem">
							<a href="#" onclick="gotourl(this)"   data-dataurl="" rel="lightbox['roadtrip']"><img src="#[#$pic['url']#]#" alt="#[#$pic['alt']#]#"></a>
						</div>
					</div>
					#[#/loop#]#
				</div>
				<div class="swiper-pagination content-picture-pagination">
				</div>
				

		</div>
		<div class="viewarea">
	
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="content-picture-tiem">
							<img src="./common/plugins/visual/images/modules/section-pic-1.jpg">
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content-picture-tiem">
							<img src="./common/plugins/visual/images/modules/section-pic-2.jpg">
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content-picture-tiem">
							<img src="./common/plugins/visual/images/modules/section-pic-3.jpg">
						</div>
					</div>
				</div>
				<div class="swiper-pagination content-picture-pagination">
				</div>
				
			</div>
			
		</div>
	</div>
</div>
<!-- 组件结束 -->