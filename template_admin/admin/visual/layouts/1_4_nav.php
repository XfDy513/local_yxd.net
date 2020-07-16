<div class="lyrow position-move container-fluid-box ui-draggable box-layout clearfix">
    <span class="drag label container-box-menu">
        <ul>
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i></a></li>
            <li><a title="{lang_admin('move_up')}" class="div-up"><i class="glyphicon glyphicon-arrow-up"></i></a></li>
            <li><a title="{lang_admin('move_down')}" class="div-down"><i class="glyphicon glyphicon-arrow-down"></i></a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i></a></li>
        </ul>
    </span>
    <div class="preview">
        <img src="{$base_url}/common/plugins/visual/images/section/nav.png">
        <p>{lang_admin('container_fluid_nav')}</p>
    </div>
    <div class="view">
        <nav class="column navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">#[#get('sitename')#]#</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="box box-element box-pic ui-draggable navbar-brand">
				<span class="drag label btn-group drag-container">
					<button type="button" class="btn btn-black"><i class="icon-grid"></i></button>
					<button type="button" class="btn btn-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
					<ul class="dropdown-menu btn-black-dropdown-menu">

						<li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
					</ul>
				</span>
                        <div class="preview">
                            <img src="{$base_url}/common/plugins/visual/images/section/logo.png">
                            <p>{lang_admin('picture')}</p>
                        </div>
                        <div class="view">
                            <div class="row" style="float: left;">
                                <div class="codearea">
                                    <a href="#[#$base_url#]#" class="navbar-brand text-center"><img src="#[#get('site_logo')#]#" class="img-responsive" alt="#[#get('sitename')#]#" /></a>
                                </div>
                                <div class="viewarea">
                                    <a href="#[#$base_url#]#/" class="navbar-brand text-center"><img src="{$base_url}/common/plugins/visual/images/section/logo.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav" rel="nav(1)">
                    {nav(1)}
                </div>
            </div>
        </nav>
    </div>
</div>