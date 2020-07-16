<!-- 组件 -->
<div class="lyrow visual-drag-box box-element">
    <span class="drag label btn-group drag-container">
        <button type="button" class="btn btn-black"><i class="icon-grid"></i></button>
        <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
        <ul class="dropdown-menu btn-black-dropdown-menu">
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
            <li><a title="{lang_admin('atlas_settings')}" data-target="#picturesModel" role="button" data-toggle="modal"><i class="glyphicon glyphicon-picture"></i>{lang_admin('atlas_settings')}</a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
        </ul>
    </span>
	<div class="preview">
		<img src="{$base_url}/common/plugins/visual/images/section/pictures.png">
		<p>{lang_admin('custom_atlas')}</p>
	</div>
	<div class="view">
	<div class="visual-pictures">
		<div id="myCarousel" class="carousel slide">
			<!-- 轮播（Carousel）指标 -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- 轮播（Carousel）项目 -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="{$base_url}/common/plugins/visual/images/modules/section-pic-1.jpg" class="img-responsive">
					<div class="carousel-caption">
						<h1>标题</h1>
						<p>文字</p>
						<a href="#" onclick="gotourl(this)"   data-dataurl="{get('slide_pic1_url')}" target="_blank" class="btn btn-primary">更多</a>
					</div>
				</div>
				<div class="item">
					<img src="{$base_url}/common/plugins/visual/images/modules/section-pic-2.jpg" class="img-responsive">
					<div class="carousel-caption">
						<h1>标题</h1>
						<p>文字</p>
						<a href="#" onclick="gotourl(this)"   data-dataurl="{get('slide_pic1_url')}" target="_blank" class="btn btn-primary">更多</a>
					</div>
				</div>
				<div class="item">
					<img src="{$base_url}/common/plugins/visual/images/modules/section-pic-3.jpg" class="img-responsive">
					<div class="carousel-caption">
						<h1>标题</h1>
						<p>文字</p>
						<a href="#" onclick="gotourl(this)"   data-dataurl="{get('slide_pic1_url')}" target="_blank" class="btn btn-primary">更多</a>
					</div>
				</div>
			</div>
			<!-- 轮播（Carousel）导航 -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			</div>
		</div>
	</div>
</div>
<!-- 组件结束 -->