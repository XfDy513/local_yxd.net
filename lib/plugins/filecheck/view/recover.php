<?php if (!defined('ROOT')) exit('Can\'t Access !');?>

<?php if(count($_POST) == 0) { ?>
    <form class="checkform" method="post" action="" onsubmit="return returnform(this);">
        <input class="btn btn-primary" name="recover" type="submit" value="还原">
        <span class="wait"><?php echo lang_admin('please_wait_patiently_while_restoring_files');?></span>
    </form>
<?php } ?>

<?php if(count($_POST) > 0) { ?>
        <span class="message"><?php echo lang_admin('restore_success');?></span>

    <div class="blank10"></div>

    <form  class="checkform" method="post" action="<?php echo FileCheck::GetUrl(array('action'=>'check')) ?>" onsubmit="return returnform(this);">
        <input class="btn_a" name="check" type="submit" value="<?php echo lang_admin('scan_files_again');?>">
        <span class="wait"><?php echo lang_admin('please_wait_patiently_while_rescan_files');?></span>
    </form>
<?php } ?>


<div class="line"></div>
<div class="blank30"></div>
<a class="btn btn-info" href="#"  onclick="gotourl(this)"   data-dataurl="<?php echo FileCheckApp::GetUrl(array('action'=>'check')) ?>"><?php echo lang_admin('return');?></a>
