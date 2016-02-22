<?php /* Smarty version 3.1.27, created on 2016-02-18 08:56:37
         compiled from "C:\xampp\htdocs\manavi\application\views\templates\map\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2548556c57935a2d6d8_51721427%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd901b01717e3661d5ffbc4969c5db3df994ffc74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\manavi\\application\\views\\templates\\map\\form.tpl',
      1 => 1455782189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2548556c57935a2d6d8_51721427',
  'variables' => 
  array (
    'base' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c57935ad0005_17084110',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c57935ad0005_17084110')) {
function content_56c57935ad0005_17084110 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2548556c57935a2d6d8_51721427';
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

            <div id="cesiumContainer" class="span9">
                <?php echo '<?php ';?>echo validation_errors('title'); <?php echo '?>';?>
            </div><!--/span-->
            <?php echo '<script'; ?>
>
                var viewer = new Cesium.Viewer('cesiumContainer', {
                    imageryProvider: new Cesium.createOpenStreetMapImageryProvider({
                        url: 'http://cyberjapandata.gsi.go.jp/xyz/std/'
                    }),
                    terrainProvider: new Cesium.JapanGSITerrainProvider({}),
                    baseLayerPicker: false
                });
                var scene = viewer.scene;
                scene.globe.depthTestAgainstTerrain = true;
            <?php echo '</script'; ?>
>
        </form>
    </div><!--/row-->
    <hr>
</div><!--/.fluid-container-->

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>