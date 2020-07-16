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
		<img src="{$base_url}/common/plugins/visual/images/section/print.png">
		<p>{lang_admin('print')}</p>
	</div>
	<div class="view">
		<div class="visual-print">
			<div class="codearea">
				<p class="visual-print-tools">
					<a href="javascript:CallPrint('print');"><i class="glyphicon glyphicon-print"></i></a>&nbsp; &nbsp; &nbsp;<a href="javascript:doZoom(14)">#[#lang('small')#]#</a>&nbsp; &nbsp;<a href="javascript:doZoom(18)">#[#lang('middle')#]#</a>&nbsp; &nbsp;<a href="javascript:doZoom(20)">#[#lang('big')#]#</a>
				</p>
			</div>
			<div class="viewarea">
				<p class="visual-print-tools">
					<a href="#">打印本文</a> &nbsp; &nbsp; &nbsp; <a href="#">小</a>&nbsp; &nbsp;<a href="#">中</a>&nbsp; &nbsp;<a href="#">大</a>
				</p>
			</div>
		</div>
	</div>
</div>
	<!-- 模块样例一结束 -->