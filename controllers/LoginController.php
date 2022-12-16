<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;

class LoginController
{
    public static function login(Router $router)
    {
        $router->render('auth/login');
    }
    public static function logout()
    {
        echo "Desde Logout";
    }
    public static function contraseña(Router $router)
    {
        $router->render('auth/olvide-contraseña', []);
    }
    public static function recuperar()
    {
        echo "Desde Recuperar";
    }
    public static function crear(Router $router)
    {
        $usuario = new Usuario;
        //Alertas 
        $alertas = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();
            if (empty($alertas)) {
                // Comprobar que el usuario no exista
                $resultado = $usuario->existeUsuario();

                if ($resultado->num_rows) {
                    $alertas = Usuario::getAlertas();
                } else {
                    // Encriptar pass
                    $usuario->hashPassword();
                    debuguear($usuario);
                }
            }
        }
        $router->render('auth/crear-cuenta', [
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }
}
