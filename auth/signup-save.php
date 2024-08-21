<?php
//class 161
//class 176
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;

require_once("db/config.php");

    
require 'PHPMailer/src/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if(isset($_POST['name'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $code = rand(1,100000);

    

    /*username and  email set to unique start*/
    $query= "SELECT * FROM user WHERE username = '$name' and email= '$username' ";

    $sql = $conn->query($query);

    if($sql->num_rows>0){
        header("location: sign-up.php?msg=this is not unique.please try new user name or email");
    }else{


        /*the code is started writing for image*/ 
        function fileUpload($type=array("jpg","JPG","png","PNG"),$filename){
            $file_extension= $type;
            $filebase_name =  basename($filename['name']);    
            $file_array_name = explode(".",$filebase_name);    
            
            $file_size = $filename['size'];
            
            
            if(in_array($file_array_name[1],$file_extension)){
              
            
                    $file_destination = "studentimage/".time().basename($filename['name']);
                    $file_tmp_name = $filename['tmp_name'];
                    move_uploaded_file($file_tmp_name,$file_destination);
                    return $file_destination;
            
            }
            else{
                return "not supported";
            }
        }
        
        $exten = array("jpg","JPG","PNG","png");
        
        $filename = $_FILES['userimage'];
        
        
        $filedir = "image";
        
        $url = fileUpload($exten,$filename);
        $name= $_POST['name'];
    $url = fileUpload($exten,$filename);
    /*the code is ended writing for image*/ 


        //class 160

            $query_data_insert = "INSERT INTO user(username,email,password,image,code) VALUES('$name','$username', '$password', '$url','$code')";

            $sql = $conn->query($query_data_insert);
            if($sql){

            // php mailer send to emailtrp start
       
    
            // create object of PHPMailer class with boolean parameter which sets/unsets exception.
            $mail = new PHPMailer(true);
            try {
    
                $mail->isSMTP(); // using SMTP protocol                                     
                $mail->Host = 'sandbox.smtp.mailtrap.io'; // SMTP host as gmail 
                $mail->SMTPAuth = true;  // enable smtp authentication                             
                $mail->Username = '7e5954e2022aec';  // sender gmail host              
                $mail->Password = '11bdfb3701357b'; // sender gmail host password   
                $mail->SMTPSecure = 'tls';  // for encrypted connection                           
                $mail->Port = 2525;   // port for SMTP     
                $mail->isHTML(true); 
                $mail->setFrom('hadijaman@gmail.com', "Sender"); // sender's email and name
                $mail->addAddress("anar2koli@gmail.com", "HADIJAMAN");  // receiver's email and name
                $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
                $mail->Subject = 'Email verification From phplerarn';
                $mail->Body    = $code; 
                $mail->send();

                //echo 'Message has been sent';
    
            } catch (Exception $e) { // handle error.
    
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    
            }
    
      
    // php mailer send to emailtrp end

    header("location: userVarifyCode.php?msg=data save successfully done");
}else{
    header("location: sing-up.php?msg= please fill up the field");
}

    }
  
    /*username and  email set to unique end*/






}else{
    header("location: sign-up.php?msg=please first of all need to you sing up");
}




?>