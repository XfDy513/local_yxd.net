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
        <img src="{$skin_path}/images/visual/modules/layouts-9.jpg" alt="当前子栏目栏目标题">
        <p>当前子栏目栏目标题</p>
    </div>
    <div class="view">
        <div class="codearea">
            <div class="list-title list-title2">
                <div class="container">
                    <ul class="column-subcolumn">
                        #[#loop categories($topid) $t1#]#
                        <li class="column-subcolumn-title"><a href="#[#$t1['url']#]#" title="#[#$t1['catname']#]#">#[#$t1['catname']#]#</a></li>
                        #[#/loop#]#
                    </ul>
                    <p class="text-center column-htmldir">#[#$category[$catid]['htmldir']#]#</p>
                    <h4 class="text-center column-title">#[#$category[$catid]['catname']#]#</h4>
                </div>
            </div>
        </div>
        <div class="viewarea">
            <div class="list-title list-title2">
                <div class="container">
                    <ul class="column-subcolumn">
                        <li class="column-subcolumn-title"><a class="active">子栏目一</a></li>
                        <li class="column-subcolumn-title"><a>子栏目二</a></li>
                    </ul>
                    <p class="text-center column-htmldir"><a>HTMLDIR</a></p>
                    <h4 class="text-center column-title"><a>栏目标题</a></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 组件单个结束 -->