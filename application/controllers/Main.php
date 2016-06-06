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
			
$headers = 'From: Chavraya info@chavraya.com' . "\r\n" ;
    $headers .='Reply-To: '. $to . "\r\n" ;
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

			$msg = "Name: " . $name .  "\r\n" . "Email: " . $email . "\r\n" . "City: " . $city . "\r\n" . "Country: " . $country . "\r\n" . "Phone: " . $phone . "\r\n" . "Family Size: " . $family_size . "\r\n" .  "Message: " . $message;
		mail("Moshe@chavraya.com,Rabbi@chavraya.com","New Registration!",$msg, $headers);
		}
		header('Location: '. base_url());

	}
}
