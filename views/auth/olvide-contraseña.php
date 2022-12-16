<h1 class="nombre-pagina">¿Olvidaste tu contraseña?</h1>
<p class="descripcion-pagina">Restablece tu contraseña</p>

<form class="formulario" action="/contraseña" method="POST">
    <div class="campo">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Correo Electrónico" />
    </div>
    <input type="submit" class="boton" value="Enviar" />
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesión </a>
    <a href="/contraseña">¿Aún no tienes cuenta? Pincha aquí</a>
</div>