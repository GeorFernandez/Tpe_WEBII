<?php
/* Smarty version 3.1.33, created on 2019-11-01 17:17:38
  from 'C:\xampp\htdocs\Tpe_WEBII\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbc5aa2318f61_83133797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9faf130e6bbdd5837af12763d96e624e34eb9d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe_WEBII\\templates\\header.tpl',
      1 => 1572529462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbc5aa2318f61_83133797 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <base href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
' >
                <link rel="stylesheet" href="./css/bootstrap.min.css">
                <link rel="stylesheet" href="./css/style.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
                <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
            </head>
            <body id="index">
                <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

                <header>
                    <nav class="navbar navbar-expand-lg navbar-light home navbar fixed-top ">
                        <a class="navbar-brand" href=''><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-item nav-link active" href='actores'>Actores</a>
                                <a class="nav-item nav-link active" href='doramas'>Doramas</a>
                                <a class="nav-item nav-link active" href='login' target="_blank">Registrarse</a> 
                            </div>
                        </div>
                    </nav>
                </header>

            
<?php }
}
