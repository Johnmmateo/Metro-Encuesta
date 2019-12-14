<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();


  }

  function agregarusuario($usuario, $contrasena2){


      if(filter_var($usuario['correo'],FILTER_VALIDATE_EMAIL)){

          if($contrasena2==$usuario['contrasena']){
              $base=base_url('Login/registrar');
              $base2=base_url('Login');
              $this->db->where('correo', $usuario['correo']);
              $correo=$this->db->get('usuario');
              if($correo->num_rows()>0){
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
            'El correo ya esta en uso',
            'Pruebe con otro',
            'error'
          )
              </script>
            </body>
          </html>
          ";
                 }else {
                $this->db->insert('usuario', $usuario);


                $this->load->library('email');
                  $this->email->from('johnmedina007@gmail.com', 'John Medina');
                   $this->email->to($usuario['correo']);
                   $this->email->subject('Gracias por registrarte');
                    $this->email->message('Gracias por registrarte en nuestra App. Puedes empezar a probar todas las opciones');

          



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
            'Correcto',
            'Usuario registrado correctamente',
            'success'
          )
              </script>
            </body>
          </html>
          ";

          }
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
  'Las contraseñas no coinciden',
  'Pruebe de nuevo',
  'error'
)
    </script>
  </body>
</html>
";
    }

  }
  }

    function iniciarsesion($correo, $contrasena){
      $this->db->where('correo', $correo);
            $this->db->where('contrasena', $contrasena);
            $query=$this->db->get('usuario');
            if($query->num_rows()>0){

              return true;
            }else {
              return false;
            }
    }

    function iniciarsesionadmin($clave, $user){

      $this->db->where('contrasena', $clave);
      $this->db->where('correo', $user);
      $query=$this->db->get('administrador');
      if($query->num_rows()>0){

        return true;
      }else {
        return false;
      }
    }



        public function num_noticia(){

            $number=$this->db->query("SELECT count(*)  AS number FROM usuario")->row()->number;
            return intval($number);
        }
        public function get_pagination($number_per_page){

            return $this->db->get('usuario', $number_per_page, $this->uri->segment(3));

        }





}
