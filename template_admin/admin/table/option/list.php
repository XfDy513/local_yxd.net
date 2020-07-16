<div class="main-right-box">
    <h5>{lang_admin('list_of_voting_items')}</h5>
    <div class="blank20"></div>
    <div class="box" id="box">

        <form method="post" name="form1" action="<?php if(front::$act=='edit') $id="/id/".$data[$primary_key]; else $id=''; echo modify("/act/add/table/".$table.$id."/bid/".$ballot['id']);?>"
              onsubmit="return returnform(this);">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('adding_options')}</div>
                <div class="col-xs-6 col-sm-6 col-md-5 col-lg-4 text-left">
                    {form::getform('name',$form,$field,$data)}
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
                    <input  name="submit" value="1" type="hidden">
                    <input type="submit"  value="{lang_admin('add_to')}" class="btn btn-gray"/>
                </div>
            </div>
        </form>

        <div class="blank30"></div>

        <form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr class="th">
                        <th class="s_out"><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox" name="chkall" class="checkbox" /></th>
                        <th class="catid"><!--id-->{lang_admin('id')}</th>
                        <th class="catname"><!--title-->{lang_admin('name')}</th>
                        <th class="catid"><!--content-->{lang_admin('votes')}</th>
                        <th class="manage">{lang_admin('dosomething')}</th>
                    </tr>
                    </thead>
                    <tbody>
                    {loop $data $d}
                    <tr>
                        <td class="s_out" ><input onclick="c_chang(this)" type="checkbox" value="{$d.$primary_key}" name="select[]" class="checkbox" /></td>
                        <td class="catid">{cut($d['id'])}</td>
                        <td class="catname" align="left">{cut($d['name'])}</td>
                        <td class="catid">{cut($d['num'])}</td>
                        <td class="manage">
                            <a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/edit/table/$table/id/$d[$primary_key]/bid/".front::$get['bid']);?>" title="{lang_admin('edit')}" class="btn btn-gray">{lang_admin('edit')}</a>
                            <a onclick="if(confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotourl(this);};" href="#"   data-dataurl="<?php echo modify("/act/delete/table/$table/id/$d[$primary_key]/token/$token"."/bid/".$ballot['id']);?>" title="{lang_admin('delete')}" class="btn btn-default">{lang_admin('delete')}</a>
                        </td>
                    </tr>
                    {/loop}
                    </tbody>

                </table>
            </div>

            <div class="page">
                <?php if(get('table')!='type' && front::get('case')!='field') echo pagination::adminhtml($record_count); ?>
            </div>

            <div class="blank30"></div>
            <div class="line"></div>
            <div class="blank30"></div>

            <input type="hidden" name="batch" value="">
            <input class="btn btn-default" type="button" value="{lang_admin('delete')}" name="delete" onclick="if(getSelect(this.form) && confirm('{lang_admin('do_delete_id_as')}('+getSelect(this.form)+'){lang_admin('is_it_recorded')}')){this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='delete'; returnform(this.form);}"/>
        </form>

    </div>
</div>




