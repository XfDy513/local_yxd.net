<style type="text/css">
    a.btn-warning:hover {
        background:#ec971f;
        margin:0px;
    }

</style>
<script>

    //状态选中
    $("#static").val("{$data['static']}");

    function checkform(obj) {
        if(!$("#email").val()) {
            alert("{lang('please_fill_in_the_mailbox')}");
            $("#email").focus();
            return false;
        }
        if(!$("#companyname").val()) {
            alert("{lang('please_in_companyname')}");
            $("#companyname").focus();
            return false;
        }
        if(!$("#socialcode").val()) {
            alert("{lang('please_in_socialcode')}");
            $("#socialcode").focus();
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

                <div class="user-content-table-nav">
                    <ul>
                        <li><a href="#" class="active">申请发票</a></li>
                    </ul>
                </div>
                <div class="blank30"></div>

                <div class="user-content">
                    <form method="post" name="form" action="{uri()}" enctype="multipart/form-data" onsubmit="return checkform(this);">

                        <div class="form-group">
                            <label>发票编号</label>
                            <input type="text" value="{$data['oid']}" disabled="disabled" autocomplete="off" aria-label="{$data['oid']}" class="form-control ">
                            <input type="hidden" value="{$data['oid']}" name="oid"  >
                        </div>

                        <div class="form-group">
                            <label>发票金额</label>
                            <input type="text" value="{$data['menoy']}" disabled="disabled"  autocomplete="off" aria-label="开票金额" class="form-control ">
                            <input type="hidden" value="{$data['menoy']}" name="menoy"  >
                        </div>

                        <div class="form-group">
                            <label>发票项目</label>
                            <input type="text" value="{$data['project']}"   disabled="disabled" autocomplete="off" aria-label="技术服务" class="form-control ">
                            <input type="hidden" value="{$data['project']}" name="project"  >
                        </div>

                        <div class="form-group">
                            <label>邮箱 [必填]</label>
                            <input type="text" value="{$data['email']}" id="email"  name="email" placeholder="用于接收发票" autocomplete="off" class="form-control ">
                        </div>

                        <div class="form-group">
                            <label>公司名称 [必填]</label>
                            <input type="text" value="{$data['companyname']}" id="companyname" name="companyname" placeholder="执照上公司全称，填写名称须与执照上名称一致！" autocomplete="off" class="form-control ">
                        </div>

                        <div class="form-group">
                            <label>统一社会信用代码 [必填]</label>
                            <input type="text" value="{$data['socialcode']}"  id="socialcode" name="socialcode" placeholder="执照上统一社会信用代码，填写名称须与执照上名称一致！" autocomplete="off" class="form-control ">
                        </div>

                        <div class="form-group">
                            <label>单位地址</label>
                            <input type="text" value="{$data['address']}" name="address" placeholder="" autocomplete="off" class="form-control ">
                        </div>
                        <div class="form-group">
                            <label>电话</label>
                            <input type="text" value="{$data['tel']}" name="tel" placeholder="" autocomplete="off" class="form-control ">
                        </div>

                        <div class="form-group">
                            <label>开户行</label>
                            <input type="text" value="{$data['bankname']}" name="bankname" placeholder="" autocomplete="off" class="form-control ">
                        </div>
                        <div class="form-group">
                            <label>账号</label>
                            <input type="text" value="{$data['banekcode']}" name="banekcode" placeholder="" autocomplete="off" class="form-control ">
                        </div>

                        <div class="form-group">
                            <label>备注</label>
                            <textarea class="form-control" name="remark" rows="3">{$data['remark']}</textarea>
                        </div>

                        <div class="form-group">
                            <label>状态</label>
                            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                                <select id="static" name="static" class="form-control">
                                    <option value="0" selected>{lang_admin('no_check')}</option>
                                    <option value="1" >{lang_admin('yes_check')}</option>
                                    <option value="2" >{lang_admin('yes_ture')}</option>
                                    <option value="3" >{lang_admin('is_off')}</option>
                                </select>
                            </div>
                        </div>
                        <div class="blank30"></div>
                        <input  name="submit" value="1" type="hidden">
                        <input type="submit" name="submit" value="提交" class="btn btn-primary btn-lg">
                    </form>

                    <div class="blank30"></div>

                </div>
            </div>
        </div>
    </div>
    <div class="blank30"></div>