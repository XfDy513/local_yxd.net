<div class="main-right-box">
<h5>{lang_admin('wechat_public_number')}</h5>
<div class="blank20"></div>
<div class="box" id="box">

<div id="tagscontent" class="right_box">
  <form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this)"   >
    <table border="0" cellspacing="0" cellpadding="2" name="table1" id="table1" width="100%">
      <thead>
        <tr class="th">
          <th colspan="4" align="left" style="padding-left:20px;">{lang_admin('added_automatic_reply')}</th>
        </tr>
      </thead>
      <tbody>
      <tr class="s_out" onmouseover="m_over(this)" onmouseout="m_out(this)">
        <td colspan="4" align="left" ><a class="btn_b" href="#" onclick="gotourl(this)"   data-dataurl="<?php echo url('weixinreply/added/wid/'.intval(front::$get['id']));?>" >{lang_admin('set_up')}</a></td>
        </tr>
        </tbody>
    
      <thead>
        <tr class="th">
          <th colspan="4" align="left" style="padding-left:20px;">{lang_admin('default_message_autoreply')}</th>
        </tr>
      </thead>
      <tbody>
      <tr class="s_out" onmouseover="m_over(this)" onmouseout="m_out(this)">
        <td colspan="4" align="left" ><a class="btn_b" href="#" onclick="gotourl(this)"   data-dataurl="<?php echo url('weixinreply/msged/wid/'.intval(front::$get['id']));?>">{lang_admin('set_up')}</a></td>
        </tr>
       </tbody>
   
      <thead>
        <tr class="th">
          <th>{lang_admin('id')}</th>
          <th>{lang_admin('key_word')}</th>
          <th>{lang_admin('complete_words')}</th>
          <th>{lang_admin('dosomething')}</th>
        </tr>
      </thead>
      <tbody>
      {loop $data $d}
      <tr class="s_out" onmouseover="m_over(this)" onmouseout="m_out(this)">
        <td >{$d['id']}</td>
        <td align="left" style="padding-left:10px;">{$d['keyword']}</td>
        <td align="left" style="padding-left:10px;">{$d['word']}</td>
        <td align="left" style="padding-left:10px;">
		<span class="hotspot" onmouseover="tooltip.show('{lang_admin('edit')}');" onmouseout="tooltip.hide();"><a  href="#" onclick="gotourl(this)"   data-dataurl="<?php echo url('weixinreply/edit/id/'.$d['id']);?>"></a></span>
		<span class="hotspot" onmouseover="tooltip.show('{lang_admin('are_you_sure_you_want_to_delete_it')}');" onmouseout="tooltip.hide();"><a onclick="if(confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotourl(this);};" href="#"  data-dataurl="<?php echo url('weixinreply/del/wid/'.intval(front::$get['id']).'/id/'.$d['id']);?>"></a></span>
		</td>
      </tr>
      {/loop}
        </tbody>
         </table>
          </div>
          <input type="button" class="btn btn-primary" name="button" id="button" value=" {lang_admin('add_to')}" onclick="gotourl(this)"   data-dataurl="<?php echo url('weixinreply/add/wid/'.intval(front::$get['id']));?>" />
  </form>



<div class="blank30"></div>
</div>
</div>