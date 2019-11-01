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
                </tr>
            {foreach from=$lista_doramas item=dorama}
                <tr> 
                    <td>{$dorama->nombre}</td>
                    <td>{$dorama->genero}</td>
                    <td>{$dorama->sinopsis}</td>
                    <td>{$dorama->cant_capitulos}</td>
                    <td>{$dorama->en_emision}</td>
                    <td>{$dorama->id_actor}</td>
                   
                </tr>
            {/foreach}
        </table>
        <h2>Seleccioná los Doramas de tu Actor Favorito</h2>
            <input type="text" name="id_actor"  placeholder="Actor">
            <input type="submit" value="Buscar">
        
    </div>
{include file="footer.tpl"}