<!-- 组件 -->
<div class="lyrow visual-drag-box box-element">
   <span class="drag label btn-group drag-container">
		<button type="button" class="btn btn-black" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-grid"></i></button>
		<button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
		<ul class="dropdown-menu btn-black-dropdown-menu">
			<li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
			<li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
		</ul>
	</span>
    <div class="preview">
        <img src="{$skin_path}/images/visual/modules/layouts-8.jpg" alt="热点TAG">
        <p>热点TAG</p>
    </div>
    <div class="view">
        <div class="codearea">
            <div class="new-teg">
                <div class="title20">
                    <p>hot news</p>
                    <h4>TAG</h4>
                </div>
                <div class="new-teg-list">
                    #[#loop tags($catid,10) $tag#]#
                    <a href="#[#$tag['url']#]#" style="color:#[#$tag['tag_txtcolor']#]#;size:#[#$tag['tag_txtsize']#]#">
                        #[#$tag['tag']#]#
                    </a>
                    #[#/loop#]#
                </div>
            </div>
        </div>
        <div class="viewarea">
            <div class="new-teg">
                <div class="title20">
                    <p><a>hot news</a></p>
                    <h4><a>TAG</a></h4>
                </div>
                <div class="new-teg-list">
                    <a>自定义TAG一</a>
                    <a>自定义TAG二</a>
                    <a>自定义TAG三</a>
                    <a>自定义TAG四</a>
                    <a>自定义TAG五</a>
                    <a>自定义TAG六</a>
                    <a>自定义TAG七</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 组件结束 -->