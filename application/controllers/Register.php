<?php
/**
 * Register Controler
 * @author Hikmahtiar hikmahtiar.cool@gmail.com>
 */
class Register extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Register_model');
    }
    
    public function index()
    {
        $this->load->view('register/index');
    }
    
    public function check()
    {
        $model = $this->Register_model;
        $realname = $this->input->post('realname');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $response = [];
        
        if($email != "" && $pass != "")
        {
            $data = [
                'email'    => $email,
                'realname' => $realname,
                'username' => $username,
                'password' => md5($pass),
                'enabled'  => 1,
            ];
            $check_user = $model->check_user($username);
            if($check_user)
            {
                $response = [
                    "message" => "Username telah digunakan.",
                    "status"  => "error"
                ];
            }
            else
            {
                $model->save($data);
                $response = [
                    "message" => "Anda berhasil melakukan registrasi.",
                    "status"  => "success"
                ];
            }
        }
        else
        {
            $response = [
                "message" => "Silahkan cek form registrasi anda.",
                "status"  => "error"
            ];
        }
        
        $this->json_output($response);
    }
    
    public function update()
    {
        $model = $this->Register_model;
        $id = $this->input->post('id');
        $realname = $this->input->post('realname');
        $pass = $this->input->post('password');
        $pass_old = $this->input->post('password_old');
        $response = [];
        
        $update = $model->update($id, $data);
        
        $this->json_output($response);
    }
    
    public function json_output($response)
    {
        return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($response));
    }
}