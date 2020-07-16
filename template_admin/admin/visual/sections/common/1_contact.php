<!-- 组件 -->
<div class="visual-drag-box box-element visual-inline-block">
    <span class="drag label btn-group drag-container">
        <button type="button" class="btn btn-black"><i class="icon-grid"></i></button>
        <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
        <ul class="dropdown-menu btn-black-dropdown-menu">
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
            <li><a title="{lang_admin('set_up')}" data-target="#template-contact-tag" role="button" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i>{lang_admin('set_up')}</a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
        </ul>
    </span>
	<div class="preview">
		<img src="{$base_url}/common/plugins/visual/images/section/contact.png">
		<p>{lang_admin('contact')}</p>
	</div>
	<div class="view">
		<div class="visual-contact visual-inline-block">
            <p><span class="codearea">#[#lang('address')#]#</span><span class="viewarea">{lang_admin('address')}</span>：<span class="custtag address" rel="config::getadmin('address')"><?php echo config::getadmin('address'); ?></span></p>
			<p><span class="codearea">#[#lang('postcode')#]#</span><span class="viewarea">{lang_admin('postcode')}</span>：<span class="custtag postcode" rel="config::getadmin('postcode')"><?php echo config::getadmin('postcode'); ?></span></p>
			<p><span class="codearea">#[#lang('tel')#]#</span><span class="viewarea">{lang_admin('tel')}</span>：<span class="custtag tel" rel="config::getadmin('tel')"><?php echo config::getadmin('tel'); ?></span></p>
			<p><span class="codearea">#[#lang('fax')#]#</span><span class="viewarea">{lang_admin('fax')}</span>：<span class="custtag fax" rel="config::getadmin('fax')"><?php echo config::getadmin('fax'); ?></span></p>
			<p><span class="codearea">#[#lang('mobile')#]#</span><span class="viewarea">{lang_admin('mobile')}</span>：<span class="custtag mobile" rel="config::getadmin('mobile')"><?php echo config::getadmin('mobile'); ?></span></p>
			<p><span class="codearea">#[#lang('email')#]#</span><span class="viewarea">{lang_admin('email')}</span>：<span class="custtag email" rel="config::getadmin('email')"><?php echo config::getadmin('email'); ?></span></p>
			<p><span class="codearea">#[#lang('complaint_email')#]#</span><span class="viewarea">{lang_admin('complaint')}{lang_admin('email')}</span>：<span class="custtag complaint_email" rel="config::getadmin('complaint_email')"><?php echo config::getadmin('complaint_email'); ?></span></p>
		</div>
	</div>
</div>
<!-- 组件结束 -->