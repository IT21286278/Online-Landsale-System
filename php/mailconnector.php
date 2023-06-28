<?php 
    if(isset($_POST['sub']))
    {
        $name = $_POST['Username'];
        $email = $_POST['email'];
        $sub = $_POST['subject'];
        $msg = $_POST['msg'];

        $recive = "Hirankaushalya123456@gmail.com";

        $email_content = $sub. "\n\n You have recived an email from ".$name."(".$email.").\n\n".$msg;
        $header = "from: woofy0918@gmail.com";
        if(mail($recive , $sub , $email_content , $header))
        {
            header("location: ../contactus.php?mailsend=Successfull");
        
        }
        else{
            header("location: ../contactus.php?mailsend=Unsuccessfull");
        }
    }


 ?> 