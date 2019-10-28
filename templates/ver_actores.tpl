{include file="header.tpl"}
    <div class="contenido">       
        <h1>Mis Actores</h1>
          
        <table id="info">
            <tr>
                <th class="th">ID</th>
                <th class="th">Nombre</th>
                <th class="th">Edad</th>
                <th class="th">Producciones</th>
            </tr>  
            {foreach from=$lista_actores item=actor}
               <tr> <td>{$actor->id_actor}</td><td>{$actor->nombre}</td><td>{$actor->edad}</td><td>{$actor->producciones}</td> 
                    <td><a href='BorrarActor/{$actor->id_actor}'>BORRAR</a></td>
               </tr>
            {/foreach}
        </table>
        <a href='BorrarActor/{$actor->id_actor}'>INSERTAR ACTOR</a>
        <a href='BorrarActor/{$actor->id_actor}'>EDITAR ACTOR</a>
    </div>
{include file="footer.tpl"}