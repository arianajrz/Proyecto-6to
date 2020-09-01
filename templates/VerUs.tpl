<script>
    $(document).ready(function() {
		$('select').material_select();
    });

 <!-- add css style -->

     <style>

    
     </style>
    
	 
</script>

	<div class="row">
	  <div class="col s11  cyan darken-3">
    <font color="White" face="Impact">
		<h5 class="center-align">Usuarios</h5>
    </font>
	  </div>
	</div>

	<form class ="col s11 center-align" method="post" action="?controller=User&action=VerUsuarios">

		<table>
            <thead>
              <tr>
                  <th><font color="Black"><b>Nombre</b></font></th>
                  <th><font color="Black"><b>Apellido</b></font></th>
                  <th><font color="Black"><b>Género</b></font></th>
                  <th><font color="Black"><b>Fecha de Nac</b></font></th>
                  <th><font color="Black"><b>Usuario</b></font></th>
                  <th><font color="Black"><b>Contraseña</b></font></th>
              </tr>
            </thead>


            <tbody>
                {foreach $dato as $d}
                  <tr>
                    <td><b> {$d['Nombre']} </b></td>
                    <td><b> {$d['Apellido']} </b></td>
                    <td><b> {$d['Género']} </b></td>
                    <td><b> {$d['Fecha de Nac']} </b></td>
                    <td><b> {$d['Usuario']} </b></td>
                    <td><b> {$d['Contraseña']} </b></td>
                  </tr>
                {/foreach}
            </tbody>
      </table>
	</form>
