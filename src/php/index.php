<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
//connect ot database
$conn=mysqli_connect("localhost","hussain","99@hussain","chat_application");
//$conn=mysqli_connect("hostname",'user name','password','databse name')
if (!$conn) {//check connection
    echo 'not connected';
}else {
   
    $method = $_SERVER['REQUEST_METHOD'];// save the request type in method variable
   
  
    switch ($method) {
        
        case 'POST':
          
            $json = file_get_contents("php://input");
            $data= json_decode($json , true);
            // echo $data;
          
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
                }
            }else if($data['type']=='F_request'){// sent  friend request
                 $getter=$data['getter'];
                 $requestor=$data['requestor'];
                $sql="insert into request values('$getter','$requestor')";
                if (mysqli_query($conn, $sql)) {
                    # code...
                    echo 'inserted';
                }else echo "not inserted :", mysqli_error($conn);
            }
            else if($data['type']=='get_Request'){//get friend request
                $sql="select * from request";
            
                $result=mysqli_query($conn , $sql);
               
                if (!$result) {
                    http_response_code(404);
                    die(mysqli_error($conn));
                }
               $ass=mysqli_fetch_all($result,MYSQLI_ASSOC);
                $data=json_encode($ass);
                echo $data;
            }  else if($data['type']=='req_response'){//get friend request
                 if ($data['Response']=='accept') {
                    # code...
                    $requestor_id=$data['requestor_id'];
                    $user_id=$data['user_id'];
                    $sql="insert into friends values ('$requestor_id','$user_id')";
                    if (mysqli_query($conn , $sql)) {// check the friend request add in friend table in databse or not ?
                        # code...
                        $sql="delete from request where requestor='$requestor_id' and request_getter='$user_id'";
                        if (mysqli_query($conn , $sql)) {
                            # code...
                            echo "request deleted from database";
                        }
                        else{
                            echo "not deleted ! : ", mysqli_error($conn);
                        }

                    }
                        else{
                            echo mysqli_error($conn);
                        }
                 }else{

                 }
                //     $sql="select * from request";
            
            //     $result=mysqli_query($conn , $sql);
               
            //     if (!$result) {
            //         http_response_code(404);
            //         die(mysqli_error($conn));
            //     }
            //    $ass=mysqli_fetch_all($result,MYSQLI_ASSOC);
            //     $data=json_encode($ass);
            //     echo $data;
            }
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
