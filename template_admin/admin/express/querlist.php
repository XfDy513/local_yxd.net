<div class="main-right-box">
    <h5>{lang_admin('view_logistics_orders')}</h5>
    <div class="blank20"></div>
    <div class="box" id="box">
	<form method="post" name="form1" action=""  onsubmit="return returnform(this);">

    <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('logistics_document_number')}：</div>
    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
    <font color="red">{$logisticCode}</font>
    </div>
    </div>
    <div class="clearfix blank20"></div>

    <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('logistics_information')}：</div>
    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
        <font>{$str}</font>
    </div>
    </div>
    <div class="clearfix blank20"></div>


        <div class="blank30"></div>
        <div class="line"></div>
        <div class="blank30"></div>
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=express&act=index&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-success">{lang_admin('return')}</a>
    <!--<input type="submit" name="submit" value="提交" class="btn btn-primary"/>-->

    </form>

        <div class="blank30"></div>
    </div>
</div>
