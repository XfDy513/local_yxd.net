<!-- 组件单个开始 -->
<div class="lyrow visual-drag-box box-element clearfix">
	<span class="drag label btn-group drag-container">
		<button type="button" class="btn btn-black" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-grid"></i></button>
		<button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
		<ul class="dropdown-menu btn-black-dropdown-menu">
			<li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
			<li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
		</ul>
	</span>
    <div class="preview">
        <img src="{$skin_path}/images/visual/modules/layouts-4.jpg" alt="关注官方微信">
        <p>关注官方微信</p>
    </div>
    <div class="view">
        <div class="codearea">
            <div class="erweima">
                <img src="#[#get('weixin_pic')#]#">
                <p>#[#lang('attention')#]#<br />#[#lang('official')#]##[#lang('wechat')#]#</p>
            </div>
        </div>
        <div class="viewarea">
            <div class="erweima">
                <img src="{$skin_path}/images/base/weixin.jpg" alt="">
                <p>关注<br />官方微信</p>
            </div>
        </div>
    </div>
</div>
<!-- 组件单个结束 -->