<?php
/* Smarty version 3.1.39, created on 2021-03-22 10:45:20
  from 'D:\XAMPP\htdocs\kalkulator\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60586730b9a170_91832522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebbefd13e5c44f4a88e9c7a8d8cbe6909d29cd60' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\kalkulator\\templates\\main.tpl',
      1 => 1616406095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60586730b9a170_91832522 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-gem"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Kalkulator kredytowy</h1>
								<p>Ten kalkulator obliczy ratę miesięczną</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#kredyt">Oblicz swoją ratę!</a></li>	
                                                               
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

	
							<article id="kredyt">
								<h2 class="major">Oblicz swoja rate!</h2>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192293986660586730b97ba1_20578665', 'content');
?>


							</article>



					</div>


                        <!-- Footer -->
                            
					<footer id="footer">
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104676589260586730b984c4_30814975', 'stopka');
?>

						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>
			</div>
				
<!-- BG -->
			<div id="bg"></div>
		

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html>
<?php }
/* {block 'content'} */
class Block_192293986660586730b97ba1_20578665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_192293986660586730b97ba1_20578665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Tu powinien być kalkulator ... <?php
}
}
/* {/block 'content'} */
/* {block 'stopka'} */
class Block_104676589260586730b984c4_30814975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stopka' => 
  array (
    0 => 'Block_104676589260586730b984c4_30814975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Tu powinna być stopka <?php
}
}
/* {/block 'stopka'} */
}
