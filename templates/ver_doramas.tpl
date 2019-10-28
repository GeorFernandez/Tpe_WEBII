{include file="header.tpl"}
            
        <h1>Mis Doramas</h1>
            <form action="insertarDorama" method="post">
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="genero"  placeholder="Género">
                <input type="text" name="sinopsis"  placeholder="Sinopsis">
                <input type="number" name="cant_capitulos"  placeholder="Cantidad de capítulos">
                <input type="boolean" name="en_emision" placeholder="En emisión">
                <input type="text" name="id_actor"  placeholder="Id Actor">
                  {* <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Seleccione el ID de su actor:
                        </button>
            
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">GYOO</a>
                                <a class="dropdown-item" href="#">KJSO</a>
                                <a class="dropdown-item" href="#">LDWO</a>
                                <a class="dropdown-item" href="#">LJGI</a>
                                <a class="dropdown-item" href="#">LJIU</a>
                        </div>
                    </div>
                </div> *}
                <input type="submit" value="InsertarDorama">
            </form>
        {foreach from=$lista_doramas item=dorama}
               <li> {$dorama->nombre}&nbsp | &nbsp  {$dorama->genero}&nbsp | &nbsp  {$dorama->sinopsis}&nbsp | &nbsp  {$dorama->cant_capitulos}&nbsp | &nbsp  {$dorama->en_emision}&nbsp | &nbsp  {$dorama->id_actor}
                    <a href='BorrarDorama/{$dorama->id_dorama}'>&nbsp BORRAR</a> 
                     <form action="insertarDorama" method="post">
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="genero"  placeholder="Género">
                <input type="text" name="sinopsis"  placeholder="Sinopsis">
                <input type="number" name="cant_capitulos"  placeholder="Cantidad de capítulos">
                <input type="boolean" name="en_emision" placeholder="En emisión">
                <input type="text" name="id_actor"  placeholder="Id Actor">
                <input type="submit" value="InsertarDorama">
            </form>
                    <a href='EditarDorama/{$dorama->id_dorama}'>&nbsp EDITAR</a>
               </li>
        {/foreach}
{include file="footer.tpl"}