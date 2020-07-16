
<?php if($returndata['static']) { ?>


    <style type="text/css">
        .checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {position: relative;}

        .form-horizontal .control-label {padding-top:0px;}
        .text-left {line-height:32px;}
    </style>

    <!-- 授权文件下载 -->
    <div class="modal fade" id="downModal" tabindex="-1" role="dialog" aria-labelledby="downModalLabel" data-backdrop="static" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="downModalLabel"><?php echo lang_admin('download_template');?></h4>
                </div>
                <div class="modal-body">
                    <p><?php echo lang_admin('file_size');?>：<span id="file-size">0</span> Bytes</p>
                    <!-- 进度条 -->
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0"
                             aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                            <span id="imported-progress">0</span>%
                        </div>
                    </div>
                    <p id="statusText"><?php echo lang_admin('download_don_t_refresh');?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-right-box">
        <h5>
            <?php echo lang_admin('license_list');?>
            <span class="pull-right">
                <?php echo $returndata['userdata']['username'];?> | <span style="color:#ff9149">￥<?php echo $returndata['userdata']['menoy'];?></span> |
                <a class="btn btn-primary"  href="#" onclick="gotourl(this)"   data-dataurl="<?php echo url('app/close/buytemplate/1',true);?>" ><?php echo lang_admin('sign_out');?></a>
                <a class="btn btn-success"  href="javascript:void(0);" name="buy_usermenoy" ><?php echo lang_admin('recharge');?></a>
                <a href="#" onclick="gotourl(this)" data-dataurl="<?php echo $base_url;?>/index.php?case=license&act=buylicense&admin_dir=<?php echo get('admin_dir',true);?>&site=default" data-dataurlname="<?php echo lang_admin('purchase_authorization');?>" class="btn btn-danger">
                    <?php echo lang_admin('purchase_authorization');?>
                </a>
                <a class="btn btn-default" href="https://u.cmseasy.cn/index.php?case=user&act=index" target="_blank">
                    <i class="icon-user"></i> <?php echo lang_admin('service_centre');?>
                </a>
            </span>
        </h5>

        <div class="box">

            <hr />
            <div class="blank30"></div>

            <form name="searchform" id="searchform" class="form-inline backstage-search pull-left" action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">
                <input type="text" class="form-control"  placeholder="<?php echo lang_admin('please_enter_bound_domain_name_search');?>" name="search_domain" id="search_domain" value="" />
                <div class="clearfix visible-xs-block"><div class="blank10"></div></div>
                <input  name="submit" value="1" type="hidden">
                <button  type="submit" class="btn btn-default search-btn">
                    <i class="glyphicon glyphicon-search"></i>
                </button>

            </form>
            <div class="blank30"></div>
            <div class="user-content">
                <form name="listform" id="listform"  action="<?php echo uri();?>" method="post"  onsubmit="return returnform(this);">
                    <div class="table-responsive">
                        <table class="table table-hover ">
                            <thead>
                            <tr class="th">
                                <!--<th class="catid">ID</th>-->
                                <th class="catid"><?php echo lang_admin('buy_time') ;?></th>
                                <th class="catid"><?php echo lang_admin('binding_domain_names') ;?></th>
                                <th class="catid"><?php echo lang_admin('username') ;?></th>
                                <!--<th class="catid">服务年限</th>
                                <th class="catid">购买价格</th>-->
                                <th class="catid"><?php echo lang_admin('dosomething') ;?></th>
                            </tr>

                            </thead>
                            <tbody>
                            <?php if(is_array($data))
                                foreach($data as $d) { ?>
                                    <tr class="s_out">
                                        <!--<td class="catid"><?php echo $d['id'];?></td>-->
                                        <td class="catid"><?php echo $d['addtime'];?></td>
                                        <td class="catid"><?php echo $d['domain'];?></td>
                                        <td class="catid"><?php echo user::getusername($d['uid']);?></td>
                                        <!--<td class="catid"><?php echo $d['timelong'];?>年</td>
                               <td class="catid"><?php echo $d['pay'];?></td>-->
                                        <td class="catid">
                                           <!-- <a href="https://u.cmseasy.cn/index.php?case=license&act=getmycd&id=<?php /*echo $d['id'];*/?>" class="btn btn-default">
                                                <?php /*echo lang_admin('download') ;*/?>
                                            </a>-->
                                            <a href="#" onclick="downloadFile(<?php echo $d['id'];?>);" class="btn btn-default">
                                                <?php echo lang_admin('application') ;?>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="blank30"></div>


                </form>


                <div class="page">
                    <nav>
                        <ul class="pagination">
                            <?php if($page>1) { ?>
                                <a href="#" onclick="gotourl(this)"  data-dataurl="<?php echo modify('act/licenselist/page/'.($page-1),true);?>"><?php echo lang_admin('prev_page');?></a>
                            <?php } ?>
                            <?php
                            for ($inxex=1;$inxex<=ceil($allsize/$pagesize);$inxex++){
                                ?>
                                <?php if($inxex==$page) { ?>
                                    <strong><?php echo $inxex;?></strong>
                                <?php } else { ?>
                                    <a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify('act/licenselist/page/'.$inxex,true);?>"><?php echo $inxex;?></a>
                                <?php } ?>

                            <?php    }
                            ?>
                            <?php if($page<ceil($allsize/$pagesize)) { ?>
                                <a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify('act/licenselist/page/'.($page+1),true);?>"><?php echo lang_admin('next_page');?></a>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
                <div class="blank30"></div>
            </div>
        </div>
    </div>


    <div class="blank30"></div>

<?php } else { ?>
<div class="main-right-box">
    <div class="blank20"></div>
    <div class="box">
            <span class="pull-right">
    <a class="btn btn-primary" data-toggle="modal" data-target="#myDownloadfileModal" href="#" ><?php echo lang_admin('login');?></a>
    <a class="btn btn-success"  href="https://u.cmseasy.cn/index.php?case=user&act=register" ><?php echo lang_admin('register');?></a>
            </span>
        <div class="clearfix"></div>
        <hr>
        <div class="blank30"></div>
    </div>
    <?php } ?>

    <script>

        function updateState(progress) {
            $('#statusText').html(progress);
            //$('.progress-bar').css('width', progress+'%').attr('aria-valuenow', progress);
        }


        //安装下载模板
        function downloadFile($f) {
            var file_size = 0;
            var progress = 0;
            var filename = $f;
            console.log("Prepared to download");

            updateState("<?php echo lang_admin('start_downloading_license_files');?>");

            $('#downModal').modal({
                backdrop: 'static',
                keyboard: false
            });

            var def = $.get("<?php echo url('license/down/action/prepare-download',true);?>", {'f': filename}, null, 'json');
            def.then(function (res) {
                console.log(res);
                file_size = res.file_size;
                $('#file-size').html(file_size);
                console.log("started downloading");
                updateState("<?php echo lang_admin('start_downloading_license_files');?>");
                //isdownloading = false;
                //$('#myModal').modal('hide');
                //$('#info_res').html(res.msg);


                url = "<?php echo url('license/down/action/start-download',true);?>";
                promise =  $.get(url,{'f': filename} ,null, 'json');

                var interval_id = window.setInterval(function () {
                    $('#imported-progress').html(progress);
                    $('.progress-bar').css('width', progress + '%').attr('aria-valuenow', progress);
                    if (progress >= 100) {
                        clearInterval(interval_id);
                        // 到此远程文件下载完成，继续其他逻辑
                        updateState("<?php echo lang_admin('download_successful_start_to_install_the_license');?>");
                        $.ajax({
                            url : "<?php echo url('license/down/action/exzip',true);?>",
                            data: {'f': filename},
                            dataType:'json',
                            type : 'GET'
                        }).done(function(res){
                            if(res['code'] === 0){
                                updateState("<?php echo lang_admin('installation_completed_2_seconds_later_jump_to_the_background');?>");
                                setTimeout("window.location.href='<?php echo get('admin_dir',true);?>';",2000);
                            }else{
                                updateState(res['msg']);
                            }
                        }).fail(showAjaxError);
                    } else {
                        $.ajax({
                            url: "<?php echo url('license/down/action/get-file-size',true);?>",
                            data: {'f': filename},
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
                updateState("<?php echo lang_admin('error_occurred');?>"+res.responseText);
                console.error(res);
            }).then(function (json) {
                // set progress to 100 when got the response
                progress = 100;
                console.log("<?php echo lang_admin('download_completed');?>");
                console.log(json);
            }, function (res) {
                updateState("<?php echo lang_admin('preparing');?>"+res.responseText);
                console.error(res);
            });
            return;

            $.ajax({
                url: './download.php?action=prepare-download&f=' + id,
                type: 'GET',
                dataType: 'json',
                beforeSend: function () {
                    var mesg="<?php echo lang_admin('preparing');?>";
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
                            updateState("<?php echo lang_admin('start_extracting_files');?>");
                            $.ajax({
                                url: 'download.php?action=exzip&f=' + f,
                                dataType: 'json',
                                type: 'GET'
                            }).done(function (json) {
                                if (json.rs == 'ok') {
                                    updateState("<?php echo lang_admin('installation_completed_jump_to_the_background');?>");
                                    setTimeout("gotoinurl('<?php echo get('admin_dir',true);?>');", 1000);
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
    </script>
