{include file="header.tpl"}
            
        <h1>Mis Actores</h1>
            <form action="insertar" method="post">
                    <input type="text" name="id_actor" placeholder="ID">
                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="number" name="edad"  placeholder="Edad">
                    <input type="text" name="producciones" placeholder="Producciones">
                    <input type="submit" value="Insertar">
            </form>
        <div id="info">
            {foreach from=$lista_actores item=actor}
               <li> {$actor->id_actor} &nbsp | &nbsp {$actor->nombre}&nbsp | &nbsp {$actor->edad}&nbsp | &nbsp {$actor->producciones} 
                    <a href='BorrarActor/{$actor->id_actor}'>&nbsp BORRAR</a>
                        <form action="EditarActor" method="post">
                           
                            <input type="text" name="nombre" placeholder="Nombre">
                            <input type="number" name="edad"  placeholder="Edad">
                            <input type="text" name="producciones" placeholder="Producciones">
                            <a href='EditarActor/{$actor->id_actor}'>&nbsp EDITAR</a>      
                        </form>
               </li>
            {/foreach}
        </div>
{include file="footer.tpl"}