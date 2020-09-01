
 <!-- add css style -->
     <style>

    .b img {
      width:100px;
      height: 100px;
      border-radius: 20%;
     
     } 

     .c{
       background-image: url(Recursos/Img/Encabezado.jpg); 
     }

    .breadcrumb {
      background-color:Black;
      background-size:cover;
     } 
     </style>

    
   <div class=" c row ">
	<div class="  col s4 " >
		<p class="white-text"> <strong><b>USUARIO: </b>{$usuario}</strong> </p>
		<p class="white-text"> <strong><b>PUESTO: Trabajador </b></strong> </p>
	</div>
	
	<div class=" v col s2 push-s6 ">
		<br>
		<br>
		<br>
		<a href="?controller=Salir&action=CerrarSesion" class="breadcrumb">Salir</a>
		 
	</div>
</div>

