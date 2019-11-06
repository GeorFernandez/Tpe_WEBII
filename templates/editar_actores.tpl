{include file="header.tpl"}
    <div class="contenido">       
        <h1>Mis Actores</h1>
            <form action="editarActor/{$actor->id_actor}" method="POST">
                   
                    <input type="text" value= '{$actor->nombre}' name="nombre" placeholder="Nombre">
                    <input type="number"  value= '{$actor->edad}'name="edad"  placeholder="Edad">
                    <input type="text"  value= '{$actor->producciones}'name="producciones" placeholder="Producciones">
                    <input type="hidden" value= '{$actor->id_actor}'name="id_actor" placeholder="Id actor">
                    <input type="submit" value='Guardar' name="save">
            </form>
        
    </div>
{include file="footer.tpl"}