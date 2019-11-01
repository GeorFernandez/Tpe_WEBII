{include file="header.tpl"}
    <div class="contenido">       
        <h1>Mis Doramas</h1>
            <form action="EditarDorama" method="post">
                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="text" name="genero" placeholder="Genero">
                    <input type="text" name="sinopsis" placeholder="Sinopsis">
                    <input type="number" name="cant_capitulos"  placeholder="Capitulos">
                    <input type="text" name="en_emision" placeholder="En emisión">
                     <input type="text" name="id_actor" placeholder="Actor">
                    <input type="submit" value="Editar">
            </form>
        <table id="info">
            <tr>
                <th class="th">Nombre</th>
                <th class="th">Genero</th>
                <th class="th">Sinopsis</th>
                <th class="th">Capitulos</th>
                <th class="th">En emisión</th>
                <th class="th">Actor</th>
                <th class="th">Borrar</th>
                <th class="th">Editar</th>
            </tr>  
            {foreach from=$dorama_edit item=dato}
               <tr> 
                    <td>{$dato->nombre}</td>
                    <td>{$dato->genero}</td>
                    <td>{$dato->sinopsis}</td>
                    <td>{$dato->cant_capitulos}</td> 
                    <td>{$dato->en_emision}</td>
                    <td>{$dato->id_actor}</td>
                    <td><a href='editarDorama/{$dorama->id_dorama}'>EDITAR</a></td>
               </tr>
            {/foreach}
        </table>
    </div>
{include file="footer.tpl"}