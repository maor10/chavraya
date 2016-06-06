<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('main');
	}

	//Yes, I know database shit should be done in the model. No, I don't care.
	public function register_user(){
		$name = $this->input->post("name");
		if($name != false){
			$email = $this->input->post("email");
			$city = $this->input->post("city");
			$country = $this->input->post("country");
			$phone = $this->input->post("phone");
			$family_size = $this->input->post("family-size");
			$message = $this->input->post("message");
			$this->db->insert("members", array("email" => $email, "name" => $name, "city" => $city, "country" => $country, "phone" => $phone, "family_size" => $family_size, "message"=> $message ));
			
		}
		header('Location: '. base_url());

	}
}
