<?php

namespace App\Controllers;
use App\Models\usuarioModel;
use App\Models\InventarioModel;
use App\Models\categoriaproducto;
use App\Models\ProyectoModel;
use App\Models\proyecto_guardado;
use App\Models\Usuarios;
use App\Models\producto_bodega;
use App\Models\producto_guardado;
use App\Models\usuario_guardado;
use App\Models\producto_editar;
class Home extends BaseController
{
    public function index()
    {
        $Crud = new UsuarioModel();
        $datos = $Crud->listadousuario();

        $mensaje = session('mensaje');
        $data = [
            "datos" => $datos,
            "mensaje"=> $mensaje
        ];
        return view('login', ["mensaje" => $mensaje]);
    }

    public function inicio(){
        return view('inicio');
    }
    public function admin(){
        return view('admin');
    }
    public function crear_usuario(){
        return view('crear_usuario');
    }

    public function herramientas_inalambricas(){
        return view('herramientas_inalambricas');
    }


    public function proyectos(){
        return view('proyectos');
    }
    public function agregar_proyecto(){
        return view('agregar_proyecto');
    }
    public function agregar_producto(){
        return view('agregar_producto');

    }
    public function materiales(){
        return view('materiales');
    }

    public function editar_producto(){
        return view('editar_producto');
    }
    public function categorias(){
        return view('categorias');
    }
    public function taladros_atornilladores(){
        return view('taladros_atornilladores');
    }



    public function store(){
        $pbodega = new producto_guardado();
        $data = [
            'nombre_producto' => $this->request->getPost('nombre_producto'),
            'codigo'  => $this->request->getPost('codigo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'cantidad'  => $this->request->getPost('cantidad'),
            'nombre_categorias'  => $this->request->getPost('nombre_categorias')
         ];

        $pbodega->save($data);

        return redirect()->to(base_url('/bodega'))->with('msg','Producto Guardado.');
    }



    function guardar_usuario(){
        $usuario = new usuario_guardado();
        $data = [
            'usuario' => $this->request->getPost('usuario'),
            'password' => password_hash($this->request->getPost('password'),PASSWORD_BCRYPT),
             'tipo_usuario'  => $this->request->getPost('tipo_usuario')
         ];

        $usuario->save($data);

        return redirect()->to(base_url('visualizar_usuarios'))->with('msg','Usuario Guardado.');

        }

    public function bodega(){
        $crud = new InventarioModel();
        $datos = $crud->listadoproducto();
        $data = [
            "datos" => $datos
        ];

        return view('/bodega', $data);
    }

    public function hinalambricas(){
        $crud = new categoriaproducto();
        $datoshi = $crud->listadohinalambricas();
        $data = [
            "datosusuario" => $datoshi
        ];

        return view('/herramientas_inalambricas', $data);
    }


    public function proyecto(){
        $crud = new proyecto_guardado();
        $datos = $crud->listadoproyecto();
        $data = [
            "datos" => $datos
        ];
        return view('/proyectos', $data);
    }


    public function visualizar_usuarios(){
        $crud = new usuarioModel();
        $datosusuario = $crud->listadousuario();
        $data = [
            "datosusuario" => $datosusuario
        ];

        return view('/visualizar_usuarios', $data);
    }

    public function login(){
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

            return redirect()->to(base_url().'/inicio')->with('mensaje','1');
        }else {
            return redirect()->to(base_url().'/')->with('mensaje','0');
        }
    }


    public function salir() {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

    public function eliminar($id){
        $producto = new producto_bodega();
        $producto->delete($id);

        return redirect()->to(base_url('bodega'));
    }
    public function eliminar_usuario($id){
        $usuario = new Usuarios();
        $usuario->delete($id);
        return redirect()->to(base_url('visualizar_usuarios'));

    }

    public function eliminar_usuarios($id){
        $model = new Usuarios();
        $model->delete($id);
        session()->setFlashdata('mensaje','Registro Eliminado');
        return redirect()->to('visualizar_usuarios');
    }


            public function editar($id=null){
                print_r($id);
                $producto= new producto_bodega();
                $dato = $producto->getProducto($id);
                $dato['producto']=$producto->where('id_producto', $id)->first();

                return view('editar_producto', compact('dato'));
            }
            public function actualizar(){
                $datos = [
                    "nombre_producto" => $_POST['nombre_producto'],
                    "codigo" => $_POST['descripcion'],
                    "descripcion" => $_POST['descripcion'],
                    "cantidad" => $_POST['cantidad'],
                    "nombre_categorias" => $_POST['nombre_categorias'],
                ];
                $id_producto = $_POST['id_producto'];
                $crud = new producto_bodega();
                $respuesta = $crud->actualizar($datos,$id_producto);
                if($respuesta){
                    return redirect()->to(base_url().'/bodega')->with('mensaje','2');
                }else{
                    return redirect()->to(base_url().'/bodega')->with('mensaje','3');
                }
            }
            public function editarusuario($id=null){
                $model = new Usuarios();
                $dato = $model->getusuario($id);

                echo view('/editar_usuario', compact('dato'));
            }
    //    public function actualizarusuario(){
      //           $usuario= new Usuarios();
       //          $data=[
        //             'usuario'=>$this->request->getVar('usuario'),
        //             'password'=>$this->request->getVar('password'),
        //             'tipo_usuario'=>$this->request->getVar('tipo_usuario')
        //         ];
          //       $id_usuario= $this->request->getVar('id_usuario');
          //       $usuario->update($id_usuario,$data);
// 
           //      return $this->response->redirect(site_url('visualizar_usuarios'));
            //     } 

        public function actualizarusuario(){
           $datos = [
            "usuario" => $_POST['usuario'],
            "password" => $_POST['password'], 
            "tipo_usuario" => $_POST['tipo_usuario']
           ];
             $id_usuario = $_POST['id_usuario'];
              $crud = new Usuarios();
              $respuesta = $crud->actualizaruser($datos,$id_usuario);
              if($respuesta){
                  return redirect()->to(base_url().'/visualizar_usuarios')->with('mensaje','2');
              }else{
                 return redirect()->to(base_url().'/visualizar_usuarios')->with('mensaje','3');
               }
            }


           
}

