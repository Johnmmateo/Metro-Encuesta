<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maincontroller extends CI_Controller {


	public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  $this->load->model('LoginModel');

  }
public function grafica(){

		$this->load->view('plantilla/header.php');
	$this->load->view('grafica.php');
		$this->load->view('plantilla/footer.php');

}


	public function index()
	{
		$this->load->view('plantilla/header.php');
		$this->load->view('home.php');
    		$this->load->view('plantilla/footer.php');


	}


	public function search(){


		$this->load->view('plantilla/header.php');
		$this->load->view('search.php');
		$this->load->view('plantilla/footer.php');


	}


	function Listademiembros(){
		$this->load->library('pagination');

			$config['base_url'] = base_url()."Maincontroller/Listademiembros";
			$config['total_rows'] = $this->LoginModel->num_noticia();
			$config['per_page'] = 18;
			$config['uri_segment'] = 3;
			$config['num_links'] = 5;
			//esto sirve para configurar la paginacion usando bootstrap
		$config['full_tag_open'] = '<div class="pagging text-center "><nav><ul class="pagination">';
			$config['full_tag_close'] = '</ul></nav></div>';

			$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close'] = '</span></li>';

			$config['cur_tag_open'] = '<li class="page-item active"><span  class="page-link">';
			$config['cur_tag_close'] = '<span  class="sr-only">(current)</span></span></li>';

			$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';

			$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close'] = '</span></li>';

			$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close'] = '</span></li>';

			$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close'] = '</span></li>';


			$this->pagination->initialize($config);
			$result=$this->LoginModel->get_pagination($config['per_page']);
			$data['consulta']=$result;
			$data['paginacion']=$this->pagination->create_links();


		$this->load->view('plantilla/header.php');
		$this->load->view('miembros/listademiembros', $data );
		$this->load->view('plantilla/footer.php');

	}



	public function contacto()
	{
		$this->load->view('plantilla/header.php');
		$this->load->view('contacto.php');
  	$this->load->view('plantilla/footer.php');


	}




public function form(){

	if ($_POST) {

	  $data = array("fecha"=>$_POST["fecha"],"genero"=>$_POST['genero'],
	                "ciudad"=>$_POST['ciudad'],"profesion"=>$_POST['profesion'],
	                "calificacion"=>$_POST['calificacion'],"opinion"=>$_POST['opinion']);

		$this->db->insert('formulario', $data);

	}

	$this->load->view('plantilla/header.php');
	$this->load->view('form.php');
	$this->load->view('plantilla/footer.php');


}






}
