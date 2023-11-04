<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

$conn=mysqli_connect("localhost","hussain","99@hussain","chat_application");
if (!$conn) {
    echo 'not connected';
}else {
   
 
 
            $sql="select * from friends";
            
            $result=mysqli_query($conn , $sql);
           
            if (!$result) {
                http_response_code(404);
                die(mysqli_error($conn));
            }
           $ass=mysqli_fetch_all($result,MYSQLI_ASSOC);
            $data=json_encode($ass);
            echo $data;
    




}



?>
