<?php
/**
 * Login Controler
 * @author Hikmahtiar hikmahtiar.cool@gmail.com>
 */
class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }
    
    public function index()
    {
        $this->load->view('login/index');
    }
    
    public function check()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $response = $this->Login_model->login($user, $pass);
        
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    }
}