<?php if (!defined('ROOT')) exit('Can\'t Access !');?>

<style type="text/css">
	.alert span {font-weight:bold;color:red;}
</style>

<?php if(count($_POST) == 0) { ?>
    <form class="checkform" method="post"  action="<?php echo uri();?>" onsubmit="return returnform(this);">
        <input name="check" type="hidden" value="1">
        <input class="btn btn-warning"   type="submit" value="<?php echo lang_admin('restore_files');?>" onclick="return confirm('<?php echo lang_admin("this_operation_involves_file_deletion_and_replacement");?>');">
        <span class="wait"><?php echo lang_admin('please_wait_patiently_while_restoring_files');?></span>
    </form>
<?php } ?>

<?php if(count($_POST) > 0) { ?>
<div class="alert alert-warning alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
<span class="glyphicon glyphicon-warning-sign"></span>	<?php echo lang_admin('document_processing');?><strong><?php echo lang_admin('explain');?>：</strong> 	[	<span class=""><?php echo $recover->count; ?></span>	]	<?php echo lang_admin('restore_success');?>
</div>
<?php } ?>


<div class="line"></div>
<div class="blank30"></div>

<a class="btn btn-primary" href="#"  onclick="gotourl(this)"   data-dataurl="<?php echo FileCheckApp::GetUrl(array('action'=>'file_check')) ?>"><?php echo lang_admin('return');?></a>
