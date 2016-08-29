<?php
/**
 * Blog Model
 * @author Hikmahtiar hikmahtiar.cool@gmail.com>
 */
class Blog_model extends CI_Model {
    const TABLE = 'mcf_post';
    
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
        $sql->order_by('createdAt', 'DESC');
        
        $get = $sql->get();
        $result = $get->result();
        
        return $result;
    }
    
    public function save(Array $data)
    {
        return $this->db->insert(static::TABLE,  $data);
    }
    
    public function update($id, Array $data)
    {
        $sql = $this->db;
        $sql->where('id', $id);
        return $this->db->update(static::TABLE,  $data);
    }
}