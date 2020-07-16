

<div class="main-right-box">
    <h5>{lang_admin('third_party_login')}</h5>
    <div class="blank20"></div>

    <div class="box" id="box">
        <div class="alert alert-warning alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <span class="glyphicon glyphicon-warning-sign"></span>	<strong>{lang_admin('tips')}：</strong> 	{lang_admin('third_party_login_application_is_valid_after_opening')}
        </div>
        <div class="blank20"></div>

        <form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr class="th">
                        <th class="catname"><!--name-->{lang_admin('name')}</th>
                        <th class="htmldir"><!--rate-->{lang_admin('describe')}</th>
                        <th class="htmldir"><!--rate-->{lang_admin('website')}</th>
                        <th class="htmldir"><!--ver-->{lang_admin('edition')}</th>
                        <th class="manage">{lang_admin('dosomething')}</th>
                    </tr>
                    </thead>
                    <tbody>
                    {loop $data $d}

                    <tr class="s_out" onmouseover="m_over(this)" onmouseout="m_out(this)">
                        <td class="catname"><strong>{$d['name']}</strong>
                        </td>
                        <td class="htmldir">{$d['desc']}</td>
                        <td class="htmldir">{cut($d['website'])}</td>
                        <td class="htmldir">{cut($d['version'])}</td>
                        <td class="manage">
                            <?php if ($d['install']==0){?>
                                <span class="hotspot" onmouseover="tooltip.show('{lang_admin('install')}');" onmouseout="tooltip.hide();">
<a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/install/table/$table/name/".$d['ologin_code']);?>" class="btn btn-gray" title="{lang_admin('add_third_party_login')}" data-dataurlname="{lang_admin('add_third_party_login')}">{lang_admin('install')}</a></span>

                            <?php }else{?>
                                <span class="hotspot" onmouseover="tooltip.show('{lang_admin('edit')}');" onmouseout="tooltip.hide();">
<a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/edit/table/$table/id/".$d['id']);?>" class="btn btn-gray" title="{lang_admin('edit_third_party_login')}" data-dataurlname="{lang_admin('edit_third_party_login')}">{lang_admin('edit')}</a></span>
                                <span class="hotspot" onmouseover="tooltip.show('{lang_admin('are_you_sure_you_want_to_delete_it')}');" onmouseout="tooltip.hide();">
<a onclick="if(confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotourl(this);};" href="#"    data-dataurl="<?php echo modify("/act/delete/table/$table/id/".$d['id']);?>" class="btn btn-gray" title="{lang_admin('uninstall')}" data-dataurlname="{lang_admin('uninstall')}">{lang_admin('uninstall')}</a></span>
                            <?php } ?>
                        </td>
                    </tr>
                    {/loop}


                    </tbody>
                </table>
            </div>

        </form>
        <div class="blank30"></div>
    </div>
</div>
