<?php /* Smarty version 3.1.27, created on 2016-02-22 12:58:13
         compiled from "C:\xampp\htdocs\ManaVi\application\views\templates\question\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2086056caf7d5525833_52705884%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e30c0a380186336df5735df8cf21f2004227ddb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ManaVi\\application\\views\\templates\\question\\form.tpl',
      1 => 1456142290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2086056caf7d5525833_52705884',
  'variables' => 
  array (
    'base' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56caf7d55e4ed9_36422444',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56caf7d55e4ed9_36422444')) {
function content_56caf7d55e4ed9_36422444 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2086056caf7d5525833_52705884';
echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php $_smarty_tpl->tpl_vars["base"] = new Smarty_Variable("http://localhost/manavi/", null, 0);?>


    <?php echo '<script'; ?>
 type="text/javascript">

        var stMarker;
        var edMarker;
        var stP;
        var edP;
        var map_canvas;
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        $(function () {
            /* レンダーDatePicker UI */
            //$.datepicker.setDefaults($.extend($.datepicker.regional['ja']));
            //$('.datepicker').datepicker({ showAnim:'slideDown', dateFormat:'yy-mm-dd' });
            var initPos = new google.maps.LatLng(42.804882, 140.687429);
            var myOptions = {
                noClear: true,
                center: initPos,
                zoom: 10,
                //mapTypeId: google.maps.MapTypeId.TERRAIN, // 地図の種別
                scaleControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map_canvas = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            directionsDisplay.setMap(map_canvas);
            var kmlOptions = {
                preserveViewport: true
            }
            var kmlUrl = 'http://www.snowwhite.hokkaido.jp/minavicms/material/place.kml';
            var kmlLayer = new google.maps.KmlLayer({
                url: kmlUrl,
                map: map_canvas
            });
            //地図クリックイベントの登録
            google.maps.event.addListener(map_canvas, 'click',
                    function (event) {
                        clickMapObject(event, 0);
                    })

            google.maps.event.addListener(kmlLayer, 'click', function (event) {
                clickMapObject(event, 1)
            });
        });
        function clickMapObject(event, layerFlg) {
            if (stMarker && edMarker) {
                stMarker.setMap(null);
                edMarker.setMap(null);
                stMarker = null;
                edMarker = null;
            } else if (!stMarker) {
                stP = event.latLng;
                stMarker = new google.maps.Marker({
                    position: event.latLng,
                    draggable: true,
                    map: map_canvas
                });
            } else if (!edMarker) {
                if (layerFlg == 0) {
                    alert('避難所を選択してください');
                } else {
                    edP = event.latLng;
                    edMarker = new google.maps.Marker({
                        position: event.latLng,
                        draggable: true,
                        map: map_canvas
                    });
                    infotable(stMarker.getPosition().lat(),
                            edMarker.getPosition().lng());
                    var request = {
                        origin: stP, /* 出発地点 */
                        destination: edP, /* 到着地点 */
                        travelMode: google.maps.DirectionsTravelMode.WALKING	/* トラベルモード */
                    };
                    directionsService.route(request, function (response, status) {
                        if (status == google.maps.DirectionsStatus.OK) {
                            directionsDisplay.setDirections(response);
                        }
                    });
                }
            }

        }

//HTMLtagを更新
        function infotable(lat, lon) {
            $("#lat").val(lat);
            $("#lon").val(lon);
        }
        ;
        function reloadMaker() {

            var initPos = new google.maps.LatLng(42.804704, 140.687493);
            var myOptions = {
                noClear: true,
                center: initPos,
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.TERRAIN, // 地図の種別
                scaleControl: true
            };
            var map_canvas = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            /* ロード時に初期化 */
            var initPos = new google.maps.LatLng(42.804295, 140.679425);
            var marker = new google.maps.Marker({
                position: initPos, /* マーカーを立てる場所の緯度・経度 */
                map: map_canvas, /*マーカーを配置する地図オブジェクト */
                title: 'ニセコ'
            });
            // To add the marker to the map, call setMap();
            marker.setMap(map_canvas);
        }
        
        <?php echo '</script'; ?>
>
    

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3">
                <div class="well sidebar-nav">
                    <ul class="nav nav-list">
                        <li class="nav-header">Sidebar</li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </div><!--well -->
            </div><!--/span-->

            <form action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
Pointaccept/index" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">

                <div class="span9">
                    <?php echo '<?php ';?>echo validation_errors('title'); <?php echo '?>';?>
                    
                    <h3 class="page-title">
                        場所 <small>場所を選択</small>
                        <table class="form">
                            <tr>
                                <th>タイトル</th>
                            </tr>
                            <tr>
                                <th>場所</th>
                            </tr>
                            <tr>
                                <td>
                                    <div id="map_canvas" style="width:70%; height:800px;padding-left: 50px;"></div>
                                    緯度：<input type="text" id="lon" name="lon">
                                    経度：<input type="text" id="lat" name="lat">
                                </td>
                            </tr>
                        </table>
                    </h3>

                    
                    <p><input type="submit" value="決定！" class="btn btn-primary btn-large"></p>
                        
                </div><!--/span-->

            </form>

        </div><!--/row-->
        <hr>
    </div><!--/.fluid-container-->

    <?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>