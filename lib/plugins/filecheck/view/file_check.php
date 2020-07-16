<?php if (!defined('ROOT'))exit('Can\'t Access !'); ?>

<style type="text/css">
    .alert span {font-weight:bold;color:red;}
</style>





<div class="main-right-box">

    <div class="box">
        <div class="blank30"></div>
        <input class="btn btn-primary" type="button" value="<?php echo lang_admin('safety_protection_setting');?> " onclick="gotourl(this)"   data-dataurl="<?php echo url::create('config/system/set/filechecksite');?>" data-dataurlname="<?php echo lang_admin('safety_protection_setting');?>" />
        <div class="blank30"></div>
        <?php if (count($_POST) == 0) { ?>
            <div class="alert alert-warning alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <span class="glyphicon glyphicon-warning-sign"></span>	<?php echo lang_admin('after_installation_is_highly_recommended');?>，<strong style="color:red"><?php echo lang_admin('backup_files_and_generate_verification_information');?></strong>
            </div>
        <?php } ?>
        <div class="blank30"></div>
        <form id="systemform"  method="post" action="<?php echo url('filecheck/filecheck/action/file_check');?>" onsubmit="return returnform(this);">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#"  onclick="gotourl(this)"   data-dataurl="index.php?case=filecheck&act=filecheck&action=file_check&admin_dir=<?php echo get('admin_dir');?>&site=default"><?php echo lang_admin('document_proofreading');?></a></li>
                <li><a href="#"  onclick="gotourl(this)"   data-dataurl="index.php?case=filecheck&act=filecheck&action=trojan_scan&admin_dir=<?php echo get('admin_dir');?>&site=default"><?php echo lang_admin('trojan_horse_killing');?></a></li>
                <input name="check" type="hidden" value="1">
                <input name="name" type="hidden" value="system">
                <li><a href="#" onclick="returnform($('#systemform'));"><?php echo lang_admin('system_document_proofreading');?></a></li>
            </ul>
        </form>
        <div class="blank30"></div>




        <?php if (empty($_POST)) { ?>
            <?php if (empty($datafiles) == false) { ?>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr class="th">
                            <th class="htmldir" align="center"><?php echo lang_admin('date');?></th>
                            <th class="catname" align="center"><?php echo lang_admin('catalog');?></th>
                            <th class="manage" align="center"><?php echo lang_admin('dosomething');?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($datafiles as $dfile) { ?>
                            <tr>
                                <td class="htmldir" align="center">
                                    <?php echo $dfile->date; ?>
                                    <?php if (empty($dfile->dir) == false) { ?>
                                </td>
                                <td class="catname" align="center">
                                    <?php echo $dfile->dir; ?>
                                    <?php } ?>
                                    <?php if (empty($dfile->file) == false) { ?>
                                        <?php echo lang_admin('file');?>:
                                        <?php echo $dfile->file; ?>
                                    <?php } ?>
                                </td>
                                <td class="manage" align="center">
                                    <form class="checkform" method="post" action="<?php echo uri();?>" onsubmit="return returnform(this);">
                                        <input name="name" type="hidden" value="<?php echo $dfile->name; ?>">
                                        <input name="check" type="hidden" value="0">
                                        <input name="delete" type="hidden" value="0">
                                        <input class="btn btn-info" name="check" type="button" value="<?php echo lang_admin('scan_for_file_changes');?>"
                                               onclick="$('[name=check]').val(1);returnform(this.form)">
                                        <span class="wait"><?php echo lang_admin('scanning_files_please_wait_patiently');?></span>
                                        <?php if ($dfile->name != 'system') { ?>
                                            <input class="btn btn-danger" name="delete" type="submit" value="<?php echo lang_admin('delete');?>" onclick="if(confirm('<?php echo lang_admin("are_you_sure_you_want_to_delete_this_backup");?>')){$('[name=delete]').val(1);returnform(this.form);};">
                                        <?php } ?>
                                        <?php if ($dfile->name == 'system') { ?>
                                            (<?php echo lang_admin('system_backup');?>)
                                        <?php } ?>
                                        <span class="wait"><?php echo lang_admin('deleting_backup');?></span>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                </div>

            <?php } ?>
            <div class="blank30"></div>
            <div class="line"></div>
            <div class="blank30"></div>
            <a class="btn btn-primary" href="#"  onclick="gotourl(this)"   data-dataurl="<?php echo FileCheckApp::GetUrl(array('action' => 'file_backup')) ?>"><?php echo lang_admin('select_generation_file_verification_information');?></a>
        <?php } ?>



        <?php if (count($_POST) > 0) { ?>

        <?php if ($check->pass == true) { ?>
            <div class="alert alert-warning alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <span class="glyphicon glyphicon-warning-sign"></span>	<strong><?php echo lang_admin('scan_results');?>：</strong> 	[	<?php echo lang_admin('scan_files_together');?><?php echo $check->count; ?><?php echo lang_admin('no_exception_found');?>	]
            </div>
            <div class="line"></div>
            <div class="blank30"></div>
            <a class="btn btn-success" href="#"  onclick="gotourl(this)"   data-dataurl="<?php echo FileCheckApp::GetUrl(array('action' => 'trojan_scan')) ?>"><?php echo lang_admin('return');?></a>
        <?php } ?>

        <?php if ($check->pass == false) { ?>
            <div class="alert alert-warning alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <span class="glyphicon glyphicon-warning-sign"></span>	<strong><?php echo lang_admin('scan_results');?>：</strong>
                <div class="blank10"></div>
                <?php echo lang_admin('scan_files_together');?>：<span><?php echo $check->count; ?></span>个。
                <div class="blank10"></div>
                <?php echo lang_admin('changed_file');?>（<span><?php echo $check->changed_count; ?></span>）个,
                <div class="blank10"></div>
                <?php echo lang_admin('added_file');?>（<span><?php echo $check->created_count; ?></span>）个,
                <div class="blank10"></div>
                <?php echo lang_admin('deleted_files');?>（<span><?php echo $check->lost_count; ?></span>）个。
            </div>
        <?php } ?>

        <div class="blank10"></div>

        <form class="checkform" method="post"
              action="<?php echo FileCheckApp::GetUrl(array('action' => 'file_recover')) ?>" onsubmit="return returnform(this);">
            <?php if ($check->changed_count > 0) { ?>
                <table border="0" cellspacing="0" cellpadding="0" id="table1" width="100%">
                    <thead>
                    <tr class="th">
                        <th colspan="2" algin="center"><?php echo lang_admin('changed_file');?></th>
                    </tr>
                    </thead>
                    <tbody id="listtable">

                    <?php foreach ($check->changed as $file) { ?>
                        <tr>
                            <td algin="center" width="10">
                                <input type="checkbox" name="changed[]" value="<?php echo $file; ?>"/>
                            </td>
                            <td algin="left">
                                <?php echo $file; ?>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <div class="blank10"></div>
            <?php } ?>


            <?php if ($check->created_count > 0) { ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr class="th">
                            <th class="s_out" colspan="2" algin="center"><?php echo lang_admin('added_file');?></th>
                        </tr>
                        </thead>
                        <tbody id="listtable">
                        <?php foreach ($check->created as $file) { ?>
                            <tr>
                                <td align="center"><input type="checkbox" name="created[]" value="<?php echo $file; ?>"/></td>
                                <td algin="left"><?php echo $file; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } ?>

            <?php if ($check->lost_count > 0) { ?>
                <table border="0" cellspacing="0" cellpadding="0" id="table1" width="100%">
                    <thead>
                    <tr class="th">
                        <th colspan="2" algin="center"><?php echo lang_admin('deleted_files');?></th>
                    </tr>
                    </thead>
                    <tbody id="listtable">
                    <?php foreach ($check->lost as $file) { ?>
                        <tr>
                            <td algin="center" width="10">
                                <input type="checkbox" name="lost[]" value="<?php echo $file; ?>"/>
                            </td>
                            <td algin="left">
                                <?php echo $file; ?>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <div class="blank10"></div>

            <?php } ?>

            </ul>

            <div class="blank10"></div>

            <?php if ($check->pass == false) { ?>
                <div class="line"></div>
                <div class="blank30"></div>
                <input name="name" type="hidden" value="<?php echo $check->name; ?>">
                <input  name="check" value="1" type="hidden">
                <input class="btn btn-warning" name="check" type="submit" value="还原文件"
                       onclick="return confirm('<?php echo lang_admin("are_you_sure_you_want_to_process_the_selected_file");?>');">
                <span class="wait"><?php echo lang_admin('please_wait_patiently_while_restoring_files');?></span>

                <a class="btn btn-info" href="#"  onclick="gotourl(this)"   data-dataurl="<?php echo FileCheckApp::GetUrl(array('action' => 'file_check')) ?>"><?php echo lang_admin('return');?></a>

                <div class="blank30"></div>
            <?php } ?>
        </form>

    </div>
</div>

<?php } ?>
