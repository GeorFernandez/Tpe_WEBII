{include file="header.tpl"}
    <div class="contenido">       
        <h1>Mis Doramas</h1>
        
            <form action="insertarDorama" method="post">
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="genero"  placeholder="Género">
                <input type="text" name="sinopsis"  placeholder="Sinopsis">
                <input type="number" class= "tinyInt" name="cant_capitulos"  placeholder="Capítulos">
                <input type="boolean" class= "tinyInt" name="en_emision" placeholder="En emisión">
                <form class="form-inline">
                    <select class="seleccion custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Seleccione el ID de su actor</option>
                        <option value="1">GYOO</option>
                        <option value="2">LJGI</option>
                        <option value="3">LJIU</option>
                    </select>
                    <button type="submit" class="btn btn-primary my-1">Submit</button>
                </form>
                <input type="submit" value="Insertar Dorama">
            </form>
        <table id="info">
                <tr>
                    <th class="th">Nombre</th>
                    <th class="th">Género</th>
                    <th class="th">Sinopsis</th>
                    <th class="th">Capítulos</th>
                    <th class="th">En emisión</th>
                    <th class="th">ID Actor</th>
                    <th class="th">Borrar</th>
                    <th class="th">Editar</th>
                </tr>
            {foreach from=$lista_doramas item=dorama}
                <tr> 
                    <td>{$dorama->nombre}</td><td>{$dorama->genero}</td><td>{$dorama->sinopsis}</td><td>{$dorama->cant_capitulos}</td><td>{$dorama->en_emision}</td><td>{$dorama->id_actor}</td>
                    <td><a href='BorrarDorama/{$dorama->id_dorama}'>BORRAR</a></td> 
                    <td><a href='EditarDorama/{$dorama->id_dorama}'>EDITAR</a></td>
                </tr>
            {/foreach}
        </table>
    </div>
{include file="footer.tpl"}