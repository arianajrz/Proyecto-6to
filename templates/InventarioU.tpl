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
		<h5 class="center-align"> Inventario General de Uniformes </h5>
    </font>
	  </div>
	</div>

	<form class ="col s11 center-align" method="post" action="?controller=User&action=VerUniformes">

		<table class="responsive-table">
            <thead>
              <tr>
                  <th><font color="Black"><b>Prenda</b></font></th>
                  <th><font color="Black"><b>Talla</b></font></th>
                  <th><font color="Black"><b>Precio</b></font></th>
                  <th><font color="Black"><b>Cantidad</b></font></th>
              </tr>
            </thead>

            <tbody>
                {foreach $dato as $d}
                  <tr>
                    <td><b> {$d['Prenda']} </b></td>
                    <td><b> {$d['Talla']} </b></td>
                    <td><b> {$d['Precio']} </b></td>
                    <td><b> {$d['Cantidad']} </b></td>
                  </tr>
                {/foreach}
            </tbody>
      </table>
	</form>
