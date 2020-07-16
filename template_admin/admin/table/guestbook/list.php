
<style type="text/css">
    .main-right-box {min-height:auto;}
</style>

<div class="main-right-box">
    <h5>{lang_admin('type_of_messages')}</h5>
    <div class="blank20"></div>
    <div class="box" id="vue-app">
        <input class="btn btn-primary" type="button" value=" {lang_admin('guestbook_manage_settings')} " onclick="gotourl(this)"   data-dataurl="{url::create('config/system/set/guestbook')}" data-dataurlname="{lang_admin('guestbook_manage_settings')}" />
        <input class="btn btn-gray" type="button" value=" {lang_admin('guestbook_field_manage')} " onclick="gotourl(this)"   data-dataurl="{url::create('table/list/table/guestbookfield')}" data-dataurlname="{lang_admin('guestbook_field_manage')}" />
        <div class="blank20"></div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr class="th">
                    <th class="catid" align="center"><!--id-->{lang_admin('sort')}</th>
                    <th class="catname" align="center"><!--username-->{lang_admin('category_name')}</th>
                    <th class="htmldir" align="center"><!--adddate-->{lang_admin('number_of_message_special')}</th>
                    <th class="htmldir" align="center"><!--adddate-->{lang_admin('dosomething')}</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(cat,index) in cateList">
                    <td class="catid" align="center" width="100"><input v-model="cat.sort" v-validate="'numeric'" data-vv-as="{lang_admin('sort')}" name="sort" value="" class="form-control"><span>{{ errors.first('sort') }}</span></td>
                    <td class="catname" align="center"><input data-vv-as="{lang_admin('category_name')}" name="catname" v-validate="'required'" v-model="cat.catname" value="" class="form-control"><span>{{ errors.first('catname') }}</span></td>
                    <td class="htmldir" align="center">{{cat.num}}</td>
                    <td class="htmldir" align="center"><input class="btn btn-default" type="button" @click="delCate(index, cat)" value="{lang_admin('delete')}" > </td>
                </tr>
                <tr>
                    <td class="catname" align="" colspan="4">
                        <input class="btn btn-gray" @click="addCate" type="button" value="{lang_admin('newly_added')}">
                        <input class="btn btn-gray" @click="saveCate" type="button" value="{lang_admin('preservation')}">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="blank30"></div>

<div class="main-right-box">
    <h5>{lang_admin('message_list')}</h5>
    <div class="blank20"></div>
    <div class="box" id="box">

        <form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr class="th">
                        <th class="s_out"><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox"
                                                 name="chkall" class="checkbox" /> </th>
                        <th class="catid"><!--id-->{lang_admin('id')}</th>
                        <th class="catname"><!--username-->{lang_admin('user')}</th>
                        <th class="htmldir"><!--adddate-->{lang_admin('time')}</th>
                        <th class="htmldir"><!--reply-->{lang_admin('type')}</th>
                        <th class="htmldir"><!--title-->{lang_admin('title')}</th>
                        {loop $guestbookfielddata $guestbookfiel}
                        <?php $newshowname="showname_".lang::getisadmin(); ?>
                        <th class="htmldir"><!--tel-->{$guestbookfiel['showname'][$newshowname]}</th>

                        {/loop}
                        <th class="htmldir"><!--content-->{lang_admin('content')}</th>
                        <th class="htmldir"><!--reply-->{lang_admin('reply')}</th>
                        <th class="htmldir"><!--checked-->{lang_admin('state')}</th>
                        <th class="manage">{lang_admin('dosomething')}</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $cats = cate::option();
                    ?>
                    {loop $data $d}
                    <tr>

                        <td class="s_out" ><input onclick="c_chang(this)" type="checkbox" value="{$d.$primary_key}" name="select[]" class="checkbox" /> </td>

                        <td class="catid">{cut($d['id'])}</td>
                        <td class="catname">{$d['username']}</td>
                        <td class="htmldir">{$d['adddate']}</td>
                        <td class="htmldir"><?php echo $cats[$d['catid']];?></td>
                        <td align="left"  class="htmldir">{$d['title']}</td>
                        {loop $guestbookfielddata $guestbookfiel}
                        <td class="htmldir">{$d[$guestbookfiel['name']]}</td>
                        {/loop}
                        <td align="left" class="htmldir">{$d['content']}</td>
                        <td class="htmldir">{$d['reply']}</td>
                        <td class="htmldir"><?php if($d['checked']=='1'){ echo '<i class="glyphicon glyphicon-ok"></i>';}else{echo '<i class="glyphicon glyphicon-remove"></i>';}?></td>

                        <td class="manage">
                            <a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/edit/table/$table/id/$d[$primary_key]");?>" title="{lang_admin('reply')}" class="btn btn-gray">{lang_admin('reply')}</a>

                            <a onclick="if(confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotourl(this);};" href="#"
                               data-dataurl="<?php echo modify("/act/delete/table/$table/id/$d[$primary_key]/token/$token");?>" title="{lang_admin('delete')}" class="btn btn-default">{lang_admin('delete')}</a>
                        </td>
                    </tr>
                    {/loop}

                    </tbody>
                </table>


                <div class="page"><?php if(get('table')!='type' && front::get('case')!='field') echo pagination::adminhtml($record_count); ?></div>

            </div>
            <div class="blank30"></div>
            <div class="line"></div>
            <div class="blank30"></div>

            <input type="hidden" name="batch" value="" class="button" />

            <input type="button" value="{lang_admin('delete')}" name="delete" onclick="if(getSelect(this.form) && confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='delete'; returnform(this.form);}" class="btn btn-gray" style="margin-right: 15px;"/>



            <div class="btn-group dropup">
                <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {lang_admin('to_examine')} <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-del">

                    <li>
                        <input type="button" value=" {lang_admin('to_examine')} " name="check" onclick="if(getSelect(this.form)  && confirm('{lang_admin('are_audits_confirmed')}')){ this.form.action='<?php echo modify('act/batch',true);?>';this.form.batch.value='check';returnform(this.form);}" class="btn btn-gray" />
                    </li>

                    <li>
                        <input  class="btn btn-gray" type="button" value=" {lang_admin('cancellation_of_audit')} " name="check" onclick="if(getSelect(this.form)  && confirm('{lang_admin('are_you_sure_to_cancel_the_audit')}')){ this.form.action='<?php echo modify('act/batch',true);?>';this.form.batch.value='cancelcheck';returnform(this.form);}"/>
                    </li>
                </ul>
            </div>

            <input  class="btn btn-gray" type="button" value=" {lang_admin('empty')} " name="clearall" onclick="if( (confirm('{lang_admin('do_you_really_want_to_empty')}'))){this.form.action='<?php echo modify("/act/clearall/table/$table/token/$token");?>'; this.form.batch.value='clearall'; returnform(this.form);}" />

            <input  class="btn btn-gray" type="button" value=" {lang_admin('export')} " name="export" onclick="this.form.action='<?php echo modify("/act/batch/table/$table/token/$token");?>'; this.form.batch.value='export'; this.form.submit();"/>

        </form>
        <div class="blank30"></div>
    </div>
</div>


<div class="blank30"></div>
</div>
</div>

<script src="{$base_url}/common/plugins/guestbook/hprose-html5.js"></script>
<script src="{$base_url}/common/plugins/guestbook/vue.js"></script>
<script src="{$base_url}/common/plugins/guestbook/vee-validate.min.js"></script>
<script src="{$base_url}/common/plugins/guestbook/vee-validate-zh_CN.js"></script>


<script type="text/javascript">
    Vue.use(VeeValidate, {
        events: 'blur',
        locale: 'zhCN',
        //errorBagName: 'errorBags', // change if property conflicts.
        //fieldsBagName: 'fieldBags',
        dictionary: {
            zhCN:__vee_validate_locale__zh_CN.js
        }
    });

    var dictionary = {
        zhCN: {
            messages:{
                required : (field) => field + "{lang_admin('cant_be_empty')}"
            }
        }
    };
    VeeValidate.Validator.localize(dictionary);


    var _uri = "<?php echo url('hprose/handle');?>";
    var client = new hprose.HttpClient(_uri,['getCateList','saveCate','delCate']);
    var vueApp = new Vue({
        el: '#vue-app',
        data : {
            cateList : [],
            visible: false,

        },
        mounted :function () {
            this.getCateList();
        },
        methods : {
            getCateList : function () {
                let _this = this;
                client.getCateList(function(result) {
                    if(result)
                        _this.cateList = result;
                });
            },
            addCate : function () {
                sort = this.cateList ? this.cateList.length+1 : 1;
                obj = {id:0,sort:sort,catname:'',num:0}
                this.cateList.push(obj);
            },
            delCate : function (index,row) {
                let _this = this;
                if(!row.catid) _this.cateList.splice(index, 1);
                if(row.catid && confirm("{lang_admin('are_you_sure_you_want_to_delete_this_category')}")) {
                    client.delCate(row.catid,function(result) {
                        alert(result);
                    });
                    _this.cateList.splice(index, 1);
                }

            },
            saveCate : function () {
                let _this = this;
                this.$validator.validate().then(result => {
                    if (result) {
                        client.saveCate(this.cateList,function(result) {
                            console.log(result);
                            alert(result);
                            _this.getCateList();
                        });
                    }
                });


            }

        }
    })
</script>



