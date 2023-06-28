<?php
    if(isset($_POST['submit'])){

        $fName = $_FILES['file']['name'];
        $fTmpName = $_FILES['file']['tmp_name'];
        $fSize = $_FILES['file']['size'];
        $fError = $_FILES['file']['error'];
        $fType = $_FILES['file']['type']; 



       
        $sepFileExt = explode('.',$fName);
        

        $fActualExt = strtolower($sepFileExt['1']);

      
        $fExtTypes = array('jpg', 'jpeg', 'png');


        if(in_array($fActualExt, $fExtTypes)){
          
            if($fError === 0){

                echo "<script>alert(\" Successfully uploaded !\")</script>";
              
                if($fSize < 1000000){
       
                    $fileNewName = uniqid('',true).".".$fActualExt;


                    $fDesti = '../uploads/'.$fileNewName;
                    

                    move_uploaded_file($fTmpName, $fDesti);
                    
                    header('Location: SellYourLand.php?upload=success&name='.$fileNewName.'');
                   
                }
                else{
                    echo "<script>alert(\" File is too big;\")</script>";
                }
            }
            else{
                echo "<script>alert(\" There is an error related to your file;\")</script>";
            }
        }
        else{
            echo "<script>alert(\" You cannot upload this type of files;\")</script>";
    }
}
?>