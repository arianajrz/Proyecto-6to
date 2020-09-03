{include file='Cabeceras/Header.tpl' titulo='Home'}
    {if isset($e)}
        {if isset($men)}
            <h4 class="center-align blue">{$men}</h4>
        {/if}
        
            <div class="row">
            <div class="col s4">
            {include file = "Menu.tpl"}
            </div>
            <div class="col s8">

				{if $vista=="CrearUsuario"}
					{include file='CrearUsuario.tpl'}

					{else if $vista == "VerUsuarios"}
                     {include file='VerUs.tpl'}

				{else if $vista == "AgregarLibro"}
					{include file='AgregarL.tpl'}

					{else if $vista == "VerLibros"}
					{include file='InventarioLibros.tpl'}

					{else if $vista == "RetirarLibro"}
					{include file='QuitarL'}

					{else if $vista == "VerUniformes"}
                    {include file='InventarioU.tpl'}

                    {else if $vista == "AgregarUniformes"}
                    {include file='AgregarU.tpl'}

                    {else if $vista == "RetirarUniforme"}
                    {include file='QuitarU.tpl'}

					
					{else if $vista == ""}

					{else}
						
					{/if}

			</div>

                
            </div>       
            </div>
        </div><br>
    {/if}
{include file='Cabeceras/Footer.tpl'}

