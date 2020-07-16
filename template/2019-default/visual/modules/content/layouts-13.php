<!-- 组件单个开始 -->
<div class="lyrow position-move ui-draggable box-layout">
	<span title="上移" class="drag drag-container label label-default div-up"><i class="glyphicon glyphicon-arrow-up"></i></span>
    <span title="下移" class="drag drag-container label label-default div-down"><i class="glyphicon glyphicon-arrow-down">	</i></span>
    <a title="删除" href="#close" class="remove remove-container label label-danger"><i class="glyphicon-remove glyphicon"></i></a>
    <span title="层属性" class="drag drag-container label label-default div-drag" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog" title="Layouts"></i>层属性</span>
    <div class="preview">
		<img src="{$skin_path}/images/visual/modules/layouts-13.jpg" alt="当前栏目标题副标题">
		<p>当前栏目标题副标题</p>
    </div>
	<div class="view">
        <div class="codearea">
			<div class="list-title list-title2">
				<div class="container">
					<p>#[#$category[$catid]['htmldir']#]#</p>
					<h4>#[#$category[$catid]['catname']#]#</h4>
					<span>#[#$category[$catid]['subtitle']#]#</span>
				</div>
			</div>
        </div>
        <div class="viewarea">
			<div class="list-title list-title2">
				<div class="container">
					<p><a>HTMLDIR</a></p>
					<h4><a>栏目标题</a></h4>
					<span>栏目附标题栏目附标题栏目附标题栏目附标题</span>
				</div>
			</div>		
        </div>
    </div>
</div>
<!-- 组件单个结束 -->