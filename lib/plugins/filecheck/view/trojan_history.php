<!-- 木马恢复区 -->
<div class="main-right-box">
			<h5><?php echo lang_admin('restore_files');?></h5>
			<div class="box">

<div class="alert alert-warning alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
<span class="glyphicon glyphicon-warning-sign"></span>	<?php echo lang_admin('please_be_careful_when_recovering_suspicious_files');?>
</div>

    
 <div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
<th class="htmldir"><?php echo lang_admin('positions');?></th>
<th class="htmldir" align="center"><?php echo lang_admin('time');?></th>
<th class="manage" align="center"><?php echo lang_admin('dosomething');?></th>
</tr>
</thead>
<tbody>
<?php foreach ($history->packages as $package) { ?>
            <form class="checkform" action="" method="post" onsubmit="return returnform(this);">
			<tr>
                <?php foreach ($package->files as $file) { ?>
                        <td class="catname" align="left"><?php echo $file->file; ?></td>
                        <input type="hidden" name="file" value="<?php echo $file->file; ?>"/>
                <?php } ?>
              
                <td class="htmldir" align="center"><?php echo $package->date; ?></td>
                <td class="manage" align="center">
                <input type="hidden" name="package" value="<?php echo $package->file; ?>"/>
                    <input  name="delete" id="delete" value="0" type="hidden">
                <input class="btn btn-warning" name="delete" type="submit" value="<?php echo lang_admin('delete');?>" onclick="$('#delete').val(1);"/>
                <span class="wait"><?php echo lang_admin('deleting_files_in_progress');?></span>
                    <input  name="restore" id="restore" value="0" type="hidden">
                <input class="btn btn-danger" name="restore" type="submit" value="<?php echo lang_admin('reduction');?>" onclick="if(confirm('<?php echo lang_admin("re_ayou_sure_you_want_to_restore_the_suspicious_file");?>')){$('#restore').val(1);} "/>
                <span class="wait"><?php echo lang_admin('recovering_files_in_progress');?></span>
</td>
				</tr>
            </form>
 <?php } ?>
 </tbody>
  </table>
</div>    




<div class="line"></div>
<div class="blank30"></div>
<a class="btn btn-primary" href="#"  onclick="gotourl(this)"   data-dataurl="<?php echo FileCheckApp::GetUrl(array('action' => 'trojan_scan')) ?>"><?php echo lang_admin('return');?></a>

</div>    
</div>    