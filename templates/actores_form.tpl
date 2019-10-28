    {include file="header.tpl"}
    <form action="insertar" method="post">
                    <input type="text" name="id_actor" placeholder="ID">
                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="number" name="edad"  placeholder="Edad">
                    <input type="text" name="producciones" placeholder="Producciones">
                    <input type="submit" value="Insertar">
    </form>
    {include file="footer.tpl"}