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
		<img src="{$base_url}/common/plugins/visual/images/section/vote.png">
		<p>{lang_admin('content_vote')}</p>
	</div>
	<div class="view">
		<div class="content-vote">
			<div class="codearea">
				#[#vote_js($archive[aid])#]#
			</div>
			<div class="viewarea">		
				<div class="content-vote-title">
					<h4>{lang_admin('content_vote')}</h4>
					<p>Vote</p>
				</div>
				<div class="radio">
					<label><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>{lang_admin('voting_options')}</label>
				</div>
				<div class="radio">
					<label><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>{lang_admin('voting_options')}</label>
				</div>
				<div class="radio">
					<label><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>{lang_admin('voting_options')}</label>
				</div>
				<div class="blank10"></div>
				<input type="submit" name="submit" value=" {lang_admin('submitted')} " class="btn btn-primary content-vote-btn">
			</div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->