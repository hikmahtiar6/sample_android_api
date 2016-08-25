<?php
/**
 * Blog Model
 * @author Hikmahtiar hikmahtiar.cool@gmail.com>
 */
class Blog_model extends CI_Model {
    const TABLE = 'blog';
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function get_blog($limit , $offset)
    {
        $sql = $this->db;
        $sql->select('*');
        $sql->from(static::TABLE);
        $sql->limit($limit, $offset);
        $sql->order_by('date_created', 'DESC');
        
        $get = $sql->get();
        $result = $get->result();
        
        return $result;
    }
}