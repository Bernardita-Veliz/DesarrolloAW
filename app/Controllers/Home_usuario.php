<?php

namespace App\Controllers;
use App\Models\usuarioModel;
use App\Models\InventarioModel;
use App\Models\ProyectoModel;
use App\Models\Usuarios;
use App\Models\producto_bodega;
use App\Models\producto_guardado;


class Home_usuario extends BaseController
{

    public function inicio(){
        return view('login');
    }
    public function login_usuario(){
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');
        $Usuario = new Usuarios();

        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

        if (count($datosUsuario) > 0 &&
        password_verify($password, $datosUsuario[0]['password'])) {
            $data = [
                         "usuario" => $datosUsuario[0]['usuario'],
                         "tipo_usuario"    => $datosUsuario[0]['tipo_usuario']
            ];
            $session = session();
            $session->set($data);

            return redirect()->to(base_url('/usuario/inicio'))->with('mensaje','1');
        }else {
            return redirect()->to(base_url('/'))->with('mensaje','0');
        }
    }


}
    ?>