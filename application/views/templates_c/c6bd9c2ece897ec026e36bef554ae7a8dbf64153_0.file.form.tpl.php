<?php /* Smarty version 3.1.27, created on 2016-02-22 08:00:49
         compiled from "C:\xampp\htdocs\ManaVi\application\views\templates\map\ol\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2023556cab221c50c04_06890739%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6bd9c2ece897ec026e36bef554ae7a8dbf64153' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ManaVi\\application\\views\\templates\\map\\ol\\form.tpl',
      1 => 1456123355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2023556cab221c50c04_06890739',
  'variables' => 
  array (
    'base' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56cab221cfca27_23607178',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cab221cfca27_23607178')) {
function content_56cab221cfca27_23607178 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2023556cab221c50c04_06890739';
echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php $_smarty_tpl->tpl_vars["base"] = new Smarty_Variable("/minavicms/", null, 0);?>

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
                        <!--                    <tr>
                                                <th>日時</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input class="sp_start_date" type="text" name="date" value="" />
                                                </td>
                                            </tr>-->
                        <tr>
                            <th>タイトル</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="title"></td>
                        </tr>
                        <tr>
                            <th>英語タイトル</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="title_en"><br/>
                                <label><input type="checkbox" name="in_english">自動翻訳を利用する<br/></label>
                            </td>
                        </tr>
                        <tr>
                            <th>場所</th>
                        </tr>
                        <tr>
                            <td>
                                <div id="map" style="width:500px; height:500px" onload="mapInit();"></div>
                                
                                    <?php echo '<script'; ?>
>
                                        var map;
                                        var projection3857 = new OpenLayers.Projection("EPSG:3857");
                                        var projection4326 = new OpenLayers.Projection("EPSG:4326");
                                        var deflonlat = new OpenLayers.LonLat(139.6489569, 35.8574244).transform(projection4326, projection3857);
                                        var markers = new OpenLayers.Layer.Markers("Markers");
                                        var size = new OpenLayers.Size(34, 37);
                                        var offset = new OpenLayers.Pixel(-(size.w/2), -size.h);


                                        $(function mapInit(){

                                        map = new OpenLayers.Map({
                                        div: "map",
                                        projection: projection3857,
                                        displayProjection: projection4326
                                    });

                                    map.addLayer(new OpenLayers.Layer.XYZ("標準地図",
                                    "http://cyberjapandata.gsi.go.jp/xyz/std/${z}/${x}/${y}.png", {
                                    attribution: "<a href='http://portal.cyberjapan.jp/help/termsofuse.html'>国土地理院</a>",
                                    maxZoomLevel: 18
                                }));

                                map.setCenter(deflonlat, 10);
    
                                var marker = new OpenLayers.Marker(deflonlat);

                                markers.addMarker(marker);
                                map.addLayer(markers);

                                map.events.register('mouseup', map, onClick);
        
                                function onClick(evt) {
                                var lonlat = map.getLonLatFromViewPortPx(evt.xy);
                                lonlat.transform(projection3857, projection4326);
                                $("#lat").val(lonlat.lat);
                                $("#lon").val(lonlat.lon);

                                var opx = map.getLayerPxFromViewPortPx(evt.xy);
                                marker.map = map;
                                marker.moveTo(opx);
                            }
                        });
                                    <?php echo '</script'; ?>
>
                                
                                緯度：<input type="text" id="lon" name="lon">
                                経度：<input type="text" id="lat" name="lat">
                            </td>
                        </tr>
                    </table>
                    <select name="area_id">
                        <option value="0">場所を選択</option>
                        <option value="1">ニセコ町</option>
                        <option value="2">鎌倉市</option>
                        <option value="0">無</option>
                    </select>
                    <div class="file"><small>背景画像アップロード</small><input name="bg_file" type="file"></div>
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