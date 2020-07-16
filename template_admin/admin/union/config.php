<div class="main-right-box">
    <h5>{lang_admin('extension_module')}</h5>
    <div class="blank20"></div>
    <div class="box" id="box">




        <ul class="nav nav-tabs" role="tablist">
            <li class="active">
                <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=union&act=config&table=union&admin_dir={get('admin_dir',true)}&site=default" data-dataurlname="{lang_admin('to_configure')}">
                    {lang_admin('to_configure')}
                </a>
            </li>
            <li>
                <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=union&act=visit&table=union&admin_dir={get('admin_dir',true)}&site=default" data-dataurlname="{lang_admin('visit')}">
                    {lang_admin('visit')}
                </a>
            </li>
            <li>
                <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=union&act=reguser&table=union&admin_dir={get('admin_dir',true)}&site=default" data-dataurlname="{lang_admin('register')}">
                    {lang_admin('register')}
                </a>
            </li>
            <li>
                <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=union&act=pay&table=union&admin_dir={get('admin_dir',true)}&site=default" data-dataurlname="{lang_admin('settlement')}">
                    {lang_admin('settlement')}
                </a>
            </li>
        </ul>

        <div class="blank30"></div>


        <form method="post" name="form1" action="<?php if(front::$act=='edit') $id="/id/".$data[$primary_key]; else $id=''; echo modify("/act/".front::$act."/table/".$table.$id);?>"
              onsubmit="return returnform(this);">



            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('state')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <select name="setting[enabled]" class="form-control select">
                        <option value="1" {if $data['enabled']==1}selected{/if}>{lang_admin('enabling')}</option>
                        <option value="0" {if $data['enabled']==0}selected{/if}>{lang_admin('close')}</option>
                    </select>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('cookie_save_time')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <select name="setting[keeptime]" class="form-control select">
                        <option value="86400" {if $data['keeptime']==86400}selected{/if}>{lang_admin('one_day')}</option>
                        <option value="604800" {if $data['keeptime']==604800}selected{/if}>{lang_admin('one_week')}</option>
                        <option value="2592000" {if $data['keeptime']==2592000}selected{/if}>{lang_admin('one_month')}</option>
                        <option value="7776000" {if $data['keeptime']==7776000}selected{/if}>{lang_admin('first_quarter')}</option>
                        <option value="15552000" {if $data['keeptime']==15552000}selected{/if}>{lang_admin('half_a_year')}</option>
                        <option value="31536000" {if $data['keeptime']==31536000}selected{/if}>{lang_admin('one_year')}</option>
                    </select>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('initial_profit_margin')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <div class="row">
                        <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5">
                            <input name='setting[profitmargin]' type='text' id='profitmargin' value='{$data['profitmargin']}' class="form-control">
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2">
                            %
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('visitor_default_jump_address')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <input name='setting[forward]' type='text' id='forward' value='{$data['forward']}' class="form-control">
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('effective_ip_gift_points')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <div class="row">
                        <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5">
                            <input name='setting[rewardnumber]' type='text' id='rewardnumber' value='{$data['rewardnumber']}' class="form-control">
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2">
                            <select name="setting[rewardtype]" class="form-control select">
                                <option value="point" >{lang_admin('spot')}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('registered_user_gift_points')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <div class="row">
                        <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5">
                            <input name='setting[regrewardnumber]' type='text' value='{$data['regrewardnumber']}' class="form-control">
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2">
                            <select name="setting[regrewardtype]" class="form-control select">
                                <option value="point" >{lang_admin('spot')}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="blank30"></div>
            <div class="line"></div>
            <div class="blank30"></div>
            <input  name="submit" value="1" type="hidden">
            <input type="submit"  value="{lang_admin('submitted')}" class="btn btn-primary btn-lg" />

        </form>
        <div class="blank30"></div>
    </div>
</div>