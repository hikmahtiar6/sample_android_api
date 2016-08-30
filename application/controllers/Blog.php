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
                $content = strip_tags($row->content);
                $new_data[] = [
                    'id'        => $row->id,
                    'author'     => $row->author + "sample", 
                    'title'      => $row->title,
                    'date_created' => $row->createdAt,
                    'date_updated' => $row->updatedAt,
                    'content'    => (strlen($content) <= 97) ? $content : substr($content, 0, 97).'...',
                    'content_detail' => strip_tags(htmlentities($content)),
                    'image'      => ($row->featuredImage) ? $row->featuredImage : $this->get_first_image_url($content) 
                ];
            }        
        }
        
        $response['blog'] = $new_data;
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    }
    
    public function get_first_image_url($data, $default_url = null) 
    {

        // Matched with `![alt text](IMAGE URL)` from Markdown file
        if(preg_match_all('/\!\[.*?\]\((.*?)\)/', $data, $matches)) 
        {
            return $matches[1][0];
        }

        if(preg_match_all('/<img (.*?)?src=(\'|\")(.*?)(\'|\")(.*?)? ?\/?>/i', $data, $matches)) 
        {
            return $matches[3][0];
        }

        return $default_url; // Default image URL if nothing matched
    }
    
    /**
     * tambah blog
     */
    public function add()
    {
        $this->load->view('blog/add');
    }
}