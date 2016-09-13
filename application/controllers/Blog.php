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

        $replacer = ["\n", "\r"];

        if($data)
        {
            foreach($data as $row)
            {
                $content = strip_tags($row->content);
                $content = str_replace($replacer, "", preg_replace("/&#?[a-z0-9]{2,8};/i", "", $content));
                $image = ($row->featuredImage) ? $row->featuredImage : $this->get_first_image_url($row->content);
                $new_data[] = [
                    'id'        => $row->id,
                    'author'     => $row->author + "sample", 
                    'author_id'     => $row->author, 
                    'title'      => $row->title,
                    'date_created' => date("D, j F Y H:i", strtotime($row->createdAt))." WIB",
                    'date_updated' => date("D, j F Y H:i", strtotime($row->updatedAt))." WIB",
                    'content'    => (strlen($content) <= 97) ? $content : substr($content, 0, 97).'...',
                    'content_detail' => $this->remove_first_image(strip_tags($row->content, "<p><b><i><strong><a>")),
                    'image'      => $image
                ];
            }        
        }

        if(count($new_data) > 0) {
            $response['blog'] = $new_data;
        } else {
            $response['blog'][0] = ['title' => 'warning'];
        }
        
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

    public function remove_first_image($content) {
        $repl = [
            "<p></p>",
            "<p> </p>",
            "<p>&nbsp;</p>"
        ];
        return str_replace($repl, "", preg_replace("/<img(.*)>/i", "", $content, 1));
    }
    
    /**
     * tambah blog
     */
    public function add()
    {
        $this->load->view('blog/add');
    }
}