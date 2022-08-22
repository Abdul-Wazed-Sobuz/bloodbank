<?php 
//session_start();
include_once '../model/dbconnect.php';


if(isset($_POST['save']))
{
    $email= $_POST['email'];
    $password= $_POST['password'];
    $branch_address=$_POST['branch_address'];
    $branch_phone=$_POST['branch_phone'];
    $zip=$_POST['zip'];
    

    $query=oci_parse($conn,"insert into ACCOUNT(email,password,type) values('$email','$password',2)");
    $result = oci_execute($query);

    if($result){
        
        $query1="select account_id from account where email='".$_POST['email']."'";
        $stid = oci_parse($conn, $query1);
        oci_execute($stid);
            while (($row = oci_fetch_assoc($stid)) != false) {
           $account_id=$row['ACCOUNT_ID'];   
            }

            $query2=oci_parse($conn,"insert into BRANCH(branch_address,branch_email,branch_phone,zip,account_id) values('$branch_address','$email','$branch_phone','$zip','$account_id')");  
        $result1 = oci_execute($query2);  
        if($result1){
            echo "Data added successfully!";
            header('location:../view/admin/admindash.php');
            
        }
        }else{

            echo "Error!";
            exit();
        }
        
    }
    else{
        echo "something wrong";
        exit();
    }
?>