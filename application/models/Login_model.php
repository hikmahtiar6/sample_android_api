<?php
/**
 * Login Model
 * @author Hikmahtiar hikmahtiar.cool@gmail.com>
 */
class Login_model extends CI_Model {
    const TABLE = 'mcf_user';
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
        $sql->where('password', md5($password));
        $get = $sql->get();
        $result = $get->row();
        
        return $result; 
    }
}