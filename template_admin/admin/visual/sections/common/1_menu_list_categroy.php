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
        <img src="{$base_url}/common/plugins/visual/images/section/category_list.png">
        <p>{lang_admin('left_menu')}</p>
    </div>
    <div class="view">
		<div class="visual-left-menu">
			<div class="codearea">
				<div class="visual-left-menu-list">
					#[#loop type_nav(0) $t#]#
					<h5 class="visual-left-menu-list-one"><a #[#if config::getadmin('nav_blank')==1#]# target=" _blank"#[#/if#]# href="#[#$t['url']#]#">#[#$t['catname']#]#	(#[#$t['num']#]#)</a>#[#if count(type($t['catid']))#]#<span class="caret"></span>#[#/if#]#</h5>
					#[#if count(type($t['catid']))#]#
					<div class="opened-for-codepen">	
						#[#loop type_nav($t['catid']) $t1#]#
						<h5 class="visual-left-menu-list-two"><a #[#if config::getadmin('nav_blank')==1#]# target=" _blank"#[#/if#]# href="#[#$t1['url']#]#">#[#$t1['catname']#]#	(#[#$t1['num']#]#)</a>#[#if count(type($t1['catid']))#]#<span class="caret"></span>#[#/if#]#</h5>
						#[#if count(type($t1['catid']))#]#
						<div class="opened-for-codepen">
							#[#loop type_nav($t1['catid']) $t2#]#
							<h5 class="visual-left-menu-list-three"><a #[#if config::getadmin('nav_blank')==1#]# target=" _blank"#[#/if#]# href="#[#$t2['url']#]#">#[#$t2['catname']#]#	(#[#$t2['num']#]#)</a>#[#if count(type($t2['catid']))#]#<span class="caret"></span>#[#/if#]#</h5>
							#[#if count(type($t2['catid']))#]#
							<div class="opened-for-codepen">
								#[#loop type_nav($t2['catid']) $t3#]#
								<h5 class="visual-left-menu-list-four"><a #[#if config::getadmin('nav_blank')==1#]# target=" _blank"#[#/if#]# href="#[#$t3['url']#]#">#[#$t3['catname']#]#	(#[#$t3['num']#]#)</a>#[#if count(type($t3['catid']))#]#<span class="caret"></span>#[#/if#]#</h5>
								#[#if count(type($t3['catid']))#]#
									<div class="opened-for-codepen">
									#[#loop type_nav($t3['catid']) $t4#]#
										<h5 class="visual-left-menu-list-five"><a #[#if config::getadmin('nav_blank')==1#]# target=" _blank"#[#/if#]# href="#[#$t4['url']#]#">#[#$t4['catname']#]#	(#[#$t4['num']#]#)</a>#[#if count(type($t4['catid']))#]#<span class="caret"></span>#[#/if#]#</h5>
										#[#if count(type($t4['catid']))#]#
										<div class="opened-for-codepen">
										#[#loop type_nav($t4['catid']) $t5#]#
										<h5 class="visual-left-menu-list-six"><a #[#if config::getadmin('nav_blank')==1#]# target=" _blank"#[#/if#]# href="#[#$t5['url']#]#">#[#$t5['catname']#]#	(#[#$t5['num']#]#)</a>#[#if count(type($t5['catid']))#]#<span class="caret"></span>#[#/if#]#</h5>
											#[#if count(type($t5['catid']))#]#
											<div>
												#[#loop type_nav($t5['catid']) $t6#]#
												<h5 class="visual-left-menu-list-seven"><a #[#if config::getadmin('nav_blank')==1#]# target=" _blank"#[#/if#]# href="#[#$t6['url']#]#">#[#$t6['catname']#]#	(#[#$t6['num']#]#)</a></h5>
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
				<div class="visual-left-menu-list">
					<h5 class="visual-left-menu-list-one"><a>栏目名称 (8)<span class="caret"></span></a></h5>
					<div>
						<h5 class="visual-left-menu-list-two"><a>子栏目 (4)</a></h5>
						<h5 class="visual-left-menu-list-two"><a>子栏目	(4)</a></h5>
					</div>
					<h5 class="visual-left-menu-list-one"><a href="#">栏目名称	(0)</a></h5>
				</div>
			</div>
		</div>
    </div>
</div>
<!-- 组件结束 -->