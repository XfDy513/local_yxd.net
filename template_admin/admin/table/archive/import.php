<div class="main-right-box">
<h5>{lang_admin('batch_import')}</h5>
<div class="blank20"></div>
<div class="box" id="box">

    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('tips')}</div>
        <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
    <div class="alert alert-warning alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <span class="glyphicon glyphicon-warning-sign"></span>	{lang_admin('batch_import_compatibility')}

    </div>
        </div>
    </div>

<form action="<?php if(front::$act=='edit') $id="/id/".$data[$primary_key]; else $id=''; echo modify("/act/".front::$act."/table/".$table.$id);?>"
      method="post" enctype="multipart/form-data" name="form1"  onsubmit="return returnform(this);">
<input type="hidden" name="onlymodify" value=""/>
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('batch_import')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">

    <a href="javascript:;" class="file">{lang_admin('select_files')}
        <input type="file" name="excelFile" id="excelFile">
    </a>

    <input type="button"  name="filebuttonUpload"  id="filebuttonUpload"
           onclick="return ajaxexcelFile('excelFile','{url('tool/uploadfile',false)}','#uploading');" value="{lang_admin('upload')}" class="btn btn-primary" />
    <img id="uploading" src="{$base_url}/images/loading.gif" style="display:none;">
    <input class="btn btn-danger" value="{lang_admin('delete')}" type="button" name="delbutton"  onclick="attachment_delect(get('attachment_id').value)" />

<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('batch_import_compatibility')}"></span>
</div>
</div>

<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"></div>
        <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<input type="submit" name="submit" value="{lang_admin('submitted')}" class="btn btn-primary btn-lg" />
        </div>
    </div>
</form>
<div class="blank30"></div>
</div>
</div>