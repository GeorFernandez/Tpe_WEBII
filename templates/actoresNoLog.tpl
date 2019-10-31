{include file="header.tpl"}
    <div class="contenido">       
        <h1>Nuestros Actores Favoritos</h1>
        <table id="info">
            <tr>
                <th class="th">ID</th>
                <th class="th">Nombre</th>
                <th class="th">Edad</th>
                <th class="th">Producciones</th>
                
            </tr>  
            {foreach from=$lista_actores item=actor}
               <tr> 
                    <td>{$actor->id_actor}</td>
                    <td>{$actor->nombre}</td>
                    <td>{$actor->edad}</td>
                    <td>{$actor->producciones}</td> 
                                        
               </tr>
            {/foreach}
        </table>
    </div>
{include file="footer.tpl"}