<?php if (!defined('ROOT')) exit('Can\'t Access !'); return array (
    'install_admin'=>'',
//site-公式サイト{
    'stop_site'=>'1',
//サイトの状態[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="サイトの状態を設定！" /></span>]radio=>1/オン/2/オフ/3/オフ
    'site_url'=>'http://127.0.0.6/',
//サイトのアドレス[<p class="tips-p">入力形式：{SERVER_NAME} ，は必ず「/」で終わる！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="http://スタートして「/」で終了します。！" /></span>]
    'site_mobile'=>'18888888888',
//管理者携帯[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="管理者の携帯番号は、ユーザの動作ショートメッセージのお知らせを開くことができます！" /></span>]
    'admin_dir'=>'admin',
//バックグラウンドアドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="強く推薦してインストールした後に第1時間は登録の住所を改正して、ウェブサイトのバックグランドの安全性を強化します！" /></span>]
    'sitename'=>'公式サイト',
//公式サイト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブサイトの略称を記入してください。主にページの底の説明に使います！" /></span>]
    'fullname'=>'のホームページです',
//のホームページです[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ホームページのタイトルに表示されています。キーワードと合わせて使用できます！" /></span>]
    'site_keyword'=>'出会い系サイト',
//出会い系サイト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブサイトのキーワード、ウェブサイトの順位を最適化するために用いて、複数のキーワードは英語のカンマの間隔を使ってください！" /></span>]
    'site_description'=>'公式サイト',
//公式サイト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブサイトの説明内容は、ウェブサイトに関する簡単な紹介ができます！" /></span>]
    'site_logo'=>'/images/logo.png',
//Logo[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をクリックして、ウェブサイトのロゴをアップロードします！" /></span>]=>image
    'logo_width'=>'260',
//ロゴの幅[<p class="tips-p">この設定は、応答テンプレートを使用すると効果がありません！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ロゴの幅、単位(px)を設定します！" /></span>]
    'logo_height'=>'45',
//ロゴの高さ[<p class="tips-p">この設定は、応答テンプレートを使用すると効果がありません！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ロゴの高さ、単位(px)を設定します！" /></span>]
    'site_ico'=>'/favicon.ico',
//アドレスバーのアイコン[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をクリックして、ウェブサイトのアドレスバーのアイコンをアップロードします。新しいアップロードアイコンが正常に表示されない場合は、ブラウザのキャッシュを空にしてからアクセスしてください。" /></span>]=>image
    'site_right'=>'Copyright ©',
//公式サイト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="フロントはウェブサイトの著作権の説明の内容を表示します！" /></span>]
    'k'=>array ('G','H','I','J','K','L','M','N','O','G','H','I','J','K','L'),
    'h'=>array (104,116,116,112,58,47,47,108,105,99,101,110,115,101,46,99,109,115,101,97,115,121,46,99,110,47,112,104,112,114,112,99,46,112,104,112),
//}
//websitesite-カスタム設定{
    'isdebug'=>'1',
//デバッグスイッチ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブサイトにPHPの運行エラーコードが表示されているかどうかを設定します！" /></span>]radio=>0/オフ/1/オン
    'ueditor_open'=>'0',
//エディタはdivをサポートします[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="Baiduのエディタの切り替えスイッチを設定します！" /></span>]radio=>0/关/1/开
    'lang_type'=>'1',
//繁体切り替え[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="繁体切り替えを表示するかどうか！" /></span>]radio=>0/オフく/1/開
    'history_num'=>8,
//アクセス履歴[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="バックグラウンドアクセスログTAB数制御！" /></span>]
    'show_top_text'=>'1',
//トップテキストを表示するかどうか[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="設定欄トップと全駅トップ文字表示スイッチ！" /></span>]radio=>0/オフく/1/開
    'pc_style_color'=>'6',
//サイト全体の色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="PCテンプレートで色替えをサポートする場合のみ有効です" /></span>]=>0/無/1/赤/2/オレンジ/3/黄/4/緑/5/青/6/青/7/紫/8/黒/9/白
    'nav_top'=>'1',
//公式サイト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブナビゲーションを設定します。ページの一番上に固定して表示しますか" /></span>]radio=>0/いいえ/1/はい
    'shield_right_key'=>'0',
//右ボタンを遮断する[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="マウスの右ボタンをオンまたはオフにする機能" /></span>]radio=>0/オフ/1/オン
    'nav_blank'=>'0',
//コラムの開き方[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブサイトのリンクを新しいウィンドウで開くかどうかを設定します！" /></span>]radio=>0/オフ/1/オン
    'onerror_pic'=>'/images/pic.png',
//標準画像[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像リストページにサムネイルがない場合、代わりに表示します！" /></span>]=>image
    'thumb_width'=>'600',
//サムネイルの幅[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="サイトのサムネイルの幅を設定します。単位（PX）！注：テンプレートで幅値を呼び出してからのみ有効です！" /></span>]
    'thumb_height'=>'400',
//サムネイルの高さ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="サイトのサムネイルの高さを設定します。単位（PX）！注：テンプレートから高さ値を呼び出してからのみ有効です。" /></span>]
    'manage_pagesize'=>'12',
//バックグラウンド改ページ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="バックグラウンドの内容リストの改ページ数を設定します！" /></span>]
    'list_pagesize'=>'12',
//フロント改ページ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="フロントの全駅の内容リストの改ページ数を設定し、欄単独に改ページを設置し、優先的に欄の設定に従って表示する！" /></span>]
    'like_news'=>'5',
//関連記事の数[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="フロントの内容ページに関する記事の数を設定します！" /></span>]
    'search_time'=>'10',
//検索時間制限[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="同じキーワードは制限時間内に検索を繰り返すことができません！" /></span>]
    'maxhotkeywordnum'=>'50',
//検索ベース[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="人気のキーワード取得条件は、基数より大きいものが人気のキーワードです！" /></span>]
    'archive_introducelen'=>'50',
//自動切り取り長さ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="自動取得内容の上位200文字は、コンテンツの概要です！" /></span>]
    'isecoding'=>'1',
//偽造防止スイッチ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブサイトを設定して偽造防止コードを有効にしますか！" /></span>]radio=>0/オフ/1/オン
    'ecoding'=>'CMSEASY',
//プレフィックス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="セキュリティコードのプレフィックスを設定します" /></span>]
    'site_icp'=>'京ICP备88888888号',
//ICP届出番号[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="フロントにICP登録番号が表示されます！" /></span>]
    'site_beian'=>'京',
//網に字を備え付ける[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="網に字を備え付ける！" /></span>]
    'site_beian_number'=>'22000000000001',
//公網に番号をつける[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="公網に番号をつける！" /></span>]
    'saic_pic'=>'8',
//工商亮照ID[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="フロントに工商亮照の写真が表示されます！" /></span>]
    'qrcodes'=>'1',
//二次元コード[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブサイトのQRコードを有効にするかどうかを設定します！" /></span>]radio=>0/オフ/1/オン
    'template_view'=>'1',
//オンラインテンプレート[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="無料テンプレートリストをオンラインで調べてダウンロードして使用します！" /></span>]radio=>0/オフ/1/オン
    'opguestadd'=>'0',
//観光客の投稿[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブサイトを設置して匿名の投稿内容を有効にしますか？観光客が住所を発表します。http:/ドメイン名/？g=1！" /></span>]radio=>0/オフ/1/オン
    'html_wow'=>'1',
//ダイナミック[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブサイトでウェブページのアニメーション効果を開くかどうかを設定します！" /></span>]radio=>0/オフ/1/オン
    'share'=>'0',
//分かち合う[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="共有機能を表示するかどうかを設定します！" /></span>]radio=>0/オフ/1/オン
    'hotsearch'=>'1',
//人気のキーワード[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブサイトに人気のキーワードを有効にするかどうかを設定します！" /></span>]radio=>0/オフ/1/オン
    'video_url'=>'http://player.youku.com/player.php/Type/Folder/Fid/19033149/Ob/1/sid/XNTI1NTk4OTAw/v.swf',
//ビデオアドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ビデオのアドレスをコピーします！" /></span>]
//}
//information-連絡情報{
    'address'=>'株式会社',
//連絡する住所[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡先を記入する！" /></span>]
    'tel'=>'400-400-4000011',
//連絡電話[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡先を記入してください！" /></span>]
    'mobile'=>'18888888888',
//携帯電話[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="携帯電話番号を記入する！" /></span>]
    'fax'=>'400-400-4000',
//ファックス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ファックス番号を記入する！" /></span>]
    'email'=>'admin@admin.com',
//メールボックス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡先のメールアドレスを記入します！" /></span>]
    'complaint_email'=>'admin@admin.com',
//クレームメールボックス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="クレームメールを記入する！" /></span>]
    'postcode'=>'136000',
//郵便番号[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="郵便番号を記入する！" /></span>]
//}
//langsite-语言管理设置{
    'lang_switch'=>'1',
//言語スイッチ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="打开或者关闭语言切换！" /></span>]radio=>0/オフ/1/オン
//}
//filechecksite-セキュリティ設定{
    'safe360_enable'=>'0',
//360安全スイッチ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="360のセキュリティ機能をオンまたはオフにします。" /></span>]radio=>0/オフ/1/オン
    'session_ip'=>'0',
//SESSION検証IP[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="固定ip登録を有効にするかどうかのサイトを設定します。" /></span>]radio=>0/オフ/1/オン
    'ipcheck_enable'=>'0',
//バックグラウンド登録IP検証[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="IP検証機能のオン/オフ" /></span>]radio=>0/オフ/1/オン
    'template_nologin'=>'5',
//フロントログインエラー[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="フロントはログインエラーの回数を許可します。" /></span>]
    'admin_nologin'=>'5',
//バックグラウンドログインエラー[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="バックグラウンドはログインエラーの回数を許可します。" /></span>]
    'loginfalsetime'=>'86400',
//ログイン失敗時間[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ログイン失敗がエラー回数を超えたら再登録時間を許可します。" /></span>]=>3600/1時間/18000/5時間/86400/24時間
    'cookie_password'=>'addd7de3d80cf0a7910606104c58ace67655c99a',
//Cookieセキュリティコード[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="マルチサイト設定の場合、この項目は一致しなければなりません。" /></span>]
//}
//phonesite-携帯版{
    'mobile_open'=>'0',
//手机版开关[<p class="tips-p">独立した携帯端末が必要でなければ、使用しないでください。</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブサイトを設定して携帯版の機能を有効にするかどうか、適応テンプレートを使うなら、独立した携帯電話版をオフにしてください。" /></span>]radio=>0/オフ/1/オン/2/常に
    'wap_logo'=>'/images/logo_wap.png',
//携帯のロゴ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をクリックして、ウェブサイトのロゴをアップロードします。" /></span>]=>image
    'wlogo_width'=>'240',
//ロゴの幅[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ロゴの幅、単位を設定します(px)！" /></span>]
    'wlogo_height'=>'30',
//ロゴの高さ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ロゴの高さ、単位を設定します(px)！" /></span>]
    'wap_style_color'=>'6',
//携帯全体の色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="携帯のテンプレートが色を変える時だけ有効です。" /></span>]radio=>0/無/1/赤/2/オレンジ/3/黄/4/緑/5/青/6/青/7/紫/8/黒/9/白
    'wap_foot_nav'=>'2',
//携帯の下のメニュースタイル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="携帯の下のメニューを設定します。" /></span>]=>0/オフ/1/上弾/2/丸/3/フラット
    'wap_foot_nav_position'=>'right',
//携帯の下のメニュー位置[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="携帯の下のメニュー位置を設定します。" /></span>]=>left/左/right/右
//}
//dynamic-HTML設定{
    'list_cache'=>'1',
//リストキャッシュ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="phpキャッシュを有効にするかどうかは、このオプションを有効にすることを強く推奨します。" /></span>]radio=>0/オフ/1/オン
    'list_cache_time'=>'3600',
//キャッシュ時間[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="キャッシュ更新の時間、単位を設定します（秒）！" /></span>]
    'group_on'=>'1',
//グループを生成[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="パケット生成の有無を設定し、サーバや空間に静的な圧力を発生させ、生成中のインターネットの速度による中断を回避します。" /></span>]radio=>0/オフ/1/オン
    'group_count'=>'100',
//グループ生成数[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ネットの速度とホストの配置によって決めて、推薦は設定します"20"！" /></span>]
    'staticlang'=>'-',
//URL 間隔記号[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="URLパスセパレータ！" /></span>]radio=>-/中線/_/下線を引く
    'pc_html_info'=>'',
//PC Html
    'html_prefix'=>'/jp',
//html保存パス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="htmlを生成してディレクトリを保存します。空きまたはたとえば/html" /></span>]
    'list_index_php'=>'0',
//首页[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="最初のページの静的な表示を設定します！" /></span>]radio=>0/静的/1/ダイナミックで
    'list_page_php'=>'0',
//欄のページ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="欄のページを設定して静的に表示します。" /></span>]radio=>0/指定で/1/静的/2/ダイナミックで
    'show_page_php'=>'0',
//ページの内容[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="内容ページを静的に表示するよう設定します。" /></span>]radio=>0/指定で/1/静的/2/ダイナミックで
    'list_type_php'=>'0',
//分類ページ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="分類ページの静的表示を設定します！" /></span>]radio=>0/指定で/1/静的/2/ダイナミックで
    'list_special_php'=>'0',
//特集ページ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="テーマページの静的な表示を設定します！" /></span>]radio=>0/指定で/1/静的/2/ダイナミックで
    'tag_html'=>'0',
//TAG[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="TAGを生成するかどうかを設定します！" /></span>]radio=>0/指定で/1/静的/2/ダイナミックで
    'wap_html_info'=>'',
//Wap Html
    'wap_html_prefix'=>'/wap/jp',
//html保存パス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="htmlを生成してディレクトリを保存します。空きまたはたとえば/html" /></span>]
    'wap_list_page_php'=>'0',
//携帯のコラム[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="携帯電話の欄のページを設定して静的に表示します。" /></span>]radio=>0/指定で/1/静的/2/ダイナミックで
    'wap_show_page_php'=>'0',
//携帯の内容[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="携帯電話のコンテンツページを設定して静的に表示します。" /></span>]radio=>0/指定で/1/静的/2/ダイナミックで
    'wap_type_php'=>'0',
//携帯の種類[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="携帯電話の分類ページの静的表示を設定します！" /></span>]radio=>0/指定で/1/静的/2/ダイナミックで
    'wap_special_php'=>'0',
//携帯のテーマ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="携帯電話のテーマページを設定して静的に表示します！" /></span>]radio=>0/指定で/1/静的/2/ダイナミックで
    'wap_tag_html'=>'0',
//携帯電話のTAG[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="携帯電話のTAGを生成するかどうかを設定します！" /></span>]radio=>0/指定で/1/静的/2/ダイナミックで
    'urlrewrite_info'=>'',
//注意してください
    'urlrewrite_on'=>'0',
//URL_Rewrite[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="擬静性について知らないなら、閉じてください。" /></span>]radio=>0/オフ/1/オープン
    'custom404'=>'1',
//仮想静的404ページ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="仮想静的404ページ" /></span>]radio=>0/オフ/1/オン
    'autoDelRewriteFile'=>'0',
//ルールファイルを自動削除[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="擬静をオフにすると、規則ファイルが自動的に削除されます。" /></span>]radio=>0/オフ/1/オープン
    'isautocthmtl'=>'0',
//自動生成[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="毎日0時に自動的にトップページとコラムページを生成します。" /></span>]radio=>0/オフ/1/オン
//}
//spidersite-蜘蛛の統計{
    'stats_enable'=>'0',
//有効にするかどうか[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スパイダー統計機能のオン/オフ" /></span>]radio=>0/オフ/1/オン
    'iscleanstats'=>'0',
//自動クリア[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="自動的に蜘蛛の履歴をクリアします。" /></span>]=>0/関/1/毎日/2/週
    'site_push'=>'1',
//Baiduのプッシュ[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="left" title="ウェブサイトでBaiduの自動コンテンツを開くかどうかを設定します" /></span>]radio=>0/オフ/1/オン
//}
//backupsite-バックアップ管理{
    'isautobak'=>'0',
//自動バックアップ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="データベースは週ごとに自動的にバックアップできます。" /></span>]radio=>0/関/1/毎日/2/週/3/月
//}
//customer-サービスリスト{
    'ifonserver'=>'1',
//有効にするかどうか[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブサイトに浮遊客服サイドバーを表示するかどうかを設定します。" /></span>]radio=>1/オン/0/オフ
    'server_template'=>'3',
//スタイルを選択[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="浮遊顧客サービスのスタイルを選択します。" /></span>]radio=>1/フラットカラー/2/フラットグレー/3/フラットブルー/4/クラシック/5/古い時間
    'boxopen'=>'open',
//リストを展開[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="left" title="浮遊客服側柵のデフォルト展開状態を設定します。" /></span>]=>open/オン/close/オフ
    'serverlistp'=>'right',
//フレームの位置[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="浮遊客服側柵の表示位置を設定します。" /></span>]=>left/左/right/右
    'worktime'=>'お問い合わせ時間は8:30-18:00月曜日から金曜日までです',
//勤務時間[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="勤務時間を記入してください。" /></span>]
    'qq1name'=>'サービス',
//職務[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡先の職務を記入してください。" /></span>]
    'qq1'=>'888888',
//QQ号码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡QQ番号を記入してください。" /></span>]
    'qq2name'=>'サービス',
//職務[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡先の職務を記入してください。" /></span>]
    'qq2'=>'888888',
//QQ号码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡QQ番号を記入してください。" /></span>]
    'qq3name'=>'サービス',
//職務[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡先の職務を記入してください。" /></span>]
    'qq3'=>'666',
//QQ号码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡QQ番号を記入してください。" /></span>]
    'qq4name'=>'サービス',
//職務[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡先の職務を記入してください。" /></span>]
    'qq4'=>'',
//QQ号码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡QQ番号を記入してください。" /></span>]
    'qq5name'=>'サービス',
//職務[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡先の職務を記入してください。" /></span>]
    'qq5'=>'',
//QQ号码[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡QQ番号を記入してください。" /></span>]
    'wangwangname'=>'タオバオ',
//職務[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡先の職務を記入してください。" /></span>]
    'wangwang'=>'',
//宝を洗う番号[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系淘宝旺旺号码！" /></span>]
    'aliname'=>'AliTM',
//職務[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡先の職務を記入してください。" /></span>]
    'ali'=>'',
//AliTM番号[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="填写联系阿里旺旺号码！" /></span>]
    'skypename'=>'Skype',
//職務[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡先の職務を記入してください。" /></span>]
    'skype'=>'',
//Skype番号[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="連絡Skype番号を記入してください。" /></span>]
    'weixin_pic'=>'/images/w.gif',
//公式画像[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像リストページにサムネイルがない場合、代わりに表示します！" /></span>]=>image
//}
//security-文字フィルタ{
    'filter_word'=>'',
//文字フィルタ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="サイトの内容はフィルタで置換された文字です。複数は「、」で区切ってください。" /></span>]
    'filter_x'=>'',
//替代字符[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="网站内容中被过滤替换掉的字符，多个请用“,”隔开！" /></span>]
//}
//membersite-会員管理{
    'reg_on'=>'1',
//有効にするかどうか[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="サイトを設置して会員システムを有効にしますか。" /></span>]radio=>0/オフ/1/オン
    'site_login'=>'1',
//表示するかどうか[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブサイトにユーザー登録を表示するかどうかを設定します。" /></span>]radio=>0/オフ/1/オン
    'invitation_registration'=>'0',
//招待登録[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ユーザー登録を招待しないと登録できません。" /></span>]radio=>0/オフ/1/オン
//}
//discuss-コメント管理{
    'comment'=>'1',
//有効にするかどうか[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="设置网站是否显示评论功能！" /></span>]radio=>0/オフ/1/オン
    'comment_list'=>'1',
//コメントリスト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="コメントリストをオンまたはオフにします。" /></span>]radio=>0/オフ/1/オン
    'comment_num'=>'5',
//コメントバーの数[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="表示内容ページのコメントバー数を設定します。" /></span>]
    'comment_user'=>'1',
//表示権限[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="コメントリストの表示を許可しますか？" /></span>]radio=>0/オフ/1/オン
    'comment_time'=>'10',
//コメント時間[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="IPまたはユーザーとのコメント時間間隔は、0は制限されず、単位秒" /></span>]radio=>10/10秒/30/30秒/60/1分钟
    'comment_switch'=>'0',
//コメントの条件[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="コメントの条件" /></span>]radio=>0/観光客/1/会員/2/禁止
    'comment_title'=>'コメント',
//コメントページのタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="コメントページのタイトル" /></span>]
    'reply_comment'=>'1',
//複数回答[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="left" title="コメントが複数回答を開くかどうか！" /></span>]radio=>0/オフ/1/開く
//}
//formsite-フォーム管理{
    'guestformsubmit'=>'0',
//観光客票の提出[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブサイトが匿名の提出フォームを有効にするかどうかを設定します。" /></span>]radio=>0/オフ/1/オン
//}
//orders-オーダー管理{
    'shoppingcart'=>'1',
//買い物をする[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ショッピングカートのリンクを開けますか" /></span>]radio=>0/オフ/1/オン
    'memberbuy'=>'0',
//会員が買う[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="開くか閉じるかは会員が買わなければなりません" /></span>]radio=>0/オフ/1/オン
    'order_time'=>'10',
//注文時間間隔[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注文書提出時間間隔" /></span>]radio=>10/10秒/30/30秒/60/1分钟
//}
//guestbook-伝言設定{
    'guestbook_enable'=>'1',
//有効にするかどうか[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="メッセージ本機能のオン/オフ" /></span>]radio=>0/オフ/1/オン
    'guestbook_list'=>'1',
//コメントリスト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="メッセージリストを開きますか" /></span>]radio=>0/オフ/1/オン
    'guestbook_time'=>'60',
//伝言時間間隔[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="IPまたはユーザーとの伝言時間間隔は、0は制限なし、単位秒" /></span>]radio=>10/10秒/30/30秒/60/1分钟
    'guestbook_user'=>'0',
//表示権限[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="会員ではなく、メッセージリストを確認することができますか！" /></span>]radio=>0/オフ/1/オン
    'guestbook_switch'=>'0',
//留言条件[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="可评论条件" /></span>]radio=>0/游客/1/会员/2/禁止
    'guestbook_title'=>'伝言',
//伝言ページタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="伝言ページタイトル" /></span>]
//}
//sitesetup-サイトの設定{
    'website_list'=>'1',
//サイトリスト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ページヘッドのリストの表示をオンまたはオフにします。" /></span>]radio=>0/オフ/1/オン
//sitesetup-サイトの設定{
    'website_list'=>'1',
//サイトリスト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ページヘッドのリストの表示をオンまたはオフにします" /></span>]radio=>0/オフ/1/開く
//}
//サムネイル
    'smallimage_open' => 1,
    'smallimage_width' => 200,
    'smallimage_height' => 200,
    'smallimage_path' => '/smallimages',
//uploadフォルダに対して
//image-画像ウォーターマーク{
    'watermark_open'=>'0',
//有効にするかどうか=>0/オフ/1/オン
    'watermark_min_width'=>'300',
//最小幅[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="アップロードされた画像の幅が設定幅より小さい場合、ウォーターマークは追加されません。" /></span>]
    'watermark_min_height'=>'300',
//最小高さ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="アップロードされた画像の高さが設定高さより小さい場合、ウォーターマークは追加されません。" /></span>]
    'watermark_path'=>'/images/logo.png',
//画像のパス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウォーターマークの写真はjpg、gif、pngフォーマットを支持します！" /></span>]=>image
    'watermark_ts'=>'80',
//透明度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="範囲は（1~100）の整数で、数値が小さいほど透かし画像は透明になります。" /></span>]
    'watermark_qs'=>'90',
//画像の品質[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="範囲は（0~100）の整数です。数値が大きいほど、画像の効果は良いです。" /></span>]
    'watermark_pos'=>'5',
//位置を追加[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ここでウォーターマークの追加位置を選択してください。（3 x 3全部で9つの位置が選択できます。）" /></span>]radio=>1/1/2/2/3/3/4/4/5/5/6/6/7/7/8/8/9/9
//}
//upload-添付ファイル{
    'upload_filetype'=>'jpg,gif,bmp,jpeg,png,doc,docx,xls,xlsx,zip,rar,7z,txt,pdf,JPG,GIF,BMP,JPEG,PNG,ZIP,RAR,7Z,TXT,PDF,DOC,DOCX,XLS,XLSX,mp4,MP4',
//添付ファイルの種類[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="アップロード添付ファイルを添付するタイプを設定し、複数の拡張子を「、」で区切ってください" /></span>]
    'upload_max_filesize'=>'200',
//添付サイズ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="アップロード添付ファイルの小さな上限を設定します。単位（MB）！" /></span>]
    'mods'=>'',
//}
//template-テンプレート{
    'template_dir'=>'2019-default',
//前台模板[默认default]
//}
//template-ネットショップ{
    'template_shopping_dir'=>'shop',
//商城模板
//}
//template-携帯電話{
    'template_mobile_dir'=>'wap',
//手机模板
//}
//template-オンラインテンプレート{
    'template_online'=>'',
//在线模板
//}
//template-その他{
    'template_user_dir'=>'user',
//会員テンプレート[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="デフォルトuser！" /></span>]
    'template_admin_dir'=>'admin',
//バックステージ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="デフォルトadmin！" /></span>]
//}
//ballot-投票の設定{
    'checkip'=>'1',
//验证IP[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="投票がIP制限を開くかどうかを設定します。オープンしたら、同じIPは一回だけ投票します。" /></span>]radio=>0/オフ/1/オン
    'timer'=>'60',
//時間の間隔[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="同じIP投票の制限時間を設定します。単位：分！" /></span>]
//}
//ditu-地図の設定{
    'ditu_APK'=>'',
//地図APK[<a href=https://lbsyun.baidu.com target=_blank  class=btn-navy-sms>登録する</a><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブサイトがHTTPSを使うなら、申請のAPKを必ず記入してください。" /></span>]
    'ditu_width'=>'900',
//地図の幅[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="地図の幅を記入します。例えば、360！を選択します（PX）！" /></span>]
    'ditu_height'=>'460',
//地図の高さ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="地図の高さを記入します。例えば、300です。を選択します（PX）！" /></span>]
    'ditu_center_left'=>'116.47033',
//地図の経度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="地図の経度を記入してください。" /></span>]
    'ditu_center_right'=>'39.919009',
//地図の緯度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="地図の緯度を記入してください。" /></span>]
    'ditu_level'=>'12',
//レベルを表示[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="地図の表示レベルを記入してください。" /></span>]
    'ditu_title'=>'株式会社',
//メッセージウィンドウのタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="地図のポイントヒント情報のタイトルを記入してください。" /></span>]
    'ditu_content'=>'住所：ある省のある市のある街の電話番号：888-8888',
//情報のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="地図のポイントを記入して情報の内容を提示します。" /></span>]
    'ditu_maker_left'=>'116.47033',
//ラベルの経度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="地図のポイント経度を記入してください。" /></span>]
    'ditu_maker_right'=>'39.919009',
//ラベルの緯度[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="地図のポイントを記入して緯度を提示します！" /></span>]
    'ditu_explain'=>'',
//使用説明
//}
//mail-メールの設定{
    'send_type'=>'2',
//送信モード[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="メール送信モードを設定します。" /></span>]radio=>0/選択してください/1/Sendmail/2/SOCKET/3/PHP
    'header_var'=>'1',
//区切り記号=>99/選択してください/1/CRLF区切り記号(Windows)/0/LF区切り記号(Unix|Linux)/2/CR区切り記号(Mac)
    'kill_error'=>'1',
//エラーをブロック[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="エラーメッセージをブロックするかどうかを設定します！" /></span>]radio=>0/いいえ/1/はい
//}
//mail-SOCKET{
    'smtp_mail_host'=>'smtp.ym.163.com',
//SMTPサーバ
    'smtp_mail_port'=>'25',
//SMTPポート
    'smtp_mail_auth'=>'1',
//認証を要求する[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="メールアドレスは登録検証が必要ですか！" /></span>]radio=>0/いいえ/1/はい
    'smtp_user_add'=>'admin@admin.cn',
//差出人メールボックス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="差出人メールに記入してください。" /></span>]
    'smtp_mail_username'=>'admin@admin.cn',
//メールアドレス名[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="送信者のユーザー名を記入してください。普通はメールアドレスの名前です。" /></span>]
    'smtp_mail_password'=>'admin',
//パスワード[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="送信メールのパスワードを記入してください。" /></span>]
//}
//mail-PHP{
    'smtp_host'=>'smtp.qq.com',
//SMTPサーバ
    'smtp_port'=>'25',
//SMTPポート
//}
//mail-有効にするかどうか{
    'email_gust_send_cust'=>'0',
//メッセージ送信メール[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="メッセージを記入したら、記入メールに送ってくれますか？" /></span>]radio=>0/いいえ/1/はい
    'email_guest_send_admin'=>'0',
//メッセージ送信管理者メール[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="メッセージを記入したら、管理者メールで通知しますか？" /></span>]radio=>0/いいえ/1/はい
    'email_order_send_cust'=>'0',
//注文をメールで送ります[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注文書を記入したら、記入メールで通知しますか" /></span>]radio=>0/いいえ/1/はい
    'email_order_send_admin'=>'0',
//注文書送付管理者メール[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="注文書を記入したら、管理者メールで通知しますか" /></span>]radio=>0/いいえ/1/はい
    'email_form_on'=>'0',
//フォーム送信メール[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="フォームを記入したら、記入メールに送信しますか" /></span>]radio=>0/いいえ/1/はい
    'email_form_send_admin'=>'0',
//フォーム送信管理者メール[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="フォームを記入したら、管理者メールで通知しますか" /></span>]radio=>0/いいえ/1/はい
    'email_reg_on'=>'0',
//送信メールの登録[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ユーザー登録後、メールアドレスを記入する通知を送信しますか" /></span>]radio=>0/いいえ/1/はい
//}
//vote-投票の設定{
    'vote_onlyone'=>'0',
//会員一人に限り投票は一回のみとなります=>0/オフ/1/オン
    'vote_auto_sms'=>'0',
//投票は自動的にメールを送ります=>0/オフ/1/オン
//}
//slide-スライドの設定{
    'slide_width'=>'990',
//スライドの幅[<p class="tips-p">応答テンプレートを使用すると、この設定は機能しません。</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドの表示幅を設定します。" /></span>]
    'slide_height'=>'750',
//スライドの高さ[<p class="tips-p">応答テンプレートを使用すると、この設定は機能しません。</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドの表示高さを設定します。" /></span>]
    'slide_number'=>'2',
//スライドの数[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="left" title="スライドの数を5以下に設定します。" /></span>]
    'slide_time'=>'5',
//切り替え時間[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]
    'slide_style_position'=>'0',
//スライドの文字位置[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドの文字位置！" /></span>]radio=>0/左/1/中/2/右
    'slide_text_color'=>'#ffffff',
//スライドの色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのテキスト色！" /></span>]=>color
    'slide_input_bg'=>'#0099ff',
//リンクボタンの背景色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのリンクボタンの背景色！" /></span>]=>color
    'slide_input_color'=>'#ffffff',
//リンクボタンのテキスト色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド中のボタンのテキスト色！" /></span>]=>color
    'slide_btn_hover_color'=>'#0099ff',
//下の現在のボタンの色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド切り替えボタンの現在のボタンの色！" /></span>]=>color
    'slide_btn_color'=>'#ffffff',
//底の普通のボタン色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド切り替えボタンの色！" /></span>]=>color
    'slide_btn_width'=>'50',
//下のボタンの幅[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド切り替えボタンの幅！" /></span>]
    'slide_btn_height'=>'10',
//下ボタンの高さ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド中の切り替えボタンの高さ！" /></span>]
    'slide_btn_shape'=>'2',
//ボトムボタン形状[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドの中でボタンの形状を切り替えます。" /></span>]radio=>1/丸/2/四角形
    'slide_button_size'=>'50',
//左右切り替えボタンサイズ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド左右切り替えボタンサイズ！" /></span>]
    'slide_button_color'=>'#ffffff',
//ボタンの色を左右に切り替える[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド左右切り替えボタンの色！" /></span>]=>color
    'slide_pic1'=>'/images/slide/banner01.jpg',
//画像1アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'slide_pic1_title'=>'応答式のウェブサイトのテンプレート、異なった端末、同様にすばらしいです',
//画像1のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'slide_pic1_info'=>'新たに「応答型サイトテンプレート」を発売しました。モバイル端末の訪問客はコンピュータサイトと同じ体験を得て、パソコンサイトで見た内容を簡単に見つけられます。',
//写真1のサブタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのサブタイトルを記入してください。" /></span>]
    'slide_pic1_title_url'=>'もっと知りたい',
//図1ボタンのテキスト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="文字を記入するとスライドボタンで表示されます。" /></span>]
    'slide_pic1_url'=>'#',
//図1リンク先[<p class="tips-p">リンク先が空の場合、ボタンは自動的に表示されません！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
    'slide_pic2'=>'/images/slide/banner02.jpg',
//画像2アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'slide_pic2_title'=>'海の美しいテンプレートは無料でダウンロードできます',
//画像2のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'slide_pic2_info'=>'PHP+Mysqlアーキテクチャに基づくウェブサイトのコンテンツ管理システムもPHP開発プラットフォームです。',
//写真2のサブタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのサブタイトルを記入してください。" /></span>]
    'slide_pic2_title_url'=>'もっと知りたい',
//図2ボタンのテキスト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="文字を記入するとスライドボタンで表示されます。" /></span>]
    'slide_pic2_url'=>'#',
//図2リンク先[<p class="tips-p">リンク先が空の場合、ボタンは自動的に表示されません！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
    'slide_pic3'=>'/images/slide/banner03.jpg',
//画像3アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'slide_pic3_title'=>'プロモーションモジュールを内蔵した企業ウェブサイト管理システム！',
//画像3タイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'slide_pic3_info'=>'提携モジュールを内蔵した企業ウェブサイトシステムは、企業のマーケティング普及に非常に便利な方法と機能を提供しています。',
//写真3のサブタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのサブタイトルを記入してください。" /></span>]
    'slide_pic3_title_url'=>'もっと知りたい',
//図3ボタンのテキスト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="文字を記入するとスライドボタンで表示されます。" /></span>]
    'slide_pic3_url'=>'#',
//図3リンク先[<p class="tips-p">リンク先が空の場合、ボタンは自動的に表示されません！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
    'slide_pic4'=>'/images/slide/banner04.jpg',
//画像4アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'slide_pic4_title'=>'ネットワーク建設会社とスタジオを歓迎します',
//図4のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'slide_pic4_info'=>'PHP+Mysqlアーキテクチャに基づくウェブサイトのコンテンツ管理システムもPHP開発プラットフォームです。',
//写真4のサブタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのサブタイトルを記入してください。" /></span>]
    'slide_pic4_title_url'=>'もっと知りたい',
//図4ボタンのテキスト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="文字を記入するとスライドボタンで表示されます。" /></span>]
    'slide_pic4_url'=>'#',
//図4リンク先[<p class="tips-p">リンク先が空の場合、ボタンは自動的に表示されません！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
    'slide_pic5'=>'/images/slide/banner05.jpg',
//画像5アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'slide_pic5_title'=>'サービス/アフターサービス/プログラムアップグレード',
//図5のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'slide_pic5_info'=>'PHP+Mysqlアーキテクチャに基づくウェブサイトのコンテンツ管理システムもPHP開発プラットフォームです。',
//写真5のサブタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのサブタイトルを記入してください。" /></span>]
    'slide_pic5_title_url'=>'もっと知りたい',
//図1ボタンのテキスト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="文字を記入するとスライドボタンで表示されます。" /></span>]
    'slide_pic5_url'=>'#',
//図5リンク先[<p class="tips-p">リンク先が空の場合、ボタンは自動的に表示されません！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
//}
//slide-内ページ切り替え画像{
    'cslide_width'=>'990',
//スライドの幅[<p class="tips-p">応答テンプレートを使用すると、この設定は機能しません。</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドの表示幅を設定します。" /></span>]
    'cslide_height'=>'250',
//スライドの高さ[<p class="tips-p">応答テンプレートを使用すると、この設定は機能しません。</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドの表示高さを設定します。" /></span>]
    'cslide_number'=>'2',
//スライドの数[<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="left" title="スライドの数を5以下に設定します。" /></span>]
    'cslide_time'=>'5',
//切り替え時間[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]
    'cslide_style_position'=>'0',
//スライドの文字位置[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドの文字位置！" /></span>]radio=>0/左/1/中/2/右
    'cslide_text_color'=>'#ffffff',
//スライドの色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのテキスト色！" /></span>]=>color
    'cslide_input_bg'=>'#0099ff',
//リンクボタンの背景色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのリンクボタンの背景色！" /></span>]=>color
    'cslide_input_color'=>'#ffffff',
//リンクボタンのテキスト色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド中のボタンのテキスト色！" /></span>]=>color
    'cslide_btn_hover_color'=>'#0099ff',
//下の現在のボタンの色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド切り替えボタンの現在のボタンの色！" /></span>]=>color
    'cslide_btn_color'=>'#ffffff',
//底の普通のボタン色[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド切り替えボタンの色！" /></span>]=>color
    'cslide_btn_width'=>'50',
//下のボタンの幅[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド切り替えボタンの幅！" /></span>]
    'cslide_btn_height'=>'10',
//下ボタンの高さ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド中の切り替えボタンの高さ！" /></span>]
    'cslide_btn_shape'=>'2',
//ボトムボタン形状[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドの中でボタンの形状を切り替えます。" /></span>]radio=>1/丸/2/四角形
    'cslide_button_size'=>'50',
//左右切り替えボタンサイズ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド左右切り替えボタンサイズ！" /></span>]
    'cslide_button_color'=>'#ffffff',
//ボタンの色を左右に切り替える[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド左右切り替えボタンの色！" /></span>]=>color
    'cslide_pic1'=>'/images/slide/banner01.jpg',
//画像1アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'cslide_pic1_title'=>'応答式のウェブサイトのテンプレート、異なった端末、同様にすばらしいです',
//画像1のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'cslide_pic1_info'=>'新たに「応答型サイトテンプレート」を発売しました。モバイル端末の訪問客はコンピュータサイトと同じ体験を得て、パソコンサイトで見た内容を簡単に見つけられます。',
//写真1のサブタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのサブタイトルを記入してください。" /></span>]
    'cslide_pic1_title_url'=>'もっと知りたい',
//図1ボタンのテキスト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="文字を記入するとスライドボタンで表示されます。" /></span>]
    'cslide_pic1_url'=>'#',
//図1リンク先[<p class="tips-p">リンク先が空の場合、ボタンは自動的に表示されません！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
    'cslide_pic2'=>'/images/slide/banner02.jpg',
//画像2アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'cslide_pic2_title'=>'海の美しいテンプレートは無料でダウンロードできます',
//画像2のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'cslide_pic2_info'=>'PHP+Mysqlアーキテクチャに基づくウェブサイトのコンテンツ管理システムもPHP開発プラットフォームです。',
//写真2のサブタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのサブタイトルを記入してください。" /></span>]
    'cslide_pic2_title_url'=>'もっと知りたい',
//図2ボタンのテキスト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="文字を記入するとスライドボタンで表示されます。" /></span>]
    'cslide_pic2_url'=>'#',
//図2リンク先[<p class="tips-p">リンク先が空の場合、ボタンは自動的に表示されません！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
    'cslide_pic3'=>'/images/slide/banner03.jpg',
//画像3アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'cslide_pic3_title'=>'プロモーションモジュールを内蔵した企業ウェブサイト管理システム！',
//画像3タイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'cslide_pic3_info'=>'提携モジュールを内蔵した企業ウェブサイトシステムは、企業のマーケティング普及に非常に便利な方法と機能を提供しています。',
//写真3のサブタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのサブタイトルを記入してください。" /></span>]
    'cslide_pic3_title_url'=>'もっと知りたい',
//図3ボタンのテキスト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="文字を記入するとスライドボタンで表示されます。" /></span>]
    'cslide_pic3_url'=>'#',
//図3リンク先[<p class="tips-p">リンク先が空の場合、ボタンは自動的に表示されません！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
    'cslide_pic4'=>'/images/slide/banner04.jpg',
//画像4アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'cslide_pic4_title'=>'ネットワーク建設会社とスタジオを歓迎します',
//図4のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'cslide_pic4_info'=>'PHP+Mysqlアーキテクチャに基づくウェブサイトのコンテンツ管理システムもPHP開発プラットフォームです。',
//写真4のサブタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのサブタイトルを記入してください。" /></span>]
    'cslide_pic4_title_url'=>'もっと知りたい',
//図4ボタンのテキスト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="文字を記入するとスライドボタンで表示されます。" /></span>]
    'cslide_pic4_url'=>'#',
//図4リンク先[<p class="tips-p">リンク先が空の場合、ボタンは自動的に表示されません！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
    'cslide_pic5'=>'/images/slide/banner05.jpg',
//画像5アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'cslide_pic5_title'=>'サービス/アフターサービス/プログラムアップグレード',
//図5のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'cslide_pic5_info'=>'PHP+Mysqlアーキテクチャに基づくウェブサイトのコンテンツ管理システムもPHP開発プラットフォームです。',
//写真5のサブタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのサブタイトルを記入してください。" /></span>]
    'cslide_pic5_title_url'=>'もっと知りたい',
//図1ボタンのテキスト[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="文字を記入するとスライドボタンで表示されます。" /></span>]
    'cslide_pic5_url'=>'#',
//図5リンク先[<p class="tips-p">リンク先が空の場合、ボタンは自動的に表示されません！</p><span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
//}
//slide-携帯のスライド{
    'wslide_width'=>'300',
//スライドの幅[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドの表示幅を設定します。" /></span>]
    'wslide_height'=>'440',
//スライドの高さ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドの表示高さを設定します。" /></span>]
    'wslide_number'=>'2',
//スライドの数[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドの数を5以下に設定します。" /></span>]
    'wslide_pic1'=>'/images/slide/banner06.jpg',
//画像1アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'wslide_pic1_title'=>'企業のネットマーケティングを助力する',
//画像1のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'wslide_pic1_url'=>'#',
//図1リンク先[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
    'wslide_pic2'=>'/images/slide/banner07.jpg',
//画像2アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'wslide_pic2_title'=>'海の美しいテンプレートは無料でダウンロードできます',
//画像2のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'wslide_pic2_url'=>'#',
//図2リンク先[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
    'wslide_pic3'=>'/images/slide/banner08.jpg',
//画像3アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'wslide_pic3_title'=>'無料ダウンロードはまだビジネスライセンスを取得する機会があります',
//画像3タイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'wslide_pic3_url'=>'#',
//図3リンク先[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
    'wslide_pic4'=>'/images/slide/banner09.jpg',
//画像4アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'wslide_pic4_title'=>'ネットワーク建設会社とスタジオを歓迎します',
//図4のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'wslide_pic4_url'=>'#',
//図4リンク先[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
    'wslide_pic5'=>'/images/slide/banner10.jpg',
//画像5の住所[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'wslide_pic5_title'=>'サービス/アフターサービス/プログラムの多重アップグレード',
//図5のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'wslide_pic5_url'=>'#',
//図5リンク先[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
//}
//slide-携帯の画面切り替え画像{
    'wapcslide_width'=>'300',
//スライドの幅[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドの表示幅を設定します。" /></span>]
    'wapcslide_height'=>'440',
//スライドの高さ[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドの表示高さを設定します。" /></span>]
    'wapcslide_number'=>'2',
//スライドの数[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドの数を5以下に設定します。" /></span>]
    'wapcslide_pic1'=>'/images/slide/banner06.jpg',
//画像1アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'wapcslide_pic1_title'=>'企業のネットマーケティングを助力する',
//画像1のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'wapcslide_pic1_url'=>'#',
//図1リンク先[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
    'wapcslide_pic2'=>'/images/slide/banner07.jpg',
//画像2アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'wapcslide_pic2_title'=>'海の美しいテンプレートは無料でダウンロードできます',
//画像2のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'wapcslide_pic2_url'=>'#',
//図2リンク先[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
    'wapcslide_pic3'=>'/images/slide/banner08.jpg',
//画像3アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'wapcslide_pic3_title'=>'無料ダウンロードはまだビジネスライセンスを取得する機会があります',
//画像3タイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'wapcslide_pic3_url'=>'#',
//図3リンク先[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
    'wapcslide_pic4'=>'/images/slide/banner09.jpg',
//画像4アドレス[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'wapcslide_pic4_title'=>'ネットワーク建設会社とスタジオを歓迎します',
//図4のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'wapcslide_pic4_url'=>'#',
//図4リンク先[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
    'wapcslide_pic5'=>'/images/slide/banner10.jpg',
//画像5の住所[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライド写真をアップロードします。" /></span>]=>image
    'wapcslide_pic5_title'=>'サービス/アフターサービス/プログラムの多重アップグレード',
//図5のタイトル[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="スライドのタイトルを記入してください。" /></span>]
    'wapcslide_pic5_url'=>'#',
//図5リンク先[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="画像をアップロードしてください！" /></span>]
//}
//sms-携帯メール{
    'sms_explain'=>'',
//使用説明
    'sms_username'=>'',
//ユーザ名[<a href=http://pay.cmseasy.cn/reg.php target=_blank  class=btn-navy-sms>登録する</a>]
    'sms_password'=>'',
//パスワード[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ショートメッセージのプラットフォーム登録時に記入したパスワードを入力してください。" /></span>]
    'sms_on'=>'0',
//短信开关[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="メール通知機能をオンにするかどうかを設定します。" /></span>]radio=>1/オン/0/オフ
    'sms_keyword'=>'',
//替换非法字符[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="屏蔽内容メッセージの不正な文字を設定し、複数の文字を英字コンマで区切ってください。" /></span>]
    'sms_maxnum'=>'100',
//最大送信[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="毎日送る最大件数！" /></span>]
    'sms_reg_on'=>'0',
//登録送信[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ユーザー登録後に、歓迎メールを送るかどうかを設定します。" /></span>]radio=>1/はい/0/いいえ
    'sms_guestbook_on'=>'0',
//メッセージ送信[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="お客様のメッセージを確認してから、お客様にメッセージを確認するように設定します。" /></span>]radio=>1/はい/0/いいえ
    'sms_order_on'=>'0',
//注文書送付=>1/はい/0/いいえ
    'sms_form_on'=>'0',
//フォーム送信[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="お客様のメッセージを確認した後、フォームの内容を確認するためにお客様に送信するかどうかを設定します。" /></span>]radio=>1/はい/0/いいえ
    'sms_guestbook_admin_on'=>'0',
//メッセージを確認する[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="お客様がメッセージを確認したら、管理者に通知を送りますか？" /></span>]radio=>1/はい/0/いいえ
    'sms_form_admin_on'=>'0',
//フォームの確認[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="お客様がフォームを確認したら、管理者に通知を送信しますか" /></span>]radio=>1/はい/0/いいえ
    'sms_order_admin_on'=>'0',
//注文を確認する[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="お客様は注文を確認した後、管理者に通知を送りますか" /></span>]radio=>1/はい/0/いいえ
    'sms_consult_admin_on'=>'0',
//携帯の相談する[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ページの底の右側の懸濁メッセージの問い合わせを開けますか" /></span>]radio=>1/はい/0/いいえ
//}
//sms-メールの管理{
    'sms_manage'=>'',
//メールの管理
//}
//verification-認証コード{
    'verifycode'=>'0',
//有効にするかどうか[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ウェブサイトの検証コードを有効にするかどうかを設定します。" /></span>]radio=>0/オフ/1/文字/2/パズル
    'pic_enable_info'=>'',
    //ヒント
    'gee_id'=>'08ec7f91e55890d35e8e2d5aceee8291',
//GEETEST_ID[<a href=https://account.geetest.com/register  class=btn-navy-sms>登録する</a>]
    'gee_key'=>'a70cbb24908448dbc6609e44ae50d16f',
//GEETEST_KEY[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="GEETEST_KEY！" /></span>]
    'mobilechk_enable_info'=>'',
    //ヒント
    'mobilechk_enable'=>'0',
//携帯の認証コード[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="携帯電話の認証コード機能をオンまたはオフにします。" /></span>]radio=>0/オフ/1/オン
    'mobilechk_admin'=>'0',
//バックグラウンド認証[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="メッセージ認証機能のオン/オフ" /></span>]radio=>0/オフ/1/オン
    'mobilechk_reg'=>'0',
//登録携帯認証[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="登録した携帯電話の認証コード機能をオンまたはオフにします。" /></span>]radio=>0/オフ/1/オン
    'mobilechk_login'=>'0',
//携帯電話に登録して検証する[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="ログインした携帯電話の認証コード機能をオンまたはオフにします。" /></span>]radio=>0/オフ/1/オン
    'mobilechk_buy'=>'0',
//携帯電話購入の検証[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="携帯電話の購入確認コード機能のオン/オフ" /></span>]radio=>0/オフ/1/オン
    'mobilechk_form'=>'0',
//フォーム携帯認証[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="カスタムフォーム携帯認証コード機能のオン/オフ" /></span>]radio=>0/オフ/1/オン
    'mobilechk_comment'=>'0',
//コメント携帯認証[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="コメントをオンまたはオフにする携帯電話の認証コード機能" /></span>]radio=>0/オフ/1/オン
    'mobilechk_guestbook'=>'0',
//メッセージ携帯認証[<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="メッセージを開くか、または閉じるための携帯電話の認証コード機能" /></span>]radio=>0/オフ/1/オン
//}
    'xiongzhang_appid'=>'1605975412301600',//熊手丸APPID
    'xiongzhang_token'=>'iRTpqKUmo082HtX0',//熊手丸TOKEN
    'lang_open'=>'1',//多语言开关  1/开/0/关
);