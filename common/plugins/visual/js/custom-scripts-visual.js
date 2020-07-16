/*------------------------------------------------------
    Author : www.webthemez.com
    License: Commons Attribution 3.0
    http://creativecommons.org/licenses/by/3.0/
---------------------------------------------------------  */

(function ($) {
    "use strict";
    

    $(document).ready(function () {
		$(".dropdown-button").dropdown();
		$("#visual-left-btn").click(function(){
			if($(this).hasClass('closed')){
				$('.visual-left').animate({left: '-280px'});
				$(this).removeClass('closed');
				$('#visual-right').animate({'margin-left' : '0px'});
				$('#visual-top').animate({'margin-left' : '50px'});
				$('#visual-bottom').animate({'margin-left' : '50px'});
				$('#visual-left-btn').animate({left: '50px'});

			}
			else{
			    $(this).addClass('closed');
				$('.visual-left').animate({left: '0px'});
				$('#visual-left-btn').animate({left: '330px'});
				$('#visual-right').animate({'margin-left' : '280px'});
				$('#visual-top').animate({'margin-left' : '330px'});
				$('#visual-bottom').animate({'margin-left' : '330px'});
			}
		});

		$(".nav-tabs-a a").click(function(){
			if(!$("#visual-left-btn").hasClass('closed')){
				$("#visual-left-btn").addClass('closed');
				$('.visual-left').animate({left: '0px'});
				$('#visual-left-btn').animate({left: '330px'});
				$('#visual-right').animate({'margin-left' : '280px'});
				$('#visual-top').animate({'margin-left' : '330px'});
				$('#visual-bottom').animate({'margin-left' : '330px'});
			}
		});

		//层属性打开
		$('body.edit .visual-right').on("click","[data-target='#div-config']",function(e) {
			//边栏收缩
			if($("#visual-left-btn").hasClass('closed')){
				$('.visual-left').animate({left: '-280px'});
				$("#visual-left-btn").removeClass('closed');
				$('#visual-right').animate({'margin-left' : '0px'});
				$('#visual-top').animate({'margin-left' : '50px'});
				$('#visual-bottom').animate({'margin-left' : '50px'});
				$('#visual-left-btn').animate({left: '50px'});

			}
		});
		//栏目打开
		$('body.edit .visual-right').on("click","[data-target='#template-category-tag']",function(e) {
			//边栏收缩
			if($("#visual-left-btn").hasClass('closed')){
				$('.visual-left').animate({left: '-280px'});
				$("#visual-left-btn").removeClass('closed');
				$('#visual-right').animate({'margin-left' : '0px'});
				$('#visual-top').animate({'margin-left' : '50px'});
				$('#visual-bottom').animate({'margin-left' : '50px'});
				$('#visual-left-btn').animate({left: '50px'});

			}
		});
		//商品栏目打开
		$('body.edit .visual-right').on("click","[data-target='#template-category-shop-tag']",function(e) {
			//边栏收缩
			if($("#visual-left-btn").hasClass('closed')){
				$('.visual-left').animate({left: '-280px'});
				$("#visual-left-btn").removeClass('closed');
				$('#visual-right').animate({'margin-left' : '0px'});
				$('#visual-top').animate({'margin-left' : '50px'});
				$('#visual-bottom').animate({'margin-left' : '50px'});
				$('#visual-left-btn').animate({left: '50px'});

			}
		});
		//内容打开
		$('body.edit .visual-right').on("click","[data-target='#template-content-tag']",function(e) {
			//边栏收缩
			if($("#visual-left-btn").hasClass('closed')){
				$('.visual-left').animate({left: '-280px'});
				$("#visual-left-btn").removeClass('closed');
				$('#visual-right').animate({'margin-left' : '0px'});
				$('#visual-top').animate({'margin-left' : '50px'});
				$('#visual-bottom').animate({'margin-left' : '50px'});
				$('#visual-left-btn').animate({left: '50px'});

			}
		});
		//商品内容打开
		$('body.edit .visual-right').on("click","[data-target='#template-content-shop-tag']",function(e) {
			//边栏收缩
			if($("#visual-left-btn").hasClass('closed')){
				$('.visual-left').animate({left: '-280px'});
				$("#visual-left-btn").removeClass('closed');
				$('#visual-right').animate({'margin-left' : '0px'});
				$('#visual-top').animate({'margin-left' : '50px'});
				$('#visual-bottom').animate({'margin-left' : '50px'});
				$('#visual-left-btn').animate({left: '50px'});

			}
		});
    });

	//$(".dropdown-button").dropdown();
	
}(jQuery));
