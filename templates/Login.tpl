<script>
    $(document).ready(function() {
    $('select').material_select();
    });
</script>

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
      <script type="text/javascript" src="Framework/Materialize/js/materialize.js"></script>
    </body>
  </html>

  
