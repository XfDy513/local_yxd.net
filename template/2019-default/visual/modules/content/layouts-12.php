<!-- 组件单个开始 -->
<div class="lyrow position-move visual-drag-box box-element">
    <span class="drag label btn-group drag-container">
        <button type="button" class="btn btn-black" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-grid"></i></button>
        <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
        <ul class="dropdown-menu btn-black-dropdown-menu">
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
        </ul>
    </span>
    <div class="preview">
        <img src="{$skin_path}/images/visual/modules/layouts-12.jpg" alt="内容页相关文章">
        <p>内容页相关文章</p>
    </div>
	<div class="view">
        <div class="codearea">
			<div class="content-relevant-list1">
				<dl>
					<dt><a><i class="icon-feed"></i>相关文章</a></dt>
					#[#loop archive($catid,'0','0','0,0,0','20','rand()','10','false','0','true','0','0','0','0') $i $archive#]#
					<dd class="col-xs-12 col-md-6"><span></span>
						<a href="#[#$archive[url]#]#" title="#[#$archive[stitle]#]#">#[#$archive[title]#]#</a>
					</dd>
					#[#/loop#]#
				</dl>
			</div>
        </div>
        <div class="viewarea">
			<div class="content-relevant-list1">
				<dl>
					<dt><a><i class="icon-feed"></i>	相关文章</a></dt>
					<dd class="col-xs-12 col-md-6"><span></span><a >相关文章标题一</a></dd>
					<dd class="col-xs-12 col-md-6"><span></span><a >相关文章标题二</a></dd>
					<dd class="col-xs-12 col-md-6"><span></span><a >相关文章标题三</a></dd>
					<dd class="col-xs-12 col-md-6"><span></span><a >相关文章标题四</a></dd>
					<dd class="col-xs-12 col-md-6"><span></span><a >相关文章标题五</a></dd>
					<dd class="col-xs-12 col-md-6"><span></span><a >相关文章标题六</a></dd>
					<dd class="col-xs-12 col-md-6"><span></span><a >相关文章标题七</a></dd>
					<dd class="col-xs-12 col-md-6"><span></span><a >相关文章标题八</a></dd>
					<dd class="col-xs-12 col-md-6"><span></span><a >相关文章标题九</a></dd>
					<dd class="col-xs-12 col-md-6"><span></span><a >相关文章标题十</a></dd>
				</dl>
			</div>
        </div>
    </div>
</div>
<!-- 组件单个结束 -->