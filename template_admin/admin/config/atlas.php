<div class="main-right-box">
    <h5>{lang_admin('multipoint_map_settings')}</h5>
    <div class="blank20"></div>
    <div class="box" id="box">

        <div style="padding:15px;">
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <span class="glyphicon glyphicon-warning-sign"></span>	<strong>{lang_admin('tips')}！</strong>
                使用多点地图请先在地图设置内填写百度地图APK！<a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=config&act=system&set=ditu&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-default">{lang_admin('map_settings')}</a>
            </div>


            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <span class="glyphicon glyphicon-warning-sign"></span>	<strong>{lang_admin('tips')}！</strong>
                查询后点击地址会自动生成坐标点信息，如点击后页面未增加，请按键盘F5键刷新当前页面。
            </div>
            <div class="blank5"></div>
        </div>

                {if config::getadmin('ditu_APK')}
                <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak={config::getadmin('ditu_APK')}"></script>
                {else}
                <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
                {/if}

                    <script type="text/javascript" src="http://api.map.baidu.com/library/TextIconOverlay/1.2/src/TextIconOverlay_min.js"></script>
                    <script type="text/javascript" src="http://api.map.baidu.com/library/MarkerClusterer/1.2/src/MarkerClusterer_min.js"></script>
                <div class="col-md-8">

                <strong>{lang_admin('the_address_to_be_queried')}：</strong>
                <div class="blank10"></div>
                <div class="row">
                    <div class="col-xs-12 col-md-10">
                        <input id="baidu-map-address-text" type="text" value="" class="form-control"  onkeyup="searchByStationName();" style="background:#fff;color:#333;" />
                    </div>
                    <div class="col-xs-12 col-md-2">
                        <input type="button" value="{lang_admin('query')}" class="btn btn-info search-btn" onclick="searchByStationName();"/>
                    </div>
                </div>
                <div style="display: none;">{lang_admin('query_results_latitude_and_longitude')}：<input id="result_" type="text" /></div>
                <div class="blank10"></div>
                    <div id="allmap"></div>
                </div>
                    <div class="col-md-4">
                        <div class="blank20"></div>
                        <div class="blank30"></div>
                        <div class="blank30"></div>
                        <div id="allmaplist" >
                                {loop $data $d}
                        <form name="form{$d['id']}" id="form{$d['id']}"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);" >
                <div class="quick-navb-item" onclick="showpoint('{$d['mapx']}','{$d['mapy']}','{$d['mapurl']}');">
                            <div class="list-group-item" onclick="showpoint('{$d['mapx']}','{$d['mapy']}','{$d['mapurl']}');">

                             <p><strong>{lang_admin('name')}：</strong>
                                 <span id="mapname{$d['id']}">{$d['mapname']}</span>
                             </p>
                             <p><strong>{lang_admin('longitude')}：</strong>
                                 <span id="mapx{$d['id']}">{$d['mapx']}</span>，{lang_admin('latitude')}：<span id="mapy{$d['id']}">{$d['mapy']}</span>
                             </p>
                             <p><strong>{lang_admin('address')}：</strong>
                                 <span id="mapurl{$d['id']}">{$d['mapurl']}</span>
                             </p>
                             <p><strong>{lang_admin('tel')}：</strong>
                                 <span id="maptel{$d['id']}">{$d['maptel']}</span>
                             </p>
<p class="mt-10">
                                 <a id="edit{$d['id']}" onclick="setmap({$d['id']});" title="{lang_admin('edit')}"><i class="glyphicon glyphicon-edit"></i></a>

                                 <a id="delete{$d['id']}" onclick="if( confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotourl(this);}" data-dataurl="<?php echo url('config/deletemap/id/'.$d['id'],true);?>" title="{lang_admin('delete')}"><i class="glyphicon glyphicon-trash"></i></a>

                                 <a style="display: none" id="save{$d['id']}" onclick="if(formCheck({$d['id']})){this.form.action='<?php echo url('config/editmap/id/'.$d['id'],true);?>';returnform(this.form);}" title="{lang_admin('preservation')}"><i class="glyphicon glyphicon-floppy-saved"></i></a>
</p>
                                <div calss='clearfix'></div>
                         </div>

                         </div>
                                </form>
                                {/loop}
                            </div>
                        </div>
                    </div>


                    <script type="text/javascript">
                        //编辑信息时
                        function setmap(id){
                            $('#mapname'+id).html("<input type='text' name='mapname' id='mapname' class='form-control' value='"+$('#mapname'+id).text()+"' />");
                            $('#mapy'+id).html("<input type='text' name='mapy' id='mapy' class='form-control' value='"+$('#mapy'+id).text()+"' />");
                            $('#mapx'+id).html("<input type='text' name='mapx' id='mapx' class='form-control' value='"+$('#mapx'+id).text()+"' />");
                            $('#mapurl'+id).html("<input type='text' name='mapurl' id='mapurl' class='form-control' value='"+$('#mapurl'+id).text()+"' />");
                            $('#maptel'+id).html("<input type='text' name='maptel' id='maptel' class='form-control' value='"+$('#maptel'+id).text()+"' />");
                            $('#edit'+id).attr("style","display:none");
                            $('#save'+id).attr("style","display:inline-block");
                        }

                        // 百度地图API功能
                        var markers = new Array();   //先声明
                        var opts = {
                            width : 250, // 信息窗口宽度
                            height: 100, // 信息窗口高度
                            title : "{lang_admin('information_window')}" , // 信息窗口标题
                            enableMessage:true//设置允许信息窗发送短息
                        };
                        var data = JSON.parse('{$atlasmaplist}');  //初始化数据  数据库


                        //创建和初始化地图函数：
                        function initMap(){
                            createMap();//创建地图
                            setMapEvent();//设置地图事件
                            addMapControl();//向地图添加控件
                            addMarker();//向地图中添加marker
                        }

                        //创建地图函数：
                        function createMap(){
                            var map = new BMap.Map("allmap");//在百度地图容器中创建一个地图
                            window.map = map;//将map变量存储在全局
                            if(data.length>0){
                                var point = new BMap.Point(data[0]['mapx'], data[0]['mapy']);//当前坐标经纬可改
                                map.addOverlay(new BMap.Marker(point));//定点坐标红点覆盖

                                //默认选中！也可是点击后选中
                                showpoint(data[0]['mapx'],data[0]['mapy'],data[0]['mapurl']);
                                //默认选中！也可是点击后选中
                            }else{
                                map.centerAndZoom(new BMap.Point('116.404', '39.915'), 12);
                            }
                        }

                        //默认选中！也可是点击后选中
                        function showpoint(lng,lat,site){
                            //先删除后增加
                            for(var i=0; i<markers.length; i++){
                                map.removeOverlay(markers[i]);
                            }
                            /*  markerClusterer.clearMarkers();         //此步骤需要*/
                            if(markers.length>0){
                                markerClusterer = new BMapLib.MarkerClusterer(map, {markers:markers}); //添加
                            }
                            map.centerAndZoom(new BMap.Point(lng, lat), 12);
                            var pt = new BMap.Point(lng, lat);
                            var content = "{lang_admin('longitude')}："+lat+"<br/>{lang_admin('latitude')}："+lng+"<br/>{lang_admin('address')}："+site;
                            var infoWindow = new BMap.InfoWindow(content,opts); // 创建信息窗口对象
                            map.openInfoWindow(infoWindow,pt); //开启信息窗口

                        }

                        //地图事件设置函数：
                        function setMapEvent(){
                            map.enableScrollWheelZoom(true);//启用地图滚轮放大缩小
                            map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
                            map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
                            map.enableKeyboard();//启用键盘上下左右键移动地图
                            //地图单击事件
                            var geoc = new BMap.Geocoder();
                            map.addEventListener("click", function(e){
                                //通过点击百度地图，可以获取到对应的point, 由point的lng、lat属性就可以获取对应的经度纬度
                                var pt = e.point;
                                geoc.getLocation(pt, function(rs){
                                    //addressComponents对象可以获取到详细的地址信息
                                    var addComp = rs.addressComponents;
                                    //获取点击地方的省市城村  地址
                                    var site = addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber;
                                    //调用新增节点方法 //将对应的HTML元素设置值
                                    add_getoverlay(pt.lng,pt.lat,site);
                                    //数据库新增
                                    add_database(pt.lng,pt.lat,site);
                                });
                            });
                        }

                        //地图控件添加函数：
                        function addMapControl(){
                            //向地图中添加缩放控件
                            var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_RIGHT,type:BMAP_NAVIGATION_CONTROL_SMALL});
                            map.addControl(ctrl_nav);
                        }

                        //创建marker
                        function addMarker(){
                            //初始化数据格式成地图接收的json
                            $.each(data, function(i, item) {
                                var point = new BMap.Point(item.mapx, item.mapy);
                                var marker = new BMap.Marker(point);
                                var content = "{lang_admin('longitude')}："+item.mapy+"<br/>{lang_admin('latitude')}："+item.mapx+"<br/>{lang_admin('address')}："+item.mapurl;
                                addClickHandler(content, marker); //添加点击事件
                                markers.push(marker);
                            });
                            //添加聚合效果。
                            var markerClusterer = new BMapLib.MarkerClusterer(map, {markers:markers});
                        }

                        //单击弹出框
                        function addClickHandler(content,marker){
                            marker.addEventListener("click",function(e){
                                openInfo(content,e)}
                            );

                        }

                        //创建弹出框
                        function openInfo(content,e){
                            var p = e.target;
                            var point = new BMap.Point(p.getPosition().lng, p.getPosition().lat);
                            var infoWindow = new BMap.InfoWindow(content,opts); // 创建信息窗口对象
                            map.openInfoWindow(infoWindow,point); //开启信息窗口
                        }

                        //点击增加节点
                        var markerClusterer = null;
                        function add_getoverlay(lng,lat,site){
                            var pt = new BMap.Point(lng,lat);
                            var marker = new BMap.Marker(pt);
                            markers.push(marker);
                            // console.log(markers);
                            //先删除后增加
                            for(var i=0; i<markers.length; i++){
                                map.removeOverlay(markers[i]);
                            }
                            /*  markerClusterer.clearMarkers();         //此步骤需要*/
                            if(markers.length>0) {
                                markerClusterer = new BMapLib.MarkerClusterer(map, {markers: markers});
                            }

                            //添加点击事件;
                            var content = "{lang_admin('longitude')}："+pt.lat+"<br/>{lang_admin('latitude')}："+pt.lng+"<br/>{lang_admin('address')}："+site;
                            addClickHandler(content, marker);
                        }

                        //增加节点到数据库
                        function add_database(lng,lat,site){
                            $.post("{url('config/saveatlas')}",{'mapx':lng,'mapy':lat,'mapurl':site},function(result){
                                var data = JSON.parse(result);
                                if(data['atlas'] != ''){
                                    var html=" <form name=\"form"+data['atlas']['id']+"\" id=\"form"+data['atlas']['id']+"\"  action='<?php echo uri();?>' method=\"post\"> ";
                                    html+=" <div class=\"quick-navb-item\" onclick=\"showpoint('"+data['atlas']['mapx']+"','"+data['atlas']['mapy']+"','"+data['atlas']['mapurl']+"');\"><div  class=\"list-group-item\">";

                                    html+=" <p ><strong>{lang_admin('name')}：</strong><span id=\"mapname"+data['atlas']['id']+"\"><input type='text' name='mapname' id='mapname' value='' /></span></p>";
                                    html+="<p ><strong>{lang_admin('longitude')}：</strong><span id=\"mapx"+data['atlas']['id']+"\"><input type='text' name='mapx' id='mapx' value='"+data['atlas']['mapx']+"' /></span>，";
                                    html+="{lang_admin('latitude')}：</strong><span id=\"mapy"+data['atlas']['id']+"\"><input type='text' name='mapy' id='mapy' value='"+data['atlas']['mapy']+"' /></span></p>";
                                    html+="<p ><strong>{lang_admin('address')}：</strong><span id=\"mapurl"+data['atlas']['id']+"\"><input type='text' name='mapurl' id='mapurl' value='"+data['atlas']['mapurl']+"' /></span></p>";
                                    html+="<p ><strong>{lang_admin('tel')}：</strong><span id=\"maptel"+data['atlas']['id']+"\"><input type='text' name='maptel' id='maptel' value='' /></span></p>";
                                    html+="<p class='mt-10'> <input style=\"display: block;\"      type=\"button\" value=\" {lang_admin('preservation')} \"  id=\"save"+data['atlas']['id']+"\" onclick=\"if(formCheck("+data['atlas']['id']+")){this.form.action='<?php echo url('config/editmap', true);?>&id="+data['atlas']['id']+"';returnform(this.form);}\" class=\"btn btn-primary\" />";
                                    html+="<input style=\"margin-left: 10px;display: none\" type=\"button\" value=\" {lang_admin('edit')} \"  id=\"edit"+data['atlas']['id']+"\" onclick=\"setmap("+data['atlas']['id']+");\" class=\"btn btn-primary\" />";
                                    html+="<input style=\"margin-left: 10px;\" type=\"button\" value=\" {lang_admin('delete')} \"  id=\"delete{$d['id']}\" onclick=\"if( confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotoinurl('<?php echo url('config/deletemap', true);?>&id="+data['atlas']['id']+"');}\" class=\"btn btn-primary\" /></p>";
                                    html+="</div>";
                                    html+="</div><div calss='clearfix'></div>";
                                    html+="</form>";
                                    $('#listatlas').after(html);
                                }
                                //弹出提示
                                alert(data['message']);
                            });
                        }

                        initMap();//创建和初始化地图

                        //表单校验
                        function formCheck(id){
                            if($('#mapname'+id).find("#mapname").val().length < 1 || $('#mapname'+id).find("#mapname").val() =='null'){
                                alert("{lang_admin('the_name_cannot_be_empty')}");
                                return  false;
                            };
                            if($('#mapy'+id).find("#mapy").val().length <1 || $('#mapy'+id).find("#mapy").val() =='null'){
                                alert("{lang_admin('latitude_cannot_be_empty')}");
                                return  false;
                            };
                            if($('#mapx'+id).find("#mapx").val().length <1 || $('#mapx'+id).find("#mapx").val() =='null'){
                                alert("{lang_admin('longitude_cannot_be_empty')}");
                                return  false;
                            };
                            if($('#mapurl'+id).find("#mapurl").val().length <1 || $('#mapurl'+id).find("#mapurl").val() =='null'){
                                alert("{lang_admin('address_cannot_be_empty')}");
                                return  false;
                            };
                            if($('#maptel'+id).find("#maptel").val().length <1 || $('#maptel'+id).find("#maptel").val() =='null'){
                                alert("{lang_admin('the_phone_cant_be_empty')}");
                                return  false;
                            };
                            return true;
                        }


                        //查询  地点
                        var localSearch = new BMap.LocalSearch(map);
                        function searchByStationName() {
                            map.clearOverlays();//清空原来的标注
                            var keyword = document.getElementById("baidu-map-address-text").value;
                            if(keyword==''){
                                alert("{lang_admin('please_enter_the_correct_address')}");
                                return;
                            }
                            localSearch.setSearchCompleteCallback(function (searchResult) {
                                var poi = searchResult.getPoi(0);
                                document.getElementById("result_").value = poi.point.lng + "," + poi.point.lat;//这里是追加到对应的input文本框里，可以根据自己的需要来修改
                                map.centerAndZoom(poi.point, 18);
                               /* var marker = new BMap.Marker(new BMap.Point(poi.point.lng, poi.point.lat));  // 创建标注，为要查询的地方对应的经纬度
                                map.addOverlay(marker);*/
                                var content = document.getElementById("baidu-map-address-text").value + "<br/><br/>{lang_admin('longitude')}：" + poi.point.lng + "<br/>{lang_admin('latitude')}：" + poi.point.lat;
                               /* var infoWindow = new BMap.InfoWindow("<p style='font-size:14px;'>" + content + "</p>");
                                marker.addEventListener("click", function () { this.openInfoWindow(infoWindow); });*/
                                // marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
                            });
                            localSearch.search(keyword);
                        }
                    </script>

    <div class="blank30"></div>


</div>

</div>

<style type="text/css">
    /* 百度地图 */
    .BMap_cpyCtrl span span,.BMap_noprint span span,.anchorBL span span {display:none;}
    #allmap {
        display:block;
        width: 100%;
        min-height: 538px;
        -moz-box-shadow:0px 8px 15px #ddd;
        -webkit-box-shadow:0px 8px 15px #ddd;
        box-shadow:0px 8px 15px #ddd;
        outline:3px solid #ddd;
    }
    #allmaplist {height:538px;overflow-y:auto;}
    .list-group-item { min-height:120px;di margin:0px 10px 10px 10px; padding:15px 30px; -moz-box-shadow:0px 8px 15px #eee;
        -webkit-box-shadow:0px 8px 15px #eee;
        box-shadow:0px 8px 15px #eee;border:1px solid #eee; font-size:12px;}

    .list-group-item:hover {background:#424950;color:#fff;-moz-box-shadow:0px 8px 15px #aaa;
        -webkit-box-shadow:0px 8px 15px #aaa;
        box-shadow:0px 8px 15px #aaa;-o-transition: all 0.15s, 0.15s;
        -moz-transition: all 0.15s, 0.15s;
        -webkit-transition: all 0.15s, 0.15s;
        border:1px solid #424950;
    }
    .list-group-item p {margin-bottom:0px;}
    .quick-navb-item {margin-bottom:20px;}
    .list-group-item p a { margin-right:5px;}
    .list-group-item:hover .form-control {color:#fff;}
    .list-group-item:hover p a i {color:#fff;}
    .form-control {margin-bottom:5px;}
.mt-10 {margin-top:10px;}
</style>
