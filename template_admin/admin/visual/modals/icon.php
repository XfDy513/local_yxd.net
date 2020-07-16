<div class="modal fade" id="icon-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
                                <i class="glyphicon glyphicon-remove"></i>
				</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">
				{lang_admin('icon_manage')}
				</h4>
			</div>
			<div class="modal-body">

                <div class="sidebar-nav-margin-input icon-config form-inline">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#icon-config-attribute" aria-controls="icon-config-attribute" role="tab" data-toggle="tab">
                                {lang_admin('attribute')}
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#icon-config-position" aria-controls="icon-config-position" role="tab" data-toggle="tab">
                                {lang_admin('position')}
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#icon-config-margin" aria-controls="icon-config-margin" role="tab" data-toggle="tab">
                                {lang_admin('margin')}
                            </a>
                        </li>

                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- 属性 -->
                        <div role="tabpanel" class="tab-pane active" id="icon-config-attribute">
                            <div class="blank20">
                            </div>
                            <h5 class="tab_1_h5">
                                {lang_admin('select_icons')}
                            </h5>
                            <input type="text" class="selector" id="cb_iconfont" name="cb_iconfont"/>
                            <div class="blank20">
                            </div>
                            <h5 class="tab_1_h5">
                                {lang_admin('icon_size')}
                            </h5>
                            <input type="input" name="font-size" id="font-size" value="" class="config">
                            PX
                            <button id="btn_clsFontZize" class="btn btn-default">
                                <i class="glyphicon-remove glyphicon" title="{lang_admin('delete')}">
                                </i>
                            </button>
                            <div class="blank20">
                            </div>
                            <h5 class="tab_1_h5">
                                {lang_admin('icon_color')}
                            </h5>
                            <div class="input-group" style="width: 200px" id="color_Icon">
                                <input type="text" class="form-control">
                                <div class="input-group-btn">
                                    <button class="btn btn-default color_addion">
                                        <i class="glyphicon glyphicon-adjust">
                                        </i>
                                    </button>
                                    <button id="btn_clsIconColor" class="btn btn-default">
                                        <i class="glyphicon-remove glyphicon" title="{lang_admin('delete')}">
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- 定位 -->
                        <div role="tabpanel" class="tab-pane" id="icon-config-position">
                            <div class="blank20">
                            </div>
                            <h5 class="tab_1_h5">
                                {lang_admin('float')}
                            </h5>
                            <div class="icon-float">
                                <a href="#" rel="none" title="{lang_admin('default')}">
                                    {lang_admin('default')}
                                </a>

                                &nbsp;
                                <a href="#" rel="left" title="左">
                                    {lang_admin('be_at_the_left_side')}
                                </a>
                                &nbsp;
                                <a href="#" rel="right" title="{lang_admin('absolute')}">
                                    {lang_admin('be_at_the_right')}
                                </a>
                                &nbsp;
                                <a href="#" rel="inherit" title="{lang_admin('inherit')}">
                                    {lang_admin('inherit')}
                                </a>
                                &nbsp;
                            </div>
                            <div class="blank20">
                            </div>
                            <h5 class="tab_1_h5">
                                {lang_admin('eliminate')}
                            </h5>
                            <div class="div-clear">
                                <a href="#" rel="none" title="{lang_admin('default')}">
                                    {lang_admin('default')}
                                </a>
                                &nbsp;
                                <a href="#" rel="both" title="{lang_admin('eliminate')}">
                                    {lang_admin('eliminate')}
                                </a>
                                &nbsp;
                                <a href="#" rel="left" title="{lang_admin('be_at_the_left_side')}">
                                   {lang_admin('be_at_the_left_side')}
                                </a>
                                &nbsp;
                                <a href="#" rel="right" title="{lang_admin('be_at_the_right')}">
                                    {lang_admin('be_at_the_right')}
                                </a>
                                &nbsp;
                                <a href="#" rel="inherit" title="{lang_admin('inherit')}">
                                    {lang_admin('inherit')}
                                </a>
                                &nbsp;
                            </div>
                            <div class="blank20">
                            </div>
                            <h5 class="tab_1_h5">
                                {lang_admin('position')}
                            </h5>
                            <div class="div-text-typesetting icon-position">
                                <a href="#" rel="static" title="{lang_admin('default')}">
                                    static
                                </a>
                                &nbsp;
                                <a href="#" rel="absolute" title="{lang_admin('absolute')}">
                                    absolute
                                </a>
                                &nbsp;
                                <a href="#" rel="fixed" title="{lang_admin('absolute')}">
                                    fixed
                                </a>
                                &nbsp;
                                <a href="#" rel="relative" title="{lang_admin('relative')}">
                                    relative
                                </a>
                                &nbsp;
                                <a href="#" rel="inherit" title="{lang_admin('inherit')}">
                                    inherit
                                </a>
                                &nbsp;
                            </div>
                            <div class="blank20">
                            </div>
                            <h5 class="tab_1_h5">
                                {lang_admin('z_index')}
                            </h5>
                            <div class="blank10">
                            </div>
                            Z-index：
                            <input type="input" name="z-index" id="z-index" value="" class="config">
                            <div class="blank20">
                            </div>
                            <h5 class="tab_1_h5">
                                {lang_admin('positions')}
                            </h5>
                            <div class="row">
                                <div class="col-md-6">
                                    {lang_admin('top')}：
                                    <input type="input" name="top" id="top" value="0" class="config">
                                    PX
                                </div>
                                <div class="col-md-6">
                                    {lang_admin('bottom')}：
                                    <input type="input" name="bottom" id="bottom" value="0" class="config">
                                    PX
                                </div>
                                <div class="clearfix blank10">
                                </div>
                                <div class="col-md-6">
                                   {lang_admin('left')}：
                                    <input type="input" name="left" id="left" value="0" class="config">
                                    PX
                                </div>
                                <div class="col-md-6">
                                    {lang_admin('right')}：
                                    <input type="input" name="right" id="right" value="0" class="config">
                                    PX
                                </div>
                            </div>
                        </div>
                        <!-- 定位 -->
                        <!-- 外边距 -->
                        <div role="tabpanel" class="tab-pane" id="icon-config-margin">
                            <div class="blank20">
                            </div>
                            <h5 class="tab_1_h5">
                                {lang_admin('padding')}
                            </h5>
                            <div class="row">
                                <div class="col-md-6">
                                    {lang_admin('top')}：
                                    <input type="input" name="padding-top" id="padding-top" value="0" class="config">
                                    PX
                                </div>
                                <div class="col-md-6">
                                    {lang_admin('bottom')}：
                                    <input type="input" name="padding-bottom" id="padding-bottom" value="0" class="config">
                                    PX
                                </div>
                                <div class="clearfix blank10">
                                </div>
                                <div class="col-md-6">
                                   {lang_admin('left')}：
                                    <input type="input" name="padding-left" id="padding-left" value="0" class="config">
                                    PX
                                </div>
                                <div class="col-md-6">
                                    {lang_admin('right')}：
                                    <input type="input" name="padding-right" id="padding-right" value="0" class="config">
                                    PX
                                </div>
                            </div>
                            <div class="blank30">
                            </div>
                            <h5 class="tab_1_h5">
                                {lang_admin('margin')}
                            </h5>
                            <div class="row">
                                <div class="col-md-6">
                                    {lang_admin('top')}：
                                    <input type="input" name="margin-top" id="margin-top" value="0" class="config">
                                    PX
                                </div>
                                <div class="col-md-6">
                                    {lang_admin('bottom')}：
                                    <input type="input" name="margin-bottom" id="margin-bottom" value="0" class="config">
                                    PX
                                </div>
                                <div class="clearfix blank10">
                                </div>
                                <div class="col-md-6">
                                   {lang_admin('left')}：
                                    <input type="input" name="margin-left" id="margin-left" value="0" class="config">
                                    PX
                                </div>
                                <div class="col-md-6">
                                    {lang_admin('right')}：
                                    <input type="input" name="margin-right" id="margin-right" value="0" class="config">
                                    PX
                                </div>
                            </div>
                        </div>
                        <!-- 外边距 -->

                    </div>
                </div>
				
			</div>
			<div class="blank30"></div>
				<div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{lang_admin('close')}</button>
                </div>
		</div>
	</div>
</div>

<script type="text/javascript">
    var iconHandel = $('.body');

    function closeModel(id){
        $('#'+id).modal('hide');
    }

    $(document).ready(function () {
        // alert($('#download-layout').html());

        $('body.edit .visual-right').on("click", "[data-target='#icon-config']", function (e) {
            e.preventDefault();
			iconHandel = $(this).parent().parent().parent().parent().find('.view .visual-ico');
            //console.log(iconHandel);
            //contenthandle.setData(eText);
			//console.log(iconHandel);

			$('.icon-config #padding-top').val(parseInt(iconHandel.css('padding-top')));
            $('.icon-config #padding-bottom').val(parseInt(iconHandel.css('padding-bottom')));
            $('.icon-config #padding-left').val(parseInt(iconHandel.css('padding-left')));
            $('.icon-config #padding-right').val(parseInt(iconHandel.css('padding-right')));

            $('.icon-config #margin-top').val(parseInt(iconHandel.css('padding-top')));
            $('.icon-config #margin-bottom').val(parseInt(iconHandel.css('padding-bottom')));
            $('.icon-config #margin-left').val(parseInt(iconHandel.css('padding-left')));
            $('.icon-config #margin-right').val(parseInt(iconHandel.css('padding-right')));


			//定位
            _top = isNaN(parseInt(iconHandel.css('top'))) ? '' : parseInt(iconHandel.css('top'));
            _bottom = isNaN(parseInt(iconHandel.css('bottom'))) ? '' : parseInt(iconHandel.css('bottom'));
            _left = isNaN(parseInt(iconHandel.css('left'))) ? '' : parseInt(iconHandel.css('left'));
            _right = isNaN(parseInt(iconHandel.css('right'))) ? '' : parseInt(iconHandel.css('right'));
			$('.icon-config #top').val(_top);
            $('.icon-config #bottom').val(_bottom);
            $('.icon-config #left').val(_left);
            $('.icon-config #right').val(_right);


            $('.icon-config #font-size').val(parseInt(iconHandel.css('font-size')));
			$('.div-config #btn_clsFontZize').on('click', function(event) {
                $(this).parent().parent().find('input').val('');
                currLayoutDiv.css('font-size','');
            });
			$('.icon-config #z-index').val(iconHandel.zIndex());

			$('.icon-config .icon-position a').removeClass("on");
            $('.icon-config .icon-position').find("[rel="+iconHandel.css('position')+"]").addClass("on");

			$('.icon-config .icon-float a').removeClass("on");
            $('.icon-config .icon-float a').find("[rel="+iconHandel.css('float')+"]").addClass("on");

			$('.icon-config .icon-display a').removeClass("on");
			$('.icon-config .icon-display').find("[rel="+iconHandel.css('display')+"]").addClass("on");

			

            $('.icon-config #href').val(iconHandel.attr('href'));
            $('.icon-config #text').val(iconHandel.text());
           
	
        });

		$('.icon-config #color_Icon').colorpicker({
            component:'.color_addion'
        });


        $('.icon-config #color_Icon').on('changeColor', function(event) {
            iconHandel.css('color', event.color.toString());
        });

        $('.icon-config #btn_clsIconColor').on('click', function(event) {
            $(this).parent().parent().find('input').val('');
            iconHandel.css('color','');
        });



        $('.icon-config .config').keyup(function(){
            iconHandel.css($(this).attr('name'), $(this).val() + 'px');
            //setConfig();
        });
		


		//z-index
        $('.icon-config #z-index').keyup(function(){
            iconHandel.css('z-index', $(this).val());
        });


		//float
		$(".icon-config").delegate(".icon-float a", "click", function (e) {
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            iconHandel.css('float',$(this).attr("rel"));
        });

		//display
		$(".icon-config").delegate(".icon-display a", "click", function (e) {
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            iconHandel.css('display',$(this).attr("rel"));
        });

		//position
        $(".icon-config").delegate(".icon-position a", "click", function (e) {
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            iconHandel.css('position',$(this).attr("rel"));
        });


        /*$('#cb_iconfont').on('change', function() {
            //console.log($(this).find('span'));
            $('#icon-config').modal('hide');
            var iconToChange = $(this).find('.selected-icon'),
                //iconToChange = nextSpan.find('.selected_icon'),
                selectedIcon = $(this).val();
            console.log(iconToChange);
            console.log(selectedIcon);
            iconHandel.html('<i class="'+iconToChange.find('i').attr('class')+'"></i>');
        });*/
    });
</script>


