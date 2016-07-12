<?php
require 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'";
$query = mysql_query($sql);

$response = [
    'message' => 'Username atau password tidak valid',
    'result' => 'failure'
];

if(mysql_num_rows($query) > 0) {
    $response = [
        'message' => 'Berhasil login',
        'result' => 'success'
    ];
    
    $user = mysql_fetch_object($query);
    $response['user'] = [
        'id'   => $user->id,
        'nama' => $user->name
    ];
}

$response['operation'] = 'login';


echo json_encode($response);
?>