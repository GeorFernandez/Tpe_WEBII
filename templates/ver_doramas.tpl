{include file="header.tpl"}
            
        <h1>Mis Doramas</h1>
            <form action="insertar" method="post">
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="genero"  placeholder="Género">
                <input type="text" name="sinopsis"  placeholder="Sinopsis">
                <input type="number" name="cant_capitulos"  placeholder="Cantidad de capítulos">
                <input type="boolean" name="en_emision" placeholder="En emisión">
                <input type="number" name="id_actor"  placeholder="Id Actor">
                <input type="submit" value="Insertar">
            </form>
        {foreach from=$lista_doramas item=dorama}
               <li> {$dorama->nombre}: {$dorama->genero}: {$dorama->sinopsis}: {$dorama->cant_capitulos}: {$dorama->en_emision} <a href='borrar/{$dorama->id_dorama}'>BORRAR</a>     <a href='editar/{$dorama->id_dorama}'>EDITAR</a>  </li>
        {/foreach}
{include file="footer.tpl"}