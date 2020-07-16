<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>
<style type="text/css">
.list-title ul.column-subcolumn .column-subcolumn-list {margin:0px;padding:0px 0px 0px 10px;}
.list-title ul.column-subcolumn li.column-subcolumn-title a, .list-title ul.special-subspecial li.special-subspecial-title a, .list-title ul.type-subtype li.type-subtype-title a {margin-bottom:10px;}
.list-title ul.column-subcolumn .column-subcolumn-list li a {margin:0px; padding:0px;border:none;}
.column-subcolumn-list-one {list-style-type:circle;margin-left:15px;}
.column-subcolumn-list-two {list-style-type:disc;}
.column-subcolumn-list-three {list-style-type:disc;}
</style>
<div class="cbanner" style="height:<?php echo get('cslide_height');?>px;">
                <div class="cbanner-bg">
                    <div class="container">
                        <div class="cbanner-title">
                            <h4 class="column-title"><?php echo lang('sitemap');?></h4>
                        </div>
                    </div>
                </div>
            </div>

<div class="list-title list-title2">
</div>

<div class="container">
<div class="list-title">

<h4 class="column-title"><a href="<?php echo $base_url;?>/"><?php echo lang('homepage');?></a></h4>
<?php if(is_array(categories_nav()))
foreach(categories_nav() as $t) { ?>
<div class="clearfix"></div>
<h4 class="column-title">
<a href="<?php echo $t['url'];?>"><?php echo $t['catname'];?></a></h4>
    <?php if(count(categories($t['catid']))) { ?>

<?php if(is_array(categories_nav($t['catid'])))
foreach(categories_nav($t['catid']) as $t1) { ?>
<ul class="column-subcolumn pull-left">
<li class="column-subcolumn-title">
<a title="<?php echo $t1['catname'];?>" href="<?php echo $t1['url'];?>"><?php echo $t1['catname'];?></a>
<?php if(count(categories($t1['catid']))) { ?>
<ul class="column-subcolumn-list">
<?php if(is_array(categories_nav($t1['catid'])))
foreach(categories_nav($t1['catid']) as $t2) { ?>
<li class="column-subcolumn-list-one">
<a title="<?php echo $t2['catname'];?>" href="<?php echo $t2['url'];?>"><?php echo $t2['catname'];?></a>
<?php if(count(categories($t2['catid']))) { ?>
<ul class="column-subcolumn-list">
<?php if(is_array(categories_nav($t2['catid'])))
foreach(categories_nav($t2['catid']) as $t3) { ?>
<li class="column-subcolumn-list-two">
<a title="<?php echo $t3['catname'];?>" href="<?php echo $t3['url'];?>"><?php echo $t3['catname'];?></a>
<?php if(count(categories($t3['catid']))) { ?>
<ul class="column-subcolumn-list">
<?php if(is_array(categories_nav($t3['catid'])))
foreach(categories_nav($t3['catid']) as $t4) { ?>
<li class="column-subcolumn-list-three">
<a title="<?php echo $t4['catname'];?>" href="<?php echo $t4['url'];?>"><?php echo $t4['catname'];?></a>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
</ul>
<?php } ?>

<?php } ?>
</li>
<?php } ?>


    
</ul>
</div>

</div>


<?php echo template('footer.html'); ?>