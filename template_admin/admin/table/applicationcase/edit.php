
<style type="text/css">
    a.btn-warning:hover {
        background:#ec971f;
        margin:0px;
    }

</style>
<script>
    //状态选中
    $("#statu").val("{$data['statu']}");

    function checkform(obj) {
        if(!$("#qq").val()) {
            alert("{lang('pinput')}{lang('lang_qq')}");
            $("#qq").focus();
            return false;
        }
        if(!$("#webname").val()) {
            alert("{lang('please_in_webname')}");
            $("#webname").focus();
            return false;
        }
        if(!$("#ip").val()) {
            alert("{lang('ip_nonull')}");
            $("#ip").focus();
            return false;
        }
        returnform(obj);
        return false;
    }

</script>
<div class="index-bg">
    <div class="container">
        <div class="section2">

            <div class="row">

                <form method="post" name="form" action="{uri()}" enctype="multipart/form-data" onsubmit="return checkform(this);">

                    <div class="index-title">
                        <h4>申请案例</h4>
                    </div>

                    <div class="user-content">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <span class="glyphicon glyphicon-warning-sign"></span>	 <strong>为什么加入 CmsEasy 官网案例？</strong>
                            <div class="blank10"></div>
                            <p>1、更多人点击，更多的展示机会，有利于SEO；</p>
                            <p>2、CmsEasy的用户遍及全国各地（甚至全球），且以中小企业为主，这其中一定包含着您的潜在客户！</p>
                        </div>


                        <div class="blank30"></div>

                        <div class="form-group">
                            <label>QQ [必填]</label>
                            <input type="text" value="{$data['qq']}" name="qq" id="qq" placeholder="用于联系QQ" autocomplete="off" class="form-control ">
                        </div>

                        <div class="form-group">
                            <label>网站名称 [必填]</label>
                            <input type="text" value="{$data['webname']}"  name="webname" id="webname" placeholder="填写网站名称须与网站打开实际名称一致！" autocomplete="off" class="form-control ">
                        </div>

                        <div class="form-group">
                            <label>域名 [必填]</label>
                            <input type="text" value="{$data['ip']}" name="ip" id="ip" placeholder="网站访问域名！" autocomplete="off" class="form-control ">
                        </div>

                        <div class="form-group">
                            <label>备注</label>
                            <textarea class="form-control" name="remark" rows="3">{$data['remark']}</textarea>
                        </div>

                        <div class="form-group">
                            <label>状态</label>
                            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                                <select id="statu" name="statu" class="form-control">
                                    <option value="0" selected>{lang_admin('no_check')}</option>
                                    <option value="1" >{lang_admin('yes_check')}</option>
                                    <option value="2" >{lang_admin('yes_ture')}</option>
                                    <option value="3" >{lang_admin('is_off')}</option>
                                </select>
                            </div>
                        </div>
                        <input  name="submit" value="1" type="hidden">
                        <input type="submit"   value="提交" class="btn btn-primary btn-lg">

                    </div>

                </form>

                <div class="blank30"></div>

            </div>
        </div>
    </div>
</div>
<div class="blank30"></div>
</div>
