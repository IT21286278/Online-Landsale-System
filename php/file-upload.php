<?php

    //upload files
    if(isset($_POST['submit']))
    {
        $NICDoc = $_FILES['nic']['name'];
        $birthCertificateDoc = $_FILES['birthcertificate']['name'];
        $salarySlipDoc = $_FILES['salaryslip']['name'];
        $otherDoc = $_FILES['otherdoc']['name'];
    
            //specify target directory
            $target_dir = "../uploads/";

            //upload nic document
            $target_file = $target_dir.basename($_FILES['nic']['name']);
            $file = array();

            if(isset($_FILES["nic"]))
            {
                if(move_uploaded_file($_FILES['nic']['tmp_name'],$target_file))
                {
                    $file[0] = "The file ".basename($_FILES['nic']['name']). " is uploaded successfully.";
                }
                else{
                    echo"Error while uploading ".basename($_FILES['nic']['name'])." file"; 
                }
            }
            else{
                echo"File not available";
            }

            //upload birth certificate document
            $target_file = $target_dir.basename($_FILES['birthcertificate']['name']);
    
            if(isset($_FILES["birthcertificate"]))
            {
                if(move_uploaded_file($_FILES['birthcertificate']['tmp_name'],$target_file))
                {
                    $file[1] = "The file ".basename($_FILES['birthcertificate']['name']). " is uploaded successfully.";
                }
                else{
                    echo"Error while uploading ".basename($_FILES['birthcertificate']['name'])." file"; 
                }
            }
            else{
                echo"File not available";
            }

            //upload salary slip document
            $target_file = $target_dir.basename($_FILES['salaryslip']['name']);
    
            if(isset($_FILES["salaryslip"]))
            {
                if(move_uploaded_file($_FILES['salaryslip']['tmp_name'],$target_file))
                {
                    $file[2] = "The file ".basename($_FILES['salaryslip']['name']). " is uploaded successfully.";
                }
                else{
                    echo"Error while uploading" .basename($_FILES['salaryslip']['name'])." file"; 
                }
            }
            else{
                echo"File not available";
            }

            //upload other documents
            $target_file = $target_dir.basename($_FILES['otherdoc']['name']);
    
            if(isset($_FILES["otherdoc"]))
            {
                if(move_uploaded_file($_FILES['otherdoc']['tmp_name'],$target_file))
                {
                    $file[3] = "The file ".basename($_FILES['otherdoc']['name']). " is uploaded successfully.";
                }
            }
            else{
                echo"File not available";
            }
        
            //update the database with uploaded documents according to the last inserted id    
            $sql = "UPDATE reservation_request SET  NIC_Document = '$NICDoc', 
            Birth_Certificate_Document = '$birthCertificateDoc',  Salary_Slip_Document = '$salarySlipDoc',
            Other_Document = '$otherDoc' where ReservationID = '$con->insert_id'";
          
       
            if($con->query($sql))
            {
                $x = 1;
            }
            else
            {
                echo "Submission fail".$con->error;  
            }
    
    }
    
?>