<?php 
require 'koneksi.php';

$limit = isset($_GET['limit']) ? $_GET['limit'] : 5;
$offset= isset($_GET['offset']) ? $_GET['offset'] : 0; 

$response = [];
$sql = "SELECT * FROM blog ORDER BY id DESC LIMIT {$offset}, {$limit}";
$query = mysql_query($sql);

while($row = mysql_fetch_object($query)):
    $content = $row->content;
    $response['blog'][] = [
        'title'         => $row->title,
        'description'   => strip_tags($content),
        'content'       => (strlen($content) <= 97) ? $content : substr($content, 0, 97).'...',
        'image'         => $row->image,
        'date_created'  => $row->date_created
    ];
endwhile;

echo json_encode($response);
?>