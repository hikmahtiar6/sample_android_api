<?php
/**
 * Blog Controller
 * @author Hikmahtiar hikmahtiar.cool@gmail.com>
 */
class Blog extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model');
    }
    
    public function index($limit = 8, $offset = 0)
    {
        $data = $this->Blog_model->get_blog($limit, $offset);
        $new_data = [];
        if($data)
        {
            foreach($data as $row)
            {
                $new_data[] = [
                    'title'  => $row->title,
                    'author' => $row->id, 
                ];
            }        
        }
        
        $response['blog'] = $new_data;
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    }
    
    /**
     * tambah blog
     */
    public function add()
    {
        $this->load->view('blog/add');
    }
}