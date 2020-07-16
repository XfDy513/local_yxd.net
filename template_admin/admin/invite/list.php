<div class="main-right-box">
    <h5>{lang_admin('invitation_code')}</h5>
    <div class="blank20"></div>
    <div class="box" id="box">
        <form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">
            <div class="row">
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5"  style="display: none">
                    <input name="ctname" type="text" id="ctname" placeholder="{lang_admin('enter_one_user_name')}" class="form-control" value="<?php echo session::get('username');?>" />
                    <input name="num" type="hidden" id="num" value="1" /></div>
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2">
                    <input id="btn_add" type="button" value=" {lang_admin('get_invitation_code')} " class="btn btn-primary" />
                </div>
            </div>
            <div class="clearfix blank30"></div>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr class="th">
                        <th class="s_out"><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox" name="chkall" class="checkbox" /> </th>
                        <th class="htmldir text-center"><!--id-->{lang_admin('id')}</th>
                        <th class="catname"><!--name-->{lang_admin('invitation_code')}</th>
                        <th class="htmldir">{lang_admin('generator')}</th>
                        <th class="htmldir"><!--url-->{lang_admin('generation_time')}</th>
                        <th class="catname"><!--url-->{lang_admin('registrar')}</th>
                        <th class="htmldir text-center"><!--url-->{lang_admin('registration_time')}</th>
                        <th class="catname text-center"><!--url-->{lang_admin('availability')}</th>
                        <th class="manage text-center">{lang_admin('dosomething')}</th>
                    </tr>

                    </thead>
                    <tbody>
                    {loop $data $d}
                    <tr onmouseover="m_over(this)" onmouseout="m_out(this)" lang="0">
                        <td class="s_out"><input onclick="c_chang(this)" type="checkbox" value="{$d['inviteid']}" name="select[]" class="checkbox" /> </td>
                        <td class="htmldir text-center" >{$d['inviteid']}</td>
                        <td class="catname">{$d['invitecode']}</td>
                        <td class="htmldir">{$d['ctname']}</td>
                        <td class="htmldir">{$d['cttime']}</td>
                        <td class="catname">{$d['reguid']}</td>
                        <td class="htmldir text-center">{$d['regtime']}</td>
                        <td class="catname text-center"><?php echo $d['isuse']?'<i class="glyphicon glyphicon-ban-circle"></i>':'<i class="glyphicon glyphicon-ok"></i>';?></td>
                        <td class="manage text-center"><a onclick="if(confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotourl(this);};" href="#"  data-dataurl="<?php echo url('invite/del/id/'.$d['inviteid']);?>" title="{lang_admin('delete')}" class="btn btn-gray">{lang_admin('delete')}</td>
                    </tr>
                    {/loop}
                    </tbody>
                </table>
            </div>



            <div class="line"></div>
            <div class="blank30"></div>
            <input type="hidden" name="batch" value="" />
            <input  class="btn btn-gray" type="button" value=" {lang_admin('delete')} " name="delete" onclick="if(getSelect(this.form) && confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='delete'; returnform(this.form);}"/>
        </form>
        <script type="text/javascript">
            $(function(){
                $('#btn_add').click(function(e) {
                    $('#listform').attr('action','<?php echo url('invite/add',true);?>');
                    returnform($('#listform'));
                });
            });
        </script>
        <div class="blank30"></div>
    </div>
</div>
