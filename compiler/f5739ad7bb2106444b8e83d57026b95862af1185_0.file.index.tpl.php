<?php /* Smarty version 3.1.27, created on 2016-05-20 05:10:52
         compiled from "C:\wamp\www\phpavanzado\styles\templates\Home\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17838573e803c39cf79_58743441%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5739ad7bb2106444b8e83d57026b95862af1185' => 
    array (
      0 => 'C:\\wamp\\www\\phpavanzado\\styles\\templates\\Home\\index.tpl',
      1 => 1463713848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17838573e803c39cf79_58743441',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_573e803c3fae99_08346611',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_573e803c3fae99_08346611')) {
function content_573e803c3fae99_08346611 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17838573e803c39cf79_58743441';
echo $_smarty_tpl->getSubTemplate ('Overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<body>

<?php echo $_smarty_tpl->getSubTemplate ('Overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
     

      
<div class="container" style="margin-top: 100px;">
  	<div class="jumbotron">
	    <h1>Bienvenido al curso!</h1>
	    <p class="lead">Plantilla de ejemplo para iniciar el curso de php avanzado.</p>
	    <p><a class="btn btn-lg btn-success" href="http://www.prinick.com" role="button">Comenzar!</a></p>
	    
	    <!-- DELETE / BORRAR botón de donar-->
	    <p>
	    <center>
		    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="KVHH8KYREXUFS">
			<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
			</form>
		</center>
	    <center>También podrías ayudarme con una donación por el curso gratuito ;)</center>
	    </p>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html>
<?php }
}
?>