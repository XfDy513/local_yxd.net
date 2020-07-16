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
        <img src="{$base_url}/common/plugins/visual/images/section/friendlink.png">
        <p>{lang_admin('friendship_link')}</p>
    </div>
    <div class="view">
        <div class="visual-friendlink">
            <div class="codearea">

                <h5>#[#lang('links')#]#</h5>
                #[#if count(friendlink('image',0,99))>0#]#
                <div class="visual-friendlink-logo">

                    #[#loop friendlink('image',0,99) $flink#]#
                    <div class="friendlink-logo-item">
                        <a href="#[#$flink['url']#]#" title="#[#$flink['name']#]#" target="_blank"><img src="#[#$flink['logo']#]#" class="img-responsive"></a>
                    </div>
                    #[#/loop#]#



                    <div class="blank30"></div>

                    #[#/if#]#
                    #[#if count(friendlink('text',0,24))>0#]#
                    <div class="visual-friendlink-txt">
                        #[#loop friendlink('text',0,24) $flink#]#
                        <a href="#[#$flink['url']#]#" target="_blank">#[#$flink['name']#]#</a>
                        #[#/loop}
                    </div>
                    #[#/if#]#


                </div>
            </div>
            <div class="viewarea">
                <h5>友情连接</h5>
                <div class="swiper-container friendlink-logo-swiper">

                    <div class="friendlink-logo-item">
                        <a><img src="{$base_url}/common/plugins/visual/images/section/logo-view.png" class="img-responsive"></a>
                    </div>
                    <div class="friendlink-logo-item">
                        <a><img src="{$base_url}/common/plugins/visual/images/section/logo-view.png" class="img-responsive"></a>
                    </div>
                    <div class="friendlink-logo-item">
                        <a><img src="{$base_url}/common/plugins/visual/images/section/logo-view.png" class="img-responsive"></a>
                    </div>

                    <div class="blank30"></div>
                    <div class="visual-friendlink-txt">
                        <a>友情链接</a><a>友情链接</a><a>友情链接</a><a>友情链接</a><a>友情链接</a><a>友情链接</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 组件结束 -->