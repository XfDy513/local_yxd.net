<!-- 组件 -->
<div class="visual-drag-box box-element">
    <span class="drag label btn-group drag-container">
        <button type="button" class="btn btn-black"><i class="icon-grid"></i></button>
        <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
        <ul class="dropdown-menu btn-black-dropdown-menu">
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
        </ul>
    </span>
	<div class="preview">
		<img src="{$base_url}/common/plugins/visual/images/section/search.png">
		<p>{lang_admin('order_search')}</p>
	</div>
	<div class="view">
		<div class="visual-search">
            <div class="codearea">
				<div class="search">
					<div class="input-group">
						<input type="text"   name="search_orders_oid" value="" placeholder="#[#lang('order_search')#]#" class="form-control" />
						<span class="input-group-btn">
                            <button class="btn btn-default" name="search_orders_button" type="button">{lang('search')}</button>
						</span>
					</div>
				</div>
                <script>
                    $('[name="search_orders_button"]').click(function(){
                        window.location.href="#[#url('archive/orders')#]#&oid="+$('[name="search_orders_oid"]').val();
                    });
                </script>
            </div>
            <div class="viewarea">
                <div class="search">
                    <div class="input-group">
                        <input type="text" id="oid" name="oid" value="" placeholder="{lang('order_search')}" class="form-control" />
						<span class="input-group-btn">
							<button class="btn btn-default" name="submit" type="submit">{lang('search')}</button>
						</span>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>
<!-- 组件结束 -->

