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
        
        if($user == '' && $pass == '')
        {
            $response = [
                'message'   => "Username dan password belum diisi.",
                'status'    => "error"
            ];
        }
        else 
        {
            $login = $this->Login_model->login($user, $pass);
            if($login)
            {
                $response = [
                    'message'   => "Anda berhasil login.",
                    'status'    => "success"
                ];
                $response['user'] = [
                    'id'        => $login->id,
                    'username'  => $login->username,
                    'realname'  => $login->realname,
                ];
            }
            else
            {
                $response = [
                    'message'   => "Username dan password masih salah.",
                    'status'    => "error"
                ];
            }
            
        }
        
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    }
}