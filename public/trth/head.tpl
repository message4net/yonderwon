<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{$title}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="trth/css/bootstrap.min.css">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="trth/css/font-awesome/css/font-awesome.min.css">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600|PT+Serif:400,400italic' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="trth/css/style.css" id="theme-styles">

    <!--[if lt IE 9]>      
        <script src="trth/js/vendor/google/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->
    
</head>
<body>
    <header id="el_hdr" style="z-index:9000">
    
    <div class="widewrapper"><div class="login"><a href="javascript:;" onclick="logorreg(1);">登陆</a>&nbsp;|&nbsp;<a href="javascript:;" onclick="logorreg(2);">注册</a></div></div>
        <div class="widewrapper masthead">
            <div class="container">
                <a href="index.php?a=trth" id="logo">
                    <img src="trth/img/logo.png" alt="clean Blog">
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
                                <a href="index.php?a=trth">Home</a>
                            </li>
                            <li>
                                <a href="index.php?a=trth&m=about">About</a>
                            </li>
                            <li>
                                <a href="index.php?a=trth&m=contact">Contact</a>
                            </li>                   
                        </ul>
                    </div>
                </nav>        

            </div>
        </div>

        <div class="widewrapper subheader">
            <div class="container">
                <div class="clean-breadcrumb">
                    <a href="index.php?a=trth&m=about">{$title}</a>
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

    <div class="widewrapper main">