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
        <img src="{$skin_path}/images/visual/modules/layouts-18.jpg" alt="栏目说明图片">
        <p>栏目说明图片</p>
    </div>
    <div class="view">
        <div class="container clearfix">
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
                            <span class="removeClean tagname">&#123;tag_category_首页第五行栏目&#125;</span>
                            <div class="section5 container-fluid">
                                <div class="container">
                                    <div class="s5 clearfix">
                                        <div class="s5-img">
                                            <a href=""><img src="{$skin_path}/images/base/img51.jpg" width="554" height="324" alt="" /></a>
                                        </div>
                                        <div class="s5-text">
                                            <h4>关于我们</h4>
                                            <span>ABOUT US</span>
                                            <p>广东某某物流有限公司-专业轿车运输公司依据市场需求应运而生，公司借助十多年物流运输经验建立起的覆盖全国的轿车运输服务网络，培养了一批具有高素质的专业驾驶员和优秀的管理人员队伍。关于“为合作伙伴创造价值”公司认为客户、供应商、公司股东、公司员工等一切和自身有合作关系的单位和个人都是自己的合作伙伴，并只有通过努力...</p>
                                            <em></em>
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