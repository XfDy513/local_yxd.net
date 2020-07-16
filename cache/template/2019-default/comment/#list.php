<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?><div class="container-fluid clearfix view-html">
<?php echo template('system/random_jpg.html'); ?>
<div class="container clearfix">
<div class="row column">
<div class="col-md-8">
<div class="row column">

<script src="<?php echo $base_url;?>/common/js/layer/layer.js"></script>
<script type="text/javascript" src="<?php echo $base_url;?>/common/plugins/pagenav/pagenav1.1.cn.js"></script>
<script type="text/javascript">

function getcommentdata(p){
$.ajax({
type: "get",
url: "<?php echo url('comment/ajax/aid/'.$aid); ?>",
dataType: 'json',
data: "p="+p,
success: function(msg){
//console.log(msg);
$('#comment_list').empty();
for(row in msg){
//console.log(msg['row']);
$('#comment_list').append("<li><div class='h'><span class='name'>"+msg[row].username+"</span><span class='date'>"+msg[row].adddate+"</span></div><div class='p'>"+msg[row].content+"</div><div class='f'><span class='zan_btn' data-aid='<?php echo $aid; ?>' data-cid='"+msg[row].id+"'><?php echo lang('praise');?>[<i id='zan_"+msg[row].id+"'>"+msg[row].zannum+"</i>]</span><span class='reply_btn' id='reply_btn_"+msg[row].id+"' data-raid='<?php echo $aid; ?>' data-rcid='"+msg[row].id+"'><?php echo lang('reply');?></span></div><div class='clear'></div></li>");
//<div style='display:none;' id='rcid_"+msg[row].id+"'><textarea id='trid_"+msg[row].id+"' name='content' rows='6' cols='50'></textarea><br /><input name='submit' value='发表回复' type='button' data-baid='<?php echo $archive['aid']; ?>' data-brid='"+msg[row].id+"' class='re_btn' /></div>
}
$('.zan_btn').click(function(e) {
var id = $(this).data('cid');
var aid = $(this).data('aid');
$.get("<?php echo url('comment/zan');?>",{"id":id,"aid":aid},function(data){
if(data != "unsign"){
alert('<?php echo lang("point-like");?><?php echo lang("success");?>');
$('#zan_'+id).html(data);
}else{
alert('<?php echo lang("not_logged");?>');
}
});
//console.log(aid);
});

$('.reply_btn').click(function(){
var rcid = $(this).data('rcid');
var raid = $(this).data('raid');

layer.open({
type: 1,
skin: 'layui-layer-rim', //加上边框
title: '<?php echo lang("submit_on");?><?php echo lang("reply");?>',
area: ['300px', '300px'], //宽高
content: "<div class='reply-info'><form id='frmreply' action='<?php echo url('comment/reply');?>' method='post' name='frmreply'><textarea name='content' class='reply-textarea' style='width:256px;height:120px; padding:10px; '></textarea><input name='aid' value='"+raid+"' type='hidden' /><input name='rid' value='"+rcid+"' type='hidden' /><div class='blank10'></div><button class='btn btn-primary'  type='submit' name='submit' value='<?php echo lang("submit_on");?>'><?php echo lang("submit_on");?> <span class='badge'>Guestbook</span></button></div>"
});

});
$('.re_btn').click(function(e) {
var brid = $(this).data('brid');
var baid = $(this).data('baid');
var content = $('#trid_'+brid).val();
if(content == ''){
alert('<?php echo lang("please_fill_in_the_content");?>');
$('#trid_'+brid).focus();
return;
}else{
$.post("<?php echo url('comment/reply');?>",{"rid":brid,"aid":baid,"content":content},function(data){
if(data != "unsign"){
alert('<?php echo lang("reply");?><?php echo lang("success");?>');
//$('#zan_'+id).html(data);
getcommentdata(1);
}else{
alert('<?php echo lang("not_logged");?>');
}
});
}
});
}
});
}

//$(function(){ //for jquery
$(function(){
//getcommentdata(1);
//optional set
pageNav.pre="<?php echo lang('uppage');?>";
pageNav.next="<?php echo lang('downpage');?>";


//  p,当前页码,pn,总页面
pageNav.fn = function(p,pn){
//document.getElementById("test").innerHTML ="当前页:"+p+"  ,  总页: "+pn;
//$("#test").text("Page:"+p+" of "+pn + " pages."); // jquery调用方式
getcommentdata(p);
};

//重写分页状态,跳到第三页,总页33页
pageNav.go(1,<?php echo $pages;?>);



});

</script>
<script src="<?php echo $base_url;?>/common/plugins/mobilechk/mobilechk.js"></script>

<?php echo template('comment/comment_js.html'); ?>
<div class="comment-pagination">
<?php if(isset($record_count)) { ?> <?php echo comment_pagination($aid);?> <?php } ?>
</div>
</div>
</div>
<div class="col-md-4">
<div class="row column">
<div class="comment">
<?php echo template('comment/comment.html'); ?>
</div>
</div>
</div>
<div class="clearfix">
</div>
</div>
</div>
</div><?php echo template('footer.html'); ?>