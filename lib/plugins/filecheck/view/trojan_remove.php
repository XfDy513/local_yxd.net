<?php if (!defined('ROOT')) exit('Can\'t Access !'); ?>

<?php if (count($_POST) > 0) {
    if ($remove->count > 0) { ?>
<div class="alert alert-warning alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
<span class="glyphicon glyphicon-warning-sign"></span>	<?php echo lang_admin('successful_deletion');?>
</div>
<?php }
} ?>


<div class="line"></div>
<div class="blank30"></div>
<a class="btn btn-primary" href="#"  onclick="gotourl(this)"   data-dataurl="<?php echo FileCheckApp::GetUrl(array('action' => 'trojan_scan')) ?>"><?php echo lang_admin('return');?></a>
