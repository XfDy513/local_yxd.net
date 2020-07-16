<style type="text/css">
    .main .main-right-box {
        position: absolute;
        top:130px;
        right:30px;
        left:30px;
        bottom:30px;
    }
</style>
<div class="main-right-box">
    <h5>{lang_admin('edit_form')}</h5>
    <div class="blank20"></div>
    <div class="box" id="box">

        <script type="text/javascript">
            function checkform(obj) {
                if($("#template").val()=="")
                {
                    alert('请选择模板');
                    $("#template").focus();
                    return false;
                }
                returnform(obj);
                return  false;
            }
        </script>

        <input type="button" name="Submit" value="{lang_admin('return')}" class="btn btn-secondary" onclick="gotourl(this)"   data-dataurl="{url('form/listform')}">
        <div class="blank30"></div>
        <div class="line"></div>
        <div class="blank30"></div>

        <form method="post" action="{uri()}" name="form1" id="form1" onsubmit="return checkform(this);">

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('name')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <?php  $langdata=lang::getlang();
                    if(is_array($langdata)){
                        foreach ($langdata as $key=>$value){
                            $newcname='cname_'.$value['langurlname'];
                            ?>
                            <input class="form-control" name="{$newcname}" id=" {$newcname}" value="{=@setting::$var[$table]['myform'][$newcname]?setting::$var[$table]['myform'][$newcname]:get($newcname)}" placeholder="{$value['langname']}"  onblur="form_preview()"/>
                            <div class="blank10"></div>
                        <?php    }
                    }
                    ?>
                </div>
            </div>
            <div class="clearfix blank20"></div>


            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('table_name')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <b>{$table}</b>
                    <input type="hidden"  name="name" id="name" value="{$table}" class="form-control" />
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('template')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    {form::select('template',@setting::$var[$table]['myform']['template']?setting::$var[$table]['myform']['template']:get('template'),front::$view->myform_tpl_list())}
                </div>
            </div>
            <div class="clearfix blank20"></div>


            <div class="blank30"></div>
            <div class="line"></div>
            <div class="blank30"></div>
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"></div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <input  name="submit" value="1" type="hidden">
                    <input type="submit"   value=" {lang_admin('submitted')} " class="btn btn-primary btn-lg" />
                </div>
            </div>
        </form>
        <div class="blank30"></div>
    </div>
</div>
