<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  $this->load->model('LoginModel');


  }

  function index()
  {

        if(isset($_POST['correo'])){


            if($this->LoginModel->iniciarsesion($_POST['correo'], $_POST['contrasena'])){
              $this->db->where('correo', $_POST['correo']);
              $usuario=$this->db->get('usuario')->result_array();
              $this->session->set_userdata('id',$usuario[0]['id']);
              $this->session->set_userdata('nombre',$usuario[0]['nombre']);
              $this->session->set_userdata('apellido',$usuario[0]['apellido']);
              $this->session->set_userdata('edad',$usuario[0]['edad']);
              $this->session->set_userdata('fecha',$usuario[0]['fecha']);

              redirect('Maincontroller');

            }else {

          echo "<!DOCTYPE html>
    <html>
      <head>
        <meta charset='utf-8'>

        <link rel='stylesheet' href='SweetAlert/sweetalert2.css'>
        <script src='SweetAlert/sweetalert2.min.js'></script>
      </head>
      <body>
        <script type='text/javascript'>
        swal(
      'Contrasena incorrecta',
      'Intente de nuevo',
      'error'
    )
        </script>
      </body>
    </html>
    ";
            }

          }
      $this->load->view('plantilla/header.php');
      $this->load->view('home.php');
      $this->load->view('plantilla/footer.php');

  }


  function admin()
  {

    if(isset($_POST['contrasena'])){

          //intentar iniciar sesion
        if($this->LoginModel->iniciarsesionadmin($_POST['contrasena'],$_POST['correo'])){
          $this->session->set_userdata('contrasena',$_POST['contrasena']);
          //traigo el id y el nombre del usuario mediante tu correo
          $this->db->where('contrasena', $_POST['contrasena']);
          $this->db->where('correo', $_POST['correo']);
           $usuario=$this->db->get('administrador')->result_array();
           $this->session->set_userdata('idadmin',$usuario[0]['idadmin']);
           $this->session->set_userdata('correo',$usuario[0]['correo']);
          redirect('Maincontroller');
        }else {

          $link = base_url('SweetAlert/sweetalert2.css');
          $link2 = base_url('SweetAlert/sweetalert2.min.js');

          echo "<!DOCTYPE html>
    <html>
      <head>
        <meta charset='utf-8'>

        <link rel='stylesheet' href='{$link}'>
        <script src='{$link2}'></script>
      </head>
      <body>
        <script type='text/javascript'>
        swal(
      'Contrasena incorrecta',
      'Pruebe nuevamente',
      'error'
    )
        </script>
      </body>
    </html>
    ";

        }

      }
      $this->load->view('admin.php');
  }


  function registrar()
  {
    if ($_POST) {
         $usuario['nombre']=$_POST['nombre'];
         $usuario['correo']=$_POST['correo'];
         $usuario['edad']=$_POST['edad'];
         $usuario['fecha']=$_POST['fecha'];
         $usuario['contrasena']=$_POST['contrasena'];
         $contrasena2=$_POST['contrasena2'];
         $usuario['apellido']=$_POST['apellido'];
         $this->LoginModel->agregarusuario($usuario,$contrasena2);

       }
       if($this->session->userdata('correo')){
         redirect('Login');
       }
  $this->load->view('plantilla/header.php');
  $this->load->view('home.php');
  $this->load->view('plantilla/footer.php');

}



  function logout(){
   $this->session->sess_destroy();
   redirect('Login');

 }

}
