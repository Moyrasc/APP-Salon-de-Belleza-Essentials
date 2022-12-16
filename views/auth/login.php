<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia Sesión</p>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Introduce tu email" />
    </div>
    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" id="password" placeholder="Introduce tu contraseña" name="password" />
    </div>

    <input type="submit" class="boton" value="Inicio Sesión" />

</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes cuenta? Pincha aquí</a>
    <a href="/contraseña">¿Olvidaste tu contraseña?</a>
</div>