<?php if (!defined('ROOT')) exit('Can\'t Access !'); return array (
    'install_admin'=>'',
//site-网站信息{
    'stop_site'=>'1',
//站点状态[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="站点状态！" /></span>]radio=>1/开/2/关/3/挂起
    'site_url'=>'http://www.kdui.com/',
//网站地址[<p class="tips-p">输入格式：{SERVER_NAME}，必须以"/"结尾！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="http://起始并以 / 结束！" /></span>]
    'site_mobile'=>'17335582575',
//管理员手机[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="管理员手机号码,可以开通用户动作短信提醒！" /></span>]
    'admin_dir'=>'dh_kedui',
//后台地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="强烈推荐安装后第一时间修改登录地址，加强网站后台安全性！" /></span>]
    'sitename'=>'可兑',
//网站名称[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="请填写网站简称，主要用于页底说明！" /></span>]
    'fullname'=>'可兑智能积分机-选择可兑、一切可兑！',
//网页标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="网页标题处显示，可结合关键词使用！" /></span>]
    'site_keyword'=>'可兑/可兑智能积分机/优享付',
//网站关键字[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="网站关键词，用于优化网站排名，多个关键词请用英文逗号间隔！" /></span>]
    'site_description'=>'可兑智能积分机以通过物联网技术为帮助消费者把积分实现全域通兑！',
//网站描述[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="网站网页描述内容，可简写与网站相关的简介！" /></span>]
    'site_logo'=>'/cn/upload/images/202005/15902283632004.jpg',
//网站logo[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="点击图片，上传网站logo！" /></span>]=>image
    'logo_width'=>'360',
//logo宽度[<p class="tips-p">当使用响应式模板时该设置无作用！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置logo宽度，单位(px)！" /></span>]
    'logo_height'=>'45',
//logo高度[<p class="tips-p">当使用响应式模板时该设置无作用！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置logo高度，单位(px)！" /></span>]
    'site_ico'=>'/cn/upload/images/202005/15904751619363.jpg',
//地址栏图标[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="点击图片，上传网站地址栏图标！如果无法正常显示新上传图标，请空浏览器缓存后访问。" /></span>]=>image
    'site_right'=>'Copyright ©',
//网站版权[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="前台显示网站版权说明内容！" /></span>]
    'k'=>array ('G','H','I','J','K','L','M','N','O','G','H','I','J','K','L'),
    'h'=>array (104,116,116,112,58,47,47,108,105,99,101,110,115,101,46,99,109,115,101,97,115,121,46,99,110,47,112,104,112,114,112,99,46,112,104,112),
//}
//websitesite-网站自定义{
    'isdebug'=>'0',
//调试开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站是否显示PHP运行错误代码！" /></span>]radio=>0/关/1/开
    'ueditor_open'=>'0',
//编辑器是否支持div[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置百度编辑器转换开关！" /></span>]radio=>0/关/1/开
    'lang_type'=>'1',
//繁体切换[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="是否显示繁体切换！" /></span>]radio=>0/关/1/开
    'history_num'=>8,
//访问记录[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="后台访问记录TAB数量控制！" /></span>]
    'show_top_text'=>'1',
//置顶文字是否显示[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置栏目置顶和全站置顶文字显示开关！" /></span>]radio=>0/关/1/开
    'pc_style_color'=>'2',
//网站整体颜色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="只在PC模板支持换色时有效！" /></span>]=>0/无/1/红/2/橙/3/黄/4/绿/5/青/6/蓝/7/紫/8/黑/9/白
    'nav_top'=>'1',
//网站导航置顶[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站导航是否固定在页顶显示" /></span>]radio=>0/否/1/是
    'shield_right_key'=>'0',
//屏蔽右键开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭屏蔽鼠标右键功能" /></span>]radio=>0/关/1/开
    'nav_blank'=>'0',
//栏目打开方式[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站导航链接是否在新窗口打开！" /></span>]radio=>0/关/1/开
    'onerror_pic'=>'/images/pic.png',
//列表默认图片[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="当图片列表页无缩略图时用于替换显示！" /></span>]=>image
    'thumb_width'=>'600',
//列表中缩略图宽度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站缩略图宽度，单位（PX）！注：只在模板中调用宽度值后才有效！" /></span>]
    'thumb_height'=>'400',
//列表中缩略图高度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站缩略图高度，单位（PX）！注：只在模板中调用高度值后才有效" /></span>]
    'manage_pagesize'=>'12',
//后台分页数量[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置后台内容列表分页数量！" /></span>]
    'list_pagesize'=>'12',
//前台分页数量[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置前台全站内容列表分页数量，如栏目单独设置分页，优先按栏目设置显示！" /></span>]
    'like_news'=>'5',
//相关文章条数[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置前台内容页相关文章条数！" /></span>]
    'search_time'=>'1',
//搜索时间限制[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="同一关键字在限制时间内不能重复搜索！" /></span>]
    'maxhotkeywordnum'=>'999',
//搜索基数[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="热门关键词获取条件，大于基数的为热门关键词！" /></span>]
    'archive_introducelen'=>'99',
//内容系统简介自动截取长度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="自动获取内容中前200字符为内容简介！" /></span>]
    'isecoding'=>'1',
//防伪码开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站是否启用防伪码！" /></span>]radio=>0/关/1/开
    'ecoding'=>'CMSEASY',
//防伪码前缀[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置防伪码的前缀" /></span>]
    'site_icp'=>'20013816',
//ICP备案号[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="前台显示ICP备案号码！" /></span>]
    'site_beian'=>'豫',
//公网安备省字头[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="公网安备省字头！" /></span>]
    'site_beian_number'=>'20013816',
//公网安备号[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="公网安备号码！" /></span>]
    'saic_pic'=>'8',
//工商亮照ID[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="前台显示工商亮照图片！" /></span>]
    'qrcodes'=>'0',
//二维码开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站是否启用二维码！" /></span>]radio=>0/关/1/开
    'template_view'=>'1',
//在线模板[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="在线查看免费模板列表并下载使用！" /></span>]radio=>0/关/1/开
    'opguestadd'=>'0',
//游客投稿开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站是否启用匿名发布内容，游客发布地址：http://域名/?g=1！" /></span>]radio=>0/关/1/开
    'html_wow'=>'1',
//网页动画[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置是否在网站开启网页动画效果！" /></span>]radio=>0/关/1/开
    'share'=>'0',
//分享开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站是否显示分享功能！" /></span>]radio=>0/关/1/开
    'hotsearch'=>'0',
//热门关键词开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置是否显示热门关键词！" /></span>]radio=>0/关/1/开
    'video_url'=>'http://player.youku.com/player.php/Type/Folder/Fid/19033149/Ob/1/sid/XNTI1NTk4OTAw/v.swf',
//视频地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="复制优酷视频中的地址！" /></span>]
//}
//information-联系信息{
    'address'=>'河南丹鸿科技有限公司',
//联系地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系地址！" /></span>]
    'tel'=>'0371-63363998',
//联系电话[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系电话！" /></span>]
    'mobile'=>'17335582575',
//移动电话[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写移动电话号码！" /></span>]
    'fax'=>'400-400-4000',
//传真[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写传真号码！" /></span>]
    'email'=>'2246007105@qq.com',
//邮箱[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系邮箱！" /></span>]
    'complaint_email'=>'2246007105@qq.com',
//投诉邮箱[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写投诉邮箱！" /></span>]
    'postcode'=>'136000',
//邮政编码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写邮政编码！" /></span>]
//}
//langsite-语言管理设置{
    'lang_switch'=>'1',
//语言选择开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭语言切换！" /></span>]radio=>0/关/1/开
//}
//filechecksite-安全设置{
    'safe360_enable'=>'0',
//360安全开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭360安全功能" /></span>]radio=>0/关/1/开
    'session_ip'=>'0',
//SESSION验证IP[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站是否启用固定ip登录验证！" /></span>]radio=>0/关/1/开
    'ipcheck_enable'=>'0',
//后台登录IP验证开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭IP验证功能" /></span>]radio=>0/关/1/开
    'template_nologin'=>'5',
//前台登录错误次数[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="前台允许登录错误的次数！" /></span>]
    'admin_nologin'=>'5',
//后台登录错误次数[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="后台允许登录错误的次数！" /></span>]
    'loginfalsetime'=>'86400',
//登录失败时间[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="登录失败超过错误次数后允许重新登录时间！" /></span>]=>3600/1小时/18000/5小时/86400/24小时
    'cookie_password'=>'23f14626f2bc9e44cb863d33306775fb051522d0',
//Cookie安全码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="多站点设置时，此项必须一致！" /></span>]
//}
//phonesite-手机版{
    'mobile_open'=>'0',
//是否启用[<p class="tips-p">如不需要独立手机端，请勿启用！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站是否启用手机版功能，如使用自适应模板请选择关闭独立手机版！" /></span>]radio=>0/关/1/开/2/始终
    'wap_logo'=>'/cn/upload/images/202005/15906310224283.jpg',
//手机版logo[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="点击图片，上传网站logo！" /></span>]=>image
    'wlogo_width'=>'240',
//logo宽度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置logo宽度，单位(px)！" /></span>]
    'wlogo_height'=>'30',
//logo高度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置logo高度，单位(px)！" /></span>]
    'wap_style_color'=>'2',
//手机版整体颜色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="只在手机模板支持换色时有效！" /></span>]=>0/无/1/红/2/橙/3/黄/4/绿/5/青/6/蓝/7/紫/8/黑/9/白
    'wap_foot_nav'=>'2',
//手机版底部菜单样式[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置手机底部菜单样式！" /></span>]radio=>0/关/1/上弹/2/圆形/3/平铺
    'wap_foot_nav_position'=>'right',
//手机版底部菜单位置[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置手机底部菜单位置！" /></span>]=>left/左/right/右
//}
//dynamic-动静态设置{
    'list_cache'=>'1',
//列表缓存[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="是否启用php缓存，强烈推荐开启此项！" /></span>]radio=>0/关/1/开
    'list_cache_time'=>'3600',
//缓存时间[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置缓存更新的时间，单位（秒）！" /></span>]
    'group_on'=>'1',
//生成分组[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置是否分组生成，减小生成静态对服务器或空间的压力，避免生成过程中因网速影响中断！" /></span>]radio=>0/关/1/开
    'group_count'=>'100',
//每组生成个数[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="视网速和主机配置而定，推荐设置为"20"！" /></span>]
    'staticlang'=>'-',
//URL 分隔[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="URL路径分隔符！" /></span>]radio=>-/中划线/_/下划线
    'pc_html_info'=>'',
//pc动静态
    'html_prefix'=>'/cn',
//html路径[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置html生成后存放目录，为空或比如/html" /></span>]
    'list_index_php'=>'0',
//首页[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置首页动静态显示！" /></span>]radio=>0/按指定/1/静态/2/动态
    'list_page_php'=>'0',
//栏目页[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置栏目页动静态显示！" /></span>]radio=>0/按指定/1/静态/2/动态
    'show_page_php'=>'0',
//内容页[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置内容页动静态显示！" /></span>]radio=>0/按指定/1/静态/2/动态
    'list_type_php'=>'0',
//分类页[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置分类页动静态显示！" /></span>]radio=>0/按指定/1/静态/2/动态
    'list_special_php'=>'0',
//专题页[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置专题页动静态显示！" /></span>]radio=>0/按指定/1/静态/2/动态
    'tag_html'=>'0',
//生成TAG[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置是否生成TAG！" /></span>]radio=>0/按指定/1/静态/2/动态
    'wap_html_info'=>'',
//手机动静态
    'wap_html_prefix'=>'/wap/cn',
//html路径[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置手机html生成后存放目录，为空或以/开头！" /></span>]
    'wap_index_php'=>'0',
//手机首页[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置首页动静态显示！" /></span>]radio=>0/按指定/1/静态/2/动态
    'wap_list_page_php'=>'0',
//手机栏目页[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置手机栏目页动静态显示！" /></span>]radio=>0/按指定/1/静态/2/动态
    'wap_show_page_php'=>'0',
//手机内容页[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置手机内容页动静态显示！" /></span>]radio=>0/按指定/1/静态/2/动态
    'wap_type_php'=>'0',
//手机分类页[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置手机分类页动静态显示！" /></span>]radio=>0/按指定/1/静态/2/动态
    'wap_special_php'=>'0',
//手机专题页[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置手机专题页动静态显示！" /></span>]radio=>0/按指定/1/静态/2/动态
    'wap_tag_html'=>'0',
//手机TAG[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置是否生成手机TAG！" /></span>]radio=>0/按指定/1/静态/2/动态
    'urlrewrite_info'=>'',
//请注意
    'urlrewrite_on'=>'1',
//伪静态[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="如对伪静态不了解，请关闭！" /></span>]radio=>0/关/1/开
    'custom404'=>'1',
//伪静态404页面[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="自定义404页面" /></span>]radio=>0/关/1/开
    'autoDelRewriteFile'=>'0',
//自动删除规则[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="关闭伪静态的时候,自动删除规则文件" /></span>]radio=>0/关/1/开
    'isautocthmtl'=>'0',
//0点自动生成[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="每日0点自动生成首页和栏目页！" /></span>]radio=>0/关/1/开
//}
//spidersite-蜘蛛统计设置{
    'stats_enable'=>'0',
//蜘蛛统计开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭蜘蛛统计功能" /></span>]radio=>0/关/1/开
    'iscleanstats'=>'0',
//自动清除蜘蛛记录[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="自动清除蜘蛛记录" /></span>]=>0/关/1/每日/2/每周
    'site_push'=>'1',
//百度推送[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="left" title="设置是否在网站开启百度自动内容推送" /></span>]radio=>0/关/1/开
//}
//backupsite-备份管理设置{
    'isautobak'=>'0',
//数据库自动备份[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="数据库可以按日周月自动备份！" /></span>]=>0/关/1/每日/2/每周/3/每月
//}
//customer-客服列表{
    'ifonserver'=>'1',
//是否启用[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置是否在网站中显示悬浮客服侧栏！" /></span>]radio=>1/开/0/关
    'server_template'=>'3',
//选择网站客服样式[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="选择网站悬浮客服样式！" /></span>]=>1/扁平彩色/2/扁平灰色/3/扁平蓝色/4/经典/5/旧时光
    'boxopen'=>'open',
//默认展开客服列表[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="left" title="设置网站悬浮客服侧栏默认展开状态！" /></span>]radio=>open/开/close/关
    'serverlistp'=>'right',
//客服浮动框位置[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站悬浮客服侧栏显示位置！" /></span>]radio=>left/左边/right/右边
    'worktime'=>'咨询时间 8:30 - 18:00 周一至周六',
//工作时间[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写工作时间！" /></span>]
    'qq1name'=>'客服一',
//客服职务[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系人职务！" /></span>]
    'qq1'=>'1637864838',
//QQ号码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系QQ号码！" /></span>]
    'qq2name'=>'客服二',
//客服职务[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系人职务！" /></span>]
    'qq2'=>'304597490',
//QQ号码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系QQ号码！" /></span>]
    'qq3name'=>'客服三',
//客服职务[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系人职务！" /></span>]
    'qq3'=>'666',
//QQ号码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系QQ号码！" /></span>]
    'qq4name'=>'客服四',
//客服职务[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系人职务！" /></span>]
    'qq4'=>'',
//QQ号码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系QQ号码！" /></span>]
    'qq5name'=>'客服五',
//客服职务[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系人职务！" /></span>]
    'qq5'=>'',
//QQ号码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系QQ号码！" /></span>]
    'wangwangname'=>'淘宝客服',
//客服职务[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系人职务！" /></span>]
    'wangwang'=>'mymoban',
//淘宝旺旺号码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系淘宝旺旺号码！" /></span>]
    'aliname'=>'阿里巴巴',
//客服职务[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系人职务！" /></span>]
    'ali'=>'',
//阿里旺旺号码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系阿里旺旺号码！" /></span>]
    'skypename'=>'Skype客服',
//客服职务[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系人职务！" /></span>]
    'skype'=>'admin@admin.com',
//Skype号码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系Skype号码！" /></span>]
    'weixin_pic'=>'/cn/upload/images/202005/1590732536084.png',
//微信二维码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="当图片列表页无缩略图时用于替换显示！" /></span>]=>image
//}
//security-字符过滤{
    'filter_word'=>'陈水扁',
//过滤字符[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="网站内容中被过滤替换掉的字符，多个请用“,”隔开！" /></span>]
    'filter_x'=>'(*该人已被收押*)',
//替代字符[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="网站内容中被过滤替换掉的字符，多个请用“,”隔开！" /></span>]
//}
//membersite-会员管理设置{
    'reg_on'=>'1',
//注册开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站是否启用会员系统！" /></span>]radio=>0/关/1/开
    'site_login'=>'1',
//是否显示用户登录[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置是否在网站显示用户登录" /></span>]radio=>0/关/1/开
    'invitation_registration'=>'0',
//邀请注册[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置是否必须邀请注册用户才能注册！" /></span>]radio=>0/关/1/开
//}
//discuss-评论管理设置{
    'comment'=>'0',
//是否启用[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站是否显示评论功能！" /></span>]radio=>0/关/1/开
    'comment_list'=>'0',
//评论列表[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭评论列表！" /></span>]radio=>0/关/1/开
    'comment_num'=>'5',
//内容页评论条数[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="内容页评论条数！" /></span>]
    'comment_user'=>'0',
//是否展示评论列表[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="是否允许查看评论列表！" /></span>]radio=>0/关/1/开
    'comment_time'=>'10',
//评论时间间隔[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="同IP或用户评论时间间隔,0为不限制,单位秒" /></span>]=>10/10秒/30/30秒/60/1分钟
    'comment_switch'=>'0',
//评论条件[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="可评论条件" /></span>]radio=>0/游客/1/会员/2/禁止
    'comment_title'=>'评论',
//评论页标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="评论网页标题" /></span>]
    'reply_comment'=>'0',
//多重回复[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="left" title="是否开启评论多重回复！" /></span>]radio=>0/关/1/开
//}
//formsite-表单管理设置{
    'guestformsubmit'=>'0',
//游客表单提交[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站是否启用匿名提交表单！" /></span>]radio=>0/关/1/开
//}
//orders-订单管理设置{
    'shoppingcart'=>'0',
//购物车开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭购物车链接" /></span>]radio=>0/关/1/开
    'memberbuy'=>'0',
//会员购买[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭必须会员购买" /></span>]radio=>0/关/1/开
    'order_time'=>'10',
//订单时间间隔[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="订单提交时间间隔" /></span>]=>10/10秒/30/30秒/60/1分钟
//}
//guestbook-留言设置{
    'guestbook_enable'=>'0',
//是否启用[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭留言本功能" /></span>]radio=>0/关/1/开
    'guestbook_list'=>'0',
//留言本列表[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭留言列表！" /></span>]radio=>0/关/1/开
    'guestbook_time'=>'',
//留言时间间隔[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="同IP或用户留言时间间隔,0为不限制,单位秒" /></span>]=>10/10秒/30/30秒/60/1分钟
    'guestbook_user'=>'1',
//查看留言列表[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="是否允许非会员查看留言列表！" /></span>]radio=>0/关/1/开
    'guestbook_switch'=>'2',
//留言条件[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="可留言条件" /></span>]radio=>0/游客/1/会员/2/禁止
    'guestbook_title'=>'留言',
//留言页标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="留言网页标题" /></span>]
//}
//sitesetup-站点设置{
    'website_list'=>'1',
//站点列表[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭页头站点列表显示" /></span>]radio=>0/关/1/开
//}
//缩略图
    'smallimage_open' => 1,
    'smallimage_width' => 200,
    'smallimage_height' => 200,
    'smallimage_path' => '/smallimages',
//相对于upload文件夹而言
//image-图片水印{
    'watermark_open'=>'0',
//是否启用=>0/关/1/开
    'watermark_min_width'=>'300',
//最小宽度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="当上传的图片宽度小于设置宽度，不添加水印！" /></span>]
    'watermark_min_height'=>'300',
//最小高度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="当上传的图片高度小于设置高度，不添加水印！" /></span>]
    'watermark_path'=>'/images/logo.png',
//水印路径[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="水印图片支持jpg、gif、png格式！" /></span>]=>image
    'watermark_ts'=>'80',
//透明度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="范围为 （1~100 ）的整数，数值越小水印图片越透明！" /></span>]
    'watermark_qs'=>'90',
//JPEG图片质量[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="范围为（ 0~100 ）的整数，数值越大结果图片效果越好！" /></span>]
    'watermark_pos'=>'5',
//添加位置[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="请在此选择水印添加的位置（3x3 共9个位置可选）" /></span>]=>1/1/2/2/3/3/4/4/5/5/6/6/7/7/8/8/9/9
//}
//upload-附件设置{
    'upload_filetype'=>'jpg,gif,bmp,jpeg,png,doc,docx,xls,xlsx,zip,rar,7z,txt,pdf,JPG,GIF,BMP,JPEG,PNG,ZIP,RAR,7Z,TXT,PDF,DOC,DOCX,XLS,XLSX,mp4,MP4,mp3,MP3,FLV,flv',
//附件类型[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置添加上传附件的类型，多个后缀用","隔开！" /></span>]
    'upload_max_filesize'=>'200',
//附件大小[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置上传附件小小上限，单位(MB)！" /></span>]
    'mods'=>'',
//}
//template-模板设置{
    'template_dir'=>'2019-default',
//前台模板[默认default]
//}
//template-商城模板{
    'template_shopping_dir'=>'shop',
//商城模板
//}
//template-手机模板{
    'template_mobile_dir'=>'wap',
//手机模板
//}
//template-在线模板{
    'template_online'=>'',
//在线模板
//}
//template-其他模板{
    'template_user_dir'=>'user',
//会员模板[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="默认user！" /></span>]
    'template_admin_dir'=>'admin',
//后台模板[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="默认admin！" /></span>]
//}
//ballot-投票设置{
    'checkip'=>'0',
//验证IP[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置投票是否开启IP限制，开启后，同一IP只需投票一次！" /></span>]radio=>0/关/1/开
    'timer'=>'60',
//时间间隔[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置同一IP投票的限制时间，单位:分钟！" /></span>]
//}
//ditu-地图设置{
    'ditu_APK'=>'',
//地图APK[<a href=https://lbsyun.baidu.com target=_blank  class=btn-navy-sms>注册用户</a><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="如果网站使用HTTPS，请必须填写申请的APK！" /></span>]
    'ditu_width'=>'900',
//地图宽度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写地图的宽度，例如：360！，单位（PX）！" /></span>]
    'ditu_height'=>'460',
//地图高度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写地图的高度，例如：300！，单位（PX）！" /></span>]
    'ditu_center_left'=>'113.75891996295167',
//地图-经度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写地图的经度！" /></span>]
    'ditu_center_right'=>'34.75577407209275',
//地图-纬度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写地图的纬度！" /></span>]
    'ditu_level'=>'12',
//显示级别[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写地图的显示级别！" /></span>]
    'ditu_title'=>'河南丹鸿科技有限公司',
//信息窗标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写地图坐标点提示信息标题！" /></span>]
    'ditu_content'=>'地址：河南省郑州市郑东新区商鼎路农业南路东方陆港C座9层 电话：0371-63363998',
//信息窗内容[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写地图坐标点提示信息内容！" /></span>]
    'ditu_maker_left'=>'113.75891996295167',
//标记点经度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写地图坐标点经度！" /></span>]
    'ditu_maker_right'=>'34.75577407209275',
//标记点纬度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写地图坐标点提示纬度！" /></span>]
    'ditu_explain'=>'',
//使用说明
//}
//mail-邮件设置{
    'send_type'=>'2',
//邮件发送方式[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置邮件发送模式！" /></span>]radio=>0/请选择/1/Sendmail/2/SOCKET/3/PHP函数
    'header_var'=>'1',
//邮件头的分隔符=>99/请选择/1/CRLF分隔符(Windows)/0/LF分隔符(Unix|Linux)/2/CR分隔符(Mac)
    'kill_error'=>'1',
//屏蔽错误提示[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置邮件是否屏蔽错误提示！" /></span>]radio=>0/否/1/是
//}
//mail-SOCKET{
    'smtp_mail_host'=>'smtp.ym.163.com',
//SMTP服务器
    'smtp_mail_port'=>'25',
//SMTP端口
    'smtp_mail_auth'=>'1',
//要求身份验证[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="邮箱是否需要登录验证！" /></span>]radio=>0/否/1/是
    'smtp_user_add'=>'admin@admin.cn',
//发信人地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写发信人邮箱！" /></span>]
    'smtp_mail_username'=>'admin@admin.cn',
//邮箱名[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写发信人用户名，一般为邮箱名称！" /></span>]
    'smtp_mail_password'=>'admin',
//密码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写发信邮箱密码！" /></span>]
//}
//mail-PHP函数{
    'smtp_host'=>'smtp.qq.com',
//SMTP服务器
    'smtp_port'=>'25',
//SMTP端口
//}
//mail-开关设置{
    'email_gust_send_cust'=>'0',
//留言发送客户邮箱[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写留言后，是否发送到填写邮箱通知！" /></span>]radio=>0/否/1/是
    'email_guest_send_admin'=>'0',
//留言发送管理员邮箱[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写留言后，是否发送到管理员邮箱通知！" /></span>]radio=>0/否/1/是
    'email_order_send_cust'=>'0',
//订单发送客户邮箱[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写订单后，是否发送到填写邮箱通知！" /></span>]radio=>0/否/1/是
    'email_order_send_admin'=>'0',
//订单发送管理员邮箱[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写订单后，是否发送到管理员邮箱通知！" /></span>]radio=>0/否/1/是
    'email_form_on'=>'0',
//自定义表单发送邮件[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写表单后，是否发送到填写邮箱通知！" /></span>]radio=>0/否/1/是
    'email_form_send_admin'=>'0',
//自定义表单发送管理员邮箱[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写表单后，是否发送到管理员邮箱通知！" /></span>]radio=>0/否/1/是
    'email_reg_on'=>'0',
//注册用户发送邮件[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注册用户后，是否发送到填写邮箱通知！" /></span>]radio=>0/否/1/是
//}
//vote-投票设置{
    'vote_onlyone'=>'0',
//投票只能表决一次[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="限定每个会员每个投票只能表决一次！" /></span>]radio=>0/关/1/开
    'vote_auto_sms'=>'0',
//发布投票自动发送短信[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="投票后，是否发送手机短信通知！" /></span>]radio=>0/关/1/开
//}
//slide-幻灯片设置{
    'slide_width'=>'',
//幻灯宽度[<p class="tips-p">当使用响应式模板时该设置无作用！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置幻灯片的显示宽度！" /></span>]
    'slide_height'=>'',
//幻灯高度[<p class="tips-p">当使用响应式模板时该设置无作用！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置幻灯片的显示高度！" /></span>]
    'slide_number'=>'2',
//幻灯片数量[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="left" title="设置幻灯片的数量，小于或等于5！" /></span>]
    'slide_time'=>'5',
//切换时间[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]
    'slide_style_position'=>'0',
//幻灯文字位置[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯中的文字位置！" /></span>]radio=>0/居左/1/居中/2/居右
    'slide_text_color'=>'#ffffff',
//幻灯文字颜色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯片中文字颜色！" /></span>]=>color
    'slide_input_bg'=>'#007aff',
//链接按钮背景色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯片中链接按钮背景色！" /></span>]=>color
    'slide_input_color'=>'#ffffff',
//链接按钮文字颜色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯片中按钮文字颜色！" /></span>]=>color
    'slide_btn_hover_color'=>'#007aff',
//幻灯底部当前按键颜色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯片切换按钮中当前按钮颜色！" /></span>]=>color
    'slide_btn_color'=>'#ffffff',
//幻灯底部普通按键色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯片切换按钮颜色！" /></span>]=>color
    'slide_btn_width'=>'50',
//幻灯底部按键宽度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯中切换按钮宽度！" /></span>]
    'slide_btn_height'=>'10',
//幻灯底部按键高度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯中切换按钮高度！" /></span>]
    'slide_btn_shape'=>'2',
//幻灯底部按键形状[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯中切换按钮形状！" /></span>]radio=>1/圆形/2/方形
    'slide_button_size'=>'50',
//幻灯左右切换按键大小[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯左右切换按键大小！" /></span>]
    'slide_button_color'=>'#ffffff',
//幻灯左右切换按键颜色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯左右切换按键颜色！" /></span>]=>color
    'slide_pic1'=>'/cn/upload/images/202005/15902425694798.jpg',
//图片1地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'slide_pic1_title'=>'',
//图片1标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'slide_pic1_info'=>'',
//图片1副标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的副标题！" /></span>]
    'slide_pic1_title_url'=>'',
//图片1按钮文字[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="如填写文字在幻灯按钮显示" /></span>]
    'slide_pic1_url'=>'',
//图片1链接地址[<p class="tips-p">链接地址为空时，自动不显示按钮！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
    'slide_pic2'=>'/cn/upload/images/202005/15902289078928.jpg',
//图片2地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'slide_pic2_title'=>'',
//图片2标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'slide_pic2_info'=>'',
//图片2副标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的副标题！" /></span>]
    'slide_pic2_title_url'=>'',
//图片2按钮文字[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="如填写文字在幻灯按钮显示" /></span>]
    'slide_pic2_url'=>'',
//图片2链接地址[<p class="tips-p">链接地址为空时，自动不显示按钮！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
    'slide_pic3'=>'/images/slide/banner03.jpg',
//图片3地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'slide_pic3_title'=>'',
//图片3标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'slide_pic3_info'=>'',
//图片3副标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的副标题！" /></span>]
    'slide_pic3_title_url'=>'',
//图片3按钮文字[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="如填写文字在幻灯按钮显示" /></span>]
    'slide_pic3_url'=>'',
//图片3链接地址[<p class="tips-p">链接地址为空时，自动不显示按钮！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
    'slide_pic4'=>'/images/slide/banner04.jpg',
//图片4地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'slide_pic4_title'=>'', //图片4标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'slide_pic4_info'=>'',
//图片4副标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的副标题！" /></span>]
    'slide_pic4_title_url'=>'',
//图片4按钮文字[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="如填写文字在幻灯按钮显示" /></span>]
    'slide_pic4_url'=>'',
//图片4链接地址[<p class="tips-p">链接地址为空时，自动不显示按钮！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
    'slide_pic5'=>'/images/slide/banner05.jpg',
//图片5地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'slide_pic5_title'=>'',
//图片5标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'slide_pic5_info'=>'',
//图片5副标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的副标题！" /></span>]
    'slide_pic5_title_url'=>'',
//图片1按钮文字[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="如填写文字在幻灯按钮显示" /></span>]
    'slide_pic5_url'=>'',
//图片5链接地址[<p class="tips-p">链接地址为空时，自动不显示按钮！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
//}
//slide-内页切换图片{
    'cslide_width'=>'',
//内页幻灯宽度[<p class="tips-p">当使用响应式模板时该设置无作用！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置幻灯片的显示宽度！" /></span>]
    'cslide_height'=>'250',
//内页幻灯高度[<p class="tips-p">当使用响应式模板时该设置无作用！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置幻灯片的显示高度！" /></span>]
    'cslide_number'=>'2',
//幻灯片数量[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="left" title="设置幻灯片的数量，小于或等于5！" /></span>]
    'cslide_time'=>'5',
//内页幻灯切换时间[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]
    'cslide_style_position'=>'0',
//内页幻灯文字位置[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯中的文字位置！" /></span>]radio=>0/居左/1/居中/2/居右
    'cslide_text_color'=>'#ffffff',
//内页幻灯文字颜色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯片中文字颜色！" /></span>]=>color
    'cslide_input_bg'=>'#0099ff',
//内页链接按钮背景色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯片中链接按钮背景色！" /></span>]=>color
    'cslide_input_color'=>'#ffffff',
//内页链接按钮文字颜色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯片中按钮文字颜色！" /></span>]=>color
    'cslide_btn_hover_color'=>'#0099ff',
//内页幻灯底部当前按键颜色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯片切换按钮中当前按钮颜色！" /></span>]=>color
    'cslide_btn_color'=>'#ffffff',
//内页幻灯底部普通按键色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯片切换按钮颜色！" /></span>]=>color
    'cslide_btn_width'=>'50',
//内页幻灯底部按键宽度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯中切换按钮宽度！" /></span>]
    'cslide_btn_height'=>'10',
//内页幻灯底部按键高度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯中切换按钮高度！" /></span>]
    'cslide_btn_shape'=>'2',
//内页幻灯底部按键形状[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯中切换按钮形状！" /></span>]radio=>1/圆形/2/方形
    'cslide_button_size'=>'50',
//内页幻灯左右切换按键大小[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯左右切换按键大小！" /></span>]
    'cslide_button_color'=>'#ffffff',
//内页幻灯左右切换按键颜色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯左右切换按键颜色！" /></span>]=>color
    'cslide_pic1'=>'/images/banner/s1.jpg',
//内页图片1地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'cslide_pic1_title'=>'响应式网站模板，不同终端，同样精彩',
//内页图片1标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'cslide_pic1_info'=>'全新推出「响应式网站模板」，移动端访客能够得到与电脑网站一样的体验，轻松找到在电脑网站上看到的内容，无论是在电脑、平板、手机上都可以访问到排版合适的网站，即便是微信等应用内置浏览器也是如此。',
//内页图片1副标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的副标题！" /></span>]
    'cslide_pic1_title_url'=>'了解更多',
//内页图片1按钮文字[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="如填写文字在幻灯按钮显示" /></span>]
    'cslide_pic1_url'=>'#',
//内页图片1链接地址[<p class="tips-p">链接地址为空时，自动不显示按钮！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
    'cslide_pic2'=>'/images/banner/s2.jpg',
//内页图片2地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'cslide_pic2_title'=>'海量精美模板免费下载',
//内页图片2标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'cslide_pic2_info'=>'一款基于 PHP+Mysql 架构的网站内容管理系统，也是一个 PHP 开发平台。 采用模块化方式开发，功能易用便于扩展，可面向大中型站点提供重量级网站建设解决方案。',
//内页图片2副标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的副标题！" /></span>]
    'cslide_pic2_title_url'=>'More',
//内页图片2按钮文字[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="如填写文字在幻灯按钮显示" /></span>]
    'cslide_pic2_url'=>'#',
//内页图片2链接地址[<p class="tips-p">链接地址为空时，自动不显示按钮！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
    'cslide_pic3'=>'/images/banner/s3.jpg',
//内页图片3地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'cslide_pic3_title'=>'内置推广模块的企业网站管理系统！',
//内页图片3标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'cslide_pic3_info'=>'内置推广联盟模块的企业网站系统，为企业在营销推广方面，提供了非常便捷的方法和功能。通过推广联盟，企业可针对联盟会员进行统计外链发布数量，通过外链访问的流量统计，并可计算出通过外链而注册的企业用户数量。',
//内页图片3副标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的副标题！" /></span>]
    'cslide_pic3_title_url'=>'了解更多',
//内页图片3按钮文字[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="如填写文字在幻灯按钮显示" /></span>]
    'cslide_pic3_url'=>'#',
//内页图片3链接地址[<p class="tips-p">链接地址为空时，自动不显示按钮！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
    'cslide_pic4'=>'/images/banner/s4.jpg',
//内页图片4地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'cslide_pic4_title'=>'欢迎网建公司及工作室参与分享计划', //图片4标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'cslide_pic4_info'=>'一款基于 PHP+Mysql 架构的网站内容管理系统，也是一个 PHP 开发平台。 采用模块化方式开发，功能易用便于扩展，可面向大中型站点提供重量级网站建设解决方案。',
//内页图片4副标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的副标题！" /></span>]
    'cslide_pic4_title_url'=>'了解更多',
//内页图片4按钮文字[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="如填写文字在幻灯按钮显示" /></span>]
    'cslide_pic4_url'=>'#',
//内页图片4链接地址[<p class="tips-p">链接地址为空时，自动不显示按钮！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
    'cslide_pic5'=>'/images/banner/s5.jpg',
//内页图片5地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'cslide_pic5_title'=>'服务/售后/程序多重升级',
//内页图片5标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'cslide_pic5_info'=>'一款基于 PHP+Mysql 架构的网站内容管理系统，也是一个 PHP 开发平台。 采用模块化方式开发，功能易用便于扩展，可面向大中型站点提供重量级网站建设解决方案。',
//内页图片5副标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的副标题！" /></span>]
    'cslide_pic5_title_url'=>'了解更多',
//内页图片5按钮文字[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="如填写文字在幻灯按钮显示" /></span>]
    'cslide_pic5_url'=>'#',
//内页图片5链接地址[<p class="tips-p">链接地址为空时，自动不显示按钮！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
//}
//slide-手机幻灯设置{
    'wslide_width'=>'300',
//幻灯宽度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置幻灯片的显示宽度！" /></span>]
    'wslide_height'=>'440',
//幻灯高度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置幻灯片的显示高度！" /></span>]
    'wslide_number'=>'2',
//幻灯片数量[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置幻灯片的数量，小于或等于5！" /></span>]
    'wslide_pic1'=>'/cn/upload/images/202005/15902289287849.jpg',
//图片1地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'wslide_pic1_title'=>'助力企业网络营销',
//图片1标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'wslide_pic1_url'=>'#',
//图片1链接地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
    'wslide_pic2'=>'/cn/upload/images/202005/15902289331923.jpg',
//图片2地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'wslide_pic2_title'=>'海量精美模板免费下载',
//图片2标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'wslide_pic2_url'=>'#',
//图片2链接地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
    'wslide_pic3'=>'/images/slide/banner08.jpg',
//图片3地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'wslide_pic3_title'=>'免费下载还有机会获取商业授权',
//图片3标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'wslide_pic3_url'=>'#',
//图片3链接地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
    'wslide_pic4'=>'/images/slide/banner09.jpg',
//图片4地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'wslide_pic4_title'=>'欢迎网建公司及工作室参与分享计划',
//图片4标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'wslide_pic4_url'=>'#',
//图片4链接地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
    'wslide_pic5'=>'/images/slide/banner10.jpg',
//图片5地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'wslide_pic5_title'=>'服务/售后/程序多重升级',
//图片5标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'wslide_pic5_url'=>'#',
//图片5链接地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
//}
//slide-手机内页切换图片{
    'wapcslide_width'=>'990',
//幻灯宽度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置幻灯片的显示宽度！" /></span>]
    'wapcslide_height'=>'120',
//幻灯高度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置幻灯片的显示高度！" /></span>]
    'wapcslide_number'=>'2',
//幻灯片数量[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置幻灯片的数量，小于或等于5！" /></span>]
    'wapcslide_pic1'=>'/images/banner/s1.jpg',
//图片1地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'wapcslide_pic1_title'=>'助力企业网络营销',
//图片1标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'wapcslide_pic1_url'=>'#',
//图片1链接地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
    'wapcslide_pic2'=>'/images/banner/s2.jpg',
//图片2地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'wapcslide_pic2_title'=>'服务/售后/程序多重升级',
//图片2标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'wapcslide_pic2_url'=>'#',
//图片2链接地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
    'wapcslide_pic3'=>'/images/banner/s3.jpg',
//图片3地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'wapcslide_pic3_title'=>'欢迎网建公司及工作室参与分享计划',
//图片3标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'wcslide_pic3_url'=>'#',
//图片3链接地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
    'wapcslide_pic4'=>'/images/banner/s4.jpg',
//图片4地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'wapcslide_pic4_title'=>'免费下载还有机会获取商业授权！', //图片4标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'wapcslide_pic4_url'=>'#',
//图片4链接地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
    'wapcslide_pic5'=>'/images/banner/s5.jpg',
//图片5地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="上传幻灯中的图片！" /></span>]=>image
    'wapcslide_pic5_title'=>'助力企业网络营销',
//图片5标题[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写幻灯中的标题！" /></span>]
    'wapcslide_pic5_url'=>'#',
//图片5链接地址[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注意链接中的&要用%26替换！" /></span>]
//}
//sms-短信设置{
    'sms_explain'=>'',
//使用说明
    'sms_username'=>'',
//用户名[<a href=http://pay.cmseasy.cn/reg.php target=_blank  class=btn-navy-sms>注册用户</a>]
    'sms_password'=>'',
//密码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="请输入短信平台注册时填写的密码！" /></span>]
    'sms_on'=>'0',
//是否启用[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置是否开启短信通知功能！" /></span>]=>1/开/0/关
    'sms_keyword'=>'',
//替换非法字符[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置屏蔽短信中的非法字符，多个字符用英文逗号分隔！" /></span>]
    'sms_maxnum'=>'100',
//最多发送[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="每天发送的最大条数！" /></span>]
    'sms_reg_on'=>'0',
//注册发送[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置用户注册后，是否发送欢迎短信！" /></span>]radio=>1/是/0/否
    'sms_guestbook_on'=>'0',
//留言发送[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置客户确认留言后，是否向客户发送确认收到留言通知！" /></span>]radio=>1/是/0/否
    'sms_order_on'=>'0',
//订单发送[]radio=>1/是/0/否
    'sms_form_on'=>'0',
//表单发送[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置客户确认留言后，是否向客户发送确认表单内容！" /></span>]radio=>1/是/0/否
    'sms_guestbook_admin_on'=>'0',
//确认留言[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="客户确认留言后，是否向管理员发送通知！" /></span>]radio=>1/是/0/否
    'sms_form_admin_on'=>'0',
//确认表单[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="客户确认表单后，是否向管理员发送通知！" /></span>]radio=>1/是/0/否
    'sms_order_admin_on'=>'0',
//确认订单[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="客户确认订单后，是否向管理员发送通知！" /></span>]radio=>1/是/0/否
    'sms_consult_admin_on'=>'0',
//弹开咨询[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="是否开启页底右侧悬浮短信咨询！" /></span>]radio=>1/是/0/否
//}
//sms-短信管理{
    'sms_manage'=>'',
//短信管理
//}
//verification-验证码{
    'verifycode'=>'0',
//验证码全局开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站是否启用验证码！" /></span>]radio=>0/关/1/字符/2/拼图
    'pic_enable_info'=>'',
    //提示
    'gee_id'=>'08ec7f91e55890d35e8e2d5aceee8291',
//极验验证后台ID[<a href=https://account.geetest.com/register  class=btn-navy-sms>注册用户</a>]
    'gee_key'=>'a70cbb24908448dbc6609e44ae50d16f',
//极验验证后台KEY[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="极验验证后台KEY！" /></span>]
    'mobilechk_enable_info'=>'',
    //提示
    'mobilechk_enable'=>'0',
//手机验证码开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭手机验证码功能" /></span>]radio=>0/关/1/开
    'mobilechk_admin'=>'0',
//后台登录短信验证开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭短信验证功能" /></span>]radio=>0/关/1/开
    'mobilechk_reg'=>'0',
//注册手机短信验证[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭注册手机验证码功能" /></span>]radio=>0/关/1/开
    'mobilechk_login'=>'0',
//登录手机短信验证[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭登录手机验证码功能" /></span>]radio=>0/关/1/开
    'mobilechk_buy'=>'0',
//购买手机短信验证[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭购买手机验证码功能" /></span>]radio=>0/关/1/开
    'mobilechk_form'=>'0',
//自定义表单手机短信验证[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭自定义表单手机验证码功能" /></span>]radio=>0/关/1/开
    'mobilechk_comment'=>'0',
//评论手机短信验证[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭评论手机验证码功能" /></span>]radio=>0/关/1/开
    'mobilechk_guestbook'=>'0',
//留言手机短信验证[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭留言手机验证码功能" /></span>]radio=>0/关/1/开
//}
    'xiongzhang_appid'=>'1605975412301600',//熊掌号APPID
    'xiongzhang_token'=>'iRTpqKUmo082HtX0',//熊掌号TOKEN
    'lang_open'=>'0',//多语言开关  1/开/0/关
);