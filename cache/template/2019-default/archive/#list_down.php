<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?><div class="container-fluid clearfix view-html">
<?php echo template('system/random_jpg.html'); ?>
<div class="list-title list-title2">
<div class="container">
<p class="column-htmldir">
<?php echo $category[$catid]['htmldir'];?>
</p>
<h4 class="column-title">
<?php echo $category[$catid]['catname'];?>
</h4>
<ul class="column-subcolumn">
<?php if(is_array(categories($topid)))
foreach(categories($topid) as $t1) { ?>
<li class="column-subcolumn-title">
<a href="<?php echo $t1['url'];?>" title="<?php echo $t1['catname'];?>"><?php echo $t1['catname'];?></a>
</li> <?php } ?>
</ul>
</div>
</div>
<div class="container clearfix">
<div class="row column">
<div class="col-md-8">
<div class="row column">
<div class="column-list-down">
<ul>
<?php if(is_array($archives))
foreach($archives as $i => $archive) { ?>
<li>
<a title="<?php echo $archive['stitle'];?>" href="<?php echo $archive['url'];?>" target="_blank"><?php echo $archive['title'];?></a><span><?php if($archive['attachment_path']) { ?><?php echo attachment_js($archive['aid']);?><?php } else { ?><a class="visual-content-down-link-btn"><?php echo lang('nodownload');?></a><?php } ?></span>
</li> <?php } ?>
</ul>
</div>
<div class="column-pagination">
<?php if(isset($pages)) { ?> <?php echo category_pagination($catid);?> <?php } ?>
</div>
</div>
</div>
<div class="col-md-4">
<div class="row column">
<div class="hot-news">
<div class="title20">
<p>
Host List
</p>
<h4>
<?php echo lang('hostlist');?>
</h4>
</div>
<ul>
<?php if(is_array(archive($catid,0,0,'0,0,0',20,'view',9,false,0)))
foreach(archive($catid,0,0,'0,0,0',20,'view',9,false,0) as $i => $arc) { ?>
<li>
<span><?php echo $i;?></span><a href="<?php echo $arc['url'];?>" title="<?php echo $arc['stitle'];?>"><?php echo $arc['title'];?></a>
</li> <?php } ?>
</ul>
</div>
<div class="new-teg">
<div class="title20">
<p>
hot news
</p>
<h4>
TAG
</h4>
</div>
<div class="new-teg-list">
<?php if(is_array(tags($catid,10)))
foreach(tags($catid,10) as $tag) { ?> <a href="<?php echo $tag['url'];?>" style="color:<?php echo $tag['tag_txtcolor'];?>;size:<?php echo $tag['tag_txtsize'];?>"><?php echo $tag['tag'];?></a> <?php } ?>
</div>
</div>
</div>
</div>
<div class="clearfix">
</div>
</div>
</div>
</div><?php echo template('footer.html'); ?>