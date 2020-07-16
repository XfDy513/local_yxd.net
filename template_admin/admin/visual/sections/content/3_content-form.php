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
		<img src="{$base_url}/common/plugins/visual/images/section/form.png">
		<p>{lang_admin('content_customization_form')}</p>
	</div>
	<div class="view">
		<div class="content-form">
			<div class="codearea">
				<!-- 自定义表单开始 -->
				#[#if $archive['showform'] #]#
                    <div>
				        #[#template_user 'myform/nrform.html'#]#
                    </div>
				#[#/if#]#
				<!-- 自定义表单结束 -->
			</div>
			<div class="viewarea">
				<div class="content-form-title">
					<h4>{lang_admin('myform_name')}</h4>
					<p>Form List</p>
				</div>				
				<div class="content-form-content">
					<table class="table table-hover table-striped">
						<tr>
							<td>
                                {lang_admin('one_line_text')}
							</td>
							<td>
								<input type="text" value="" class="form-control"/>
							</td>
						</tr>
						<tr>
							<td>
								{lang_admin('multi_selection')}
							</td>
							<td>
								<select class="form-control" class="form-control select">
									<option value="1">{lang_admin('selection_class')}</option>
									<option value="2">{lang_admin('selection_class')}</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
                                {lang_admin('field_name')}
							</td>
							<td>
								<input type="text" value="" class="form-control"/>
							</td>
						</tr>

						<tr>
							<td>
								{lang_admin('multi_line_text')}
							</td>
							<td>
								<textarea class="form-control textarea" rows="4" ></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<input type='hidden' id="aid" name="aid" value="50"/>
							</td>
							<td align="left">
								<input type="submit" name="submit" value=" {lang_admin('submitted')} " class="btn btn-primary content-form-btn">
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->