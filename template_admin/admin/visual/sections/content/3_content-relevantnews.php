<!-- 模块样例一 -->
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
        <img src="{$base_url}/common/plugins/visual/images/section/content_list.png">
        <p>{lang_admin('list_of_related_articles')}</p>
    </div>
    <div class="view">
        <div class="content-relevant">
            <div class="codearea">
                #[#if is_array($likenews)#]#
                <div class="content-relevant-title">
                    <h4>#[#$archive['tag']#]#</h4>
                    <p>/ #[#lang('relatedcontent')#]#</p>
                </div>
                <div class="content-relevant-list">
                    <ul>
                        #[#loop $likenews $item#]#
                        <li>
                            <span>#[#$archive['adddate']#]#</span><a title="#[#$archive['stitle']#]#" href="#[#$archive['url']#]#" target="_blank">#[#$archive['title']#]#</a>
                        </li>
                        #[#/loop#]#
                    </ul>
                </div>
                #[#/if#]#
            </div>

            <div class="viewarea">
                <div class="content-relevant-title">
                    <h4><a>{lang_admin('list_of_related_articles')}</a></h4>
                    <p>/ Tag</p>
                </div>
                <div class="content-relevant-list">
                    <ul>
                        <li>
                            <span>2019-01</span>
                            <a href="#">{lang_admin('content_title')}</a>
                        </li>
                        <li>
                            <span>2019-01</span>
                            <a href="#">{lang_admin('content_title')}</a>
                        </li>
                        <li>
                            <span>2019-01</span>
                            <a href="#">{lang_admin('content_title')}</a>
                        </li>
                        <li>
                            <span>2019-01</span>
                            <a href="#">{lang_admin('content_title')}</a>
                        </li>
                        <li>
                            <span>2019-01</span>
                            <a href="#">{lang_admin('content_title')}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 模块样例一结束 -->