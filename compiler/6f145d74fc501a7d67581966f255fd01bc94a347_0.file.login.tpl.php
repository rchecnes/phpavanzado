<?php /* Smarty version 3.1.27, created on 2016-05-20 20:48:26
         compiled from "C:\wamp\www\phpavanzado\styles\templates\Public\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6244573f5bfac63152_95189629%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f145d74fc501a7d67581966f255fd01bc94a347' => 
    array (
      0 => 'C:\\wamp\\www\\phpavanzado\\styles\\templates\\Public\\login.tpl',
      1 => 1463769987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6244573f5bfac63152_95189629',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_573f5bfae32060_08042722',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_573f5bfae32060_08042722')) {
function content_573f5bfae32060_08042722 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6244573f5bfac63152_95189629';
echo $_smarty_tpl->getSubTemplate ('Overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<body>

<?php echo $_smarty_tpl->getSubTemplate ('Overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
     

      
<div class="container" style="margin-top: 100px;">
    <center>
    <div style="width: 400px;">
        <div id="ajax"></div>
        <h2 class="form-signin-heading">Iniciar Sesión</h2>
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input type="email" id="user" class="form-control" placeholder="Usuario" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="pass" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me" id="session"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="button" id="send">Iniciar Sesión</button>
    </div>
    </center>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('Overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript">
    window.onload= function(){
        document.getElementById('send').onclick = function(){

            var connect, user, pass, session, form, result;

            user = document.getElementById('user').value;
            pass = document.getElementById('pass').value;
            session = document.getElementById('session').checked ? true: false;

            if (user !='' && pass !='') {

                form = 'user='+user+'&pass='+pass+'&session='+session;

                connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP'); 

                connect.onreadystatechange = function(){
                    if (connect.readyState == 4 && connect.status == 200) {
                        if (parseInt(connect.responseText) == 1) {

                            result = '<div class="alert alert-dismissible alert-danger">';
                            result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
                            result +='<strong>Conectado</strong> <a href="#" class="alert-link">Bienvenidos.</div>';
                            location.href='?view=index';
                            document.getElementById('ajax').innerHTML = result;

                        }else{
                            //error de espacios
                            result = '<div class="alert alert-dismissible alert-danger">';
                            result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
                            result +='<strong>Oh snap!</strong> <a href="#" class="alert-link">Credenciales incorrectas.</div>';

                            document.getElementById('ajax').innerHTML = result;
                        }
                    }else if(connect.readyState !=4){
                        //error de espacios
                        result = '<div class="alert alert-dismissible alert-warning">';
                        result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
                        result +='Procesando.....</div>';

                        document.getElementById('ajax').innerHTML = result;
                    }
                }

                connect.open('POST','?view=login', true);
                connect.send(form);
            }else{
                //error de espacios
                result = '<div class="alert alert-dismissible alert-danger">';
                result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
                result +='<strong>Oh snap!</strong> <a href="#" class="alert-link">Error!.</div>';

                document.getElementById('ajax').innerHTML = result;
            }
            
        }
        
   }

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>