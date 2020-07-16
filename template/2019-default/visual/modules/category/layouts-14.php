
<!-- 组件单个开始 -->
<div class="lyrow position-move ui-draggable box-layout">
	<span title="上移" class="drag drag-container label label-default div-up"><i class="glyphicon glyphicon-arrow-up"></i></span>
    <span title="下移" class="drag drag-container label label-default div-down"><i class="glyphicon glyphicon-arrow-down">	</i></span>
    <a title="删除" href="#close" class="remove remove-container label label-danger"><i class="glyphicon-remove glyphicon"></i></a>
    <span title="层属性" class="drag drag-container label label-default div-drag" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog" title="Layouts"></i>层属性</span>
    <div class="preview">
		<img src="{$skin_path}/images/visual/modules/layouts-14.jpg" >
		<p>列表页左侧栏目子栏目111</p>
    </div>
	<div class="view">
        <div class="codearea">
			<div class="left2">

				#[#loop categories_nav($topid) $t#]#
				<h4><a title="#[#$t[catname]#]#" href="#[#$t[url]#]#"#[#if $t['catid']==$catid#]# class="on"#[#/if#]#>#[#$t[catname]#]#1</a></h4>

				<p>
				#[#loop categories_nav($t['catid']) $t1#]#
				<a href="#[#$t1['url']#]#" title="#[#$t1['catname']#]#"#[#if $t1['catid']==$catid#]# class="on"#[#/if#]#>#[#$t1['catname']#]#2</a>
				#[#/loop#]#
				</p>

				#[#/loop#]#
			</div>
        </div>
        <div class="viewarea">
			<div class="left2">
				<h4 class="on"><a href="">装修咨询</a></h4>
				<p>
					<a href="">现代风格</a>
					<a href="">现代风格</a>
					<a href="">现代风格</a>
					<a href="">现代风格</a>
				</p>
				<h4><a href="">装修咨询</a></h4>
				<p>
					<a href="">现代风格</a>
					<a href="">现代风格</a>
					<a href="">现代风格</a>
					<a href="">现代风格</a>
				</p>
				<h4><a href="">装修咨询</a></h4>
				<p>
					<a href="">现代风格</a>
					<a href="">现代风格</a>
					<a href="">现代风格</a>
					<a href="">现代风格</a>
				</p>
				<h4><a href="">装修咨询</a></h4>
				<p>
					<a href="">现代风格</a>
					<a href="">现代风格</a>
					<a href="">现代风格</a>
					<a href="">现代风格</a>
				</p>
			</div>
        </div>
    </div>
</div>
<!-- 组件单个结束 -->