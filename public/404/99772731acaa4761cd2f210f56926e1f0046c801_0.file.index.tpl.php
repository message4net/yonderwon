<?php
/* Smarty version 3.1.32, created on 2018-10-04 15:11:41
  from '/Users/fanyongdi/Documents/git/yonderwon/tmplt/404/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb6118dc106f2_35809237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99772731acaa4761cd2f210f56926e1f0046c801' => 
    array (
      0 => '/Users/fanyongdi/Documents/git/yonderwon/tmplt/404/index.tpl',
      1 => 1535555738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb6118dc106f2_35809237 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>这个.. 页面没有找到！！！</title>
		<base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
" />
		<style type="text/css">
			body{ margin:0; padding:0; background:#efefef; font-family:Georgia, Times, Verdana, Geneva, Arial, Helvetica, sans-serif; }
			div#mother{ margin:0 auto; width:943px; height:572px; position:relative; }
			div#errorBox{ background: url(404/404_bg.png) no-repeat top left; width:943px; height:572px; margin:auto; }
			div#errorText{ color:#39351e; padding:146px 0 0 446px }
			/*div#errorText p{ width:453px; font-size:8px; line-height:16px; }*/
			div#errorText { width:453px; font-size:14px; line-height:16px; }
			div.link{ /*background:#f90;*/ height:50px; width:145px; float:left; }
			div#home{ margin:20px 0 0 444px;}
			div#contact{ margin:20px 0 0 25px;}
			h1{ font-size:40px; margin-bottom:35px; }
		</style>
	</head>
	<body>
		<div id="mother">
			<div id="errorBox">
				<div id="errorText">
					<h1>Sorry..页面没有找到！</h1>
				<!-- 	<p>-->
						似乎你所寻找的网页已移动或丢失了。<br/>
						It seemed the page which you looking for was removed or lost.<br/><br/>
						或者也许你只是键入错误了一些东西。<br/><br/>
						请不要担心，这没事。如果该资源对你很重要，请与管理员联系。<br/>
						It is okay, and not worth to worry.If it is important to you,please contact administrator.<br/><br/>
						火星不太安全，我可以免费送你回地球
					<!--</p> -->
				</div>
				<a href="index.php" title="返回首页">
					<div class="link" id="home"></div>
				</a>
				<a href="###" title="联系管理员">
					<div class="link" id="contact"></div>
				</a>
			</div>
		</div>
	</body>
</html><?php }
}
