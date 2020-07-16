<style type="text/css">
	tr {margin:5px 0px;}
</style>
<div class="main-right-box">
<h5>{lang_admin('form_data')}</h5>
<div class="blank20"></div>
<div class="box" id="box">

    <input type="button" name="Submit" value="{lang_admin('return')}" class="btn btn-secondary" onclick="gotourl(this)"   data-dataurl="{url('form/listform')}">
<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>

<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
            <th class="s_out">{lang_admin('field_name')}</th>
                <th class="catname">{lang_admin('content')}</th>
            </tr>
            </thead>
        <tbody>
{user_cb_data($data,$table)}
            {loop $field $f}
                <?php
$type = setting::$var[front::$get['table']][$f['name']]['filetype'];
                $name=$f['name'];
				$aid = $data['aid'];
                if(!preg_match('/^my_/',$name)) continue;

                if(!isset($data[$name])) $data[$name]='';
                ?>

            <tr>
                <td class="s_out">{$name|lang}</td>
                <td class="catname">{if $type=='file'}<a href="{$data[$name]}" target="_blank" title="{lang_admin('download')}"><i class="glyphicon glyphicon-download-alt"></i></a>{elseif $type=='image'}<img src='{$data[$name]}' width="200"> {else}{$data[$name]}{/if}</td>
		
            </tr>

            {/loop}
        


        </tbody></table>

		</div>

<div class="blank30"></div>
</div>
</div>