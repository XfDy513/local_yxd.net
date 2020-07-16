<?php if (!defined('ROOT')) exit('Can\'t Access !'); ?>

<div class="main-right-box">
			<h5><?php echo lang_admin('backup_file_fingerprint');?></h5>
			<div class="box">

<script type="text/javascript">
    function selectAll(check) {
        var checkboxs = $(check.form).find(":input[name='files[]']");
        if ($(check).attr("checked") == 'checked')
            checkboxs.attr("checked", 'checked');
        else
            checkboxs.attr("checked", false);
    }

    $(document).ready(function() {
        var checkboxs = $('form.checkform').find(":input[name='files[]']");
        var check_all=$('form.checkform').find(":input.check_all");
        checkboxs.change(function () {
            if(this.checked != 'checked')
                check_all.attr("checked", false);
        });
    });
</script>






<?php if (count($_POST) == 0) { ?>
          <form class="checkform" method="post" action="<?php echo uri();?>" onsubmit="return returnform(this);">
     
       
       <div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
<th class="s_out"><input type="checkbox" class="check_all" value="全选"  onclick="CheckAll(this.form)" name="chkall" class="checkbox" /></th>
                <th class="catname"><?php echo lang_admin('name');?></th>
             </tr>

        </thead>
        <tbody>
		
            <?php foreach ($file_list->dirs as $dir) { ?>
            <tr>
                <td class="s_out" align="center">
                    <input type="checkbox" name="files[]" value="<?php echo $dir; ?>"/>
                </td>
                <td class="catname" align="left">
                    <?php echo $dir; ?>
                </td>
                </tr>
            <?php } ?>

            <?php foreach ($file_list->files as $file) { ?>
                <tr>
                <td class="s_out" align="center">
                    <input type="checkbox" name="files[]" value="<?php echo $file; ?>"/>
                 </td>
                <td class="catname" align="left">
                    <?php echo $file; ?>
                </td>
                </tr>
            <?php } ?>
            
           </tbody>
    </table>
</div>

<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
        <input  name="backup" value="1" type="hidden">
        <input class="btn btn-primary" name="backup" type="submit" value="<?php echo lang_admin('backup_files_and_generate_verification_information');?>">
        <span class="wait"><?php echo lang_admin('backing_up_files_please_wait_patiently');?></span>

		<a class="btn btn-success" href="#"  onclick="gotourl(this)"   data-dataurl="<?php echo FileCheckApp::GetUrl(array('action' => 'file_check')) ?>"><?php echo lang_admin('return');?></a>

    </form>
<?php } ?>

<?php if (count($_POST) > 0) {
    if ($backup->Success == true) { ?>
	<div class="alert alert-warning alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
<span class="glyphicon glyphicon-warning-sign"></span>	<?php echo lang_admin('file_and_verification_information_backed_up');?> </strong>
</div>

<div class="line"></div>
<div class="blank30"></div>
		<a class="btn btn-info" href="#"  onclick="gotourl(this)"   data-dataurl="<?php echo FileCheckApp::GetUrl(array('action' => 'file_check')) ?>"><?php echo lang_admin('return');?></a>

		</div>
		</div>
    <?php }
} ?>


