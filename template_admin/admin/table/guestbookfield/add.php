<style type="text/css">
    #message {position: relative;top:0;left:0;}
</style>

<div class="main-right-box">
    <h5>{lang_admin('custom_fields')}</h5>
    <div class="blank20"></div>
    <div class="box" id="box">
        <input type="button" name="Submit" value="{lang_admin('return')}" class="btn btn-primary" onclick="gotourl(this)"   data-dataurl="{url('table/list/table/guestbookfield')}">
        <div class="blank30"></div>
        <div class="line"></div>
        <div class="blank30"></div>

        <script type="text/javascript">
            function checktovarchar() {
                if($("#selecttype").val()=='0') {
                    $(".varchar2").show("slow");
                    $(".select2").hide("slow");
                    $("#type").attr('value','varchar');
                }
            }

            function checktoselect() {

            if($("#type").val()=='0') {
                $(".select2").show("slow");
                $(".varchar2").hide("slow");
                $("#selecttype").attr('value','select');
            }
            }

            function form_preview() {
            if($("#type").val()=='0') {
            //$('#form_preview').html(get('form1').cname.value+'：<input name="'+get('form1').name.value+'" size="'+get('form1').len.value+'">');

            if($("#selecttype").val()=='select') {
            select='<select name="'+$("#name").val()+ '">';
            subject=$("#fieldvalue_cn").val();
            var myregexp = /\(([\d\w]+)\)(\S+)/mg;
            var match = myregexp.exec(subject);
            while (match != null) {
            select += '<option value="'+match[1]+'">'+match[2]+'</option>';
            match = myregexp.exec(subject);
            }
            select +='</select>';
            }
            else {
            select='';
            subject=$("#fieldvalue_cn").val();
            var myregexp = /\(([\d\w]+)\)(\S+)/mg;
            var match = myregexp.exec(subject);
            while (match != null) {

            if($("#selecttype").val()=='checkbox')
            select += match[2]+'<input type="checkbox" value="'+match[1]+'" name="'+$("#name").val()+ '[]">&nbsp;&nbsp;';
            else
            select += match[2]+'<input type="radio" value="'+match[1]+'" name="'+$("#name").val()+ '">&nbsp;&nbsp;';
            match = myregexp.exec(subject);
            }
            }

            $('#form_preview').html(select);
            $('#form_preview_title').html($("#showname").val());
            $('#form_preview_tips').html($("#message").val());
            }
            }

            function checkform1() {
            if(!$('#isshoping')[0].checked){
            if ($('#leng').val().length==0 || $('#leng').val()==undefined || $('#leng').val()==''){
            alert("{lang_admin('length_cannot_be_empty')}");
            return  false;
            }
            }
            $('#select_preview').html('');
            $("#type").val($("#selecttype").val());
            return true;
            }

            </script>


            <form method="post" name="form1" action="<?php if(front::$act=='edit') $id="/id/".$data[$primary_key]; else $id=''; echo modify("/act/".front::$act."/table/".$table.$id);?>"
                  onsubmit="return returnform(this);">

                <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('field_name')}</div>
            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                {form::getform('name',$form,$field,$data)}
                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('must_fill_in')}"></span>
                </div>
                </div>

                <div class="row field-input-blank">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('chinese_name_in_field')}</div>
            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                 <?php  $langdata=lang::getlang();
                    if(is_array($langdata)){
                        foreach ($langdata as $key=>$value){
                            $newshowname='showname_'.$value['langurlname'];
                            ?>
                            <input class="form-control" name="{$newshowname}" id="{$newshowname}" value="{$data['showname'][$newshowname]}" placeholder="{$value['langname']}"  onblur="form_preview()"/>
                        <?php    }
                    }
                    ?>
                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('must_fill_in')}"></span>
                </div>
                </div>
                <div class="row field-input-blank">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('tips')}</div>
            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                <?php  $langdata=lang::getlang();
                    if(is_array($langdata)){
                        foreach ($langdata as $key=>$value){
                            $newmessage='message_'.$value['langurlname'];
                            ?>
                            <input class="form-control" name="{$newmessage}" id="{$newmessage}" value="{$data['message'][$newmessage]}" placeholder="{$value['langname']}"  onblur="form_preview()"/>
                        <?php    }
                    }
                    ?>
                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('must_fill_in')}"></span>
                </div>
                </div>
                <div class="clearfix blank20"></div>

                <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('is_it_necessary_to_fill_in')}</div>
            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                {form::getform('isnull',$form,$field,$data)}
                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('must_fill_in')}"></span>
                </div>
                </div>
                <div class="clearfix blank20"></div>

                <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('whether_to_display')}</div>
            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                {form::getform('isshow',$form,$field,$data)}
                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('must_fill_in')}"></span>
                </div>
                </div>
                <div class="clearfix blank20"></div>


                <div  class="varchar2" >
                <div class="row" id="typeshow">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('mold')}</div>
            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                <select name="type" id="type" onchange="checktoselect(); form_preview();" class="form-control select">
                <option value="int" <?php echo $data['type']=='int'?'selected':''?>>{lang_admin('integer')}</option>
            <option value="varchar" <?php echo $data['type']=='varchar'?'selected':''?>>{lang_admin('one_line_text')}</option>
            <option value="text" <?php echo $data['type']=='text'?'selected':''?>>{lang_admin('multi_line_text')}</option>
            <option value="mediumtext" <?php echo $data['type']=='mediumtext'?'selected':''?>>{lang_admin('hypertext')}</option>
            <option value="datetime" <?php echo $data['type']=='datetime'?'selected':''?>>{lang_admin('date')}</option>
            <option value="_image" <?php echo $data['type']=='image'?'selected':''?>>{lang_admin('picture')}</option>
            <option value="_file" <?php echo $data['type']=='file'?'selected':''?>>{lang_admin('attachment')}</option>
            <option value="0">[{lang_admin('selection_class')}]</option>
            </select>
            </div>
            <div class="clearfix blank20"></div>
                </div>



                <div class="row"  id="lengshow">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('length')}</div>
            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                <input class="form-control" name="leng" id="leng" value="0"  onblur="form_preview()"/>
                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('please_enter_the_value')}"></span>
                </div>
                <div class="clearfix blank20"></div>
                </div>


                </div>

                <div class="select2" style="display:none">
                <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('mold')}</div>
            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                <select name="selecttype"  id="selecttype" onchange="checktovarchar(); form_preview();" class="form-control select">
                <option value="radio" <?php echo  $data['type']=='radio'?'selected':''?>>{lang_admin('monopoly')}</option>
            <option value="checkbox" <?php echo$data['type']=='checkbox'?'selected':''?>>{lang_admin('multi_selection')}</option>
            <option value="select" <?php echo$data['type']=='select'?'selected':''?>>{lang_admin('dropdown_selection_line_text')}</option>
            <option value="0">[{lang_admin('non_selective_classes')}]</option>
            </select>
            </div>
            </div>
            <div class="clearfix blank20"></div>


                <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('option_selective_classes')}</div>
            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">

                 <?php  $langdata=lang::getlang();
                        if(is_array($langdata)){
                            foreach ($langdata as $key=>$value){
                                $newfieldvalue='fieldvalue_'.$value['langurlname'];
                                ?>
                                {$value['langname']}:{form::textarea($newfieldvalue,$data['fieldvalue'][$newfieldvalue],' rows="6" cols="40" onblur="form_preview();" ')}
                            <?php    }
                        }
                        ?>
                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('item_per_line_format__value__item_such_as_1_very_good')}"></span>
                </div>
                </div>
                <div class="clearfix blank20"></div>
                </div>


            <div class="select2" style="display:none" id="select_preview">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('preview')}</div>
                    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<span id="form_preview_title">
</span>&nbsp;
                        <span id="form_preview">
</span>
                        <span id="form_preview_tips">&nbsp;&nbsp;
</span>
                    </div>
                </div>
                <div class="clearfix blank20"></div>
            </div>



            <script type="text/javascript">
                var type='{$data["type"]}';
                if( type=='radio' || type=='checkbox'  || type=='select' ){
                    $(".select2").show("fast");
                    $(".varchar2").hide("fast");
                    $("#selecttype").attr('value','{=$data["type"]}');
                    $("#type").val('0');
                    form_preview();
                }else{
                    $("#selecttype").val('0');
                }

            </script>



            <div class="blank30"></div>
            <div class="line"></div>
            <div class="blank30"></div>
                <input  name="submit" value="1" type="hidden">
                <input type="submit"  value=" {lang_admin('submitted')} " class="btn btn-primary btn-lg" />

        </form>


        <div class="blank30"></div>
    </div>
</div>
</div>