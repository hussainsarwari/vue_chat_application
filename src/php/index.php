<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

$conn=mysqli_connect("localhost","hussain","99@hussain","chat_application");
if (!$conn) {
    echo 'not connected';
}else {
   
    $method = $_SERVER['REQUEST_METHOD'];// save the request type in method variable
   
  
    switch ($method) {
        
        case 'POST':
          
            $json = file_get_contents("php://input");
            $data= json_decode($json , true);
         
            if($data['type']=='register') {
                    $sql = "INSERT INTO users(
                        user_name,
                        name,
                        user_address,
                        email,
                        phone,
                        country,
                        gender,
                        education,
                        birth,
                        facebook,
                        instagram,
                        linkedln,
                        whatsapp,
                        skype,
                        user_password,
                        father_name
                    ) values (
                        '$data[user_name]',
                        '$data[name]',
                        '$data[user_address]',
                        '$data[email]',
                        '$data[phone]',
                        '$data[country]',
                        '$data[gender]',
                        '$data[education]',
                        '$data[birth]',
                        '$data[facebook]',
                        '$data[instagram]',
                        '$data[linkedln]',
                        '$data[whatsapp]',
                        '$data[skype]',
                        '$data[user_password]',
                        '$data[father_name]'
                        )";
                    if(mysqli_query($conn, $sql)){
                      echo  "Data successfully inserted";
                }else {
                      echo  "Error", mysqli_error($conn);
                }}
            break;
        case 'GET':
          
            $sql="select * from users";
            
            $result=mysqli_query($conn , $sql);
           
            if (!$result) {
                http_response_code(404);
                die(mysqli_error($conn));
            }
           $ass=mysqli_fetch_all($result,MYSQLI_ASSOC);
            $data=json_encode($ass);
            echo $data;
            break;
        default:
            break;
    
  
      }




}



?>
