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
		<img src="{$base_url}/common/plugins/visual/images/section/content_list.png">
		<p>{lang_admin('comment_list')}</p>
	</div>
	<div class="view">
		<div class="comment-guestbook-list custtag" rel="template 'comment/comment_js.html'">
            <link href="{$skin_path}/css/comment.css" rel="stylesheet">

            <div class="comment_list">
                <div class="comm_head col-xs-3 col-sm-1 col-md-1">&nbsp;</div>
                <div class="comm_content col-xs-9 col-sm-11 col-md-11">
                    <div id="comm_content"></div>
                    <p>{lang_admin('content_title')}</p>
                    <p><strong>{lang_admin('username')}</strong><span>2019-07-20 21:51</span></p>
                    <br></div>
                <div class="blank10"></div>
                <div class="comm_head col-xs-3 col-sm-1 col-md-1">&nbsp;</div>
                <div class="comm_content col-xs-9 col-sm-11 col-md-11">
                    <div id="comm_content"></div>
                    <p>{lang_admin('content_title')}</p>
                    <p><strong>{lang_admin('username')}</strong><span>2019-07-20 21:51</span></p>
                    <br></div>
                <div class="blank10"></div>
                <div class="comm_head col-xs-3 col-sm-1 col-md-1">&nbsp;</div>
                <div class="comm_content col-xs-9 col-sm-11 col-md-11">
                    <div id="comm_content"></div>
                    <p>{lang_admin('content_title')}</p>
                    <p><strong>{lang_admin('username')}</strong><span>2019-07-20 21:51</span></p>
                    <br></div>
                <div class="blank10"></div>
                <div class="comm_head col-xs-3 col-sm-1 col-md-1">&nbsp;</div>
                <div class="comm_content col-xs-9 col-sm-11 col-md-11">
                    <div id="comm_content"></div>
                    <p>{lang_admin('content_title')}</p>
                    <p><strong>{lang_admin('username')}</strong><span>2019-07-20 21:50</span></p>
                </div>
                <div class="blank10"></div>
				<div class="comm_head col-xs-3 col-sm-1 col-md-1">&nbsp;</div>
                <div class="comm_content col-xs-9 col-sm-11 col-md-11">
                    <div id="comm_content"></div>
                    <p>{lang_admin('content_title')}</p>
                    <p><strong>{lang_admin('username')}</strong><span>2019-07-20 21:50</span></p>
                </div>
                <div class="blank10"></div>
				<div class="comm_head col-xs-3 col-sm-1 col-md-1">&nbsp;</div>
                <div class="comm_content col-xs-9 col-sm-11 col-md-11">
                    <div id="comm_content"></div>
                    <p>{lang_admin('content_title')}</p>
                    <p><strong>{lang_admin('username')}</strong><span>2019-07-20 21:50</span></p>
                </div>
                <div class="blank10"></div>
            </div>
		</div>
	</div>
</div>
	<!-- 组件结束 -->