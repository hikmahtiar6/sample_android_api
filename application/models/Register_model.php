<?php
/**
 * Login Model
 * @author Hikmahtiar hikmahtiar.cool@gmail.com>
 */
class Register_model extends CI_Model {
    const TABLE = 'mcf_user';
    public function __construct()
    {
        parent::__construct();
    }
    
    public function check_user($username)
    {
        $sql = $this->db;
        
        $sql->select('*');
        $sql->from(static::TABLE);
        $sql->where('username', $username);
        
        $get = $sql->get();
        $result = $get->row();
        return $result;
    }
    
    public function save(Array $data)
    {
        $sql = $this->db;
        
        return $sql->insert(static::TABLE, $data); 
    }
    
    public function update($id, Array $data)
    {
        $sql = $this->db;
        
        $sql->where('id', $id);
        return $sql->update(static::TABLE, $data);
    }
}