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
		<img src="{$skin_path}/images/visual/modules/layouts-20.jpg" alt="栏目说明图片">
        <p>栏目说明图片</p>
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
							<span class="removeClean tagname">&#123;tag_category_首页第七行栏目&#125;</span>
							<div class="section7">
								<div class="container">
									<div class="row">
										<div class="col-md-4">
											<div class="s7-1">
												<h4>人才招聘</h4>
												<p>Talent recruitment</p>
											</div>
										</div>
										<div class="col-md-8">
											<div class="s7-2">
												<div class="row">
													<div class="col-sm-6">
														<div class="s7-2-text">
															<h4>咨询服务热线</h4>
															<span>400-123-4567</span>
															<p><i class="icon-envelope"></i>	admin@admin.com</p>
                                                            <a href="{$cat['url']}" class="more"><span class="glyphicon glyphicon-menu-right"></span></a>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="s7-2-img">
															<img src="{$skin_path}/images/base/img71.jpg" width="344" height="226" alt="" />
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
    </div>
</div>
<!-- 组件单个结束 -->