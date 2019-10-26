{include file="header.tpl"}
            
        <h1>Mis Actores</h1>
            <form action="insertar" method="post">
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="number" name="edad"  placeholder="Edad">
                <input type="text" name="producciones" placeholder="Producciones">
                <input type="submit" value="Insertar">
            </form>
        {foreach from=$lista_actores item=actor}
               <li> {$actor->nombre}: {$actor->edad}: {$actor->producciones} <a href='BorrarActor/{$actor->id_actor}'>BORRAR</a>     <a href='editar/{$actor->id_actor}'>EDITAR</a>  </li>
        {/foreach}
{include file="footer.tpl"}