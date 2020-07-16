<?php if(count($_POST) == 0) { ?>
    <form ckass="checkform" method="post" action="">
         <input class="btn btn-steeblue" name="make" type="submit" value="<?php echo lang_admin('save_fingerprint_information_of_current_file');?>">
    </form>
<?php } ?>

<?php if(count($_POST) > 0) {
    if($make->Success) { ?>
		<div class="alert alert-warning alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
<span class="glyphicon glyphicon-warning-sign"></span>	<?php echo lang_admin('file_fingerprint_information_saved');?>！
</div>
        <form method="get" action="">
            <input  class="btn btn-info" name="submit" type="hidden" value="<?php echo lang_admin('return');?>">
        </form>
    <?php }
} ?>