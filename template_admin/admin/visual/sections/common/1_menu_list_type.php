<!-- 组件 -->
<div class="lyrow visual-drag-box box-element">
    <span class="drag label btn-group drag-container">
        <button type="button" class="btn btn-black"><i class="icon-grid"></i></button>
        <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
        <ul class="dropdown-menu btn-black-dropdown-menu">
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
            <li><a title="{lang_admin('delete')}" class="remove remove-container"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
        </ul>
    </span>
	<div class="preview">
		<img src="{$base_url}/common/plugins/visual/images/section/category_list.png">
		<p>{lang_admin('left_menu_type')}</p>
	</div>
	<div class="view">
		<div class="visual-left-menu-type">
			<div class="codearea">
				<div class="visual-left-menu-type-list">
					#[#loop typies() $t#]#
					<h5 class="visual-left-menu-type-list-one"><a href="#[#$t['url']#]#" title="#[#$t['typename']#]#">#[#$t['typename']#]##[#if count(typies($t['typeid']))#]#<span class="caret"></span>#[#/if#]#</a></h5>
					#[#if count(typies($t['typeid']))#]#
					<div class="opened-for-codepen">	
						#[#loop typies($t[typeid]) $t1#]#
						<h5 class="visual-left-menu-type-list-two"><a title="#[#$t1['typename']#]#" href="#[#$t1['url']#]#">#[#$t1['typename']#]#</a>#[#if count(typies($t1['typeid']))#]#<span class="caret"></span>#[#/if#]#</h5>
						#[#if count(typies($t1['typeid']))#]#
						<div class="opened-for-codepen">
							#[#loop typies($t1[typeid]) $t2#]#
							<h5 class="visual-left-menu-type-list-three"><a title="#[#$t2['typename']#]#" href="#[#$t2['url']#]#">#[#$t2['typename']#]#</a>#[#if count(typies($t2['typeid']))#]#<span class="caret"></span>#[#/if#]#</h5>
							#[#if count(typies($t2['typeid']))#]#
							<div class="opened-for-codepen">
								#[#loop typies($t2[typeid]) $t3#]#
								<h5 class="visual-left-menu-type-list-four"><a title="#[#$t3['typename']#]#" href="#[#$t3['url']#]#">#[#$t3['typename']#]#</a>#[#if count(typies($t3['typeid']))#]#<span class="caret"></span>#[#/if#]#</h5>
								#[#if count(typies($t3['typeid']))#]#
								<div class="opened-for-codepen">
									#[#loop typies($t3[typeid]) $t4#]#
									<h5 class="visual-left-menu-type-list-five"><a title="#[#$t4['typename']#]#" href="#[#$t4['url']#]#">#[#$t4['typename']#]#</a>#[#if count(typies($t4['typeid']))#]#<span class="caret"></span>#[#/if#]#</h5>
									#[#if count(typies($t4['typeid']))#]#
									<div class="opened-for-codepen">
										#[#loop typies($t4[typeid]) $t5#]#
										<h5 class="visual-left-menu-type-list-six"><a title="#[#$t5['typename']#]#" href="#[#$t5['url']#]#">#[#$t5['typename']#]#</a>#[#if count(typies($t5['typeid']))#]#<span class="caret"></span>#[#/if#]#</h5>
										#[#if count(typies($t5['typeid']))#]#
										<div>
											#[#loop typies($t5[typeid]) $t6#]#
											<h5 class="visual-left-menu-type-list-six"><a title="#[#$t6['typename']#]#" href="#[#$t6['url']#]#">#[#$t6['typename']#]#</a></h5>
											#[#/loop#]#
										</div>
										#[#/if#]#
										#[#/loop#]#
									</div>
									#[#/if#]#
									#[#/loop#]#
								</div>
								#[#/if#]#
								#[#/loop#]#
							</div>
							#[#/if#]#
							#[#/loop#]#
						</div>
						#[#/if#]#
						#[#/loop#]#
					</div>
					#[#/if#]#
					#[#/loop#]#
				</div>
			</div>
			<div class="viewarea">
				<div class="visual-left-menu-type-list">
					<h5 class="visual-left-menu-type-list-one"><a>分类名称<span class="caret"></span></a></h5>
					<div>
						<h5 class="visual-left-menu-type-list-two"><a>子分类</a></h5>
						<h5 class="visual-left-menu-type-list-two"><a>子分类</a></h5>
					</div>
					<h5 class="visual-left-menu-type-list-one"><a href="#">分类名称</a></h5>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 组件结束 -->