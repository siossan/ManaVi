<?php /* Smarty version 3.1.27, created on 2016-02-18 11:19:28
         compiled from "C:\xampp\htdocs\manavi\application\views\templates\map\google\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2791856c59ab0902d48_62470444%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1fb9d5f9548e63af24cfea1416d7c46ccd11448' => 
    array (
      0 => 'C:\\xampp\\htdocs\\manavi\\application\\views\\templates\\map\\google\\form.tpl',
      1 => 1455790762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2791856c59ab0902d48_62470444',
  'variables' => 
  array (
    'base' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c59ab0afa957_78128572',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c59ab0afa957_78128572')) {
function content_56c59ab0afa957_78128572 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2791856c59ab0902d48_62470444';
echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php $_smarty_tpl->tpl_vars["base"] = new Smarty_Variable("/minavicms/", null, 0);?>


    <?php echo '<script'; ?>
 type="text/javascript">

        $(function() {
            /* レンダーDatePicker UI */
            //$.datepicker.setDefaults($.extend($.datepicker.regional['ja']));
            //$('.datepicker').datepicker({ showAnim:'slideDown', dateFormat:'yy-mm-dd' });

            var initPos = new google.maps.LatLng(42.804882, 140.687429);
            var myOptions = {
                noClear: true,
                center: initPos,
                zoom: 10,
                //mapTypeId: google.maps.MapTypeId.TERRAIN, // 地図の種別
                scaleControl: true
            };
            var map_canvas = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

//            var kmlOptions = {
//                preserveViewport: true
//            }

            //var kmlUrl = 'http://kmlnetworklink.gsi.go.jp/kmlnetworklink/gsi_map.kml';
            //var kmlLayer = new google.maps.KmlLayer(kmlUrl, kmlOptions);
            //kmlLayer.setMap(map_canvas);

        });

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
                <div id="map_canvas" style="width:70%; height:800px;padding-left: 50px;"></div>
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