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
    <h5>{lang_admin('form_list')}</h5>
    <div class="blank20"></div>
    <div class="box" id="box">

        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=form&act=addform&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-primary" data-dataurlname="{lang_admin('add_forms')}">{lang_admin('add_forms')}</a>
        <input class="btn btn-gray" type="button" value=" {lang_admin('form_manage_settings')} " onclick="gotourl(this)" data-dataurlname="{lang_admin('form_manage_settings')}"  data-dataurl="{url::create('config/system/set/formsite')}" />

        <div class="blank30"></div>
        <div class="line"></div>
        <div class="blank30"></div>



        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr class="th">
                    <th class="">{lang_admin('name')}</th>

                    <th class="catname">{lang_admin('table_name')}</th>
                    <th class="catname">{lang_admin('number_of_records')}</th>
                    <th class="manage">{lang_admin('dosomething')}</th>
                </tr>
                </thead>
                <tbody>
                {loop $tables $t}
                <tr>
                    <td class="">
                        {=@setting::$var[$t]['myform']['cname_'.lang::getisadmin()]}&nbsp;
                    </td>
                    <td class="catname">{$t}</td>
                    <td class="catname"><?php  $_table=new defind($t); echo $_table->rec_count();?></td>
                    <td class="manage">

                        <a  href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("/act/editform/table/$t");?>" title="{lang_admin('edit')}" class="btn btn-gray" data-dataurlname="{lang_admin('edit_form')}">{lang_admin('edit')}</a>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {lang_admin('more')} <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#" onclick="gotourl(this)"   data-dataurl="{url('table/list/table/'.$t)}" title="{lang_admin('manage_data')}" data-dataurlname="{lang_admin('form_data_list')}">{lang_admin('manage_data')}</a></li>

                                <li><a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo url::create('field/list/table/'.$t)?>" title="{lang_admin('field_list')}" data-dataurlname="{lang_admin('field_list')}">{lang_admin('field_list')}</a></li>

                                <li><a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo url::create('field/add/table/'.$t)?>" title="{lang_admin('adding_fields')}" data-dataurlname="{lang_admin('adding_fields')}">{lang_admin('adding_fields')}</a></li>
                                <li><a  href="{url('form/add/form/'.$t,false)}" target="_blank" title="{lang_admin('preview')}">{lang_admin('preview')}</a></li>
                                <li><a href="<?php echo modify("/act/export/table/$t");?>" target="_blank" title="{lang_admin('export')}">{lang_admin('export')}</a></li>

                                <li role="separator" class="divider"></li>
                                <li><a  href="#" onclick="if(confirm('{lang_admin('deleting_a_form_deletes_all_records_in_the_form_are_you_sure_you_want_to_delete_it')}')){gotourl(this);};"   data-dataurl="<?php echo modify("/act/delete/table/$t");?>" title="{lang_admin('delete')}">{lang_admin('delete')}</a></li>
                            </ul>
                        </div>


                    </td>
                </tr>
                {/loop}

                </tbody>
            </table>

        </div>
        <div class="blank30"></div>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <span class="glyphicon glyphicon-warning-sign"></span>

            <br><strong>{lang_admin('table_call_format')}</strong>	 <span>{</span>{lang_admin('getform_my_form_name')}<span>}</span>
            <br><strong>{lang_admin('form_link_call_format')}</strong>	 <span>{</span>{lang_admin('myform_my_form_name')}<span>}</span>
            <br>{lang_admin('in_visual_editing_mode_you_can_drag_the_form_module_to_insert_the_location_you_want_to_display_but_you_need_to_set_the_column_bound_form')}
        </div>
    </div>
</div>

