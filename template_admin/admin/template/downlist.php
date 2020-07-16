



<div class="main-right-box">
    <h5>{lang_admin('template_online')}</h5>
    <div class="blank20"></div>
    <div class="box" >

        {if config::getadmin('template_view')=='0'}

        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <span class="glyphicon glyphicon-warning-sign"></span> {lang_admin('no_more_templates')}<a href="#" onclick="gotourl(this)"   data-dataurl="{url('config/system')}"
                                                                            class="register_btn">{lang_admin('return_list')}</a>
        </div>
        {else}

        <div class="div_tpllist" ><?php echo $tpllist; ?></div>
        <div id="info_res"></div>
        <script type="text/javascript">
            var modeldata="";   //在线模板    服务端获取
            var isdownloading = false;

            function updateProgress(progress) {
                $('#imported-progress').html(progress);
                $('.progress-bar').css('width', progress + '%').attr('aria-valuenow', progress);
            }

            function updateState(progress) {
                $('#statusText').html(progress);
                //$('.progress-bar').css('width', progress+'%').attr('aria-valuenow', progress);
            }

            function showAjaxError(XMLHttpRequest, textStatus, errorThrown) {
                console.log('ajax error');
                console.log(XMLHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            }

            function downloadFile($f,isSql) {
                var file_size = 0;
                var progress = 0;
                var filename = $f;

                console.log("Prepared to download");
                updateState("{lang_admin('start_downloading_template_files')}");

                $('#downModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });

                var def = $.get("{url('template/down/action/prepare-download',true)}", {'f': filename, 'sql': isSql}, null, 'json');
                def.then(function (res) {
                    console.log(res);
                    file_size = res.file_size;
                    $('#file-size').html(file_size);
                    console.log("started downloading");
                    updateState("{lang_admin('start_downloading_template_files')}");
                    //isdownloading = false;
                    //$('#myModal').modal('hide');
                    //$('#info_res').html(res.msg);


                    url = "{url('template/down/action/start-download',true)}";
                    promise =  $.get(url,{'f': filename, 'sql': isSql} ,null, 'json');

                    var interval_id = window.setInterval(function () {
                        $('#imported-progress').html(progress);
                        $('.progress-bar').css('width', progress + '%').attr('aria-valuenow', progress);
                        if (progress >= 100) {
                            clearInterval(interval_id);
                            // 到此远程文件下载完成，继续其他逻辑
                            updateState("{lang_admin('download_successful_start_to_install_the_template')}");
                            $.ajax({
                                url : "{url('template/down/action/exzip',true)}",
                                data: {'f': filename, 'sql': isSql},
                                dataType:'json',
                                type : 'GET'
                            }).done(function(res){
                                if(res['code'] === 0){
                                    updateState("{lang_admin('installation_completed_2_seconds_later_jump_to_the_background')}");
                                    setTimeout("gotoinurl('{get('admin_dir',true)}');",2000);
                                }else{
                                    updateState(res['msg']);
                                }
                            }).fail(showAjaxError);
                        } else {
                            $.ajax({
                                url: "{url('template/down/action/get-file-size',true)}",
                                data: {'f': filename, 'sql': isSql},
                                dataType: 'json',
                                type: 'get'
                            }).done(function (json) {
                                //console.log("Progress: "+json);
                                //console.log("Progress: "+json.size);
                                //console.log("Progress: "+file_size);
                                progress = (json.size / file_size * 100).toFixed(2);
                                updateProgress(progress);
                                console.log("Progress: " + progress);
                            }).fail(showAjaxError);
                        }
                    }, 999);


                    return promise;
                }, function (res) {
                    updateState("{lang_admin('error_occurred')}"+res.responseText);
                    console.error(res);
                }).then(function (json) {
                    // set progress to 100 when got the response
                    progress = 100;
                    console.log("{lang_admin('download_completed')}");
                    console.log(json);
                }, function (res) {
                    updateState("{lang_admin('preparing')}"+res.responseText);
                    console.error(res);
                });
                return;

                $.ajax({
                    url: './download.php?action=prepare-download&f=' + f,
                    type: 'GET',
                    dataType: 'json',
                    beforeSend: function () {
                        var mesg="{lang_admin('preparing')}";
                        var data='<i class="fa fa-spinner fa-spin"></i> '+mesg;
                        $('#update-button').html(data).prop('disabled', 'disabled');
                    },
                })
                    .done(function (json) {
                        console.log(json);

                        file_size = json.file_size;

                        $('#file-size').html(file_size);

                        // 显示进度条

                        console.log("started downloading");
                        $.ajax({
                            url: './download.php?action=start-download&f=' + f,
                            type: 'GET',
                            //timeout : 1000, //超时时间设置，单位毫秒
                            dataType: 'json'
                        }).done(function (json) {
                            // set progress to 100 when got the response
                            progress = 100;

                            console.log("Downloading finished");
                            console.log(json);
                        }).fail(showAjaxError);

                        var interval_id = window.setInterval(function () {

                            $('#imported-progress').html(progress);
                            $('.progress-bar').css('width', progress + '%').attr('aria-valuenow', progress);

                            if (progress >= 100) {
                                clearInterval(interval_id);

                                // 到此远程文件下载完成，继续其他逻辑
                                updateState("{lang_admin('start_extracting_files')}");
                                $.ajax({
                                    url: 'download.php?action=exzip&f=' + f,
                                    dataType: 'json',
                                    type: 'GET'
                                }).done(function (json) {
                                    if (json.rs == 'ok') {
                                        updateState("{lang_admin('installation_completed_jump_to_the_background')}");
                                        setTimeout("gotoinurl('{get('admin_dir',true)}');", 1000);
                                    } else {
                                        updateState(rs);
                                    }
                                }).fail(showAjaxError);
                            } else {
                                $.ajax({
                                    url: './download.php?action=get-file-size&f=' + f,
                                    dataType: 'json',
                                    type: 'GET'
                                })
                                    .done(function (json) {
                                        //console.log("Progress: "+json);
                                        //console.log("Progress: "+json.size);
                                        //console.log("Progress: "+file_size);
                                        progress = (json.size / file_size * 100).toFixed(2);

                                        updateProgress(progress);

                                        console.log("Progress: " + progress);
                                    })
                                    .fail(showAjaxError);
                            }

                        }, 999);

                    }).fail(showAjaxError);
            }

            $(function () {
                $('#template-list a.btn_template').click(function (e) {
                    var templatename = $(this).data('rel');
                    //$('#downModal').modal('show');
                    //return false;
                    //console.log(a);
                    if (!isdownloading) {
                        $('#info_res').html('');

                        //校验是否登陆
                        $.ajax({
                            type: "get",
                            url: "{url('app/jklogin',true)}",
                            dataType: 'json',
                            async: true,
                            success: function (data) {
                                if(data.static==0){
                                    //打开服务器登录弹出框
                                    $('#myDownloadfileModal').modal('show');
                                    $(".box").attr("style","display: none");
                                }else{
                                    //登陆成功则获取购买的 模板
                                    modeldata=data['modeldata'];
                                    //判断是否有权限购买
                                    var buystatic=false;
                                    if(modeldata.length>0){
                                        for (var index in modeldata)
                                        {
                                            if(templatename==modeldata[index]['buyid']){
                                                buystatic=true;
                                            }
                                        }
                                    }
                                    if(!buystatic){
                                        //无安装权限，请先购买！
                                        alert("{lang_admin('not_insertall_plesss_buy')}");
                                        return false;
                                    }
                                    if (confirm("{lang_admin('do_you_confirm_the_download_template')}") && buystatic) {
                                        var isSql = confirm("{lang_admin('whether_to_use_template_builtin_data')}");
                                        downloadFile(templatename,isSql);
                                    }
                                }
                            }
                        });


                    } else {
                        alert("{lang_admin('please_wait_for_the_download_to_complete')}");
                    }
                    return false;
                });
            });
        </script>
        <div class="blank30"></div>
		<nav aria-label="...">
          <ul class="pager">
            <li><a class="prev">{lang_admin('prev_page')}</a></li>
            <li><a class="next">{lang_admin('next_page')}</a></li>
          </ul>
        </nav>
        <div class="blank30"></div>

        {/if}

        <div class="blank30"></div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        //模态框点击登陆
        $('#app_login').click(function(){
            var  app_username=$("#app_username").val();
            var  app_passwrod=$("#app_passwrod").val();
            $.ajax({
                type: "get",
                url: "{url('app/login',true)}",
                data:{'app_username': app_username,"app_passwrod":app_passwrod},
                dataType: 'json',
                async: true,
                success: function (data) {
                    if(data.static==1){
                        //关闭服务器登录弹出框
                        $('#myDownloadfileModal').modal('hide');
                        $(".modal-backdrop.fade").hide();
                        gotoinurl("{url('template/downlist',true)}");
                    }else{
                        alert(data.message);
                    }
                }
            });
        });

    });
</script>

<!-- 校验服务端登陆Modal -->
<div class="modal fade" id="myDownloadfileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></span></button>
                <h4 class="modal-title" id="myModalLabel">{lang_admin('login')}</h4>
            </div>
            <div class="modal-body" >
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon-user"></i></span>
                    <input type="text" name="app_username" id="app_username" value="" class="form-control" placeholder="{lang_admin('account_number')}">
                </div>
                <div class="blank20"></div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon-lock"></i></span>
                    <input type="password" name="app_passwrod" id="app_passwrod" value="" class="form-control" placeholder="{lang_admin('password')}">
                </div>
            </div>
            <div class="modal-footer">
                <span class="pull-left" style="font-size:12px;color:#ccc;">{lang_admin('verify_server_login_tips')}</span>
                <button type="button" id="app_login" class="btn btn-primary">{lang_admin('login')}</button>
                <button type="button" class="btn btn-success" onclick="javascrtpt:window.location.href='https://u.cmseasy.cn/index.php?case=user&act=register'" target="_blank">{lang_admin('register')}</button>
            </div>
        </div>
    </div>
</div>



<!-- 在线模板下载 -->
<div class="modal fade" id="downModal" tabindex="-1" role="dialog" aria-labelledby="downModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="downModalLabel">{lang_admin('download_template')}</h4>
            </div>
            <div class="modal-body">
                <p>{lang_admin('file_size')}：<span id="file-size">0</span> Bytes</p>
                <!-- 进度条 -->
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0"
                         aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                        <span id="imported-progress">0</span>%
                    </div>
                </div>
                <p id="statusText">{lang_admin('download_don_t_refresh')}</p>
            </div>
        </div>
    </div>
</div>

