<?php /* Smarty version 3.1.27, created on 2016-02-22 09:35:08
         compiled from "C:\xampp\htdocs\ManaVi\application\views\templates\common\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:659356cac83c687726_93606930%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa370cf5a131c5cde26405c8ae6d4e7b3ef944cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ManaVi\\application\\views\\templates\\common\\header.tpl',
      1 => 1456130104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '659356cac83c687726_93606930',
  'variables' => 
  array (
    'base' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56cac83c746dc4_31128132',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cac83c746dc4_31128132')) {
function content_56cac83c746dc4_31128132 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '659356cac83c687726_93606930';
$_smarty_tpl->tpl_vars["base"] = new Smarty_Variable("/manavi/", null, 0);?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/css/bootstrap-custom.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/css/font-awesome.css" rel="stylesheet">
        <!--[if lt IE 7]>
                <link href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/css/font-awesome-ie7.css" rel="stylesheet">
        <![endif]-->
        <link href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/css/style.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/ico/apple-touch-icon-57-precomposed.png">
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/js/lib/bootstrap/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/js/lib/bootstrap/bootstrap-transition.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/js/lib/bootstrap/bootstrap-alert.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/js/lib/bootstrap/bootstrap-modal.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/js/lib/bootstrap/bootstrap-dropdown.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/js/lib/bootstrap/bootstrap-scrollspy.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/js/lib/bootstrap/bootstrap-tab.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/js/lib/bootstrap/bootstrap-tooltip.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/js/lib/bootstrap/bootstrap-popover.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/js/lib/bootstrap/bootstrap-button.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/js/lib/bootstrap/bootstrap-collapse.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/js/lib/bootstrap/bootstrap-carousel.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/js/lib/bootstrap/bootstrap-typeahead.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/js/common.js"><?php echo '</script'; ?>
>

        <!--openlayers settings-->
        <link rel="stylesheet" href="http://openlayers.org/en/v3.5.0/css/ol.css" type="text/css">
        <?php echo '<script'; ?>
 src="http://openlayers.org/en/v3.5.0/build/ol.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="http://www.openlayers.org/api/OpenLayers.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/js/jquery/zebra-datepicker/zebra_datepicker.js"><?php echo '</script'; ?>
>
        <link href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/css/jquery/zebra-datepicker/zebra_datepicker.css" rel="stylesheet">

        <!-- cesium settings -->
        <?php echo '<script'; ?>
 src="https://cesiumjs.org/Cesium/Build/Cesium/Cesium.js"><?php echo '</script'; ?>
>
        <link href="https://cesiumjs.org/Cesium/Build/Cesium/Widgets/widgets.css" rel="stylesheet">
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
common/js/JapanGSITerrainProvider.js"><?php echo '</script'; ?>
>
        
        <!-- GoogleMaps -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <?php echo '<script'; ?>
 type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&hl=ja"><?php echo '</script'; ?>
>
        
    </head>
    <body>


        <!-- NAVBAR
        ================================================== -->
        <div class="container navbar-wrapper">
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Project name</a>
                    <div class="nav-collapse collapse">


                        <ul class="nav">
                            <li><a href="01.html"><i class="icon-comment"></i>表情＆セリフ</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-map-marker"></i>シーン選択<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-header">Sidebar</li>
                                    <li class="active"><a href="#">シーン1</a></li>
                                    <li><a href="#">シーン2</a></li>
                                    <li><a href="#">シーン3</a></li>
                                    <li><a href="#">シーン4</a></li>
                                    <li class="nav-header">Sidebar</li>
                                    <li><a href="#">hoge</a></li>
                                    <li><a href="#">hoge</a></li>
                                    <li><a href="#">hoge</a></li>
                                    <li><a href="#">hoge</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="02.html"><i class="icon-collapse"></i>座標入力</a></li>

                        </ul>
                    </div><!--nav-collapse -->
                </div><!--navbar-inner -->
            </div><!--navbar -->
        </div><!--container -->
<?php }
}
?>