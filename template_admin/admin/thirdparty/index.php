<style type="text/css">
    .main-right-box {min-height:auto;}
    #frm1 .main-right-box .form-control {border-radius: 0px;}
    .textarea-wrap {min-height:188px;}
</style>
<script id="autolinenumber" src="{$base_url}/common/plugins/auto-line-number/auto-line-number.js"></script>




<form name="frm1" id="frm1" action="{url('thirdparty/save')}" method="post" onsubmit="return returnform(this);">
    <div class="main-right-box">
        <h5>{lang_admin('header_code')}</h5>
        <div class="blank20"></div>
        <div class="box" id="box">
            <div class="alert alert-danger alert-dismissible" role="alert" style="margin-right:29px;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <span class="glyphicon glyphicon-warning-sign"></span>	 {lang_admin('third_party_code_a')}<br>header.html  &lt;body&gt; {lang_admin('front_join')}  &#123;template 'common/plugins/public/header-js.html'&#125;；
            </div>
            <div class="form-group">
                <textarea class="form-control" style="min-height: 188px;" id="header" name="header" >{loop $header $head} {$head}{/loop}</textarea>
            </div>
        </div>
    </div>
    <div class="blank20"></div>
    <div class="main-right-box">
        <h5>{lang_admin('bottom_code')}</h5>
        <div class="blank20"></div>
        <div class="box" id="box">
            <div class="alert alert-danger alert-dismissible" role="alert" style="margin-right:29px;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <span class="glyphicon glyphicon-warning-sign"></span>	 {lang_admin('third_party_code_a')}<br>footer.html &lt;/body&gt;{lang_admin('front_join')} &#123;template 'common/plugins/public/foot-js.html'&#125;
            </div>
            <div class="form-group">
                <textarea class="form-control" style="min-height: 188px;" id="foot" name="foot">{loop $foot $fot} {$fot}{/loop}</textarea>
            </div>
        </div>
    </div>
    <div class="blank20"></div>

    <div class="blank20"></div>
    <div class="form-group">
        <input  name="dosubmit" value="1" type="hidden">
        <input class="btn btn-primary btn-lg" type="submit" value="{lang_admin('preservation')}">
    </div>
</form>
<script type="text/javascript">
    $("#frm1 .main-right-box .form-control").setTextareaCount({
        width: "30px",
        bgColor: "#eee",
        color: "#333",
        display: "inline-block"
    });
</script>