<?php
/* Smarty version 3.1.32, created on 2018-11-14 01:13:12
  from '/Users/fanyongdi/Documents/git/yonderwon/tmplt/trth/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5beb68985550d3_51714677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff87fde220f3aa8e53d09a5c4f930521e470f70a' => 
    array (
      0 => '/Users/fanyongdi/Documents/git/yonderwon/tmplt/trth/head.tpl',
      1 => 1538637178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beb68985550d3_51714677 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="<?php echo APP_NAME;?>
/css/bootstrap.min.css">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="<?php echo APP_NAME;?>
/css/font-awesome/css/font-awesome.min.css">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600|PT+Serif:400,400italic' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo APP_NAME;?>
/css/style.css" id="theme-styles">

    <!--[if lt IE 9]>      
        <?php echo '<script'; ?>
 src="<?php echo APP_NAME;?>
/js/vendor/google/html5-3.6-respond-1.1.0.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    
</head>
<body>
    <header id="el_hdr" style="z-index:9000">
    
    <div class="widewrapper"><div class="login"><a href="javascript:;" onclick="logorreg(1);">登陆</a>&nbsp;|&nbsp;<a href="javascript:;" onclick="logorreg(2);">注册</a></div></div>
        <div class="widewrapper masthead">
            <div class="container">
                <a href="index.php?a=<?php echo APP_NAME;?>
" id="logo">
                    <img src="<?php echo APP_NAME;?>
/img/logo.png" alt="clean Blog">
                </a>

                <div id="mobile-nav-toggle" class="pull-right">
                    <a href="#" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

                <nav class="pull-right clean-nav">
                    <div class="collapse navbar-collapse">
                        <ul class="nav nav-pills navbar-nav">
                          
                             <li>
                                <a href="index.php?a=<?php echo APP_NAME;?>
">Home</a>
                            </li>
                            <li>
                                <a href="index.php?a=<?php echo APP_NAME;?>
&m=about">About</a>
                            </li>
                            <li>
                                <a href="index.php?a=<?php echo APP_NAME;?>
&m=contact">Contact</a>
                            </li>                   
                        </ul>
                    </div>
                </nav>        

            </div>
        </div>

        <div class="widewrapper subheader">
            <div class="container">
                <div class="clean-breadcrumb">
                    <a href="index.php?a=<?php echo APP_NAME;?>
&m=about"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
                </div>

                <div class="clean-searchbox">
                    <form action="#" method="get" accept-charset="utf-8">
                       
                        <input class="searchfield" id="searchbox" type="text" placeholder="Search">
                         <button class="searchbutton" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <div class="widewrapper main"><?php }
}
