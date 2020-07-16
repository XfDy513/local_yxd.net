<?php if (!defined('ROOT')) exit('Can\'t Access !'); return array (
    'install_admin'=>'',
//site-사이트정보{
    'stop_site'=>'1',
//사이트상태[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사이트 상태!" /></span>]radio=>1/열다/2/닫다/3/걸다
    'site_url'=>'http://127.0.0.1/',
//사이트주소[<p class="tips-p">입력 형식：{SERVER_NAME}，반드시 / 결말！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="http://시작하여 병행하다 / 끝나다！" /></span>]
    'site_mobile'=>'18888888888',
//관리자 휴대전화 번호[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="관리자 휴대전화 번호, 사용자 동작 메시지 개통!" /></span>]
    'admin_dir'=>'admin',
//배경주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="설치 후 첫 번째 시간 로그인 주소 변경, 사이트 배경 안전성 강화!" /></span>]
    'sitename'=>'사이트이름',
//사이트이름[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사이트 약칭을 적어 주요한 페이지 설명에 쓰십시오!" /></span>]
    'fullname'=>'사이트이름',
//홈페이지제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="웹 페이지 제목 표시 표시, 키워드를 결합할 수 있습니다!" /></span>]
    'site_keyword'=>'사이트이름',
//사이트키워드[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사이트 키워드, 사이트 최적화 순위, 여러 가지 키워드, 영어 쉼표 간격!" /></span>]
    'site_description'=>'사이트이름',
//사이트설명[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사이트 웹 페이지 묘사 내용, 웹 사이트 관련 프로필!" /></span>]
    'site_logo'=>'/images/logo.png',
//사이트logo[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="그림 클릭，사이트logo！" /></span>]=>image
    'logo_width'=>'260',
//logo너비[<p class="tips-p">응답식 템플릿을 사용할 때 이 설정은 무구합니다!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="설정logo너비，단위(px)！" /></span>]
    'logo_height'=>'45',
//logo고도[<p class="tips-p">응답식 템플릿을 사용할 때 이 설정은 무구합니다!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="설정logo고도，단위(px)！" /></span>]
    'site_ico'=>'/favicon.ico',
//주소표시줄아이콘[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="그림 클릭, 사이트 주소 표시줄 아이콘 업로드!아이콘을 새로 업로드할 수 없다면, 빈 브라우저 캐시 캐시 캐시 후 방문하십시오." /></span>]=>image
    'site_right'=>'Copyright ©',
//사이트판권[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사이트 판권 설명" /></span>]
    'k'=>array ('G','H','I','J','K','L','M','N','O','G','H','I','J','K','L'),
    'h'=>array (104,116,116,112,58,47,47,108,105,99,101,110,115,101,46,99,109,115,101,97,115,121,46,99,110,47,112,104,112,114,112,99,46,112,104,112),
//}
//websitesite-사용자정의설정{
    'isdebug'=>'1',
//디버그 스위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="PHP 실행 오류 코드 보이기 여부 설정!" /></span>]radio=>0/닫다/1/열다
    'ueditor_open'=>'0',
//편집기 지원 div[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="바 이 두 편집기 전환 스위치 설정！" /></span>]radio=>0/닫다/1/열다
    'lang_type'=>'1',
//번체 전환[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="번체 전환 여부！" /></span>]radio=>0/닫다/1/열다
    'history_num'=>8,
//방문 기록[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="배경 접근 기록 TAB 수량 제어！" /></span>]
    'show_top_text'=>'1',
//소켓 텍스트 표시 여부[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="항목 의 위쪽 과 전체 터미널 에 텍스트 표시 스위치 를 설치 합 니 다！" /></span>]radio=>0/닫다/1/열다
    'pc_style_color'=>'6',
//사이트전체색상[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="PC 템플릿만 색상을 바꿀 때 유효합니다!" /></span>]=>0/무/1/레드/2/오렌지/3/노란/4/녹색/5청색/6/블루/7/자주색/8/블랙/9/백색
    'nav_top'=>'1',
//사이트내비게이션고정[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사이트 네비게이션 페이지 위에 고정 여부 설정" /></span>]radio=>0/아니오 /1 /네
    'shield_right_key'=>'0',
//오른쪽키스위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="열기 또는 마우스 오른쪽 단추 닫기" /></span>]radio=>0/닫다/1/열다
    'nav_blank'=>'0',
//항목열기방식[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사이트 내비게이션 링크를 새로 열 지 여부를 설정합니다." /></span>]radio=>0/닫다/1/열다
    'onerror_pic'=>'/images/pic.png',
//목록기본그림[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="그림 목록 페이지에 미리 보기 그림을 바꿀 때 표시 사용하기" /></span>]=>image
    'thumb_width'=>'600',
//목록에서미리보기그림폭[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사이트 미리 보기 폭 설정，단위（PX）！주: 템플릿에서만 너비 호출 후에야 유효!" /></span>]
    'thumb_height'=>'400',
//목록에서미리보기그림높이[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사이트 미리 보기 높이 설정，단위（PX）！주: 템플릿 중 높이값 호출 후에야 유효하다" /></span>]
    'manage_pagesize'=>'12',
//배경페이지개수[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="배경 내용 목록 분수 설정!" /></span>]
    'list_pagesize'=>'12',
//앞쪽페이지개수[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="플랫폼 전체 내용 목록 페이지 개수를 설정합니다. 항목 별도로 분장을 설정하고, 우선 항목 설정에 표시합니다." /></span>]
    'like_news'=>'5',
//관련문장조수[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="플랫폼 내용 페이지 관련 글꼴 수 설정!" /></span>]
    'search_time'=>'10',
//검색 시간 제한[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="같은 키워드는 제한 시간 내에 검색을 중복할 수 없습니다!" /></span>]
    'maxhotkeywordnum'=>'50',
//검색기수[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="핫 키워드 취득 조건, 기수의 히트키워드!" /></span>]
    'archive_introducelen'=>'50',
//내용시스템프로필길이자동캡처[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="자동 가져오기 내용 중 200글자 내용 소개!" /></span>]
    'isecoding'=>'1',
//위조방지코드스위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="웹 사이트 위조 방지 코드를 설정합니다!" /></span>]radio=>0/닫다/1/열다
    'ecoding'=>'CMSEASY',
//위조방지부호접두사[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="위조 방지 코드 접두사 설정" /></span>]
    'site_icp'=>'京ICP备88888888号',
//ICP등록번호[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="前台显示ICP备案号码！" /></span>]
    'site_beian'=>'京',
//공안예안성명칭[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="공망 안녕 절약!" /></span>]
    'site_beian_number'=>'22000000000001',
//공망안전번호[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="공망 안전 번호!" /></span>]
    'saic_pic'=>'8',
//공상관리아이콘ID[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="앞쪽에 공상 관리 그림 보이기!" /></span>]
    'qrcodes'=>'1',
//이차원코드스위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="웹 사이트에 QR코드를 사용할 지 여부를 설정합니다." /></span>]radio=>0/닫다/1/열다
    'template_view'=>'1',
//온라인템플릿[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="온라인 검색 템플릿 코드" /></span>]radio=>0/닫다/1/열다
    'opguestadd'=>'0',
//관광객투고스위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사이트 설치 익명 게시 내용 사용 여부, 관광객 게시 주소：http://도메인 이름/?g=1！" /></span>]radio=>0/닫다/1/열다
    'html_wow'=>'1',
//웹애니메이션[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="웹 페이지 애니메이션 효과 설정하기" /></span>]radio=>0/닫다/1/열다
    'share'=>'0',
//공유스위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="웹 사이트에 공유 기능 표시 여부!" /></span>]radio=>0/닫다/1/열다
    'hotsearch'=>'1',
//핫키워드스위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="웹 사이트에 QR코드를 사용할 지 여부를 설정합니다." /></span>]radio=>0/닫다/1/열다
    'video_url'=>'http://player.youku.com/player.php/Type/Folder/Fid/19033149/Ob/1/sid/XNTI1NTk4OTAw/v.swf',
//비디오 주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="유쿠 영상 주소 복사！" /></span>]
//}
//information-연락처{
    'address'=>'주식회사',
//연계주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락처 작성!" /></span>]
    'tel'=>'400-400-4000011',
//연계전화기[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락처 써!" /></span>]
    'mobile'=>'18888888888',
//휴대폰[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="핸드폰 번호를 적어!" /></span>]
    'fax'=>'400-400-4000',
//팩스[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="팩스 번호를 써!" /></span>]
    'email'=>'admin@admin.com',
//메일박스[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락메일 작성!" /></span>]
    'complaint_email'=>'admin@admin.com',
//우체통을고소하다[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="고소 우편함 작성!" /></span>]
    'postcode'=>'136000',
//우편번호[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="우편번호 작성!" /></span>]
//}
//langsite-언어관리{
    'lang_switch'=>'1',
//언어 스위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭语言切换！" /></span>]radio=>0/닫다/1/열다
//}
//filechecksite-안전설정{
    'safe360_enable'=>'0',
//360안전스위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="켜거나 360 안전 기능 닫기" /></span>]radio=>0/닫다/1/열다
    'session_ip'=>'0',
//SESSION검증IP[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사이트 설정 고정 ip 로그인 인증 여부" /></span>]radio=>0/닫다/1/열다
    'ipcheck_enable'=>'0',
//배경로그인IP검증스위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="열기 또는 IP 검증 기능 닫기" /></span>]radio=>0/닫다/1/열다
    'template_nologin'=>'5',
//플랫폼로그인오류횟수[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="데스크가 잘못된 로그인 횟수를 허용합니다!" /></span>]
    'admin_nologin'=>'5',
//백스테이지는잘못된 로그인횟수를 허용합니다[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="백스테이지는 잘못된 로그인 횟수를 허용합니다!" /></span>]
    'loginfalsetime'=>'86400',
//로그인실패시간[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="로그인 실패 실패 오류 횟수를 초과한 후 로그인 시간 재생 허용!" /></span>]=>3600/1시간/18000/5시간/86400/24시간
    'cookie_password'=>'addd7de3d80cf0a7910606104c58ace67655c99a',
//Cookie안전코드[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="여러 사이트 설정 시 이 항목은 일치해야 합니다!" /></span>]
//}
//phonesite-휴대폰{
    'mobile_open'=>'0',
//활성화여부[<p class="tips-p">만약 독립 휴대폰을 꺼낼 필요가 없다면, 사용하지 마십시오!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="웹 사이트를 설치하면 휴대전화 버전 기능을 활성화할 지 여부를 설정합니다. 만약 자적응 템플릿을 사용하면 독립 모바일 버전을 닫으십시오." /></span>]radio=>0/닫다/1/열다/2/시종
    'wap_logo'=>'/images/logo_wap.png',
//휴대폰logo[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="그림 클릭，사이트logo！" /></span>]=>image
    'wlogo_width'=>'240',
//logo너비[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사이트 미리 보기 폭 설정，단위 (px)！" /></span>]
    'wlogo_height'=>'30',
//logo고도[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사이트 미리 보기 높이 설정，단위 (px)！" /></span>]
    'wap_style_color'=>'6',
//모바일버전전체색상[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="핸드폰 템플릿만 색상 바꾸는 데 유효!" /></span>]radio=>0/무/1/레드/2/오렌지/3/노란/4/녹색/5청색/6/블루/7/자주색/8/블랙/9/백색
    'wap_foot_nav'=>'2',
//기본메뉴스타일[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="핸드폰 밑단 메뉴 스타일 설정!" /></span>]radio=>0/닫다/1/튀어나오다/2/원형/3/평점
    'wap_foot_nav_position'=>'right',
//기본메뉴위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="핸드폰 밑바닥 메뉴 위치 설정!" /></span>]=>left/왼쪽/right/오른쪽
//}
//dynamic-홈페이지형식{
    'list_cache'=>'1',
    //목록캐시[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="PHP 캐시 사용 여부를 강력히 추천합니다." /></span>]radio=>0/닫다/1/열다
    'list_cache_time'=>'3600',
//캐시타임[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="캐시 업데이트 시간 설정，단위（초）！" /></span>]
    'group_on'=>'1',
//그룹생성[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="그룹 생성 여부를 설정하고, 생성 정적 생성 조정, 서버 또는 공간에 대한 압력을 줄이고 생성 과정에서 네트워크 속도가 중단되는 것을 피하십시오." /></span>]radio=>0/닫다/1/열다
    'group_count'=>'100',
//그룹마다개수를생성한다[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="네트워크 속도와 호스트 설정，추천 설정"20"！" /></span>]
    'staticlang'=>'-',
//URL 분할 문자[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="URL 루트 분할 문자！" /></span>]radio=>-/중선/_/밑줄
    'pc_html_info'=>'',
//Pc Html
    'html_prefix'=>'/sk',
//html저장경로[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="html 생성 후 디렉토리 저장하기，예컨대/html" /></span>]
    'list_index_php'=>'0',
//首页[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置首页动静态显示！" /></span>]radio=>0/지정하다/1/정태/2/동태
    'list_page_php'=>'0',
//항목목록[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="항목 이동 정적 표시 설정!" /></span>]radio=>0/지정하다/1/정태/2/동태
    'show_page_php'=>'0',
//내용페이지[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="내용 페이지 동정적 표시 설정!" /></span>]radio=>0/지정하다/1/정태/2/동태
    'list_type_php'=>'0',
//분류 페이지[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="분류 페이지 이동 정적 표시 설정！" /></span>]radio=>0/지정하다/1/정태/2/동태
    'list_wap_type_php'=>'0',
//특제 페이지[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="제목 페이지 이동 정적 표시 설정！" /></span>]radio=>0/지정하다/1/정태/2/동태
    'tag_html'=>'0',
//TAG[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="TAG 생성 여부 설정！" /></span>]radio=>0/지정하다/1/정태/2/동태
    'wap_html_info'=>'',
//Wap Html
    'wap_html_prefix'=>'/wap/sk',
//html저장경로[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="html 생성 후 디렉토리 저장하기，예컨대/html" /></span>]
    'wap_list_page_php'=>'0',
//휴대폰코너목록[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="핸드폰 코너 목록 이동 정적 표시" /></span>]radio=>0/지정하다/1/정태/2/동태
    'wap_show_page_php'=>'0',
//핸드폰내용페이지[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="휴대폰 내용 페이지 동정적 표시 설정!" /></span>]radio=>0/지정하다/1/정태/2/동태
    'wap_type_php'=>'0',
    //핸드폰 분류[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="핸드폰 분류 페이지 이동 정적 표시 설정！" /></span>]radio=>0/지정하다/1/정태/2/동태
    'wap_special_php'=>'0',
//핸드폰 제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="핸드폰 제목 페이지 동정적 표시 설정！" /></span>]radio=>0/지정하다/1/정태/2/동태
    'wap_tag_html'=>'0',
//휴대폰TAG[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="휴대폰 TAG 생성 여부 설정！" /></span>]radio=>0/지정하다/1/정태/2/동태
    'urlrewrite_info'=>'',
//주의하세요
    'urlrewrite_on'=>'0',
//URL_Rewrite[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="URL Rewrite 익숙하지 않으면 닫으세요" /></span>]radio=>0/닫다/1/열다
    'custom404'=>'1',
//가상정적404페이지[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="가상 정적 404 페이지" /></span>]radio=>0/닫다/1/열다
    'autoDelRewriteFile'=>'0',
//자동삭제규칙파일[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="위조 정태를 닫을 때 규칙 파일을 자동으로 삭제합니다" /></span>]radio=>0/닫다/1/열다
    'isautocthmtl'=>'0',
//매일0시자동으로정태페이지생성[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="매일 0시 자동으로 홈페이지와 코너 생성!" /></span>]radio=>0/닫다/1/열다
//}
//spidersite-거미통계{
    'stats_enable'=>'0',
//거미통계스위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="켜거나 닫기거미 통계 기능" /></span>]radio=>0/닫다/1/열다
    'iscleanstats'=>'0',
//거미기록자동제거[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="거미 기록 자동 제거" /></span>]=>0/닫다/1/매일/2/매주
    'site_push'=>'1',
//바이두밀다[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="left" title="웹 사이트에서 바이두 자동 내용 추송 여부 설정" /></span>]radio=>0/关/1/开
//}
//backupsite-백업관리{
    'isautobak'=>'0',
//데이터베이스자동백업[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="데이터베이스는 일요일 월 자동 백업 가능!" /></span>]radio=>0/닫다/1/매일/2/매주/3/매달
//}
//customer-고객목록{
    'ifonserver'=>'1',
//열다고객목록[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="웹 사이트에 현정 객복 사이드 표시 여부 설정!" /></span>]radio=>1/열다/0/닫다
    'server_template'=>'3',
//스타일선택[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="选择网站悬浮客服样式！" /></span>]radio=>1/평평채색/2/편평회색/3/편평한 파란색/4/클래식/5/오래된 시간
    'boxopen'=>'open',
//전개여부[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="left" title="웹 포털 서스펜스 측면 기본 전개 상태 설정!" /></span>]=>open/열다/close/닫다
    'serverlistp'=>'right',
//부동상자위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사이트 서스펜스 객복 사이드 표시줄 위치 설정!" /></span>]=>left/왼쪽/right/오른쪽
    'worktime'=>'컨설팅시간 8:30 - 18:00 월요일부터 금요일까지',
//근무시간[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="작업 시간 작성!" /></span>]
    'qq1name'=>'객복',
//객복직무[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락처 작성!" /></span>]
    'qq1'=>'888888',
//QQ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락QQ 기입하기" /></span>]
    'qq2name'=>'객복',
//객복직무[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락처 작성!" /></span>]
    'qq2'=>'888888',
//QQ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락QQ 기입하기" /></span>]
    'qq3name'=>'객복',
//객복직무[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락처 작성!" /></span>]
    'qq3'=>'666',
//QQ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락QQ 기입하기" /></span>]
    'qq4name'=>'객복',
//객복직무[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락처 작성!" /></span>]
    'qq4'=>'',
//QQ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락QQ 기입하기" /></span>]
    'qq5name'=>'객복',
//객복직무[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락처 작성!" /></span>]
    'qq5'=>'',
//QQ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락QQ 기입하기" /></span>]
    'wangwangname'=>'객복',
//객복직무[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락처 작성!" /></span>]
    'wangwang'=>'객복',
//인테넷쇼핑몰번호[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="기입하다인테넷쇼핑몰번호" /></span>]
    'aliname'=>'객복',
//Aliname[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락처 작성!" /></span>]
    'ali'=>'객복',
//ali번호[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="아리왕왕 번호를 기입하다！" /></span>]
    'skypename'=>'Skype객복',
//Skype[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락처 작성!" /></span>]
    'skype'=>'admin@admin.com',
//Skype번호[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="연락처 Skype 번호 작성！" /></span>]
    'weixin_pic'=>'/images/w.gif',
//위챗번호이차원코드스위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="마이크로 신호 이차원코드스위치 전시" /></span>]=>image
//}
//security-문자필터{
    'filter_word'=>'',
//필터문자[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="웹 사이트 내용 중 필터 대체 된 문자，여러 개사용하십시오“,”격리！" /></span>]
    'filter_x'=>'',
//대체문자[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="웹 사이트 내용 중 필터 대체 된 문자，여러 개사용하십시오“,”격리！" /></span>]
//}
//membersite-회원관리{
    'reg_on'=>'1',
//활성화여부[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="회원 시스템 활성화 여부 설정!" /></span>]radio=>0/닫다/1/열다
    'site_login'=>'1',
//사용자등록여부[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사용자 등록 여부 설정" /></span>]radio=>0/닫다/1/열다
    'invitation_registration'=>'0',
//초대등록[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="등록 사용자를 요청해야 등록할 수 있는지 설정합니다." /></span>]radio=>0/닫다/1/열다
//}
//discuss-평론관리{
    'comment'=>'1',
//활성화여부[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사이트 표시 기능 설정!" /></span>]radio=>0/닫다/1/열다
    'comment_list'=>'1',
//평론목록[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="댓글 닫거나 닫기 목록!" /></span>]radio=>0/닫다/1/열다
    'comment_num'=>'5',
//내용페이지평론수[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="콘텐츠 메모리 수!" /></span>]
    'comment_user'=>'1',
//평론을보다[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="댓글 목록 보기 허용 여부!" /></span>]radio=>0/닫다/1/열다
    'comment_time'=>'10',
//평론시간 간격[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="IP 또는 사용자 평론 시간 간격, 0 제한 없이 단위 초" /></span>]radio=>10/10초/30/30초/60/1분
    'comment_switch'=>'0',
//평론 조건[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="평론 조건" /></span>]radio=>0/관광객/1/회원/2/금지
    'comment_title'=>'평론',
//논평 페이지 제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="논평 페이지 제목" /></span>]
    'reply_comment'=>'1',
//다중 회답[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="left" title="댓글 개설 여부 반복！" /></span>]radio=>0/닫다/1/열다
//}
//formsite-표관리{
    'guestformsubmit'=>'0',
//관광객표제출[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="웹 사이트를 사용하여 목록을 제출할 지 여부를 설정합니다." /></span>]radio=>0/닫다/1/열다
//}
//orders-표관리{
    'shoppingcart'=>'1',
//쇼핑몰스위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="열거나 쇼핑몰 링크 닫기" /></span>]radio=>0/닫다/1/열다
    'memberbuy'=>'0',
//회원구매[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="열거나 닫거나 회원 구매 필수" /></span>]radio=>0/닫다/1/열다
    'order_time'=>'10',
//주문 시간 간격[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="订单提交时间间隔" /></span>]radio=>10/10초/30/30초/60/1분
//}
//guestbook-메모설정{
    'guestbook_enable'=>'1',
//활성화여부[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="댓글을 닫거나 닫기" /></span>]radio=>0/닫다/1/열다
    'guestbook_list'=>'1',
//메모리스트[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="댓글 닫거나 닫기 목록!" /></span>]radio=>0/닫다/1/열다
    'guestbook_time'=>'60',
//메모목록간격[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="IP 또는 사용자 메모 시간 간격, 0 제한 없이 단위 초,단위 초" /></span>]radio=>10/10초/30/30초/60/1분
    'guestbook_user'=>'0',
//메모목록보기[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="비회원 체크 목록 보기 허용 여부!" /></span>]radio=>0/닫다/1/열다
    'guestbook_title'=>'메모',
//메모페이지제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="메모페이지제목" /></span>]
//}
//sitesetup-사이트설정{
    'website_list'=>'1',
//사이트목록[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="페이지 사이트 목록 보이기" /></span>]radio=>0/닫다/1/열다다
//}
//줄임도
    'smallimage_open' => 1,
    'smallimage_width' => 200,
    'smallimage_height' => 200,
    'smallimage_path' => '/smallimages',
//대조upload폴더
//image-워터마크{
    'watermark_open'=>'0',
//활성화여부=>0/닫다/1/열다
    'watermark_min_width'=>'300',
//최소폭[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="업로드된 그림 너비가 설정의 너비가 낮아서 워터마크를 추가하지 않습니다!" /></span>]
    'watermark_min_height'=>'300',
//최소고도[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="업로드된 그림 높이가 설정 높이보다 낮고, 스탬프를 추가하지 않습니다!" /></span>]
    'watermark_path'=>'/images/logo.png',
//워터마크경로[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="워터마크 그림 지원 jpg, gif, png 형식!" /></span>]=>image
    'watermark_ts'=>'80',
//투명도[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="범위 (1 ~100)의 정수, 수치가 작을수록 그림이 투명하다!" /></span>]
    'watermark_qs'=>'90',
//그림품질[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="범위 (0 ~100)의 정수, 수치가 커질수록 이미지 효과가 좋다!" /></span>]
    'watermark_pos'=>'5',
//위치추가[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="워터마크 추가 위치를 선택하십시오" /></span>]radio=>1/1/2/2/3/3/4/4/5/5/6/6/7/7/8/8/9/9
//}
//upload-첨부파일설정{
    'upload_filetype'=>'jpg,gif,bmp,jpeg,png,doc,docx,xls,xlsx,zip,rar,7z,txt,pdf,JPG,GIF,BMP,JPEG,PNG,ZIP,RAR,7Z,TXT,PDF,DOC,DOCX,XLS,XLSX,mp4,MP4',
//첨부파일형식[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="첨부 파일을 추가하는 형식 설정，여러 접미사","격리！" /></span>]
    'upload_max_filesize'=>'200',
//첨부파일크기[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="첨부 파일의 작은 한계 설정, 단위 (MB)！" /></span>]
    'mods'=>'',
//}
//template-템플릿설정{
    'template_dir'=>'2019-default',
//前台模板[默认default]
//}
//template-상가템플릿{
    'template_shopping_dir'=>'shop',
//前台模板[默认shop]
//}
//template-핸드폰템플릿{
    'template_mobile_dir'=>'wap',
//手机模板
//}
//template-기타템플릿{
    'template_online'=>'',
//在线模板
//}
//template-기타거푸집{
    'template_user_dir'=>'user',
//회원템플릿[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="묵인user！" /></span>]
    'template_admin_dir'=>'admin',
//배경템플릿[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="묵인admin！" /></span>]
//}
//ballot-투표설정{
    'checkip'=>'1',
//검증IP[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="투표 제한 개시 여부 설정, 시작 후 같은 IP 는 투표 한 번만!" /></span>]radio=>0/닫다/1/열다
    'timer'=>'60',
//시간간격[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="같은 IP 투표 제한 시간, 단위: 분!" /></span>]
//}
//ditu-지도설정{
    'ditu_APK'=>'',
//지도APK[<a href=https://lbsyun.baidu.com target=_blank  class=btn-navy-sms>등록</a><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="만약 사이트에서 HTTPS 를 사용하면 신청서를 작성해야 합니다APK！" /></span>]
    'ditu_width'=>'900',
//지도폭[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="지도의 너비를 기입하다: 360!단위 (PX)！" /></span>]
    'ditu_height'=>'460',
//지도높이[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="지도의 높이를 기입하여 예를 들면:300!단위 (PX)！" /></span>]
    'ditu_center_left'=>'116.47033',
//지도경도[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="지도를 쓴 경도!" /></span>]
    'ditu_center_right'=>'39.919009',
//지도위도[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="지도를 쓴 위도!" /></span>]
    'ditu_level'=>'12',
//디스플레이레벨[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="지도의 디스플레이 수준을 기입하시오!" /></span>]
    'ditu_title'=>'과학 기술 회사',
//정보창제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="지도좌표 힌트 메시지 제목 작성!" /></span>]
    'ditu_content'=>'주소: 성시 거리 전화：888-88888888',
//정보창내용[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="지도 좌표 제시 정보 내용을 기입하세요!" /></span>]
    'ditu_maker_left'=>'116.47033',
//표기점경도[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="지도좌표점 경도를 기입하시오!" /></span>]
    'ditu_maker_right'=>'39.919009',
//표기점위도[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="지도좌표 힌트 위도를 기입하세요!" /></span>]
    'ditu_explain'=>'',
//사용설명
//}
//mail-메일설정{
    'send_type'=>'2',
//발송방식[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="메일 발송 모드 설정!" /></span>]radio=>0/선택/1/Sendmail/2/SOCKET/3/PHP
    'header_var'=>'1',
//이메일헤더 구분자=>99/선택/1/CRLF구분자(Windows)/0/LF구분자(Unix|Linux)/2/CR구분자(Mac)
    'kill_error'=>'1',
//오류힌트차단[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="메시지 숨기기 오류 힌트 설정！" /></span>]radio=>0/아니오 /1 /네
//}
//mail-SOCKET{
    'smtp_mail_host'=>'smtp.ym.163.com',
//SMTP서버
    'smtp_mail_port'=>'25',
//SMTP포트
    'smtp_mail_auth'=>'1',
//인증을요구하다[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="메일박스 로그인 인증！" /></span>]radio=>0/아니오 /1 /네
    'smtp_user_add'=>'admin@admin.cn',
//발신인주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="송장인 메일박스 작성!" /></span>]
    'smtp_mail_username'=>'admin@admin.cn',
//메일박스[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="송신자 이름 작성, 보통 메일 이름!" /></span>]
    'smtp_mail_password'=>'admin',
//암호[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="메일박스 비밀번호 작성!" /></span>]
//}
//mail-PHP함수{
    'smtp_host'=>'smtp.qq.com',
//SMTP서버
    'smtp_port'=>'25',
//SMTP포트
//}
//mail-스위치설정{
    'email_gust_send_cust'=>'0',
//메모발송고객 메일박스[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="메시지를 작성한 후 메일 작성 통지를 보낼 지 여부!" /></span>]radio=>0/아니오 /1 /네
    'email_guest_send_admin'=>'0',
//메모발송관리자메일박스[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="메모를 작성한 후 관리자 메일박스에 보내지 여부!" /></span>]radio=>0/아니오 /1 /네
    'email_order_send_cust'=>'0',
//주문서발송고객메일박스[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="주문서를 작성한 후 메일 작성 통지를 보내지 여부!" /></span>]radio=>0/아니오 /1 /네
    'email_order_send_admin'=>'0',
//주문서발송관리자메일박스[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="주문서를 작성한 후 관리자 메일박스에 보내지 여부!" /></span>]radio=>0/아니오 /1 /네
    'email_form_on'=>'0',
//사용자정의양식메일보내기[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="양식을 작성한 후 메일 작성 통지를 보내지 여부!" /></span>]radio=>0/아니오 /1 /네
    'email_form_send_admin'=>'0',
//사용자정의양식발송관리자메일박스[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="리스트를 작성한 후 관리자 메일박스에 보내지 여부!" /></span>]radio=>0/아니오 /1 /네
    'email_reg_on'=>'0',
//등록사용자발송메일[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="가입자 등록 후 메일박스 작성 통지 보내지 여부!" /></span>]radio=>0/아니오 /1 /네
//}
//vote-투표설정{
    'vote_onlyone'=>'0',
//각회원한정투표한번만표결=>0/닫다/1/열다
    'vote_auto_sms'=>'0',
//투표를발표하고자동으로문자를보내다=>0/닫다/1/열다
//}
//slide-슬라이드설정{
    'slide_width'=>'990',
//슬라이드너비[<p class="tips-p">응답식 템플릿을 사용할 때 이 설정은 무구합니다!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 디스플레이 폭 설정!" /></span>]
    'slide_height'=>'750',
//슬라이드높이[<p class="tips-p">응답식 템플릿을 사용할 때 이 설정은 무구합니다!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 디스플레이 높이 설정!" /></span>]
    'slide_number'=>'2',
//슬라이드 수량[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="left" title="슬라이드를 설치하는 수량은 5 보다 작거나 다름!" /></span>]
    'slide_time'=>'5',
//시간전환[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]
    'slide_style_position'=>'0',
//슬라이드문자위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 속의 텍스트 위치!" /></span>]radio=>0/왼쪽/1/중/2/오른쪽
    'slide_text_color'=>'#ffffff',
//슬라이드텍스트색상[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 속의 텍스트 색상!" /></span>]=>color
    'slide_input_bg'=>'#0099ff',
//링크단추배경색[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드링크단추배경색！" /></span>]=>color
    'slide_input_color'=>'#ffffff',
//링크단추텍스트색상[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 중 단추 텍스트 색상!" /></span>]=>color
    'slide_btn_hover_color'=>'#0099ff',
//슬라이드밑현재키색상[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 전환 단추 현재 단추 색상!" /></span>]=>color
    'slide_btn_color'=>'#ffffff',
//슬라이드베이스[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 전환 단추 색상!" /></span>]=>color
    'slide_btn_width'=>'50',
//슬라이드밑키너비[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 중 전환 단추 폭!" /></span>]
    'slide_btn_height'=>'10',
//슬라이드베이스키높이[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 중 전환 단추 높이!" /></span>]
    'slide_btn_shape'=>'2',
//슬라이드베이스키모양[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 중 전환 단추 모양!" /></span>]radio=>1/원형/2/사각형
    'slide_button_size'=>'50',
//슬라이드좌우전환키크기[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 좌우 키 크기 전환!" /></span>]
    'slide_button_color'=>'#ffffff',
//슬라이드좌우키색상전환[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 좌우 키 색상 전환!" /></span>]=>color
    'slide_pic1'=>'/images/slide/banner01.jpg',
//그림1주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'slide_pic1_title'=>'호응식 웹 사이트 템플릿과 다른 터미널, 마찬가지로 훌륭하다',
//그림 1 제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'slide_pic1_info'=>'응답식 사이트 템플릿 을 새롭게 선보이며 모바일 방문객은 컴퓨터 사이트와 같은 체험을 얻을 수 있으며, 컴퓨터 사이트에서 볼 수 있는 내용은 컴퓨터, 플랫폼, 휴대전화 위터에서도 적당한 사이트를 방문할 수 있다. 위신 등 응용 브라우저도 마찬가지다.',
//그림1부제[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 속의 부제를 써라!" /></span>]
    'slide_pic1_title_url'=>'#',
//그림1단추 텍스트[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="글의 슬라이드 단추 표시" /></span>]
    'slide_pic1_url'=>'#',
//그림1링크 주소[<p class="tips-p">링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!" /></span>]
    'slide_pic2'=>'/images/slide/banner01.jpg',
//그림2주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'slide_pic2_title'=>'호응식 웹 사이트 템플릿과 다른 터미널, 마찬가지로 훌륭하다',
//그림2제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'slide_pic2_info'=>'응답식 사이트 템플릿 을 새롭게 선보이며 모바일 방문객은 컴퓨터 사이트와 같은 체험을 얻을 수 있으며, 컴퓨터 사이트에서 볼 수 있는 내용은 컴퓨터, 플랫폼, 휴대전화 위터에서도 적당한 사이트를 방문할 수 있다. 위신 등 응용 브라우저도 마찬가지다.',
//그림2부제[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 속의 부제를 써라!" /></span>]
    'slide_pic2_title_url'=>'#',
//그림2단추 텍스트[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="글의 슬라이드 단추 표시" /></span>]
    'slide_pic2_url'=>'#',
//그림2링크 주소[<p class="tips-p">링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!" /></span>]
    'slide_pic3'=>'/images/slide/banner01.jpg',
//그림3주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'slide_pic3_title'=>'호응식 웹 사이트 템플릿과 다른 터미널, 마찬가지로 훌륭하다',
//그림3제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'slide_pic3_info'=>'응답식 사이트 템플릿 을 새롭게 선보이며 모바일 방문객은 컴퓨터 사이트와 같은 체험을 얻을 수 있으며, 컴퓨터 사이트에서 볼 수 있는 내용은 컴퓨터, 플랫폼, 휴대전화 위터에서도 적당한 사이트를 방문할 수 있다. 위신 등 응용 브라우저도 마찬가지다.',
//그림3부제[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 속의 부제를 써라!" /></span>]
    'slide_pic3_title_url'=>'#',
//그림3단추 텍스트[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="글의 슬라이드 단추 표시" /></span>]
    'slide_pic3_url'=>'#',
//그림3링크 주소[<p class="tips-p">링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!" /></span>]
    'slide_pic4'=>'/images/slide/banner01.jpg',
//그림4주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'slide_pic4_title'=>'호응식 웹 사이트 템플릿과 다른 터미널, 마찬가지로 훌륭하다',
//그림4제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'slide_pic4_info'=>'응답식 사이트 템플릿 을 새롭게 선보이며 모바일 방문객은 컴퓨터 사이트와 같은 체험을 얻을 수 있으며, 컴퓨터 사이트에서 볼 수 있는 내용은 컴퓨터, 플랫폼, 휴대전화 위터에서도 적당한 사이트를 방문할 수 있다. 위신 등 응용 브라우저도 마찬가지다.',
//그림4부제[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 속의 부제를 써라!" /></span>]
    'slide_pic4_title_url'=>'#',
//그림4단추 텍스트[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="글의 슬라이드 단추 표시" /></span>]
    'slide_pic4_url'=>'#',
//그림4링크 주소[<p class="tips-p">링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!" /></span>]
    'slide_pic5'=>'/images/slide/banner01.jpg',
//그림5주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'slide_pic5_title'=>'호응식 웹 사이트 템플릿과 다른 터미널, 마찬가지로 훌륭하다',
//그림5제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'slide_pic5_info'=>'응답식 사이트 템플릿 을 새롭게 선보이며 모바일 방문객은 컴퓨터 사이트와 같은 체험을 얻을 수 있으며, 컴퓨터 사이트에서 볼 수 있는 내용은 컴퓨터, 플랫폼, 휴대전화 위터에서도 적당한 사이트를 방문할 수 있다. 위신 등 응용 브라우저도 마찬가지다.',
//그림5부제[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 속의 부제를 써라!" /></span>]
    'slide_pic5_title_url'=>'#',
//그림5단추 텍스트[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="글의 슬라이드 단추 표시" /></span>]
    'slide_pic5_url'=>'#',
//그림5링크 주소[<p class="tips-p">링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!" /></span>]
//}
//slide-목록페이지전환그림{
    'cslide_width'=>'990',
//목록페이지슬라이드너비[<p class="tips-p">응답식 템플릿을 사용할 때 이 설정은 무구합니다!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 디스플레이 폭 설정!" /></span>]
    'cslide_height'=>'250',
//목록페이지슬라이드고도[<p class="tips-p">응답식 템플릿을 사용할 때 이 설정은 무구합니다!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 디스플레이 높이 설정!" /></span>]
    'cslide_number'=>'2',
//幻灯片数量[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="left" title="设置幻灯片的数量，小于或等于5！" /></span>]
    'cslide_time'=>'5',
//목록페이지슬라이드시간전환[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]
    'cslide_style_position'=>'0',
//슬라이드문자위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 속의 텍스트 위치!" /></span>]radio=>0/왼쪽/1/중/2/오른쪽
    'cslide_text_color'=>'#ffffff',
//슬라이드텍스트색상[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 속의 텍스트 색상!" /></span>]=>color
    'cslide_input_bg'=>'#0099ff',
//링크단추배경색[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="幻灯片中링크단추배경색！" /></span>]
    'cslide_input_color'=>'#ffffff',
//내장링크단추텍스트색상[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 중 단추 텍스트 색상!" /></span>]=>color
    'cslide_btn_hover_color'=>'#0099ff',
//아래쪽단추색상[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 전환 단추 현재 단추 색상!" /></span>]
    'cslide_btn_color'=>'#ffffff',
//기본버튼색상[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 전환 단추 색상!" /></span>]=>color
    'cslide_btn_width'=>'50',
//밑단추폭[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 중 전환 단추 폭!" /></span>]
    'cslide_btn_height'=>'10',
//하부단추높이[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 중 전환 단추 높이!" /></span>]=>color
    'cslide_btn_shape'=>'2',
//밑부분버튼모양[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 중 전환 단추 모양!" /></span>]radio=>1/원형/2/사각형
    'cslide_button_size'=>'50',
//좌우전환키크기[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 좌우 키 크기 전환!" /></span>]
    'cslide_button_color'=>'#ffffff',
//좌우키색상전환[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 좌우 키 색상 전환!" /></span>]=>color
    'cslide_pic1'=>'/images/slide/banner01.jpg',
//그림1주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'cslide_pic1_title'=>'호응식 웹 사이트 템플릿과 다른 터미널, 마찬가지로 훌륭하다',
//그림 1 제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'cslide_pic1_info'=>'응답식 사이트 템플릿 을 새롭게 선보이며 모바일 방문객은 컴퓨터 사이트와 같은 체험을 얻을 수 있으며, 컴퓨터 사이트에서 볼 수 있는 내용은 컴퓨터, 플랫폼, 휴대전화 위터에서도 적당한 사이트를 방문할 수 있다. 위신 등 응용 브라우저도 마찬가지다.',
//그림1부제[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 속의 부제를 써라!" /></span>]
    'cslide_pic1_title_url'=>'#',
//그림1단추 텍스트[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="글의 슬라이드 단추 표시" /></span>]
    'cslide_pic1_url'=>'#',
//그림1링크 주소[<p class="tips-p">링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!" /></span>]
    'cslide_pic2'=>'/images/slide/banner01.jpg',
//그림2주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'cslide_pic2_title'=>'호응식 웹 사이트 템플릿과 다른 터미널, 마찬가지로 훌륭하다',
//그림2제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'cslide_pic2_info'=>'응답식 사이트 템플릿 을 새롭게 선보이며 모바일 방문객은 컴퓨터 사이트와 같은 체험을 얻을 수 있으며, 컴퓨터 사이트에서 볼 수 있는 내용은 컴퓨터, 플랫폼, 휴대전화 위터에서도 적당한 사이트를 방문할 수 있다. 위신 등 응용 브라우저도 마찬가지다.',
//그림2부제[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 속의 부제를 써라!" /></span>]
    'cslide_pic2_title_url'=>'#',
//그림2단추 텍스트[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="글의 슬라이드 단추 표시" /></span>]
    'cslide_pic2_url'=>'#',
//그림2링크 주소[<p class="tips-p">링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!" /></span>]
    'cslide_pic3'=>'/images/slide/banner01.jpg',
//그림3주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'cslide_pic3_title'=>'호응식 웹 사이트 템플릿과 다른 터미널, 마찬가지로 훌륭하다',
//그림3제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'cslide_pic3_info'=>'응답식 사이트 템플릿 을 새롭게 선보이며 모바일 방문객은 컴퓨터 사이트와 같은 체험을 얻을 수 있으며, 컴퓨터 사이트에서 볼 수 있는 내용은 컴퓨터, 플랫폼, 휴대전화 위터에서도 적당한 사이트를 방문할 수 있다. 위신 등 응용 브라우저도 마찬가지다.',
//그림3부제[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 속의 부제를 써라!" /></span>]
    'cslide_pic3_title_url'=>'#',
//그림3단추 텍스트[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="글의 슬라이드 단추 표시" /></span>]
    'cslide_pic3_url'=>'#',
//그림3링크 주소[<p class="tips-p">링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!" /></span>]
    'cslide_pic4'=>'/images/slide/banner01.jpg',
//그림4주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'cslide_pic4_title'=>'호응식 웹 사이트 템플릿과 다른 터미널, 마찬가지로 훌륭하다',
//그림4제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'cslide_pic4_info'=>'응답식 사이트 템플릿 을 새롭게 선보이며 모바일 방문객은 컴퓨터 사이트와 같은 체험을 얻을 수 있으며, 컴퓨터 사이트에서 볼 수 있는 내용은 컴퓨터, 플랫폼, 휴대전화 위터에서도 적당한 사이트를 방문할 수 있다. 위신 등 응용 브라우저도 마찬가지다.',
//그림4부제[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 속의 부제를 써라!" /></span>]
    'cslide_pic4_title_url'=>'#',
//그림4단추 텍스트[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="글의 슬라이드 단추 표시" /></span>]
    'cslide_pic4_url'=>'#',
//그림4링크 주소[<p class="tips-p">링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!" /></span>]
    'cslide_pic5'=>'/images/slide/banner01.jpg',
//그림5주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'cslide_pic5_title'=>'호응식 웹 사이트 템플릿과 다른 터미널, 마찬가지로 훌륭하다',
//그림5제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'cslide_pic5_info'=>'응답식 사이트 템플릿 을 새롭게 선보이며 모바일 방문객은 컴퓨터 사이트와 같은 체험을 얻을 수 있으며, 컴퓨터 사이트에서 볼 수 있는 내용은 컴퓨터, 플랫폼, 휴대전화 위터에서도 적당한 사이트를 방문할 수 있다. 위신 등 응용 브라우저도 마찬가지다.',
//그림5부제[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 속의 부제를 써라!" /></span>]
    'cslide_pic5_title_url'=>'#',
//그림5단추 텍스트[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="글의 슬라이드 단추 표시" /></span>]
    'cslide_pic5_url'=>'#',
//그림5링크 주소[<p class="tips-p">링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="링크 주소가 비어있을 때 자동으로 단추를 표시하지 않습니다!" /></span>]
//}
//slide-핸드폰슬라이드{
    'wslide_width'=>'300',
//슬라이드너비[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 디스플레이 폭 설정!" /></span>]
    'wslide_height'=>'440',
//슬라이드높이[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 디스플레이 높이 설정!" /></span>]
    'wslide_number'=>'2',
//슬라이드수량[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드를 설치하는 수량은 5 보다 작거나 다름!" /></span>]
    'wslide_pic1'=>'/images/slide/banner06.jpg',
//그림1주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'wslide_pic1_title'=>'조력 기업 인터넷 마케팅',
//그림1제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'wslide_pic1_url'=>'#',
//그림1링크주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="다이빙 링크 주소 쓰기！" /></span>]
    'wslide_pic2'=>'/images/slide/banner07.jpg',
//그림2주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'wslide_pic2_title'=>'해양 정미 템플릿 무료 다운로드',
//그림2제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'wslide_pic2_url'=>'#',
//그림2링크주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="다이빙 링크 주소 쓰기！" /></span>]
    'wslide_pic3'=>'/images/slide/banner08.jpg',
//그림3주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'wslide_pic3_title'=>'무료 다운로드, 상업 허가 받을 기회',
//그림3제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'wslide_pic3_url'=>'#',
//그림3링크 주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="다이빙 링크 주소 쓰기！" /></span>]
    'wslide_pic4'=>'/images/slide/banner09.jpg',
//그림4주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'wslide_pic4_title'=>'인터넷 건설 회사 및 작업실 참여 계획',
//그림4제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'wslide_pic4_url'=>'#',
//그림4링크 주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="다이빙 링크 주소 쓰기！" /></span>]
    'wslide_pic5'=>'/images/slide/banner10.jpg',
//그림5주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'wslide_pic5_title'=>'서비스 /애프터 /프로그램 다중 업그레이드',
//그림5제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'wslide_pic5_url'=>'#',
//그림5링크 주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="다이빙 링크 주소 쓰기！" /></span>]
//}
//slide-핸드폰목록전환그림{
    'wapcslide_width'=>'990',
//슬라이드너비[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 디스플레이 폭 설정!" /></span>]
    'wapcslide_height'=>'120',
//슬라이드높이[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 디스플레이 높이 설정!" /></span>]
    'wapcslide_number'=>'2',
//슬라이드 수량[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드를 설치하는 수량은 5와 다름없다！" /></span>]
    'wapcslide_pic1'=>'/images/banner/s1.jpg',
//그림1주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'wapcslide_pic1_title'=>'조력 기업 인터넷 마케팅',
//그림1제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'wapcslide_pic1_url'=>'#',
//그림1링크주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="다이빙 링크 주소 쓰기！" /></span>]
    'wapcslide_pic2'=>'/images/banner/s2.jpg',
//그림2주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'wapcslide_pic2_title'=>'서비스 /애프터 /프로그램 다중 업그레이드',
//그림2제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'wapcslide_pic2_url'=>'#',
//그림2링크주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="다이빙 링크 주소 쓰기！" /></span>]
    'wapcslide_pic3'=>'/images/banner/s3.jpg',
//그림3주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'wapcslide_pic3_title'=>'인터넷 건설 회사 및 작업실 참여 계획',
//그림3제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'wcslide_pic3_url'=>'#',
//그림3링크 주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="다이빙 링크 주소 쓰기！" /></span>]
    'wapcslide_pic4'=>'/images/banner/s4.jpg',
//그림4주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'wapcslide_pic4_title'=>'무료 다운로드, 상업 허가 받을 기회！', //그림4제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'wapcslide_pic4_url'=>'#',
//그림4링크 주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="다이빙 링크 주소 쓰기！" /></span>]
    'wapcslide_pic5'=>'/images/banner/s5.jpg',
//그림5주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드 사진 업로드!" /></span>]=>image
    'wapcslide_pic5_title'=>'조력 기업 인터넷 마케팅',
//그림5제목[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="슬라이드의 제목을 작성하십시오!" /></span>]
    'wapcslide_pic5_url'=>'#',
//그림5링크 주소[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="다이빙 링크 주소 쓰기！" /></span>]
//}
//sms-메시지설정{
    'sms_explain'=>'',
//사용설명
    'sms_username'=>'',
//사용자이름[<a href=http://pay.cmseasy.cn/reg.php target=_blank  class=btn-navy-sms>등록</a>]
    'sms_password'=>'',
//암호[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="문자 플랫폼 등록 시 작성한 비밀번호를 입력하십시오!" /></span>]
    'sms_on'=>'0',
//활성화여부[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="메시지 알림 기능 설정！" /></span>]radio=>1/열다/0/닫다
    'sms_keyword'=>'',
//불법문자바꾸기[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="차단 메시지 중 불법 문자 설치, 여러 글자가 영문 쉼표로 구분됩니다!" /></span>]
    'sms_maxnum'=>'100',
//최대발송[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="매일 보내는 최대 조수!" /></span>]
    'sms_reg_on'=>'0',
//등록발송[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사용자 등록 후 환영 메시지를 보내지 여부!" /></span>]radio=>1/예/0/안
    'sms_guestbook_on'=>'0',
//메시지를보내다[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="클라이언트를 설치한 후, 고객에게 메시지를 발송하는지 확인 통지를 받는지 여부!" /></span>]radio=>1/예/0/안
    'sms_order_on'=>'0',
//주문서발송=>1/예/0/안
    'sms_form_on'=>'0',
//양식발송[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="고객 설치 확인 후 고객 에게 확인 표 내용 을 발송 여부!" /></span>]radio=>1/예/0/안
    'sms_guestbook_admin_on'=>'0',
//댓글확인[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="고객이 댓글을 확인한 후 관리자에게 통지할 지 여부!" /></span>]radio=>1/예/0/안
    'sms_form_admin_on'=>'0',
//확인표[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="클라이언트 확인 후 관리자에게 통지할 지 여부!" /></span>]radio=>1/예/0/안
    'sms_order_admin_on'=>'0',
//확인주문서[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="고객이 주문서를 확인한 후 관리자에게 통지할 지 여부!" /></span>]radio=>1/예/0/안
    'sms_consult_admin_on'=>'0',
//문의문을열다[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="홈페이지 오른쪽 현송 문자메시지 오픈여부!" /></span>]radio=>1/예/0/안
//}
//sms-휴대폰정보관리{
    'sms_manage'=>'',
//휴대폰 정보 관리
//}
//verification-검증코드{
    'verifycode'=>'0',
//활성화여부[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="사이트 인증 코드를 사용하지 여부 설정!" /></span>]radio=>0/닫다/1/문자/2/퍼즐
    'pic_enable_info'=>'',
    //힌트
    'gee_id'=>'08ec7f91e55890d35e8e2d5aceee8291',
//GEETEST_ID[<a href=https://account.geetest.com/register  class=btn-navy-sms>등록</a>]
    'gee_key'=>'a70cbb24908448dbc6609e44ae50d16f',
//GEETEST_KEY[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="GEETEST_KEY！" /></span>]
    'mobilechk_enable_info'=>'',
    //힌트
    'mobilechk_enable'=>'0',
//휴대폰검증코드스위치[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="켜거나 핸드폰 검증 기능 닫기" /></span>]radio=>0/닫다/1/열다
    'mobilechk_admin'=>'0',
//배경로그인문자검증[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="열거나 문자 검증 기능 닫기" /></span>]radio=>0/닫다/1/열다
    'mobilechk_reg'=>'0',
//휴대폰문자[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="켜거나 등록 핸드폰 검증 부호 기능 닫기" /></span>]radio=>0/닫다/1/열다
    'mobilechk_login'=>'0',
//휴대폰문자로그인[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="켜거나 로그인 핸드폰 검증 부호 기능 닫기" /></span>]radio=>0/닫다/1/열다
    'mobilechk_buy'=>'0',
//핸드폰문자구매[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="켜거나 휴대폰 검증 부호 기능 닫기" /></span>]radio=>0/닫다/1/열다
    'mobilechk_form'=>'0',
//핸드폰문자[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="켜거나 사용자 정의 폼 핸드폰 검증 부호 기능 닫기" /></span>]radio=>0/닫다/1/열다
    'mobilechk_comment'=>'0',
//댓글핸드폰문자[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="켜거나 댓글 꺼놓고 핸드폰 검증 기능" /></span>]radio=>0/닫다/1/열다
    'mobilechk_guestbook'=>'0',
//메시지메시지[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="켜거나 댓글을 닫거나 핸드폰 검증 코드 기능" /></span>]radio=>0/닫다/1/열다
//}
    'xiongzhang_appid'=>'1605975412301600',//곰발호APPID
    'xiongzhang_token'=>'iRTpqKUmo082HtX0',//곰발호TOKEN
    'lang_open'=>'1',//多语言开关  1/开/0/关
);