<?php defined('ROOT') or exit('Can\'t Access !'); ?>


<?php echo template('comment/comment_js.html'); ?>

<?php if((config::get('comment_switch')==2)) { ?>
<?php echo lang('no_comment');?>
<?php } elseif ((config::get('comment_switch')==0 || (session::get('username')!='' && config::get('comment_switch')==1))) { ?>

<link href="<?php echo $skin_path;?>/css/comment.css" rel="stylesheet">



<form action="<?php echo url('comment/add'); ?>" method="POST" name="comment_form" id="comment">
<div class="comment">
<div class="blank10"></div>
<input type="hidden" name="aid" value="<?php echo $archive['aid'];?>"/>

<div class="form-group">
<label for="comment"><?php echo lang('username');?></label>
<input type="text" name="username" class="form-control comm_name" value="<?php echo get('username');?>"   />
</div>

<?php if(config::get('mobilechk_enable') && config::get('mobilechk_comment')) { ?>
<script src="<?php echo $base_url;?>/js/mobilechk.js"></script>
<div class="form-group">
<label for="comment"><?php echo lang('tel');?></label>

<input type="text" class="comm_name" name="telphone" id="telphone" />
</div>
<div class="form-group">
<label for="comment"><?php echo lang('phone_verification_code');?></label>
<input id="btm_sendMobileCode" onclick="sendMobileCode('<?php echo url('tool/smscode');?>',$('#telphone'));" type="button" value="<?php echo lang('send_cell_phone_verification_code');?>" />
<input type='text' id="mobilenum"  tabindex="4" placeholder="	<?php echo lang('please_enter_the_phone_verification_code');?>	"  name="mobilenum" />
</div>
<div class="blank10"></div>
<?php } ?>

<div class="form-group">
<label for="comment"><?php echo lang('comment');?> </label>
<textarea name="content" id="textarea" class="form-control textarea"></textarea>
</div>

<div class="checkbox">
<label>
<input type="checkbox" name="issee" id="issee" value="1" onclick="if(this.checked){this.value=1;}else{this.value=0;};" > <?php echo lang('is_mysee');?>
</label>
</div>


<?php if(config::get('verifycode')=='1') { ?>
<div class="balnk10"></div>
<?php echo lang('verifycode');?>
<div class="blank20"></div>
<input type='text' id="verify"  tabindex="3"  name="verify" /><?php echo verify();?>
<div class="balnk10"></div>
<?php } ?>

<?php if(config::get('verifycode')=='2') { ?>
<div class="blank20"></div>
<div id="verifycode_embed"></div>
<script src="http://api.geetest.com/get.php"></script>
<script>
var loadGeetest = function(config) {
window.gt_captcha_obj = new window.Geetest({
gt : config.gt,
challenge : config.challenge,
product : 'float',
offline : !config.success
});
gt_captcha_obj.appendTo("#verifycode_embed");
};

$.ajax({
url : '<?php echo url('tool/geetest',0);?>',
type : "get",
dataType : 'JSON',
success : function(result) {
//console.log(result);
loadGeetest(result)
}
});
</script>
<?php } ?>

<div class="blank30"></div>
<input name="submit" class="comment_btn" value=" <?php echo lang('submit_on');?> " type="submit" />
<div class="blank30"></div>

<div class="comment_info">
<?php if($topid==0) { ?><?php } else { ?><a rel="nofollow" href="<?php echo url('comment/list/aid/'.$archive['aid']); ?>"><?php } ?><?php echo lang('have');?><span class="commentnumber">(<?php echo comment::countcomment($archive['aid']);?>)</span><?php echo lang('bitofcommenters');?>&nbsp;&nbsp;<strong><?php echo lang('clicktoview');?></strong></a>
</div>

</div><!-- /comm -->
</form>

<?php } elseif ((session::get('username')=='' && config::get('comment_switch')==1)) { ?>
<a href="<?php echo url('user/login');?>"><?php echo lang('please_goto_login');?></a>
<?php } ?>



