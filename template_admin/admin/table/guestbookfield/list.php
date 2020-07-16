<div class="main-right-box">
    <h5>{lang_admin('custom_field_list')}</h5>
    <div class="blank20"></div>
    <div class="box" id="box">


        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=table&act=add&table=guestbookfield&admin_dir={get('admin_dir')}&site=default"
           class="btn btn-primary">{lang_admin('adding_fields')}</a>

        <div class="blank30"></div>

        <form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr class="th">
                        <th class="s_out"><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox" name="chkall" class="checkbox" /> </th>
                        <th class="sort">{lang_admin('sort')}</th>
                        <th class="catname">{lang_admin('field_name')}</th>
                        <th class="catname">{lang_admin('display_name')}</th>
                        <th class="htmldir">{lang_admin('mold')}</th>
                        <th class="htmldir">{lang_admin('length')}</th>
                        <th class="manage">{lang_admin('dosomething')}</th>
                    </tr>
                    </thead>
                    <tbody>
                    {loop $data $d}
                    <tr>
                        <?php if(!isset($d['listorder'])){ $d['listorder']=0; }  ?>
                        <td class="s_out" align="center"><input onclick="c_chang(this)" type="checkbox" value="{$d.id}" name="select[]" class="checkbox" /> </td>
                        <td class="sort"><span class="hotspot" onmouseover="tooltip.show('{lang_admin('fill_in_the_sorting_number')}<br />{lang_admin('the_smaller_the_number_the_higher_the_ranking')}');" onmouseout="tooltip.hide();">{form::input("listorder[$d[$primary_key]]",$d['listorder'])}</span></td>
                        <td class="catname">{$d['name']}</td>
<?php $newshowname="showname_".lang::getisadmin(); ?>
                        <td class="catname">{$d['showname'][$newshowname]}</td>
                        <td class="htmldir">
			<?php
                            //var_dump(setting::$var);
                            if($d['type'] == 'varchar'){
                                $s =lang_admin('one_line_text');
                            }
                            if($d['type'] == 'text'){
                                $s = lang_admin('multi_line_text') ;
                            }
                            if($d['type'] == 'mediumtext'){
                                $s =  lang_admin('hypertext') ;
                            }
                            if($d['type'] == 'int'){
                                $s =  lang_admin('integer') ;
                            }
                            if($d['type'] == 'datetime'){
                                $s =  lang_admin('date_type') ;
                            }
                            if($d['type'] == 'radio'){
                                $s =  lang_admin('monopoly') ;
                            }
                            if($d['type'] == 'checkbox'){
                                $s =  lang_admin('multi_selection') ;
                            }
                            if($d['type'] == 'select'){
                                $s =  lang_admin('dropdown_selection_line_text') ;
                            }
                            if($d['type'] == 'image'){
                                $s =  lang_admin('picture') ;
                            }
                            if($d['type'] == 'file'){
                                $s =  lang_admin('attachment') ;
                            }
                            echo $s;
                            ?>
			    </td>
                        <td class="htmldir">{$d['leng']}</td>
                        <td class="manage">
                            <a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("/act/edit/table/$table/id/".$d['id']);?>" title="{lang_admin('edit')}" class="btn btn-gray">{lang_admin('edit')}</a>
                            <a onclick="if(confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotourl(this);};" href="#" data-dataurl="<?php echo modify("/act/delete/table/$table/id/".$d['id']."/token/$token");?>" title="{lang_admin('delete')}" class="btn btn-default">{lang_admin('delete')}</a>
                        </td>
                    </tr>
                    {/loop}
                    </tbody>
                </table>

                <div class="blank30"></div>
                <div class="line"></div>
                <div class="blank30"></div>
                <input type="hidden" name="batch" value="">
                <input class="btn btn-secondary" type="button" value=" {lang_admin('sort')} " name="order" onclick="this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='listorder'; returnform(this.form);"/>
                <input  class="btn btn-default" type="submit" value=" {lang_admin('export')} " name="export" onclick="this.form.action='<?php echo modify("/act/batch/table/$table/token/$token");?>'; this.form.batch.value='export'; this.form.submit();"/>

        </form>


        <div class="blank30"></div>
    </div>
</div>
