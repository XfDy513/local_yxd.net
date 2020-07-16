
<div class="main-right-box">
    <h5>{lang_admin('editorial_category')}</h5>
    <div class="blank20"></div>
    <div class="box edit-category" id="box">


        <style type="text/css">
            
            
            @media(max-width:468px) {
                input#title {width:100%;}
                .edit-category .text-left {margin:0px; padding:0px 5px;}
            }
            span.hotspot {float:right; padding-left:10px;}
        </style>


        <?php $root = config::getadmin('base_url').'/ueditor';?>
        <script type="text/javascript" charset="utf-8" src="{$root}/ueditor.config.js"></script>
        <script type="text/javascript" charset="utf-8" src="{$root}/ueditor.all.min.js"> </script>
        <script type="text/javascript" charset="utf-8" src="{$root}/lang/zh-cn/zh-cn.js"></script>
        <script type="text/javascript" charset="utf-8" src="{$root}/addCustomizeButton.js"></script>

        <form method="post" name="form1" action="{url('qiniuyunoss/setting')}"  onsubmit="return returnform(this);"  >
            <input type="hidden" name="onlymodify" value=""/>

            <script type="text/javascript" src="{$base_url}/common/js/upimg/dialog.js"></script>
            <link href="{$skin_admin_path}/css/dialog.css" rel="stylesheet" type="text/css" />



            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">云oss_accessKey</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    {form::getform('oss_accessKey',$form,$field,$data)}
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('top_level_type_can_be_skipped')}">
</span>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">云oss_secretKey</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    {form::getform('oss_secretKey',$form,$field,$data)}
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('fill_in_the_type_name')}">
</span>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">外网地址</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    {form::getform('oss_domain',$form,$field,$data)}
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('classify_custom_subheadings')}"></span>
                </div>
            </div>
            <div class="clearfix blank20"></div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">bucket名称</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    {form::getform('oss_bucket',$form,$field,$data)}
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('the_catalogue_must_be_english_name_and_if_left_blank_the_pinyin_name_will_be_used_automatically')}">
</span>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">储存位置</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    {form::getform('oss_setting',$form,$field,$data)}
                  <!--  <select id="oss_setting" name="oss_setting" class="form-control select oss_setting">
                        <option value="0" selected="">仅网站附件目录</option>
                        <option value="1">仅OSS</option>
                        <option value="2">附件与OSS</option>
                    </select>-->
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title=""></span>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="blank30"></div>
            <input  name="submit" value="1" type="hidden">
            <input type="submit" value=" {lang_admin('submitted')} " class="btn btn-primary" />
        </form>
        <div class="blank30"></div>
    </div>
</div>
