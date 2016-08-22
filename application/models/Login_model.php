<?php
/**
 * Login Model
 * @author Hikmahtiar hikmahtiar.cool@gmail.com>
 */
class Login_model extends CI_Model {
    const TABLE = 'user';
    public function __construct()
    {
        parent::__construct();
    }
    
    public function login($username, $password)
    {
        $sql = $this->db;
        $sql->select('*');
        $sql->from(static::TABLE);
        $sql->where('username', $username);
        $sql->where('password', md5($username));
        $get = $sql->get();
        $result = $get->row();
        
        if($username == '' && $password == '')
        {
            $msg = "Username dan password belum diisi";
        }
        else 
        {
            if($result)
            {
                $msg = 'success';
                //var_dump($result);
            }
            else
            {
                $msg = 'Username dan password masih salah';
            }
            
        }
        
        $response = [
            'operation' => 'login',
            'message'   => $msg
        ];
        if($msg == 'success')
        {
            $response['user'] = [
                'id'        => $result->id,
                'username'  => $result->username
            ];
        }
        
        return $response; 
    }
}