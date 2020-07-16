<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?><div class="clearfix view-html">
<?php echo template('system/random_jpg.html'); ?>
<div class="list-title list-title2">
<div class="container">
<div class="row">
<div class="col-xs-12 col-md-8">
<h4 class="content-title">
<?php echo $archive['title'];?>
</h4>
</div>
</div>
</div>
</div>
<div class="container clearfix">
<div class="row column">
<div class="col-md-8">
<div class="row column">
<div class="col-md-6">
<div class="row column">
<div class="swiper-container content-picture swiper-container-initialized swiper-container-horizontal">
<div class="swiper-wrapper" id="lightgallery" role="listbox">
<?php if(is_array($archive['pics']))
foreach($archive['pics'] as $i => $pic) { ?>
<div class="swiper-slide" data-src="<?php echo $pic['url'];?>" data-sub-html="<?php echo $pic['alt'];?>">
<div class="content-picture-tiem">
 <a rel="lightbox['roadtrip']"><img src="<?php echo $pic['url'];?>" alt="<?php echo $pic['alt'];?>" /></a>
</div>
</div> <?php } ?>
</div>
<div class="swiper-pagination content-picture-pagination swiper-pagination-bullets swiper-pagination-bullets-dynamic">
</div><span class="swiper-notification"></span><span class="swiper-notification"></span><span class="swiper-notification"></span>
</div>
</div>
</div>
<div class="col-md-6">
<div class="row column">
<div class="content-adddate">
 <span><?php echo lang('adddate');?>：</span><?php echo $archive['adddate'];?>
</div>
<div class="visual-audio">
<div class="blank5 visual-blank">
</div>
</div>
<div class="content-rating">
 <span><?php echo lang('rating');?>：</span><?php echo $archive['strgrade'];?>
</div>
<div class="visual-audio">
<div class="blank5 visual-blank">
</div>
</div>
<div class="content-statistics">
 <span><?php echo lang('view');?>：</span><?php echo view_js($archive['aid']);?>
</div>
<div class="visual-audio">
<div class="blank5 visual-blank">
</div>
</div>
<div class="content-field">
</div>
<div class="visual-audio">
<div class="blank5 visual-blank">
</div>
</div>
<div class="content-downlink">
<?php if($archive['attachment_path']) { ?> <?php echo attachment_js($archive['aid']);?> <?php } else { ?> <a class="visual-content-down-link-btn"><?php echo lang('nodownload');?></a> <?php } ?>
</div>
</div>
</div>
<div class="clearfix">
</div>
<div id="print" class="content-text">
<?php echo $archive['content'];?>
</div>
<div class="content-source">
 <span><?php echo lang('source');?>：</span><?php echo $archive['attr3'];?>
</div>
<div class="content-author">
 <span><?php echo lang('author');?>：</span><?php echo $archive['author'];?>
</div>
<div class="col-md-12 text-center" style="margin-top: 3px; margin-bottom: 3px;">
<div class="row column">
<?php echo getraise($archive['praise'],$archive['aid']);?> <?php echo getcollect($archive['aid']);?>
</div>
</div>
<div class="clearfix text-center" style="margin-top: 3px; margin-bottom: 3px;">
</div>
<div class="col-md-12 text-center">
<div class="row column">
<div class="content-archivep-archiven">
<?php if($archive['p']['aid']) { ?> <span class="content-archivep"><a href="<?php echo $archive['p']['url'];?>"><strong><?php echo lang('archivep');?></strong><?php echo $archive['p']['title'];?></a></span> <?php } else { ?> <span class="content-archivep"><a><strong><?php echo lang('archivep');?></strong><?php echo lang_admin('nopage');?></a></span> <?php } ?> <?php if($archive['n']['aid']) { ?> <span class="content-archiven"><a href="<?php echo $archive['n']['url'];?>"><strong><?php echo lang_admin('archiven');?></strong><?php echo $archive['n']['title'];?></a></span> <?php } else { ?> <span class="content-archiven"><a><strong><?php echo lang('archiven');?></strong><?php echo lang('nopage');?></a></span> <?php } ?>
</div>
<div class="content-comment">
<?php echo template('comment/comment.html'); ?>
</div>
<div class="content-relevant">
<?php if(is_array($likenews)) { ?>
<div class="content-relevant-title">
<h4>
<?php echo $archive['tag'];?>
</h4>
<p>
/ <?php echo lang('relatedcontent');?>
</p>
</div>
<div class="content-relevant-list">
<ul>
<?php if(is_array($likenews))
foreach($likenews as $item) { ?>
<li>
 <span><?php echo $archive['adddate'];?></span><a title="<?php echo $archive['stitle'];?>" href="<?php echo $archive['url'];?>" target="_blank"><?php echo $archive['title'];?></a>
</li> <?php } ?>
</ul>
</div> <?php } ?>
</div>
</div>
</div>
<div class="clearfix text-center">
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