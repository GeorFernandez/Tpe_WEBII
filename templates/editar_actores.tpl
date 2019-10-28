{include file="header.tpl"}
    <div class="contenido">       
        <h1>Mis Actores</h1>
            <form action="EditarActor" method="post">
                    <input type="text" name="id_actor" placeholder="ID">
                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="number" name="edad"  placeholder="Edad">
                    <input type="text" name="producciones" placeholder="Producciones">
                    <input type="submit" value="Editar">
            </form>
        <table id="info">
            <tr>
                <th class="th">ID</th>
                <th class="th">Nombre</th>
                <th class="th">Edad</th>
                <th class="th">Producciones</th>
                <th class="th">Borrar</th>
                <th class="th">Editar</th>
            </tr>  
            {foreach from=$actor item=dato}
               <tr> <td>{$actor->id_actor}</td><td>{$actor->nombre}</td><td>{$actor->edad}</td><td>{$actor->producciones}</td> 
                    <td><a href='EditarActor/{$actor->id_actor}'>EDITAR</a></td>
               </tr>
            {/foreach}
        </table>
    </div>
{include file="footer.tpl"}