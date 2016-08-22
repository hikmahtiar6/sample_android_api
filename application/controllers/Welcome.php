<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Welcome Controller
 * @author Hikmahtiar hikmahtiar.cool@gmail.com>
 */
class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
