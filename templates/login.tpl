{include file="header.tpl"}
    <div class="contenido"> 
        <h1>Sumate a nuestra comunidad de colaboradores!!!</h1>
        <h2>Ingresá tus datos para registrarte </h2>
        <form class="form-inline" method="POST" action="register">
            <div class="form-group">
                <input type="email" class="form-control" id="exampleFormControlInput1" name='email' placeholder="Email">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">Contraseña</label>
                <input type="password" class="form-control" id="inputPassword2" name='password' placeholder="Contraseña">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Enviar</button>
        </form>
        
        <div>
            {$mensaje}
        </div>
        <h2>Si ya te registraste, iniciá sesión </h2>
        <form class="form-inline" method="POST" action="verify">
            <div class="form-group">
                <input type="email" class="form-control" id="exampleFormControlInput1" name='email' placeholder="Email">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">Contraseña</label>
                <input type="password" class="form-control" id="inputPassword2" name='password' placeholder="Contraseña">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Ingresar</button>
        </form>
        
        <div>
            {$mensaje}
        </div>
    </div>
{include file="footer.tpl"}
