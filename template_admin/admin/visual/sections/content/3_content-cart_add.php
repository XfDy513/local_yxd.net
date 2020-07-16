<!-- 组件 -->
<div class="lyrow visual-drag-box box-element visual-inline-block">
    <span class="drag label btn-group drag-container">
        <button type="button" class="btn btn-black"><i class="icon-grid"></i></button>
        <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
        <ul class="dropdown-menu btn-black-dropdown-menu">
            <li><a title="{lang_admin('layer_attributes')}" data-target="#div-config" role="button" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i>{lang_admin('layer_attributes')}</a></li>
            <li><a title="{lang_admin('delete')}" class="remove"><i class="glyphicon glyphicon-remove"></i>{lang_admin('delete')}</a></li>
        </ul>
    </span>
	<div class="preview">
		<img src="{$base_url}/common/plugins/visual/images/section/cart_add.png">
		<p>{lang_admin('add_to_cart')}</p>
	</div>
	<div class="view">
		<div class="content-buy-joinshoppingcart">
			<div class="codearea">
                <div class="shop-box">
                    <div class="shop-title">
                        <h1>#[#$archive['title']#]#</h1>
                        <p>#[#$archive['subtitle']#]#</p>
                    </div>
                    <div class="shop-oldprice">
                        <dt>#[#lang('price')#]#</dt>
                        <dd>#[#lang('unit')#]# <span>#[#$archive['oldprice']#]#</span></dd>
                    </div>
                    <div class="shop-price">
                        <dt>#[#lang('membership_price')#]#</dt>
                        <dd>#[#lang('unit')#]# <span id="shop-price"></span></dd>
                    </div>
                    <div class="shop-salesnum">
                        <dt>#[#lang('sales_volume')#]#</dt>
                        <dd>#[#$archive['salesnum']#]#</dd>
                    </div>
                    <div class="shop-salesnum">
                        <dt>#[#lang('stock')#]#</dt>
                        <dd id="shop-inventory"></dd>
                    </div>
                    <form>
                        <div class="shop-type">
                            <div id="columntype"></div>
                            <div class="shop-type-info">
                                <dt>#[#lang('numbers')#]#</dt>
                                <dd>
                                    <input type=text name=amount class="shop-number" id="thisnum" value="1" onfocus=""  onblur="setthisnum($('#shop-inventory').text(),'#[#url('archive/getshoppinginventory/aid/'.$archive['aid'])#]#')">
                                    <button class="shop-number-btn1" type=button value="上" onClick="setadd('#[#url('archive/getshoppinginventory/aid/'.$archive['aid'])#]#')"><span class="glyphicon glyphicon-menu-up"></span></button>
                                    <button class="shop-number-btn2" type=button value="下" onClick="setmin()"><span class="glyphicon glyphicon-menu-down"></span></button>
                                </dd>
                            </div>
                        </div>
                        <div class="shop-buy">
                            <a target="_blank" href="javascript:void(0);" onclick="getshoping(#[#$archive['aid']#]#,true)" name="buy" class="buy">#[#lang('buy')#]#</a>
                            <a name="buy" href="javascript:void(0);" onclick="getshoping(#[#$archive['aid']#]#,false)"  id="dialog_link" class="btnCart shoppingcart"  data-toggle="modal" data-target=".bs-example-modal-lg-shopping" aria-hidden="true"><span class="glyphicon glyphicon-shopping-cart"></span>#[#lang('makeorders')#]#</a>
                        </div>
                        <div id="buyurl">
                        </div>
                    </form>
                </div>

			</div>
			<div class="viewarea">
                <div class="shop-box">
                    <div class="shop-title">
                        <h1>路由器</h1>
                        <p></p>
                    </div>
                    <div class="shop-oldprice">
                        <dt>价格</dt>
                        <dd>￥ <span>999</span></dd>
                    </div>
                    <div class="shop-price">
                        <dt>会员价</dt>
                        <dd>￥ <span id="shop-price">500.00</span></dd>
                    </div>
                    <div class="shop-salesnum">
                        <dt>销售量</dt>
                        <dd>0</dd>
                    </div>
                    <div class="shop-salesnum">
                        <dt>库存</dt>
                        <dd id="shop-inventory">188</dd>
                    </div>

                    <div class="shop-type">
                        <div id="columntype"><div class="visual-conent-car-btn"><div id="" class="shop-type-info"><p></p></div></div></div>
                        <div class="shop-type-info">
                            <dt>数量</dt>
                            <dd>
                                <input type="text" name="amount" class="shop-number" id="thisnum" value="1" onfocus="">
                                <button class="shop-number-btn1" type="button" value="上" ><span class="glyphicon glyphicon-menu-up"></span></button>
                                <button class="shop-number-btn2" type="button" value="下" ><span class="glyphicon glyphicon-menu-down"></span></button>
                            </dd>
                        </div>
                    </div>
                    <div class="shop-buy">
                        <a target="_blank" name="buy" class="buy">购买</a>
                        <a name="buy" id="dialog_link" class="btnCart shoppingcart" data-toggle="modal" data-target=".bs-example-modal-lg-shopping" aria-hidden="true"><span class="glyphicon glyphicon-shopping-cart"></span>加入购物车</a>
                    </div>
                    <div id="buyurl">
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
<!-- 组件结束 -->