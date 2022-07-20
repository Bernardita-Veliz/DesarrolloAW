<?php namespace App\Filters;
use CodeIniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

use CodeIgniter\HTTP\RequestInterface as HTTPRequestInterface;

class SessionAdmin implements FilterInterface{
    public function before(HTTPRequestInterface $request, $arguments = null)
    {
     if(!session('tipo_usuario') == 'administrador'){
        return redirect()->to(base_url('/'));
     }   
    }
    public function after(HTTPRequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}



?>