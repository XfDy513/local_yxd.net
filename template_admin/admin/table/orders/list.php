<div class="main-right-box">
    <h5>{lang_admin('order_list')}</h5>
    <div class="blank20"></div>
    <div class="box" id="box">


        <div class="form-inline pull-right backstage-search">
            <form name="searchform" id="searchform"  action="<?php echo uri();?>" method="post"  onsubmit="return returnform(this)">
                <input type="text" class="form-control" name="search_number" id="search_number" placeholder="{lang_admin('order_number')}" value="" />
                <button onclick="this.form.action='<?php echo url::modify('table/'.get('table').'/type/search');?>'" class="btn btn-default search-btn" name="submit" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </form>
        </div>

        <form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">

            <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=logistics&act=list&table=logistics&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-primary" data-dataurlname="{lang_admin('distribution_settings')}">{lang_admin('distribution_settings')}</a>

            <input class="btn btn-gray" type="button" value=" {lang_admin('order_manage_settings')} "
                   onclick="gotourl(this)" data-dataurlname="{lang_admin('order_manage_settings')}" data-dataurl="{url::create('config/system/set/orders')}" />


            <input  class="btn btn-gray" type="submit" value=" {lang_admin('batch_printing')} " name="print-list" data-dataurlname="{lang_admin('batch_printing')}" onclick="if(getSelect(this.form)){this.form.action='<?php echo modify('act/view',true);?>';returnform(this.form);}"/>


            <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=table&act=add&table=orders&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-gray" data-dataurlname="{lang_admin('new_orders')}">{lang_admin('new_orders')}</a>

            <div class="blank30"></div>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr class="th">
                        <th class="s_out"><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox" name="chkall" class="checkbox" /> </th>
                        <th class="catid text-center"><!--id-->{lang_admin('id')}</th>
                        <th class="catname"><!--oid-->{lang_admin('order_number')}</th>
                        <th class="catname"><!--pname-->{lang_admin('account_name')}</th>
                        <th class="catname"><!--pname-->{lang_admin('full_name')}</th>
                        <th class="catname"><!--pname-->{lang_admin('tel')}</th>
                        <th class="htmldir text-center"><!--status-->{lang_admin('state')}</th>
                        <th class="htmldir"><!--adddate-->{lang_admin('order_time')}</th>
                        <th class="manage">{lang_admin('dosomething')}</th>
                    </tr>

                    </thead>
                    <tbody>
                    {loop $data $d}
                    <tr class="s_out">

                        <td ><input onclick="c_chang(this)" type="checkbox"  value="{$d.$primary_key}" name="select[]" class="checkbox" /> </td>
                        <?php
                        switch($d['status']){
                            case 1:
                                $d['status']=lang_admin('complete');
                                break;
                            case 2:
                                $d['status']=lang_admin('processing');
                                break;
                            case 3:
                                $d['status']=lang_admin('shipped');
                                break;
                            case 4:
                                $d['status']=lang_admin('payment_has_been_made_pending_review');
                                break;
                            case 5:
                                $d['status']=lang_admin('verify_that_the_customer_has_paid');
                                break;
                            default:
                                $d['status']=lang_admin('new_orders');
                                break;
                        }
                        ?>
                        <td class="catid text-center">{$d['id']}</td>
                        <td class="catname">{$d['oid']}</td>
                        <td class="catname" align="left"><?php if($d['mid']==0){echo lang_admin('tourist');}else{ ?>{getusername($d['mid'])}<?php } ?></td>
                        <td class="catname" align="left">{$d['pname']}</td>
                        <td class="catname" align="left">{$d['telphone']}</td>
                        <td class="htmldir text-center">{$d['status']}</td>
                        <td class="htmldir">{date('Y-m-d H:i:s',$d['adddate'])}</td>

                        <td class="manage">

                            <a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/edit/table/$table/id/$d[$primary_key]");?>" title="{lang_admin('handle')}" class="btn btn-gray" data-dataurlname="<?php echo lang_admin('handle');?>">{lang_admin('handle')}</a>

                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {lang_admin('more')} <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo modify("act/view/table/$table/id/$d[$primary_key]");?>" target="_blank"  title="{lang_admin('print')}">{lang_admin('print')}</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a onclick="if(confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotourl(this);};" href="#"   data-dataurl="<?php echo modify("/act/delete/table/$table/id/$d[$primary_key]/token/$token");?>" title="{lang_admin('delete')}">{lang_admin('delete')}</a>
                                    </li>
                                </ul>
                            </div>





                        </td>
                    </tr>
                    {/loop}

                    </tbody>
                </table>



                <input type="hidden" name="batch" id="batch" value="">
                <input  class="btn btn-gray" type="button" value=" {lang_admin('delete')} " name="delete" onclick="if(getSelect(this.form) && confirm('{lang_admin('do_delete_id_as')}('+getSelect(this.form)+'){lang_admin('is_it_recorded')}')){this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='delete'; returnform(this.form);}"/>

                <input  class="btn btn-gray" type="submit" value=" {lang_admin('empty')} " name="delete" onclick="qk()"/>

                <input  class="btn btn-gray" type="button" value=" {lang_admin('export')} " name="export" onclick="this.form.action='<?php echo modify("/act/batch/table/$table/token/$token");?>'; this.form.batch.value='export'; this.form.submit();"/>

                <input  class="btn btn-gray" type="submit" value=" {lang_admin('batch_printing')} " name="print-list" onclick="if(getSelect(this.form)){this.form.action='<?php echo modify('act/view',true);?>';returnform(this.form);}" data-dataurlname="{lang_admin('batch_printing')}" />

                <div class="blank30"></div>
                <div class="line"></div>
                <div class="page"><?php if(get('table')!='type' && front::get('case')!='field') echo pagination::adminhtml($record_count); ?></div>
                <div class="blank30"></div>
            </div>



        </form>

        <script type="text/javascript">
            function qk(){
                if(confirm('{lang_admin('do_you_really_want_to_clear_the_records')}')) {
                    var inputs = document.getElementsByTagName("input");
                    var boxs = [];
                    for (let i = 0; i < inputs.length; i++) {
                        if (inputs[i].type == "checkbox") {
                            inputs[i].checked=true;
                        }
                    }

                    document.getElementById("listform").action = '<?php echo modify('act/batch',true);?>';
                    document.getElementById("batch").value='delete';
                }
            }
        </script>
        <div class="blank30"></div>
    </div>
</div>
