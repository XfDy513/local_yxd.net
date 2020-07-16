<!-- 组件单个开始 -->
<div class="lyrow position-move container-fluid-box box-element">
    <span class="drag label container-box-menu">
        <ul>
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i></a></li>
            <li><a title="{lang_admin('move_up')}" class="div-up"><i class="glyphicon glyphicon-arrow-up"></i></a></li>
            <li><a title="{lang_admin('move_down')}" class="div-down"><i class="glyphicon glyphicon-arrow-down"></i></a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i></a></li>
        </ul>
    </span>
    <div class="preview">
        <img src="{$skin_path}/images/visual/modules/layouts-16.jpg" alt="子栏目循环图片说明">
        <p>子栏目循环图片说明</p>
    </div>
    <div class="view">
        <div class="container clearfix layout_385582">
            <div class="row column ui-sortable">
                <div class="visual-drag-box box-element ui-draggable">
					<span class="drag label btn-group drag-container">
						<button type="button" class="btn btn-black" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-grid"></i></button>
						<button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
						<ul class="dropdown-menu btn-black-dropdown-menu">
							<li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
							<li><a title="{lang_admin('set_up')}" data-target="#template-category-tag" role="button" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i>{lang_admin('set_up')}</a></li>
							<li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
						</ul>
					</span>
                    <div class="view">
                        <div class="tag">
                            <span class="removeClean tagname">&#123;tag_category_首页第二行子栏目循环&#125;</span>
                            <div class="s2">
                                <div class="swiper-container swiper2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide s2-item">
                                            <div class="s2-img">
                                                <a><img src="{$skin_path}/images/base/img546.jpg" /></a>
                                            </div>
                                            <div class="s2-text">
                                                <h4><a>htmldir<b>栏目标题一</b></a></h4>
                                                <span>栏目副标题一</span>
                                                <p>内容简介又称内容大要、内容提要、内容摘要等。扼要介绍图书内容和读者对象的说明。又称内容说明、内容简介、内容介绍，是向读者介绍本书内容、特点和读者对象，便于读者了解选购…</p>
                                                <a class="more">了解更多</a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide s2-item">
                                            <div class="s2-img">
                                                <a><img src="{$skin_path}/images/base/img142.jpg" /></a>
                                            </div>
                                            <div class="s2-text">
                                                <h4><a>htmldir<b>栏目标题二</b></a></h4>
                                                <span>栏目副标题二</span>
                                                <p>内容简介又称内容大要、内容提要、内容摘要等。扼要介绍图书内容和读者对象的说明。又称内容说明、内容简介、内容介绍，是向读者介绍本书内容、特点和读者对象，便于读者了解选购…</p>
                                                <a class="more">了解更多</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination swiper2-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 组件单个结束 -->