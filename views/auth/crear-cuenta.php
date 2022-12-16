<h1 class="nombre-pagina"> Crear cuenta</h1>
<p class="descripcion-pagina">Rellena el formulario</p>

<?php
include_once __DIR__ . "/../template/alertas.php"
?>

<form class="formulario" method="POST" action="/crear-cuenta">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo s($usuario->nombre) ?>" />
    </div>
    <div class="campo">
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo s($usuario->apellido) ?>" />
    </div>
    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" value="<?php echo s($usuario->telefono) ?>" />
    </div>
    <div class="campo">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Correo electrónico" value="<?php echo s($usuario->email) ?>" />
    </div>
    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Contraseña" />
    </div>
    <input type="submit" value="Crear cuenta" class="boton" />
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesión </a>
    <a href="/contraseña">¿Olvidaste tu contraseña?</a>
</div>