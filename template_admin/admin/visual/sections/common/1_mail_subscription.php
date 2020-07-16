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
		<img src="{$base_url}/common/plugins/visual/images/section/subscription.png">
		<p>{lang_admin('mailsubscription')}</p>
	</div>
	<div class="view">
		<div class="visual-mailsubscription">
			<div class="codearea">
                <form name="listform" id="listform" action="#[#$base_url#]#/index.php?case=archive&amp;act=email" method="post">
					<div class="input-group">
						<input type="text"  name="email" id="email" value=""  class="form-control" placeholder="#[#lang_admin('mailsubscription')#]#">
						<span class="input-group-btn">
							<button class="btn btn-primary visual-mailsubscription-btn" name="submit" type="submit">#[#lang_admin('submitted')#]#</button>
						</span>
					</div>
				</form>
            </div>
            <div class="viewarea">
                <form name="listform" id="listform" action="#[#$base_url#]#/index.php?case=archive&amp;act=email" method="post">
					<div class="input-group">
						<input type="text"  name="email" id="email" value=""  class="form-control" placeholder="{lang_admin('mailsubscription')}">
						<span class="input-group-btn">
							<button class="btn btn-primary visual-mailsubscription-btn" name="submit" type="submit">{lang_admin('submitted')}</button>
						</span>
					</div>
				</form>
            </div>
		</div>
	</div>
</div>
<!-- 组件结束 -->