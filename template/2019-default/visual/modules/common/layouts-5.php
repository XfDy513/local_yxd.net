<!-- 组件单个开始 -->
<div class="lyrow position-move container-fluid-box box-element clearfix">
    <span class="drag label container-box-menu">
        <ul>
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i></a></li>
            <li><a title="{lang_admin('move_up')}" class="div-up"><i class="glyphicon glyphicon-arrow-up"></i></a></li>
            <li><a title="{lang_admin('move_down')}" class="div-down"><i class="glyphicon glyphicon-arrow-down"></i></a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i></a></li>
        </ul>
    </span>
    <div class="preview">
        <img src="{$skin_path}/images/visual/modules/layouts-5.jpg" alt="内页随机图片">
        <p>内页随机图片	</p>
    </div>
    <div class="view col-md-12 col-lg-12 col-xs-12">
        <div class="custtag" rel="template 'system/random_jpg.html'">
            <span class="drag label btn-group drag-container">
				<button type="button" class="btn btn-black" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-grid"></i></button>
				<button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
				<ul class="dropdown-menu btn-black-dropdown-menu">
					<li><a title="{lang_admin('set_up')}" href="{$base_url}/index.php?case=config&act=system&set=slide&admin_dir={get('admin_dir',true)}&site=default" target="_blank"><i class="glyphicon glyphicon-pencil"></i>{lang_admin('set_up')}</a></li>
					<li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
				</ul>
			</span>
            <div class="cbanner row" style="height:{get('cslide_height')}px;">
                <div class="cbanner-bg" style="background:url({$bnase_url}/images/banner/s1.jpg) center top no-repeat;background-size: cover;">
                    <div class="container">
                        <div class="cbanner-title">
                            <h4 class="column-title">当前名称</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 组件单个结束 -->