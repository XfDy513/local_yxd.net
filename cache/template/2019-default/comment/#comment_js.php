<?php defined('ROOT') or exit('Can\'t Access !'); ?>

<?php if((config::get('comment_switch')==2)) { ?>
<?php } elseif ((config::get('comment_switch')==0 || (session::get('username')!='' && config::get('comment_switch')==1))) { ?>
<?php if(config::get('comment_list')=='1') { ?>

<!-- 评论列表开始 -->
<div class="comment_list">
<?php if(is_array($comments))
foreach($comments as $comment) { ?>
<div class="comment_content_item">
<div class="comment_head col-xs-3 col-sm-1">
<img src="<?php echo user::getuserimg($comment['username']);?>" alt="headimage" class="img-responsive">
</div>
<div class="col-xs-9 col-sm-11">
<p><strong><?php echo $comment['username'];?></strong><span><?php echo sdate($comment['adddate'],'Y-m-d H:i');?></span></p>
<div class="comment_content ">
<p><?php echo strip_tags($comment['content']);?></p>
</div>
<?php if($comment['reply']) { ?>
<div style="margin:10px 0px 0px 15px;">
<p><?php echo lang('adminreply');?>：</p>
<div class="comment_content">
<dd class="comment_admin_reply">
<p><?php echo $comment['reply'];?></p>
</dd>
</div>
</div>
<?php } ?>
<div class="blank10"></div>
</div>
</div>

<?php } ?>
</div>
<?php } else { ?>
<?php } ?>
<?php } ?>

