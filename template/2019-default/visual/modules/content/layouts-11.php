<!-- 组件单个开始 -->
<div class="lyrow position-move visual-drag-box box-element clearfix">
    <span class="drag label container-box-menu">
        <ul>
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i></a></li>
            <li><a title="{lang_admin('move_up')}" class="div-up"><i class="glyphicon glyphicon-arrow-up"></i></a></li>
            <li><a title="{lang_admin('move_down')}" class="div-down"><i class="glyphicon glyphicon-arrow-down"></i></a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i></a></li>
        </ul>
    </span>
    <div class="preview">
        <img src="{$skin_path}/images/visual/modules/layouts-11.jpg" alt="内容页作者添加时间来源">
        <p>内容页作者添加时间来源</p>
    </div>
	<div class="view">
        <div class="codearea">
			<div class="content-subtitle">
				<span>#[#lang('author')#]#：#[#$archive['author']#]#</span>
				<span>#[#lang('adddate')#]#：#[#$archive['adddate']#]#</span>
				<span>#[#lang('source')#]#：#[#$archive['attr3']#]#</span>
			</div>
        </div>
        <div class="viewarea">
			<div class="content-subtitle">
				<span>作者：某某某</span>
				<span>添加时间：2019/5/28</span>
				<span>来源：本网站</span>
			</div>
        </div>
    </div>
</div>
<!-- 组件单个结束 -->