<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<div class="clearfix view-html">
<div class="container clearfix">
<div class="row column">
<div class="col-md-2 col-sm-4 col-xs-6">
<div class="row column">
<div class="tag">
<?php echo templatetag::tag('页底栏目子栏目一');?>
</div>
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
<div class="row column">
<div class="tag">
<?php echo templatetag::tag('页底栏目子栏目二');?>
</div>
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
<div class="row column">
<div class="tag">
<?php echo templatetag::tag('页底栏目子栏目三');?>
</div>
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
<div class="row column">
<div class="foot-tel">
<h4>
<?php echo lang('servertel');?>
</h4>
<p>
<?php echo get('tel');?>
</p>
</div>
<div class="foot-email">
<h4>
<?php echo lang('email');?>
</h4>
<p>
<?php echo get('email');?>
</p>
</div>
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-12">
<div class="row column">
<div class="checkout">
<img src="<?php echo get('weixin_pic');?>" alt='' />
<p>
<?php echo lang('attention');?><br /><?php echo lang('official');?><?php echo lang('wechat');?>
</p>
</div>
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-12">
<div class="row column">
<div class="erweima">
<?php if(config::get('qrcodes')=='1') { ?>
<div id="qrcode">
</div>
<p>
<?php echo lang('scanning');?><br /><?php echo lang('access');?><?php echo lang('sitewap');?>
</p> <?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>