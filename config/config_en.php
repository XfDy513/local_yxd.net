<?php if (!defined('ROOT')) exit('Can\'t Access !'); return array (
    'install_admin'=>'',
//site-Information{
    'stop_site'=>'1',
//Website State[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Site status！" /></span>]radio=>1/Open/2/Close/3/Suspend
    'site_url'=>'http://www.kdui.com/',
//Websit Address[<p class="tips-p">Input format: {SERVER_NAME} ， must end with "/"!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Http://domain name/" /></span>]
    'site_mobile'=>'18888888888',
//Administrator Mobile[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Administrator's mobile phone number, can open general user action SMS reminder！" /></span>]
    'admin_dir'=>'dh_kedui',
//Backstage Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="It is strongly recommended to modify the login address at the first time after installation to enhance the security of the website background." /></span>]
    'sitename'=>'English',
//Website Name[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Please fill in the abbreviation of the website, which is mainly used for the description at the bottom of the page." /></span>]
    'fullname'=>'English',
//Page Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The title of the page is displayed, which can be used in conjunction with keywords." /></span>]
    'site_keyword'=>'English',
//Website keywords[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Website keywords, to optimize the ranking of the site, multiple keywords please use English comma interval!" /></span>]
    'site_description'=>'English。',
//Website Description[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Web page description content, you can write a brief introduction related to the website!" /></span>]
    'site_logo'=>'/images/logo.png',
//Logo[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Click on the picture and upload the logo!" /></span>]=>image
    'logo_width'=>'260',
//Logo width[<p class="tips-p">This setting does not work when using a responsive template!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set logo width, unit(px)！" /></span>]
    'logo_height'=>'45',
//Logo height[<p class="tips-p">This setting does not work when using a responsive template!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set logo height, unit(px)！" /></span>]
    'site_ico'=>'/favicon.ico',
//Address icon[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Click on the picture and upload the website address bar icon! If the new upload icon cannot be displayed properly, please empty browser to access after caching." /></span>]=>image
    'site_right'=>'Copyright ©',
//Copyright[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Front desk display website copyright instructions!" /></span>]
    'k'=>array ('G','H','I','J','K','L','M','N','O','G','H','I','J','K','L'),
    'h'=>array (104,116,116,112,58,47,47,108,105,99,101,110,115,101,46,99,109,115,101,97,115,121,46,99,110,47,112,104,112,114,112,99,46,112,104,112),
//}
//websitesite-Custom_Settings{
    'isdebug'=>'0',
//	Debugging[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether the website displays PHP running error code!" /></span>]radio=>0/Close/1/Open
    'ueditor_open'=>'0',
//Does the editor support div[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set Baidu editor switch！" /></span>]radio=>0/Close/1/Open
    'lang_type'=>'1',
//Traditional handover[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="Display traditional switching！" /></span>]radio=>0/Close/1/Open
    'history_num'=>8,
//Access record[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Background access record tab quantity control！" /></span>]
    'show_top_text'=>'1',
//Whether the top text is displayed[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set column top and station top text display switch！" /></span>]radio=>0/Close/1/Open
    'pc_style_color'=>'2',
//Overall color[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Only works when the PC template supports color change!" /></span>]=>0/Nothing/1/Red/2/Orange/3/Yellow/4/Green/5/Green/6/Blue/7/Purple/8/Black/9/White
    'nav_top'=>'1',
//Navigation Topping[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether site navigation is fixed at the top of the page" /></span>]radio=>0/No/1/Yes
    'shield_right_key'=>'0',
//Shield_the right button[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Turn on or off the right mouse button shielding function" /></span>]radio=>0/Close/1/Open
    'nav_blank'=>'0',
//New window[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether the site navigation link opens in the new window!" /></span>]radio=>0/Close/1/Open
    'onerror_pic'=>'/images/pic.png',
//Default picture[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When there is no thumbnail in the picture list page, it is used to replace the display!" /></span>]=>image
    'thumb_width'=>'600',
//Thumbnail width[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set site thumbnail width, unit (PX)! Note: Only when the width value is invoked in the template will it be valid!" /></span>]
    'thumb_height'=>'400',
//Thumbnail height[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set site thumbnail height, unit (PX)! Note: Valid only after height values are invoked in the template" /></span>]
    'manage_pagesize'=>'12',
//Background Paging[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the number of pages in the background content list!" /></span>]
    'list_pagesize'=>'1',
//Front desk paging[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the number of pages in the front-end content list, such as separate pages for columns, preferential display by column settings!" /></span>]
    'like_news'=>'5',
//Number of related articles[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the number of articles on the front page!" /></span>]
    'search_time'=>'10',
//Search time limit[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The same keyword cannot be searched repeatedly within a limited time!" /></span>]
    'maxhotkeywordnum'=>'50',
//Search cardinality[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Popular keywords access conditions, more than the cardinal number of popular keywords!" /></span>]
    'archive_introducelen'=>'50',
//Introduction Length[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Autoally retrieve the first 200 characters of the content as the content introduction!" /></span>]
    'isecoding'=>'1',
//Security code[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the website whether to enable anti-counterfeiting code!" /></span>]radio=>0/Close/1/Open
    'ecoding'=>'CMSEASY',
//Security code prefix[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Setting Prefix of Anti-counterfeiting Code" /></span>]
    'site_icp'=>'20013816',
//ICP Record Number[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Front desk display ICP record number!" /></span>]
    'site_beian'=>'豫',
//Public network_security_prefix[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Public network security province prefix!" /></span>]
    'site_beian_number'=>'20013816',
//Public Network Security Number[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Public Network Security Number!" /></span>]
    'saic_pic'=>'8',
//Business Bright ID[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Front desk display business photos!" /></span>]
    'qrcodes'=>'1',
//QR code[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether the site is two-dimensional code enabled!" /></span>]radio=>0/Close/1/Open
    'template_view'=>'1',
//Online Template[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="View the list of free templates online and download them for use！" /></span>]radio=>0/Close/1/Open
    'opguestadd'=>'0',
//Tourist contribution[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set up whether the website can enable anonymous publishing content and visitor publishing address：http://domain/?g=1！" /></span>]radio=>0/Close/1/Open
    'html_wow'=>'1',
//Animation[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether to open web animation effect on the website!" /></span>]radio=>0/Close/1/Open
    'share'=>'0',
//Share[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether the website displays the sharing function!" /></span>]radio=>0/Close/1/Open
    'hotsearch'=>'1',
//Hot keywords[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set up the site whether to enable hot keywords!" /></span>]radio=>0/Close/1/Open
    'video_url'=>'http://player.youku.com/player.php/Type/Folder/Fid/19033149/Ob/1/sid/XNTI1NTk4OTAw/v.swf',
//Video url[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Copy the url in Youku Video！" /></span>]
//}
//information-Contact{
    'address'=>'A Certain Company Limited',
//Contact address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact address!" /></span>]
    'tel'=>'400-400-4000011',
//Contact tel[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact number!" /></span>]
    'mobile'=>'18888888888',
//Mobile[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the mobile phone number!" /></span>]
    'fax'=>'400-400-4000',
//Fax[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the fax number!" /></span>]
    'email'=>'admin@admin.com',
//Email[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact email!" /></span>]
    'complaint_email'=>'admin@admin.com',
//Complaint email[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in complaint email！" /></span>]
    'postcode'=>'136000',
//Postal Code[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the zip code!" /></span>]
//}
//langsite-Language_settings{
    'lang_switch'=>'1',
//Language switch[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Turn language switching on or off！" /></span>]radio=>0/Close/1/Open
//}
//filechecksite-Security{
    'safe360_enable'=>'0',
//360 Security[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Turn 360 Security on or off" /></span>]radio=>0/Close/1/Open
    'session_ip'=>'0',
//SESSION Verification IP[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether the site is enabled for fixed IP login validation!" /></span>]radio=>0/Close/1/Open
    'ipcheck_enable'=>'0',
//IP Verification[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Turn on or off IP authentication" /></span>]radio=>0/Close/1/Open
    'template_nologin'=>'5',
//Number of login errors[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The number of login errors allowed in the front desk!" /></span>]
    'admin_nologin'=>'5',
//Number of Background Logon Errors[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The number of login errors allowed in the background!" /></span>]
    'loginfalsetime'=>'86400',
//Logon Failure Time[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Allow re-login time after login failures exceed the number of errors!" /></span>]=>3600/1Hour/18000/5Hour/86400/24Hour
    'cookie_password'=>'23f14626f2bc9e44cb863d33306775fb051522d0',
//Cookie Safety code[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When setting up multiple sites, this must be consistent!" /></span>]
//}
//phonesite-Mobile_version{
    'mobile_open'=>'0',
//Is it enabled[<p class="tips-p">If you do not need an independent mobile terminal, do not enable it!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether the website is mobile version enabled, if using adaptive template, please choose to turn off the independent mobile version!" /></span>]radio=>0/Close/1/Open/2/Default
    'wap_logo'=>'/images/logo_wap.png',
//Mobile logo[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Click on the picture and upload the logo!" /></span>]=>image
    'wlogo_width'=>'240',
//Logo width[<p class="tips-p">This setting does not work when using a responsive template!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set logo width, unit(px)！" /></span>]
    'wlogo_height'=>'45',
//Logo height[<p class="tips-p">This setting does not work when using a responsive template!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set logo height, unit(px)！" /></span>]
    'wap_style_color'=>'6',
//Overall color[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Effective only when color change is supported by mobile phone template! " /></span>]=>0/Nothing/1/Red/2/Orange/3/Yellow/4/Green/5/Green/6/Blue/7/Purple/8/Black/9/White
    'wap_foot_nav'=>'2',
//Mobile bottom menu[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the bottom menu style of mobile phone!" /></span>]radio=>0/Close/1/Bounce/2/Circle/3/Tiling
    'wap_foot_nav_position'=>'right',
//Mobile bottom menu position[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the location of the bottom menu of the mobile phone!" /></span>]radio=>left/Left/right/Right
//}
//dynamic-Dynamic_and_Static{
    'list_cache'=>'1',
//List caching[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Enabling PHP caching is highly recommended!" /></span>]radio=>0/Close/1/Open
    'list_cache_time'=>'3600',
//Caching time[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the cache update time in seconds!" /></span>]
    'group_on'=>'1',
//Generating Groups[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether to generate groups, reduce the static pressure on the server or space, and avoid interruption due to network speed during the generation process!" /></span>]radio=>0/Close/1/Open
    'group_count'=>'100',
//Number of generations per group[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Network speed and host configuration are dependent. Recommended settings are"20"！" /></span>]
    'staticlang'=>'-',
//URL interval[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="URL path separator！" /></span>]radio=>-/Strikethrough/_/Underline
    'pc_html_info'=>'',
//PC Html
    'html_prefix'=>'/en',
//html storage path[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the directory after HTML generation to be empty or for example/html" /></span>]
    'list_index_php'=>'0',
//Index[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set dynamic and static display of homepage！" /></span>]radio=>0/Specify/1/Static/2/Dynamic
    'list_page_php'=>'0',
//List Page[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set column page dynamic and static display!" /></span>]radio=>0/Specify/1/Static/2/Dynamic
    'show_page_php'=>'0',
//Show Page[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set content page dynamic and static display!" /></span>]radio=>0/Specify/1/Static/2/Dynamic
    'list_type_php'=>'0',
//Type Page[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set dynamic and static display of classification page！" /></span>]radio=>0/Specify/1/Static/2/Dynamic
    'list_special_php'=>'1',
//Special Page[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set up dynamic and static display of theme page！" /></span>]radio=>0/Specify/1/Static/2/Dynamic
    'tag_html'=>'0',
//Generating TAG[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether to generate TAG!" /></span>]radio=>0/Specify/1/Static/2/Dynamic
    'wap_html_info'=>'',
//Wap Html
    'wap_html_prefix'=>'/wap/en',
//html storage path[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the directory after HTML generation to be empty or for example/html" /></span>]
    'wap_index_php'=>'0',
//Wap index[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set dynamic and static display of homepage！" /></span>]radio=>0/Specify/1/Static/2/Dynamic
    'wap_list_page_php'=>'0',
//Wap List Page[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set up mobile phone column page dynamic and static display!" /></span>]radio=>0/Specify/1/Static/2/Dynamic
    'wap_show_page_php'=>'0',
//Wap Show Page[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set mobile content page dynamic and static display!" /></span>]radio=>0/Specify/1/Static/2/Dynamic
    'wap_type_php'=>'0',
//Wap Type Page[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set dynamic and static display of mobile phone classification page！" /></span>]radio=>0/Specify/1/Static/2/Dynamic
    'wap_special_php'=>'0',
//Wap Special Page[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set dynamic and static display of mobile theme page！" /></span>]radio=>0/Specify/1/Static/2/Dynamic
    'wap_tag_html'=>'0',
//Mobile TAG[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether to generate mobile TAG!" /></span>]radio=>0/Specify/1/Static/2/Dynamic
    'urlrewrite_info'=>'',
//Please note that
    'urlrewrite_on'=>'0',
//Urlrewrite[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="If you don't know about pseudo-static, please close it!" /></span>]radio=>0/Close/1/Open
    'custom404'=>'1',
//Pseudo static 404 pages[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Customize 404 pages" /></span>]radio=>0/Close/1/Open
    'autoDelRewriteFile'=>'0',
//Auto deletion[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Autoally delete rule files when pseudo-static is turned off" /></span>]radio=>0/Close/1/Open
    'isautocthmtl'=>'0',
//Automated static generation[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Autoally generate home page and column page at 0 o'clock every day!" /></span>]radio=>0/Close/1/Open
//}
//spidersite-Stats{
    'stats_enable'=>'0',
//Spider statistics[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Turn on or off spider statistics" /></span>]radio=>0/Close/1/Open
    'iscleanstats'=>'0',
//Auto Clearance[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Auto Clearance of Spider Records" /></span>]=>0/Close/1/Daily/2/Weekly
    'site_push'=>'1',
//Baidu Push[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="left" title="Set whether to enable Baidu automatic content push on the website" /></span>]radio=>0/Close/1/Open
//}
//backupsite-Backup{
    'isautobak'=>'0',
//Auto backup[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The database can be backed up automatically by day, week and month!" /></span>]=>0/Close/1/Daily/2/Weekly/3/Monthly
//}
//customer-Customer_service{
    'ifonserver'=>'1',
//Is it enabled[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether to display the suspended customer service sidebar in the website!" /></span>]radio=>0/Close/1/Open
    'server_template'=>'3',
//Choose Styles[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Choose Suspension Customer Service Style of Website!" /></span>]=>1/Flat Color/2/Flat Gray/3/Flat Blue/4/Classic/5/Old Time
    'boxopen'=>'open',
//Whether to expand[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="left" title="Set the default expansion status of the suspended customer service sidebar of the website!" /></span>]radio=>open/Open/close/Close
    'serverlistp'=>'right',
//Floating position[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set up the display position of the suspended customer service sidebar on the website!" /></span>]radio=>left/Left/right/Right
    'worktime'=>'Consultation time 8:30 - 18:00 Monday to Friday',
//Working hours[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the working hours!" /></span>]
    'qq1name'=>'Customer Service',
//Customer Service Position[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact position!" /></span>]
    'qq1'=>'888888',
//QQ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact QQ number!" /></span>]
    'qq2name'=>'Customer Service',
//Customer Service_Position[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact position!" /></span>]
    'qq2'=>'888888',
//QQ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact QQ number！" /></span>]
    'qq3name'=>'Customer Service',
//Customer Service Position[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact position!" /></span>]
    'qq3'=>'666',
//QQ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact QQ number！" /></span>]
    'qq4name'=>'Customer Service',
//Customer Service Position[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact position!" /></span>]
    'qq4'=>'',
//QQ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact QQ number！" /></span>]
    'qq5name'=>'Customer Service',
//Customer Service Position[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact position!" /></span>]
    'qq5'=>'',
//QQ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact QQ number！" /></span>]
    'wangwangname'=>'Taobao Customer Service',
//Customer Service Position[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact position!" /></span>]
    'wangwang'=>'mymoban',
//Taobao Wangwang Number[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact Taobao Wangwang number!" /></span>]
    'aliname'=>'Alibaba',
//Customer Service Position[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact position!" /></span>]
    'ali'=>'',
//Ali Wangwang Number[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact number of Ali Wangwang!" /></span>]
    'skypename'=>'Skype Customer service',
//Customer Service Position[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact position!" /></span>]
    'skype'=>'admin@admin.com',
//Skype number[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the contact Skype number!" /></span>]
    'weixin_pic'=>'/images/w.gif',
//Wechat Public_Number[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When there is no thumbnail in the picture list page, it is used to replace the display!" /></span>]=>image
//}
//security-Character_filtering{
    'filter_word'=>'',
//Filter Characters[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The characters that have been filtered and replaced in the content of the website should be separated by ,"/></span>]
    'filter_x'=>'',
//Substitute character[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The characters that have been filtered and replaced in the content of the website should be separated by ," /></span>]
//}
//membersite-Membership_management{
    'reg_on'=>'1',
//Is it enabled[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set up the website whether to enable membership system!" /></span>]radio=>0/Close/1/Open
    'site_login'=>'1',
//Whether to display login[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether to display user login on the website" /></span>]radio=>0/Close/1/Open
    'invitation_registration'=>'0',
//Invitation registration[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether registered users must be invited to register!" /></span>]radio=>0/Close/1/Open
//}
//discuss-Comment_Management{
    'comment'=>'1',
//Is it enabled[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether the website displays the comment function!" /></span>]radio=>0/Close/1/Open
    'comment_list'=>'1',
//Comment List[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Open or close the comment list!" /></span>]radio=>0/Close/1/Open
    'comment_num'=>'5',
//Number of comments[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Number of comments on the content page!" /></span>]
    'comment_user'=>'1',
//Show comment list or not[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Is it allowed to view the comment list！" /></span>]radio=>0/Close/1/Open
    'comment_time'=>'10',
//Comment time[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Interval of comments with IP or user, 0 is unrestricted, per second" /></span>]=>10/10 Seconds/30/30 Seconds/60/1 minutes
    'comment_switch'=>'0',
//Comment condition[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Commentable Conditions" /></span>]radio=>0/Tourist/1/Member/2/Prohibit
    'comment_title'=>'Comment',
//Comment webpage title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Comment webpage title" /></span>]
    'reply_comment'=>'1',
//Multiple replies[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="left" title="Open comment multiple replies！" /></span>]radio=>0/Close/1/Open
//}
//formsite-Form{
    'guestformsubmit'=>'0',
//Tourist Form[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether the website enables anonymous submission forms!" /></span>]radio=>0/Close/1/Open
//}
//orders-Order_Settings{
    'shoppingcart'=>'1',
//Shopping cart_switch[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Open or close shopping cart links" /></span>]radio=>0/Close/1/Open
    'memberbuy'=>'0',
//Membership Purchase[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Open or close must be purchased by members" /></span>]radio=>0/Close/1/Open
    'order_time'=>'10',
//Order interval[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Order submission interval" /></span>]=>10/10 Seconds/30/30 Seconds/60/1 Minutes
//}
//guestbook-Guestbook_Settings{
    'guestbook_enable'=>'1',
//Is it enabled[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Turn on or off the message book function" /></span>]radio=>0/Close/1/Open
    'guestbook_list'=>'1',
//Guestbook list[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Open or close the message list!" /></span>]radio=>0/Close/1/Open
    'guestbook_time'=>'60',
//Guestbook Interval[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Time interval for message with IP or user, 0 is unrestricted, per second" /></span>]=>10/10 Seconds/30/30 Seconds/60/1 Minutes
    'guestbook_user'=>'0',
//View the guestbook list[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Are non-members allowed to view the message list?" /></span>]radio=>0/Close/1/Open
    'guestbook_title'=>'Guestbook',
//Guestbook webpage title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Guestbook webpage title" /></span>]
//}
//sitesetup-Site_Settings{
    'website_list'=>'1',
//Site List[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Open or close the header site list display" /></span>]radio=>0/Close/1/Open
//}
//Thumbnail
    'smallimage_open' => 1,
    'smallimage_width' => 200,
    'smallimage_height' => 200,
    'smallimage_path' => '/smallimages',
//Relative to upload folders
//image-Picture_Watermarking{
    'watermark_open'=>'0',
//Is_it_enabled=>0/Close/1/Open
    'watermark_min_width'=>'300',
//Min width[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the width of the uploaded image is less than the set width, no watermarking is added!" /></span>]
    'watermark_min_height'=>'300',
//Min height[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the uploaded image height is less than the set height, no watermarking is added!" /></span>]
    'watermark_path'=>'/images/logo.png',
//Watermarking Path[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Watermarking pictures support jpg, gif, png format!" /></span>]=>image
    'watermark_ts'=>'80',
//Transparency[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The range is (1 ~ 100) integer, the smaller the value, the more transparent the watermarking image!" /></span>]
    'watermark_qs'=>'90',
//Picture quality[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Scope of (0 ~ 100) integers, the larger the value, the better the effect of the picture!" /></span>]
    'watermark_pos'=>'5',
//Add location[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Please select the location where the watermarking is added here (3 X3 is available in 9 locations)" /></span>]=>1/1/2/2/3/3/4/4/5/5/6/6/7/7/8/8/9/9
//}
//upload Attachment{
    'upload_filetype'=>'jpg,gif,bmp,jpeg,png,doc,docx,xls,xlsx,zip,rar,7z,txt,pdf,JPG,GIF,BMP,JPEG,PNG,ZIP,RAR,7Z,TXT,PDF,DOC,DOCX,XLS,XLSX,mp4,MP4',
//Attachment type[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the type to add upload attachments, with multiple suffixes "," separated!" /></span>]
    'upload_max_filesize'=>'200',
//Attachment size[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set a small upper limit for upload attachments, unit (MB)！" /></span>]
    'mods'=>'',
//}
//template-Template_Settings{
    'template_dir'=>'2019-default',
//前台模板[默认default]
//}
//template-Shopping{
    'template_shopping_dir'=>'shop',
//商城模板
//}
//template-Mobile{
    'template_mobile_dir'=>'wap',
//手机模板
//}
//template-Online_template{
    'template_online'=>'',
//在线模板
//}
//template-Other{
    'template_user_dir'=>'user',
//User[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Default template User！" /></span>]
    'template_admin_dir'=>'admin',
//Admin[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Default template Admin！" /></span>]
//}
//ballot-Ballot{
    'checkip'=>'1',
//Verify IP[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set voting whether to open IP restriction, after opening, the same IP only needs to vote once!" /></span>]radio=>0/Close/1/Open
    'timer'=>'60',
//Time interval[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the time limit for voting on the same IP, in minutes!" /></span>]
//}
//ditu-Map_Settings{
    'ditu_APK'=>'',
//APK[<a href=https://lbsyun.baidu.com target=_blank  class=btn-navy-sms>Register</a><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="If the website uses HTTPS, please fill in the application APK!" /></span>]
    'ditu_width'=>'900',
//Width[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the width of the map, for example: 360! Unit (PX)!" /></span>]
    'ditu_height'=>'460',
//Height[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the height of the map, for example: 300! Unit (PX)!" /></span>]
    'ditu_center_left'=>'116.47033',
//Longitude[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the longitude of the map!" /></span>]
    'ditu_center_right'=>'39.919009',
//Latitude[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the latitude of the map!" /></span>]
    'ditu_level'=>'12',
//Level[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the display level of the map!" /></span>]
    'Tittle'=>'A certain science and technology company',
//Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the map coordinate point prompt information title!" /></span>]
    'ditu_content'=>'Address: A certain city, a certain street, a certain province, a certain number of telephone: 888-888888',
//Content[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the map coordinate point prompt information content!" /></span>]
    'ditu_maker_left'=>'116.47033',
//Longitude of marker point[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the longitude of map coordinates!" /></span>]
    'ditu_maker_right'=>'39.919009',
//Latitude of marker point[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the map coordinates to indicate latitude!" /></span>]
    'ditu_explain'=>'',
//Instructions
//}
//mail-Mail_Settings{
    'send_type'=>'2',
//Sending mode[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set up mail delivery mode!" /></span>]=>0/Select the/1/Sendmail/2/SOCKET/3/PHP
    'header_var'=>'1',
//Delimiter=>0/Select the/1/CRLF separator Windows/2/LF separator Unix or Linux/3/CR separator(Mac)
    'kill_error'=>'1',
//Shielding_error[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether to block error prompts in messages！" /></span>]radio=>0/No/1/Yes
//}
//mail-SOCKET{
    'smtp_mail_host'=>'smtp.ym.163.com',
//SMTP_The_server
    'smtp_mail_port'=>'25',
//SMTP_port
    'smtp_mail_auth'=>'1',
//Authentication[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Whether the mailbox needs login verification！" /></span>]radio=>0/No/1/Yes
    'smtp_user_add'=>'admin@admin.cn',
//Sender's_mailbox[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the sender's mailbox!" /></span>]
    'smtp_mail_username'=>'admin@admin.cn',
//Email_Name[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the sender's username, usually the mailbox name!" /></span>]
    'smtp_mail_password'=>'admin',
//Password[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the email password!" /></span>]
//}
//mail-PHP{
    'smtp_host'=>'smtp.qq.com',
//SMTP_The_server
    'smtp_port'=>'25',
//SMTP_port
//}
//mail-Switch Settings{
    'email_gust_send_cust'=>'0',
//Guestbook_Sending_to_Customer[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="After filling in the message, whether to send to fill in the email notification!" /></span>]radio=>0/No/1/Yes
    'email_guest_send_admin'=>'0',
//Guestbook_Sender_Administrator[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="After filling in the message, whether to send it to the administrator's email notification!" /></span>]radio=>0/No/1/Yes
    'email_order_send_cust'=>'0',
//Order_Sending_Customer[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="After filling in the order, whether to send to fill in the email notification!" /></span>]radio=>0/No/1/Yes
    'email_order_send_admin'=>'0',
//Order_Sender_Administrator[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="After filling out the order, whether to send it to the administrator's email notification!" /></span>]radio=>0/No/1/Yes
    'email_form_on'=>'0',
//Form_Send_Mail[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="After filling in the form, whether to send to fill in the email notification!" /></span>]radio=>0/No/1/Yes
    'email_form_send_admin'=>'0',
//Form_Sender_Administrator[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="After filling out the form, whether to send to the administrator's email notification!" /></span>]radio=>0/No/1/Yes
    'email_reg_on'=>'0',
//User_Registration_Mail[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="After registering users, whether to send to fill in the email notification!" /></span>]radio=>0/No/1/Yes
//}
//vote-Voting settings{
    'vote_onlyone'=>'0',
//Whether to vote more than once=>0/Close/1/Open
    'vote_auto_sms'=>'0',
//Send SMS or not=>0/Close/1/Open
//}
//slide-Slide_Settings{
    'slide_width'=>'990',
//Slide Width[<p class="tips-p">This setting does not work when using a responsive template!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the display width of the slide!" /></span>]
    'slide_height'=>'750',
//Slide Height[<p class="tips-p">This setting does not work when using a responsive template!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the display height of the slide!" /></span>]
    'slide_number'=>'2',
//Switching Number[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="left" title="Set the number of slides, less than or equal to 5!" /></span>]
    'slide_time'=>'5',
//Switching time[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the slideshow switching interval！" /></span>]
    'slide_style_position'=>'0',
//Text position of slide[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The text position in the slide!" /></span>]radio=>0/Left/1/Middle/2/Right
    'slide_text_color'=>'#ffffff',
//Slide text color[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Font color in slides！" /></span>]=>color
    'slide_input_bg'=>'#0099ff',
//Link button background color[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Link button background color in slide!" /></span>]=>color
    'slide_input_color'=>'#ffffff',
//Link button text color[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The color of the button text in the slide!" /></span>]=>color
    'slide_btn_hover_color'=>'#0099ff',
//Current button color at bottom[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The color of the current button in the slide switch button!" /></span>]=>color
    'slide_btn_color'=>'#ffffff',
//Bottom button color[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The color of the slide switch button!" /></span>]=>color
    'slide_btn_width'=>'50',
//Bottom button width[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Switch button width in slide!" /></span>]
    'slide_btn_height'=>'10',
//Bottom button height[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Switch button height in slide!" /></span>]
    'slide_btn_shape'=>'2',
//Bottom button shape[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Switch button shape in slide!" /></span>]radio=>1/Round/2/Square
    'slide_button_size'=>'50',
//Switch key size[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Slide left and right switch button size!" /></span>]
    'slide_button_color'=>'#ffffff',
//Switch key color[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Change the color of the button around the slide!" /></span>]=>color
    'slide_pic1'=>'/images/slide/banner01.jpg',
//Picture One Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'slide_pic1_title'=>'Responsive website template, different terminals, the same wonderful',
//Picture One Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'slide_pic1_info'=>'A new responsive website template has been released. Mobile visitors can get the same experience as computer websites',
//Picture One Subtitle[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the subtitles in the slide!" /></span>]
    'slide_pic1_title_url'=>'More',
//Picture One Button Text[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="If the text is filled in, it will be displayed on the slide button." /></span>]
    'slide_pic1_url'=>'#',
//Picture One Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
    'slide_pic2'=>'/images/slide/banner02.jpg',
//Picture Two Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'slide_pic2_title'=>'Mass exquisite template free download',
//Picture Two Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'slide_pic2_info'=>'A website content management system based on PHP + Mysql architecture is also a PHP development platform.',
//Picture Two Subtitle[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the subtitles in the slide!" /></span>]
    'slide_pic2_title_url'=>'More',
//Picture Two Button Text[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="If the text is filled in, it will be displayed on the slide button." /></span>]
    'slide_pic2_url'=>'#',
//Picture Two Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
    'slide_pic3'=>'/images/slide/banner03.jpg',
//Picture Three Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'slide_pic3_title'=>'Enterprise website management system with built-in promotion module!',
//Picture Three Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'slide_pic3_info'=>'The enterprise website system with built-in promotion alliance module provides a very convenient method and function for enterprises in marketing promotion.',
//Picture Three Subtitle[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the subtitles in the slide!" /></span>]
    'slide_pic3_title_url'=>'More',
//Picture Three Button Text[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="If the text is filled in, it will be displayed on the slide button." /></span>]
    'slide_pic3_url'=>'#',
//Picture Three Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
    'slide_pic4'=>'/images/slide/banner04.jpg',
//Picture Four Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'slide_pic4_title'=>'Welcome Networks Construction Company and Workshop to participate in the Sharing Plan',
//Picture Four Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'slide_pic4_info'=>'A website content management system based on PHP + Mysql architecture is also a PHP development platform.',
//Picture Fouro Subtitle[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the subtitles in the slide!" /></span>]
    'slide_pic4_title_url'=>'More',
//Picture Four Button Text[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="If the text is filled in, it will be displayed on the slide button." /></span>]
    'slide_pic4_url'=>'#',
//Picture Four Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
    'slide_pic5'=>'/images/slide/banner05.jpg',
//Picture Five Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'slide_pic5_title'=>'Multi-upgrade of service/after-sale/procedure',
//Picture Five Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'slide_pic5_info'=>'With modular development mode, the functions are easy to use and easy to expand. It can provide heavyweight website construction solutions for large and medium-sized sites.',
//Picture Five Subtitle[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the subtitles in the slide!" /></span>]
    'slide_pic5_title_url'=>'More',
//Picture Five Button Text[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="If the text is filled in, it will be displayed on the slide button." /></span>]
    'slide_pic5_url'=>'#',
//Picture Five Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
//}
//slide-Inside_page_picture{
    'cslide_width'=>'990',
//Slide Width[<p class="tips-p">This setting does not work when using a responsive template!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the display width of the slide!" /></span>]
    'cslide_height'=>'250',
//Slide Height[<p class="tips-p">This setting does not work when using a responsive template!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the display height of the slide!" /></span>]
    'cslide_number'=>'2',
//Cslide Number[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="left" title="Set the number of slides, less than or equal to 5！" /></span>]
    'cslide_time'=>'5',
//Switching time[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the slideshow switching interval！" /></span>]
    'cslide_style_position'=>'0',
//Text position of slide[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The text position in the slide!" /></span>]radio=>0/Left/1/Middle/2/Right
    'cslide_text_color'=>'#ffffff',
//Slide text color[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Font color in slides！" /></span>]=>color
    'cslide_input_bg'=>'#0099ff',
//Link button background color[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Link button background color in slide!" /></span>]=>color
    'cslide_input_color'=>'#ffffff',
//Link button text color[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The color of the button text in the slide!" /></span>]=>color
    'cslide_btn_hover_color'=>'#0099ff',
//Current button color at bottom[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The color of the current button in the slide switch button!" /></span>]=>color
    'cslide_btn_color'=>'#ffffff',
//Bottom button color[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The color of the slide switch button!" /></span>]=>color
    'cslide_btn_width'=>'50',
//Bottom button width[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Switch button width in slide!" /></span>]
    'cslide_btn_height'=>'10',
//Bottom button height[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Switch button height in slide!" /></span>]
    'cslide_btn_shape'=>'2',
//Bottom button shape[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Switch button shape in slide!" /></span>]radio=>1/Round/2/Square
    'cslide_button_size'=>'50',
//Switch key size[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Slide left and right switch button size!" /></span>]
    'cslide_button_color'=>'#ffffff',
//Switch key color[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Change the color of the button around the slide!" /></span>]=>color
    'cslide_pic1'=>'/images/slide/banner01.jpg',
//Picture_One_Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'cslide_pic1_title'=>'Responsive website template, different terminals, the same wonderful',
//Picture One Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'cslide_pic1_info'=>'A new responsive website template has been released. Mobile visitors can get the same experience as computer websites',
//Picture One Subtitle[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the subtitles in the slide!" /></span>]
    'cslide_pic1_title_url'=>'More',
//Picture One Button Text[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="If the text is filled in, it will be displayed on the slide button." /></span>]
    'cslide_pic1_url'=>'#',
//Picture One Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
    'cslide_pic2'=>'/images/slide/banner02.jpg',
//Picture Two Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'cslide_pic2_title'=>'Mass exquisite template free download',
//Picture Two Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'cslide_pic2_info'=>'A website content management system based on PHP + Mysql architecture is also a PHP development platform.',
//Picture Two Subtitle[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the subtitles in the slide!" /></span>]
    'cslide_pic2_title_url'=>'More',
//Picture Two Button Text[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="If the text is filled in, it will be displayed on the slide button." /></span>]
    'cslide_pic2_url'=>'#',
//Picture Two Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
    'cslide_pic3'=>'/images/slide/banner03.jpg',
//Picture Three Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'cslide_pic3_title'=>'Enterprise website management system with built-in promotion module!',
//Picture Three Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'cslide_pic3_info'=>'The enterprise website system with built-in promotion alliance module provides a very convenient method and function for enterprises in marketing promotion.',
//Picture Three Subtitle[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the subtitles in the slide!" /></span>]
    'cslide_pic3_title_url'=>'More',
//Picture Three Button Text[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="If the text is filled in, it will be displayed on the slide button." /></span>]
    'cslide_pic3_url'=>'#',
//Picture Three Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
    'cslide_pic4'=>'/images/slide/banner04.jpg',
//Picture Four Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'cslide_pic4_title'=>'Welcome Networks Construction Company and Workshop to participate in the Sharing Plan',
//Picture Four Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'cslide_pic4_info'=>'A website content management system based on PHP + Mysql architecture is also a PHP development platform.',
//Picture Fouro Subtitle[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the subtitles in the slide!" /></span>]
    'cslide_pic4_title_url'=>'More',
//Picture Four Button Text[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="If the text is filled in, it will be displayed on the slide button." /></span>]
    'cslide_pic4_url'=>'#',
//Picture Four Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
    'cslide_pic5'=>'/images/slide/banner05.jpg',
//Picture Five Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'cslide_pic5_title'=>'Multi-upgrade of service/after-sale/procedure',
//Picture Five Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'cslide_pic5_info'=>'With modular development mode, the functions are easy to use and easy to expand. It can provide heavyweight website construction solutions for large and medium-sized sites.',
//Picture Five Subtitle[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the subtitles in the slide!" /></span>]
    'cslide_pic5_title_url'=>'More',
//Picture Five Button Text[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="If the text is filled in, it will be displayed on the slide button." /></span>]
    'cslide_pic5_url'=>'#',
//Picture Five Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
//}
//slide-Mobile_Slide_Settings{
    'wslide_width'=>'300',
//Slide Width[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the display width of the slide!" /></span>]
    'wslide_height'=>'440',
//Slide Height[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the display height of the slide!" /></span>]
    'wslide_number'=>'2',
//Number_of_slides[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the number of slides, less than or equal to five!" /></span>]
    'wslide_pic1'=>'/images/slide/banner06.jpg',
//Picture_One_Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'wslide_pic1_title'=>'Responsive website template, different terminals, the same wonderful',
//Picture One Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'wslide_pic1_url'=>'#',
//Picture One Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
    'wslide_pic2'=>'/images/slide/banner07.jpg',
//Picture Two Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'wslide_pic2_title'=>'Mass exquisite template free download',
//Picture Two Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'wslide_pic2_url'=>'#',
//Picture Two Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
    'wslide_pic3'=>'/images/slide/banner08.jpg',
//Picture Three Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'wslide_pic3_title'=>'Enterprise website management system with built-in promotion module!',
//Picture Three Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'wslide_pic3_url'=>'#',
//Picture Three Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
    'wslide_pic4'=>'/images/slide/banner09.jpg',
//Picture Four Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'wslide_pic4_title'=>'Welcome Networks Construction Company and Workshop to participate in the Sharing Plan',
//Picture Four Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'wslide_pic4_url'=>'#',
//Picture Four Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
    'wslide_pic5'=>'/images/slide/banner10.jpg',
//Picture Five Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'wslide_pic5_title'=>'Multi-upgrade of service/after-sale/procedure',
//Picture Five Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'wslide_pic5_url'=>'#',
//Picture Five Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
//}
//slide-Mobile_Inside_page_picture{
    'wapcslide_width'=>'300',
//Slide Width[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the display width of the slide!" /></span>]
    'wapcslide_height'=>'440',
//Slide Height[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the display height of the slide!" /></span>]
    'wapcslide_number'=>'2',
//Number_of_slides[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the number of slides, less than or equal to five!" /></span>]
    'wapcslide_pic1'=>'/images/slide/banner06.jpg',
//Picture_One_Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'wapcslide_pic1_title'=>'Responsive website template, different terminals, the same wonderful',
//Picture One Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'wapcslide_pic1_url'=>'#',
//Picture One Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
    'wapcslide_pic2'=>'/images/slide/banner07.jpg',
//Picture Two Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'wapcslide_pic2_title'=>'Mass exquisite template free download',
//Picture Two Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'wapcslide_pic2_url'=>'#',
//Picture Two Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
    'wapcslide_pic3'=>'/images/slide/banner08.jpg',
//Picture Three Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'wapcslide_pic3_title'=>'Enterprise website management system with built-in promotion module!',
//Picture Three Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'wapcslide_pic3_url'=>'#',
//Picture Three Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
    'wapcslide_pic4'=>'/images/slide/banner09.jpg',
//Picture Four Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'wapcslide_pic4_title'=>'Welcome Networks Construction Company and Workshop to participate in the Sharing Plan',
//Picture Four Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'wapcslide_pic4_url'=>'#',
//Picture Four Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
    'wapcslide_pic5'=>'/images/slide/banner10.jpg',
//Picture Five Address[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Upload the picture in the slide!" /></span>]=>image
    'wapcslide_pic5_title'=>'Multi-upgrade of service/after-sale/procedure',
//Picture Five Title[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Fill in the title of the slide!" /></span>]
    'wapcslide_pic5_url'=>'#',
//Picture Five Link[<p class="tips-p">When the link address is empty, the button is not displayed automatically!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="When the link address is empty, the button is not displayed automatically!" /></span>]
//}
//sms-Sms_Settings{
    'sms_explain'=>'',
//Instructions
    'sms_username'=>'',
//User_name[<a href=http://pay.cmseasy.cn/reg.php target=_blank  class=btn-navy-sms>Register</a>]
    'sms_password'=>'',
//Password[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Please enter the password when registering for the SMS platform!" /></span>]
    'sms_on'=>'0',
//Is_it_enabled[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set whether to turn on SMS notification function!" /></span>]radio=>0/Close/1/Open
    'sms_keyword'=>'',
//Replace_illegal_characters[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set up illegal characters in shielded short messages, multiple characters are separated by English commas!" /></span>]
    'sms_maxnum'=>'100',
//Maximum_quantity[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="The maximum number of bars sent per day!" /></span>]
    'sms_reg_on'=>'0',
//Registered_Send[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set up user registration, whether to send welcome SMS!" /></span>]radio=>1/Yes/0/No
    'sms_guestbook_on'=>'0',
//Guestbook_Sending[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="After setting up customer confirmation message, whether to send confirmation receipt message notification to customer?" /></span>]radio=>1/Yes/0/No
    'sms_order_on'=>'0',
//Order_Sending=>1/Yes/0/No
    'sms_form_on'=>'0',
//Form_Sending[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="After setting up the customer confirmation message, whether to send the confirmation form content to the customer?" /></span>]radio=>1/Yes/0/No
    'sms_guestbook_admin_on'=>'0',
//Confirmation_guestbook[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="After the customer confirms the message, whether to send notification to the administrator?" /></span>]radio=>1/Yes/0/No
    'sms_form_admin_on'=>'0',
//Validate_form[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="After the customer confirms the form, whether to send notification to the administrator?" /></span>]radio=>1/Yes/0/No
    'sms_order_admin_on'=>'0',
//Confirmation_of_orders[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="After the customer confirms the order, whether to send notification to the administrator?" /></span>]radio=>1/Yes/0/No
    'sms_consult_admin_on'=>'0',
//Open_consultation[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Whether to open the right side of the page suspension SMS consulting!" /></span>]radio=>1/Yes/0/No
//}
//sms-Sms_manage{
    'sms_manage'=>'',
//Sms_manage
//}
//verification-Verification_Code{
    'verifycode'=>'0',
//Verification_code_settings[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Set the website whether to enable authentication code!" /></span>]radio=>0/Guan/1/Character/2/Jigsaw puzzle
    'pic_enable_info'=>'',
    //Tips
    'gee_id'=>'08ec7f91e55890d35e8e2d5aceee8291',
//Geetest[<a href=https://account.geetest.com/register  class=btn-navy-sms>Register</a>]
    'gee_key'=>'a70cbb24908448dbc6609e44ae50d16f',
//Geetest_KEY[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Geetest_KEY！" /></span>]
    'mobilechk_enable_info'=>'',
    //Tips
    'mobilechk_enable'=>'0',
//Mobile_verification_code[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Turn on or off the phone authentication code function" /></span>]radio=>0/Close/1/Open
    'mobilechk_admin'=>'0',
//Background_verification[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Turn on or off SMS validation" /></span>]radio=>0/Close/1/Open
    'mobilechk_reg'=>'0',
//Registration_Verification[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Turn on or off the validation code function of registered mobile phones" /></span>]radio=>0/Close/1/Open
    'mobilechk_login'=>'0',
//Validate_login[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Turn on or off the login phone authentication code function" /></span>]radio=>0/Close/1/Open
    'mobilechk_buy'=>'0',
//Purchase_Verification[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Turn on or off the function of purchasing mobile phone authentication code" /></span>]radio=>0/Close/1/Open
    'mobilechk_form'=>'0',
//Form_Validation[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Turn on or off the custom form phone validation code function" /></span>]radio=>0/Close/1/Open
    'mobilechk_comment'=>'0',
//Comment_Verification[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Turn on or off the comment phone validation code function" /></span>]radio=>0/Close/1/Open
    'mobilechk_guestbook'=>'0',
//Guestbook_Verification[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Turn on or off the validation code function of the message phone" /></span>]radio=>0/Close/1/Open
//}
    'xiongzhang_appid'=>'1605975412301600',//Xiong_zhang_hao_APPID
    'xiongzhang_token'=>'iRTpqKUmo082HtX0',//Xiong_zhang_hao_TOKEN
    'lang_open'=>'0',//多语言开关  1/开/0/关
);