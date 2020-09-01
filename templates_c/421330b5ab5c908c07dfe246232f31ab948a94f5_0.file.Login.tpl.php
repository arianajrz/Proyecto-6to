<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 18:41:43
  from 'C:\xampp\htdocs\bim4\Proyecto-6to\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e79c75d2f72_80921808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '421330b5ab5c908c07dfe246232f31ab948a94f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bim4\\Proyecto-6to\\templates\\Login.tpl',
      1 => 1598884058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e79c75d2f72_80921808 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(document).ready(function() {
    $('select').material_select();
    });
<?php echo '</script'; ?>
>

      <!-- add css style -->
     <style>

       .login{
        background: rgba(0, 0, 0, .8);
        box-sizing: 10px; 
        padding: 20px;
        width:400px;
        border:1px solid #E1E1E1;
        border-radius:10px;
        color: white;
       }

     .login input {
      color:#fff;
      align-content: center;
      position: absolute;
     }
     body {

      background-size: cover;
     }
    .login label {
      align-content: center;

    }

      

     .login img {

      width:100px;
      height: 75px;
      border-radius: 50%;
      position: relative;
      top: -1px;
      left: calc(50% - 50px);
     } 
     
     .login h1
     {
      font-size:25px;
      text-align: center;
      font-family: sans-serif;
      color: white;
     }




     </style>


       <title>Home</title>
    </head>
    <body background="Recursos/Img/cole.jpg">
    <body>
      
       
       <div class="container">
        <div style="height:40px"></div>
   <header>
    <br>
    
    <br>
  </header>

    <div class="container">
      <div class="row login">
           <div class=" "col s12 l4 offset-l4">
            <form method="post" action="?controller=User&action=ValidarUsuario">
           
             <img class="omg" src="Recursos/Img/logo.png">
            <h1> Inicio de Sesión </h1>
          
           </div>

          <div class= "card-content">
            <div class="row">
           <div class="form-field center-align" >
            <div class="input-field col s6 center-align">
             <i class = "material-icons prefix ">persona</i>
          <input placeholder="Ingrese Usuario" name="usuario" id="usuario" type="text" class="validate">
         
        </div>
        <br>
        <br>
        <br>
        <br>

           <div class="form-field center-align" >
            <div class="input-field col s6 center-align">
            <i class = "material-icons prefix">https</i>
          <input placeholder="Ingrese Contraseña" name="pass" id="pass" type="password" class="validate">
          
          
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
       
        <div class="form-field center-align" >
       <button class="btn waves-effect #008080 " type="submit" name="action">Ingresar
       <i class="material-icons right">send</i>
       </button>
        </div><br>

      </div>
    </form>
    </div>

       </div>
      </div> 
<!--JavaScript at end of body for optimized loading-->
      <?php echo '<script'; ?>
 type="text/javascript" src="Framework/Materialize/js/materialize.js"><?php echo '</script'; ?>
>
    </body>
  </html>

  
<?php }
}
