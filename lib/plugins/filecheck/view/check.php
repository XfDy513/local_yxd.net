<?php if(!defined('ROOT'))
    exit('Can\'t Access !'); ?>

<?php if(count($_POST) == 0) { ?>
    <div>
        <?php echo lang_admin('explain');?>：
    </div>
<?php } ?>

<div class="blank10"></div>

<?php if(count($_POST) == 0) { ?>
    <?php if($check->check_time != false) { ?>
        <form class="checkform" method="post" action="">
            <input class="btn_a" name="check" type="submit" value="<?php echo lang_admin('scan_for_file_changes');?>">
            <span class="wait"><?php echo lang_admin('scanning_files_please_wait_patiently');?></span>
        </form>
    <?php } ?>

    <div class="blank10"></div>

    <form class="checkform" method="post" action="<?php echo FileCheck::GetUrl(array('action'=>'backup')) ?>" onsubmit="return returnform(this);">
        <input class="btn_a" name="check" type="submit" value="<?php echo lang_admin('backup_files_and_generate_verification_information');?>">
        <span class="wait"><?php echo lang_admin('backing_up_files_please_wait_patiently');?></span>
    </form>
<?php } ?>

<?php if(count($_POST) > 0) { ?>

    <?php if($check->pass == true) { ?>
        <span class="message"><?php echo lang_admin('scan_results');?>： <?php echo lang_admin('scan_files_together');?><?php echo $check->count; ?> <?php echo lang_admin('file_and_directory_security');?>！</span>
    <?php } ?>

    <?php if($check->pass == false) { ?>
<span class="message">
        <?php echo lang_admin('scan_results');?>：
        <?php echo lang_admin('scan_files_together');?><?php echo $check->count; ?>个。
        <?php echo lang_admin('changed_file');?>(<span><?php echo $check->changed_count; ?></span>)个,
        <?php echo lang_admin('added_file');?>(<span><?php echo $check->created_count; ?></span>)个,
        <?php echo lang_admin('deleted_files');?>(<span><?php echo $check->lost_count; ?></span>)个。
    </span>
    <?php } ?>

    <ul class="message">
        <?php
        if($check->changed_count > 0) {
            echo '<h5><?php echo lang_admin(\'changed_file\');?></h5>';
            foreach($check->changed as $file) {
                echo '<li>'.$file.'</li>';
            }
        }
        if($check->created_count > 0) {
            echo '<h5><?php echo lang_admin(\'added_file\');?></h5>';
            foreach($check->created as $file) {
                echo '<li>'.$file.'</li>';
            }
        }
        if($check->lost_count > 0) {
            echo '<h5><?php echo lang_admin(\'deleted_files\');?></h5>';
            foreach($check->lost as $file) {
                echo '<li>'.$file.'</li>';
            }
        }
        ?>
    </ul>

    <?php if($check->pass == false) { ?>
        <form class="checkform" method="post" action="<?php echo FileCheck::GetUrl(array('action'=>'recover')) ?>" onsubmit="return returnform(this);">
            <input class="btn_a" name="check" type="submit" value="<?php echo lang_admin('restore_files');?>" onclick="return confirm('<?php echo lang_admin("this_operation_involves_file_deletion_and_replacement");?>');">
            <span class="wait"><?php echo lang_admin('please_wait_patiently_while_restoring_files');?></span>
        </form>
    <?php } ?>

<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
<a class="btn btn-info" href="<?php echo FileCheck::GetUrl(array('action'=>'check')) ?>"><?php echo lang_admin('return');?></a>

<?php
}
?>
