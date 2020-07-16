/*-----------------------------------------------------------------------------------
/* Styles Switcher
-----------------------------------------------------------------------------------*/

window.console = window.console || (function(){
	var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile = c.clear = c.exception = c.trace = c.assert = function(){};
	return c;
})();


jQuery(document).ready(function($) {

		// Layout Switcher
		$(".boxed" ).click(function(){
			$("#layout" ).attr("href", "css/boxed.css" );
			return false;
		});

		$("#layout-switcher").on('change', function() {
			$('#layout').attr('href', $(this).val() + '.css');
		});;

		
		// Style Switcher	
		$('#style-switcher').animate({
			right: '-288px'
		});
		
		$('#style-switcher h2 a').click(function(e){
			e.preventDefault();
			var div = $('#style-switcher');
			console.log(div.css('right'));
			if (div.css('right') === '-288px') {
				$('#style-switcher').animate({
					right: '0px'
				}); 
			} else {
				$('#style-switcher').animate({
					right: '-288px'
				});
			}
		});
		
		$('.colors li a').click(function(e){
			e.preventDefault();
			$(this).parent().parent().find('a').removeClass('active');
			$(this).addClass('active');
		});

		//���ص�ʱ�����
		$('.sidebar').css('backgroundImage',getCookie("sidebar_backgroundImage"));
		$('.bg li a').click(function(e){
			e.preventDefault();
			$(this).parent().parent().find('a').removeClass('active');
			$(this).addClass('active');
			var bg = $(this).css('backgroundImage');
			$('.sidebar').css('backgroundImage',bg);
			Setcookie("sidebar_backgroundImage", bg);//�浽cookie
		});

	//���ص�ʱ�����
	$('.sidebar-bg').css('backgroundImage',getCookie("sidebar-bg_backgroundImage"));
		$('.bgsolid li a').click(function(e){
			e.preventDefault();
			$(this).parent().parent().find('a').removeClass('active');
			$(this).addClass('active');
			var bg = $(this).css('backgroundImage');
			$('.sidebar-bg').css('backgroundImage',bg)
			Setcookie("sidebar-bg_backgroundImage", bg);//�浽cookie
		});
		
		$('#reset a').click(function(e){
			var bg = $(this).css('backgroundImage');
			$('.sidebar').css('backgroundImage','url(./common/plugins/switcher/images/bg/01.jpg)');
			$('.sidebar-bg').css('backgroundImage','linear-gradient(45deg, #333, #000)')
		})
			

	});


function Setcookie (name, value) {
	//��������Ϊname,ֵΪvalue��Cookie
	var expdate = new Date();   //��ʼ��ʱ��
	expdate.setTime(expdate.getTime() + 30 * 60 * 1000 * 999);   //ʱ�䵥λ����
	document.cookie = name + "=" + value + ";expires=" + expdate.toGMTString() + ";path=/";

	//��document.cookie= name+"="+value+";path=/";  ʱ��Ĭ��Ϊ��ǰ�Ự���Բ�Ҫ����·��Ҫ��д����ΪJS��Ĭ��·���ǵ�ǰҳ����������cookieֻ�ڵ�ǰҳ����Ч��
}
function getCookie(c_name) {
//�ж�document.cookie���������Ƿ����cookie
	if (document.cookie.length > 0) {
		c_start = document.cookie.indexOf(c_name + "=")
		//���document.cookie����������cookie������Ƿ���ָ����cookie��������򷵻�ָ����cookieֵ�����û���򷵻ؿ��ַ���
		if (c_start != -1) {
			c_start = c_start + c_name.length + 1
			c_end = document.cookie.indexOf(";", c_start)
			if (c_end == -1) c_end = document.cookie.length
			return unescape(document.cookie.substring(c_start, c_end))
		}
	}
	return "";
}

