<div class="main-right-box">
    <h5>{lang_admin('express_bird_settings')}</h5>
    <div class="blank20"></div>
    <div class="box" id="box">

        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=express&act=index&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-secondary">{lang_admin('return_list')}</a>

        <div class="blank30"></div>
        <div class="line"></div>
        <div class="blank30"></div>

        <script language="javascript" src="{$base_url}/common/js/common.js"></script>

        <form method="post" name="form1" action=""   onsubmit="return returnform(this);">
            <input type="hidden" name="onlymodify" value=""/>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('e_commerce_id')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    {form::getform('ebusinessid',$form,$field,$data)}
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="电商ID！"></span>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('e_commerce_encryption_private_key')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    {form::getform('appkey',$form,$field,$data)}
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('e_commerce_encryption_private_key_courier_bird_provide_pay_attention_to_storage_do_not_leak_commerce_encryption_private_key')}"></span>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('request_url')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    {form::getform('requrl',$form,$field,$data)}
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('express_bird_requests_url')}"></span>
                </div>
            </div>
            <div class="clearfix blank20"></div>



            <div class="blank30"></div>
            <div class="line"></div>
            <div class="blank30"></div>
            <input  name="submit" value="1" type="hidden">
            <input type="submit"    value="{lang_admin('submitted')}" class="btn btn-primary" />
        </form>

        <div class="blank30"></div>
    </div>
</div>


