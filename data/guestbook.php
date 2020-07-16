<?php if(config::get('guestbook_enable')=='1'){?>


    
    <script>
        $(function(){
            $('#frmGuestbookSubmit').submit(function() {
                if($('#nickname').val() == ''){
                    alert("<?php echo lang('please_enter_your_user_name');?>！");
                    $('#nickname').focus();
                    return false;
                }
                if($('#title').val() == ''){
                    alert("<?php echo lang('please_enter_the_title');?>！");
                    $('#title').focus();
                    return false;
                }
                /* if($('#guestemail').val() == ''){
                     $('#guestemail').focus();
                     return false;
                 }
                 function chkEmail(str){
                     regex = /\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\b/gi
                     return regex.test(str);
                 }
                 if(!chkEmail($('#guestemail').val())){
                     $('#guestemail').focus();
                     return false;
                 }
                  if($('#guesttel').val() == ''){
                     $('#guesttel').focus();
                     return false;
                 }
                 if(!chkMobile($('#guesttel').val())){
                     $('#guesttel').focus();
                     return false;
                 }*/
                if($('#content').val() == ''){
                    alert("<?php echo lang('p_content');?>");
                    $('#content').focus();
                    return false;
                }
            });
        });
    </script>

    <form id="frmGuestbookSubmit" method="post" action="<?php echo url('guestbook/index');?>" name="frmGuestbookSubmit" class="form_message guestbook">

        <?php  if(count(cate::option())>0){ ?>
            <div class="form-group">
                <label for="comment"><?php echo lang('type');?></label>
                <select name="catid" id="catid" class="form-control guestbook_select">
                    <?php echo helper::htmlOption(cate::option(),'');?>
                </select>
            </div>
        <?php  } ?>



        <div class="form-group">
            <label for="comment"><?php echo lang('name');?></label>
            <input name="nickname" id="nickname" value="" class="form-control guestbook_input" />
        </div>

        <div class="form-group">
            <label for="comment"><?php echo lang('title');?></label>
            <input type="text" name="title" id="title" value="" class="form-control guestbook_input" />
        </div>



        <!--自定义字段 begin-->
        <?php
        $guestbookfielddata=guestbookfield::getInstance()->getrows(' isshow=1 ',0);
        $newshoename="showname_".lang::getistemplate();
        $newmessage="message_".lang::getistemplate();
        $newfieldvalue="fieldvalue_".lang::getistemplate();
        foreach ($guestbookfielddata as $key=>$val){
            $val['showname'] = unserialize($val['showname']);
            $val['message'] = unserialize($val['message']);
            $val['fieldvalue'] = unserialize($val['fieldvalue']);
            ?>
            <div class="form-group">
                <label for="comment">
                    <?php echo $val['showname'][$newshoename] ?>
                </label>
                <?php
                if($val['type'] == 'varchar'){
                    ?>
                <input name="<?php echo $val['name'] ?>" id="<?php echo $val['name'] ?>" value="" class="form-control guestbook_input" />
                <?php
                }else
                if($val['type'] == 'text' || $val['type'] == 'mediumtext') {
                ?>
                    <textarea name="<?php echo $val['name'] ?>" id="<?php echo $val['name'] ?>" class="guestbook_textarea"></textarea>
                <?php
                }else
                if($val['type'] == 'int'){
                ?>
                <input name="<?php echo $val['name'] ?>" id="<?php echo $val['name'] ?>" onkeyup="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}"
                       onafterpaste="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}"  class="form-control guestbook_input"/>
                <?php
                }else
                if($val['type'] == 'datetime'){
                ?>
                <input type="text" name="<?php echo $val['name'] ?>" id="<?php echo $val['name'] ?>"
                       value="<?php echo date('Y-m-d H:i:s'); ?>" class="form-control hasDatepicker">
                <?php
                }else
                if($val['type'] == 'radio'){
                ?>
                    <span id="form_<?php echo $val['name'] ?>"></span>
                <?php
                $result = preg_split('/[;\r\n]+/s', $val['fieldvalue'][$newfieldvalue]);
                foreach ($result as $resultval){
                ?>
                    <script>
                        select = '';
                        var nameval="<?php echo $val['name'] ?>";
                        subject = "<?php echo $resultval?>";
                        var myregexp = /\(([\d\w]+)\)(\S+)/mg;
                        var match = myregexp.exec(subject);
                        while (match != null) {
                            select += match[2] + '<input type="radio" value="' + match[1] + '" name="' +nameval+ '">&nbsp;&nbsp;';
                            match = myregexp.exec(subject);
                        }
                        $('#form_'+nameval).append(select);
                    </script>
                <?php
                }
                }else
                if($val['type'] == 'checkbox'){
                ?>
                    <span id="form_<?php echo $val['name'] ?>"></span>
                <?php
                $result = preg_split('/[;\r\n]+/s', $val['fieldvalue'][$newfieldvalue]);
                foreach ($result as $resultval){
                ?>
                    <script>
                        select = '';
                        var nameval="<?php echo $val['name'] ?>";
                        subject = "<?php echo $resultval?>";
                        var myregexp = /\(([\d\w]+)\)(\S+)/mg;
                        var match = myregexp.exec(subject);
                        while (match != null) {
                            select += match[2]+'<input type="checkbox" value="'+match[1]+'" name="'+nameval+ '[]">&nbsp;&nbsp;';
                            match = myregexp.exec(subject);
                        }
                        $('#form_'+nameval).append(select);
                    </script>
                <?php
                }
                }else
                if($val['type'] == 'select'){
                ?>
                    <span id="form_<?php echo $val['name'] ?>"></span>
                    <script>
                        var nameval="<?php echo $val['name']; ?>";
                        select='<select name="'+nameval+ '">';
                    </script>
                <?php
                $result = preg_split('/[;\r\n]+/s', $val['fieldvalue'][$newfieldvalue]);
                foreach ($result as $resultval) {
                ?>
                    <script>
                        subject="<?php echo $resultval; ?>";
                        var myregexp = /\(([\d\w]+)\)(\S+)/mg;
                        var match = myregexp.exec(subject);
                        while (match != null) {
                            select += '<option value="'+match[1]+'">'+match[2]+'</option>';
                            match = myregexp.exec(subject);
                        }
                    </script>
                <?php }?>
                    <script>
                        select +='</select>';
                        $('#form_'+nameval).html(select);
                    </script>
                <?php
                }else
                if($val['type'] == 'image'){
                    echo form::upload_image($val['name'],'');
                }else{
                ?>
                <input name="<?php echo $val['name'] ?>" id="<?php echo $val['name'] ?>" value="" class="form-control guestbook_input" />
                <?php };?>
            </div>
        <?php };?>
        <!--自定义字段 end-->

        <div class="form-group">
            <label for="comment">
                <?php echo lang('content');?>
            </label>
            <textarea id="content" name="content" class="form-control guestbook_textarea"></textarea>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="issee" id="issee" value="1" onclick="if(this.checked){this.value=1;}else{this.value=0;};"> <?php echo lang('is_mysee');?>
            </label>
        </div>




        <?php if(config::get('verifycode')=='1'){?>
            <div class="form-group">
                <label>{lang('verifycode')}</label>
                <input type='text' id="verify"  tabindex="3"  name="verify" /><?php echo verify();?>
            </div>
        <?php } ?>


        <?php if(config::get('verifycode') == 2){?>

            <div class="form-group">
                <label>{lang('verifycode')}</label>
                <div id="verifycode_guest"></div>
            </div>
            <script src="http://api.geetest.com/get.php"></script>
            <script>
                var loadGeetest1 = function(config) {
                    window.gt_captcha_obj = new window.Geetest({
                        gt : config.gt,
                        challenge : config.challenge,
                        product : 'float',
                        offline : !config.success
                    });
                    gt_captcha_obj.appendTo("#verifycode_guest");
                };

                $.ajax({
                    url : '<?php echo url('tool/geetest');?>',
                    type : "get",
                    dataType : 'JSON',
                    success : function(result) {
                        //console.log(result);
                        loadGeetest1(result)
                    }
                });
            </script>
        <?php } ?>


        <input type="submit" name="submit" value="<?php echo lang('submit_on');?>" class="guestbook_btn">
    </form>
<?php } ?>
