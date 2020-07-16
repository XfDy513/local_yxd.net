<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<nav>
<ul class="pagination">
    <?php if(pages('up')) { ?>
    <li><a href="<?php echo category::url($catid,pages('up'));?>"><span aria-hidden="true">«</span></a></li>
    <?php } ?>
<?php if(is_array(pages()))
foreach(pages() as $p) { ?>
<?php if($p==$page) { ?>
<li class="active"><a><?php echo $p;?></a></li>
<?php } else { ?>
<li><a href="<?php echo category::url($catid,$p);?>"><?php echo $p;?></a></li>
<?php } ?>
    <?php } ?>
<?php if(pages('down')) { ?>
<li><a href="<?php echo category::url($catid,pages('down'));?>" aria-label="Next"><span aria-hidden="true">»</span></a></li>
<?php } ?>
<li class="pull-right">
<input type="text" name="getto_page" id="getto_page" value="<?php echo $page;?>" class="form-control " oninput = "value=value.replace(/[^\d]/g,'')">
<input class="btn btn-primary" type="button" value="<?php echo lang('jump');?>" name="order"
   onclick="getto_page()">
</li>
<?php if(config::get('list_page_php') != '1') { ?>
<script>
function getto_page(){
var totlepage='<?php echo count(pages());?>';
totlepage=parseInt(totlepage);
var inpage=parseInt($('#getto_page').val());
if( inpage>totlepage){
window.location='<?php echo category::url($catid,count(pages()));?>';
}
else if(inpage<1){
window.location='<?php echo category::url($catid,1);?>';
} else{
window.location='<?php echo category::url($catid,"");?>&page='+inpage;
}
}
</script>
<?php } else { ?>
<script>
function getto_page(){
var totlepage='<?php echo count(pages());?>';
totlepage=parseInt(totlepage);
var inpage=parseInt($('#getto_page').val());
if( inpage>totlepage){
window.location='<?php echo category::url($catid,count(pages()));?>';
}
else if(inpage<1){
window.location='<?php echo category::url($catid,1);?>';
} else{
inpage=inpage+".html";
window.location='<?php echo category::url($catid,"");?>/'+inpage;
}
}
</script>
<?php } ?>
</ul>
</nav>