<?php /* Smarty version 3.1.27, created on 2016-05-20 04:37:01
         compiled from "C:\wamp\www\phpavanzado\styles\templates\Overall\nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18753573e784d7bd5c5_29548743%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc4de3613dcbba22770238c0f73d543bb7649959' => 
    array (
      0 => 'C:\\wamp\\www\\phpavanzado\\styles\\templates\\Overall\\nav.tpl',
      1 => 1463711666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18753573e784d7bd5c5_29548743',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_573e784d7c5402_66425727',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_573e784d7c5402_66425727')) {
function content_573e784d7c5402_66425727 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18753573e784d7bd5c5_29548743';
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul>
    </div>
  </div>
</nav><?php }
}
?>