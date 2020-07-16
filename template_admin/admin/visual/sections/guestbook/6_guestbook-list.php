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
		<p>{lang_admin('guestbook_list')}</p>
	</div>
	<div class="view">
		<div class="visual-guestbook-list custtag" rel="template 'visual/list/listguestbooktag/guestbook_list.html'">
            <link href="{$skin_path}/css/guestbook.css" rel="stylesheet">

            <div class="guestbook_list" style="border:none;">


                <div class="guestbook_content_item">
                    <div class="guestbook_head col-xs-3 col-sm-1"><img src="./images/comm_m.png" alt="headimage" class="img-responsive" onerror="this.src=&quot;/images/nopic.gif&quot;"></div>
                    <div class="col-xs-9 col-sm-11">

                        <p class="clearfix"><span class="pull-right">2019-07-20 10:17</span><strong>{lang_admin('username')}</strong></p>
                        <div class="guestbook_content ">
                            <p>{lang_admin('guestcontent')}。。。</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="guestbook_content_item">
                    <div class="guestbook_head col-xs-3 col-sm-1"><img src="/images/nopic.gif" alt="headimage" class="img-responsive" onerror="this.src=&quot;/images/nopic.gif&quot;"></div>
                    <div class="col-xs-9 col-sm-11">

                        <p class="clearfix"><span class="pull-right">2019-07-09 09:45</span><strong>{lang_admin('username')}</strong></p>
                        <div class="guestbook_content ">
                            <p>{lang_admin('guestcontent')}。。。</p>
                        </div>
                        <div style="margin:10px 0px 0px 15px;">
                            <p>{lang_admin('admin_reply')}：</p>
                            <div class="guestbook_content ">
                                <dd class="guestbook_admin_reply">
                                    <p>{lang_admin('visitor_messages_and_administrator_response_messages')}</p>
                                </dd>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="guestbook_content_item">
                    <div class="guestbook_head col-xs-3 col-sm-1"><img src="/images/nopic.gif" alt="headimage" class="img-responsive" onerror="this.src=&quot;/images/nopic.gif&quot;"></div>
                    <div class="col-xs-9 col-sm-11">

                        <p class="clearfix"><span class="pull-right">2019-07-08 08:40</span><strong>{lang_admin('username')}</strong></p>
                        <div class="guestbook_content ">
                            <p>{lang_admin('guestcontent')}。。。</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="guestbook_content_item">
                    <div class="guestbook_head col-xs-3 col-sm-1"><img src="./images/comm_m.png" alt="headimage" class="img-responsive" onerror="this.src=&quot;/images/nopic.gif&quot;"></div>
                    <div class="col-xs-9 col-sm-11">

                        <p class="clearfix"><span class="pull-right">2019-07-08 08:24</span><strong>{lang_admin('username')}</strong></p>
                        <div class="guestbook_content ">
                            <p>>{lang_admin('guestcontent')}。。。</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="guestbook_content_item">
                    <div class="guestbook_head col-xs-3 col-sm-1"><img src="./images/comm_m.png" alt="headimage" class="img-responsive" onerror="this.src=&quot;/images/nopic.gif&quot;"></div>
                    <div class="col-xs-9 col-sm-11">

                        <p class="clearfix"><span class="pull-right">2019-07-08 08:24</span><strong>{lang_admin('username')}</strong></p>
                        <div class="guestbook_content ">
                            <p>{lang_admin('guestcontent')}。。。</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
		</div>
	</div>
</div>
	<!-- 组件结束 -->