<!-- 组件单个开始 -->
<div class="lyrow position-move position-move container-fluid-box box-element">
    <span class="drag label container-box-menu">
        <ul>
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i></a></li>
            <li><a title="{lang_admin('move_up')}" class="div-up"><i class="glyphicon glyphicon-arrow-up"></i></a></li>
            <li><a title="{lang_admin('move_down')}" class="div-down"><i class="glyphicon glyphicon-arrow-down"></i></a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i></a></li>
        </ul>
    </span>
    <div class="preview">
		<img src="{$skin_path}/images/visual/modules/layouts-23.jpg" alt="About页面第一行栏目">
        <p>About页面第一行栏目</p>
    </div>
    <div class="view">
        <div class="clearfix">
            <div class="row column ui-sortable">
                <div class="lyrow position-move ui-draggable box-layout clearfix">
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
							<span class="removeClean tagname">&#123;tag_category_About页面第一行栏目&#125;</span>
							<div class="section11">
								<div class="list-title list-title2">
									<div class="container">			
										<p><a href="">CHAIRMAN'S SPEECH</a></p>
										<h4><a href="">董事长致辞</a></h4>
									</div>
								</div>
								<div class="container">
									<div class="s11">
										<div class="row">
											<div class="col-md-6 col-md-push-6">
												<div class="row">
													<div class="s11-img">
														<a href=""><img src="{$skin_path}/images/base/img111.jpg" alt=""></a>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-md-pull-6">
												<div class="s11-text">
													<h4>集团董事长：</h4>
													<p>我们构建创新解决方案以解决当今的环境挑战，从而拉动经济增长。“健康创想”承诺让更多人更健康。我们通过富有想象力的理念和成熟的解决方案，创造更健康的世界。</p>
												</div>
											</div>
										</div>
									</div>
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