{include file='Cabeceras/Header.tpl' titulo='Home'}
    {if isset($e)}
        {if isset($men)}
            <h4 class="center-align blue">{$men}</h4>
        {/if}
        <div class="card-panel">
            <div class="row">
            <div class="col s12">
            {include file = "Menu.tpl"}
            
                   
              
                
            </div>       
            </div>
        </div><br>
    {/if}
{include file='Cabeceras/Footer.tpl'}