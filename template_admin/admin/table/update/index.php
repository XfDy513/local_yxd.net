
<style type="text/css">
    .modal-backdrop {display:none;position: relative;}
    .tbl{margin:8px 0px 0px;border:1px solid #ddd;border-top:0;overflow:hidden;text-align:left;}
    .tbl_tbmax{ margin:5px 0; background:#fff; }
    .tbl_tbbox{ margin:5px 5px; padding:5px 0px;}

    .tbl_hr{padding:2px 0px;color:#666;font-weight:normal;}
    .tbl_hr{border-top:1px solid #ddd;margin:0px 0px 0px;padding:5px 5px 5px 15px;font-weight:bold;color:#333;font-size:14px;background:#f7f7f7;line-height:2;}
    .tbl_hr .hr_right{float:right;}
    .tbl_hr .tips{font-weight:normal;padding-left:20px;color:#999;}
    .tbl h3.v52fmbx_hr:first-child{border-top:1px solid #ddd;}
    .tbl_submit{ border-bottom:1px solid #ddd;border-top:1px solid #ddd;padding:5px 5px 5px 10px;}
    .showmoreset-btn{float: right;}
    .showmoreset-content{display: none;}

    .product_index{overflow:visible!important;}
    .tbl dl:after{display:block;clear:both;content:"";visibility:hidden;height:0;}
    .tbl dl{width:100%;zoom:1;background:#fff;}
    .tbl dl{border-top:1px solid #ddd;margin:0px 0px;display:-webkit-box;display:-moz-box;display:box;display:-ms-flexbox;position:relative;padding:5px 0px;}
    .tbl dl dt{margin:15px 15px 10px 15px;width:105px;color:#333;text-align:left;font-weight:normal;overflow:hidden;line-height:1.2;}
    .tbl dl dd{color:#aaa;-moz-box-flex:1.0;-webkit-box-flex:1.0;box-flex:1.0;-ms-flex:1;padding:2px 0px 0px 15px;margin:10px 0px;}
    .tbl dl dd label input{position:relative;top:1px;margin-right:3px;}
    .tbl dl dd .fbox{color:#aaa;color:#656565;}
    .tbl dl dd .tips{color:#aaa;}
    .tbl dl dd .tips:hover{color:#f00;}
    .tbl dl dd.labelinline label{display:inline;}
    .tbl dl dt.addimgdt{padding:10px 5px 10px;}
    .tbl dl dt.addimgdt p{height:30px;line-height:30px;margin-bottom:8px;}
    .tbl dl.noborder{border-bottom:0;}
    .formerror{margin-top:6px;height:20px;line-height:20px;}
    .formerror .fa-times{color:#fff;border-radius:3px;padding:1px 2px;font-size:16px;margin-right:5px;background:red;}
    .formerror .fa-check{color:#fff;border-radius:3px;padding:2px;font-size:14px;margin-right:5px;background:#10aa00;}
    .formerrorbox{border:2px solid #f00!important;}
    .tbl dl dd.ftype_description{color:#fff;padding:8px;margin:0px 5px;background:#6c6fbf;}
    .noborder a.lsblogin{display:inline-block;float:left;margin-left:200px;width:100px;white-space:nowrap;text-indent:-12px;line-height:34px;margin-top:-35px;}
    .noborder a.lsblogin:hover{color:#fff;}
    .lsbwarning{color:red;line-height:34px;}
    .newver {color:#3ca1ef;}
    .tbl a {color:#aaa;}

</style>
<?php if($row['err'] == 0) { ?>
    <!-- Button trigger modal -->
    <script type="text/javascript">
        var patch_size = 0;
        var i = 0;

        function repeat(str, num){
            return new Array( num + 1 ).join( str );
        }

        function getsize(){
            /*$.get('<?php echo url('update/getsize');?>',function(res){
            console.log(res);
        });*/
            $('.newver').html("<?php echo lang_admin('download_don_t_refresh');?>"+repeat('.',i));
            i++;
            if(i > 3) i = 0;
        }
        function start_down(url){
            var ct = window.setInterval('getsize()',1000);
            $.getJSON('<?php echo url('update/downfile');?>',{'url':url},function(res){
                clearInterval(ct);
                if(res['err'] == '0'){
                    $('.newver').html(res['data']);
                    window.location.href ="{url('index/index')}";
                   // gotoinurl("<?php echo url('update/index');?>");
                }else {
                    $('.newver').html(res['data']);
                    gotoinurl("<?php echo url('update/index');?>");
                }
            });
        }

        $(function () {
            $('#btn_update').click(function(){
                $('#myModalupdate').modal('hide');
                $('.newver').html("<?php echo lang_admin('ready_to_start_updating');?>");
                $.getJSON('<?php echo url('update/getfile');?>',{code:<?php echo $row['data']['code'];?>},function(res){
                    if(res['err'] == '2' || res['err'] == '1' || res['err'] == '3'){
                        $('.newver').html(res['data']);
                    }else if(res['err'] == '0'){
                        patch_size = res['size'];
                        start_down(res['data']['url']);
                    }else{
                        $('.newver').html("<?php echo lang_admin('unknown_error');?>");
                    }
                });
            });
        });

    </script>
<?php } ?>
<script>
    function showmymodalupdate(){
        $('#myModalupdate').find("h5").html("{$row['data']['name']}");
        $('#myModalupdate').find("p").html($("#content_div").text());
        $('#myModalupdate').find("h8").html("{lang_admin('time')} {$row['data']['addtime']}");
        $('#myModalupdate').modal('show');
    }
</script>
<div style="display: none;" id="content_div">{nl2br($row['data']['content'])}</div>

<div class="main-right-box">
    <h5><?php echo lang_admin('online_upgrade');?></h5>
    <div class="blank20"></div>
    <div class="box" id="box">



        <div class="tbl" data-version="6.0.0">
            <h3 class="tbl_hr"><?php echo lang_admin('edition');?></h3>
            <dl>
                <dt><?php echo lang_admin('detection_update');?></dt>
                <dd>
<span class="newver">
                <?php
                if($row['err'] == '0'){
                    echo lang_admin('update_to').$row['data']['name'];
                    echo ' <a style="cursor: pointer;padding:3px 10px;background:#3ca1ef;color:white;"   onclick="showmymodalupdate()" class="upload_download btn btn-steeblue btn-xs">' . lang_admin('online_upgrade') . '</a>';
                }elseif ($row['err'] == '2' || $row['err'] == '1' || $row['err'] == '3'){
                    echo $row['data'];
                }else{
                    echo lang_admin('unknown_error');
                }
                ;?></span>
                </dd>
            </dl>
            <?php if(session::get('ver') != 'corp'){ ?>
                <dl>
                    <dt><?php echo lang_admin('name');?></dt>
                    <dd><?php echo lang_admin('software_name');?></dd>
                </dl>
            <?php } ?>
            <dl>
                <dt><?php echo lang_admin('edition');?></dt>
                <dd><?php echo _VERSION;?></dd>
            </dl>
            <?php if(session::get('ver') != 'corp'){ ?>
                <dl>
                    <dt><?php echo lang_admin('journal');?></dt>
                    <dd>
                        <a href="#" onclick="gotourl(this)"   data-dataurl="https://www.cmseasy.cn/log/" target="_blank"><?php echo lang_admin('see');?></a>
                    </dd>
                </dl>
                <dl>
                    <dt><?php echo lang_admin('copyright');?></dt>
                    <dd>
                        <a href="#" onclick="gotourl(this)"   data-dataurl="https://www.cmseasy.cn/" target="_blank"><?php echo lang_admin('software_company');?></a>
                    </dd>
                </dl>
            <?php } ?>
            <h3 class="tbl_hr"><?php echo lang_admin('server_information');?></h3>
            <dl>
                <dt><?php echo lang_admin('operating_system');?></dt>
                <dd><?php echo php_uname('s');?> <?php echo php_uname('v');?></dd>
            </dl>
            <dl>
                <dt><?php echo lang_admin('web_server');?></dt>
                <dd><?php echo $_SERVER['SERVER_SOFTWARE'];?></dd>
            </dl>
            <dl>
                <dt><?php echo lang_admin('php_version');?></dt>
                <dd>PHP<?php echo PHP_VERSION;?></dd>
            </dl>
            <dl>
                <dt><?php echo lang_admin('database_version');?></dt>
                <dd><?php echo config::getadmin('database','type').'MySQL'.$dbversion;?></dd>
            </dl>
        </div>
        <div class="blank30"></div>
    </div>
</div>


