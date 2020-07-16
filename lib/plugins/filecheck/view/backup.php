<?php if (!defined('ROOT')) exit('Can\'t Access !');?>

<?php if(count($_POST) == 0) { ?>
    <form class="checkform" method="post" action="" onsubmit="return returnform(this);">
        <input class="btn btn-primary" name="backup" type="submit" value="<?php echo lang_admin('backup_files_and_generate_verification_information');?>">
        <span class="wait"><?php echo lang_admin('backing_up_files_please_wait_patiently');?></span>
    </form>
<?php } ?>

<?php if(count($_POST) > 0) {
    if($check->pass) { ?>
        <?php echo lang_admin('all_files_are_consistent_with_the_backup_files_and_there_is_no_need_to_back_up_repeatedly');?>
    <?php }
    if($check->pass==false) {
        if($backup->Success) { ?>
            <?php echo lang_admin('files_were_backed_up');?>
        <?php }
        if($make->Success) { ?>
            <?php echo lang_admin('file_verification_information_saved');?>
        <?php }
    }
} ?>

<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
<a  class="btn btn-info" href="#"  onclick="gotourl(this)"   data-dataurl="<?php echo FileCheck::GetUrl(array('action'=>'check')) ?>"><?php echo lang_admin('return');?></a>