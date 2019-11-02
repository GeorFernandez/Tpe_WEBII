{include file="header.tpl"}
    <div class="contenido">       
        <h1>Mis Doramas</h1>
           
        <table id="info">
                <tr>
                    <th class="th">Nombre</th>
                    <th class="th">Género</th>
                    <th class="th">Sinopsis</th>
                    <th class="th">Capítulos</th>
                    <th class="th">En emisión</th>
                    <th class="th">ID Actor</th>
                    <th class="th">Nombre Actor</th>
                    <th class="th">Borrar</th>
                    <th class="th">Editar</th>
                </tr>
            {foreach from=$lista_doramas item=dorama}
                <tr> 
                    <td>{$dorama->nombre}</td>
                    <td>{$dorama->genero}</td>
                    <td>{$dorama->sinopsis}</td>
                    <td>{$dorama->cant_capitulos}</td>
                    <td>{$dorama->en_emision}</td>
                    <td>{$dorama->id_actor}</td>
                    <td>{$dorama->nombreActor}</td>
                    <td><a href='borrarDorama/{$dorama->id_dorama}'>BORRAR</a></td> 
                    <td><a href='formularioEdicionDorama/{$dorama->id_dorama}'>EDITAR</a></td>
                </tr>
            {/foreach}
        </table>
         <form action="insertarDorama" method="post">
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="genero"  placeholder="Género">
                <input type="text" name="sinopsis"  placeholder="Sinopsis">
                <input type="number" name="cant_capitulos"  placeholder="Cantidad de capítulos">
                <input type="text" name="en_emision" placeholder="En emisión">
                <input type="text" name="id_actor"  placeholder="Actor"> 
                {* <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categoria</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            {foreach from=$lista_actores item=actor}
                                <a class="dropdown-item" href="#">{$actor->nombre}</a>
                            {/foreach}
                    </div>
                </div> *}
                <input type="submit" value="InsertarDorama">
            </form>
    </div>
{include file="footer.tpl"}