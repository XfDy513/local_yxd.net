<?php if (!defined('ROOT')) exit('Can\'t Access !'); ?>
<div class="main-right-box">

    <div class="box">
        <?php if (count($_POST) == 0) { ?>

            <form id="systemform"  method="post" action="<?php echo url('filecheck/filecheck/action/file_check');?>" onsubmit="return returnform(this);">
                <ul class="nav nav-tabs" role="tablist">
                    <li>
                        <a href="#"  onclick="gotourl(this)"   data-dataurl="index.php?case=filecheck&act=filecheck&action=file_check&admin_dir=<?php echo get('admin_dir');?>&site=default">
                            <?php echo lang_admin('document_proofreading');?>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#"  onclick="gotourl(this)"   data-dataurl="index.php?case=filecheck&act=filecheck&action=trojan_scan&admin_dir=<?php echo get('admin_dir');?>&site=default">
                            <?php echo lang_admin('trojan_horse_killing');?></a>
                    </li>
                    <input name="check" type="hidden" value="1">
                    <input name="name" type="hidden" value="system">
                    <li>
                        <a href="#" onclick="returnform($('#systemform'));">
                            <?php echo lang_admin('system_document_proofreading');?>
                        </a>
                    </li>
                </ul>
            </form>

            <div class="blank30"></div>

            <form class="checkform" method="post" action="<?php echo uri();?>" onsubmit="return returnform(this);">
                <input  name="scan" value="1" type="hidden">
                <input class="btn btn-primary"  type="submit" value="<?php echo lang_admin('trojan_horse_killing');?>">
                <span class="wait"><?php echo lang_admin('scanning_files_please_wait_patiently');?></span>

                <a class="btn btn-danger" href="#"  onclick="gotourl(this)"   data-dataurl="<?php echo FileCheckApp::GetUrl(array('action' => 'trojan_history')) ?>"><?php echo lang_admin('trojan_recovery_area');?></a>

            </form>


        <?php } ?>

        <?php if (count($_POST) > 0) { ?>
        <?php if ($scan->pass == false) { ?>
        <div class="alert alert-warning alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <span class="glyphicon glyphicon-warning-sign"></span>	<?php echo lang_admin('suspicious_files_found');?>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr class="th">
                    <th class="s_out"><?php echo lang_admin('choice');?></th>
                    <th class="catid" align="center"><?php echo lang_admin('positions');?></th>
                    <th class="catname" align="center"><?php echo lang_admin('mold');?></th>
                    <th class="catname" align="center"><?php echo lang_admin('file_name');?></th>
                </tr>
                </thead>
                <tbody>
                <form class="checkform" method="post" action="<?php echo FileCheckApp::GetUrl(array('action' => 'trojan_remove')) ?>" onsubmit="return returnform(this);">
                    <?php foreach ($scan->fail as $fail) { ?>
                        <tr>
                            <td><input type="checkbox" name="files[]" value="<?php echo $fail->file; ?>" checked="checked"></td>
                            <td><?php echo $fail->file; ?></td>

                            <?php foreach ($fail->codes as $code) { ?>
                                <td><?php echo $code->name; ?></td>
                                <td><?php highlight_string($code->code); ?></td>

                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="line"></div>
        <div class="blank30"></div>
        <input  name="remove" value="1" type="hidden">
        <input class="btn btn-danger" name="remove" type="submit" value="<?php echo lang_admin('delete');?>">
        <!--input class="btn_a" name="replace" type="submit" value="清除可疑代码，保留文件"-->
        <span class="wait"><?php echo lang_admin('deleting_files_in_progress');?></span>
        <a class="btn btn-success" href="#"  onclick="gotourl(this)"   data-dataurl="<?php echo FileCheckApp::GetUrl(array('action' => 'trojan_scan')) ?>"><?php echo lang_admin('return');?></a>
        </form>

    </div>
    <?php } ?>

    <?php if ($scan->pass) { ?>
        <div class="blank30"></div>
        <div class="blank30"></div>
        <div class="alert alert-warning alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <span class="glyphicon glyphicon-warning-sign"></span>	<strong><?php echo lang_admin('scan_results');?>：</strong> 	[	<?php echo lang_admin('no_suspicious_files_found');?>	]
        </div>
        <div class="line"></div>
        <div class="blank30"></div>
        <a class="btn btn-primary" href="#"  onclick="gotourl(this)"   data-dataurl="<?php echo FileCheckApp::GetUrl(array('action' => 'trojan_scan')) ?>"><?php echo lang_admin('return');?></a>
    <?php } ?>

</div>
<?php } ?>


