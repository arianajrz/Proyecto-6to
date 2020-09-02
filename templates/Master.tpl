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

				{if $vista=="GuardarUsuario"}
					{include file='CrearUsuario.tpl'}

					{else if $vista == "VerUsuarios"}
                     {include file='VerUs.tpl'}

				{else if $vista == "AgregarLibro"}
					{include file='AgregarL.tpl'}

					{else if $vista == "VerLibros"}
					{include file='InventarioL'}

					{else if $vista == "RetirarLibro"}
					{include file='QuitarL'}

					{else if $vista == "VerUniforme"}
                    {include file='InventarioU'}

                    {else if $vista == "AgregarUniforme"}
                    {include file='AgregarU'}

                    {else if $vista == "RetirarUniforme"}
                    {include file='QuitarU'}

					
					{else if $vista == ""}

					{else}
						
					{/if}

			</div>

                
            </div>       
            </div>
        </div><br>
    {/if}
{include file='Cabeceras/Footer.tpl'}

