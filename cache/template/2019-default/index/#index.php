<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?><div class="clearfix view-html">
<div class="container-fluid clearfix">
<div class="row column">
<div class="visual-slide">
<?php echo template('system/slide.html'); ?>
</div>
</div>
</div>
<div class="container clearfix layout_385582">
<div class="row column">
<div class="tag">
<?php echo templatetag::tag('首页第二行子栏目循环');?>
</div>
</div>
</div>
<div class="container clearfix">
<div class="row column">
<div class="tag">
<?php echo templatetag::tag('首页第五行栏目');?>
</div>
</div>
</div>
<div class="container clearfix layout_385582">
<div class="row column">
<div class="tag">
<?php echo templatetag::tag('首页第六行栏目内容3条');?>
</div>
</div>
</div>
<div class="clearfix">
<div class="row column">
<div class="tag">
<?php echo templatetag::tag('首页第三行栏目');?>
</div>
</div>
</div>
<div class="container clearfix layout_385582">
<div class="row column">
<div class="tag">
<?php echo templatetag::tag('首页第八行栏目内容4条');?>
</div>
</div>
</div>
</div><?php echo template('footer.html'); ?>