<?php 
//session_start();
include_once '../model/dbconnect.php';

if(isset($_POST['save']))
{
    $email= $_POST['email'];
    $password= $_POST['password'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $dob = $_POST['dob'];
    $ld = $_POST['ld'];
    $bgroup = $_POST['bgroup'];
    $date1=date_create($dob);
    $date2=date_create($ld);
    $dobf=date_format($date1,"m/d/Y");
    $ldf=date_format($date2,"m/d/Y");

    $query=oci_parse($conn,"insert into ACCOUNT(email,password,type) values('$email','$password',4)");
    $result = oci_execute($query);

    if($result){
        
        $query1="select account_id from account where email='".$_POST['email']."'";
        $stid = oci_parse($conn, $query1);
        oci_execute($stid);
            while (($row = oci_fetch_assoc($stid)) != false) {
           $account_id=$row['ACCOUNT_ID'];   
            }
        $query2=oci_parse($conn,"insert into DONOR(name,email,phone,address,date_of_birth,blood_group,last_donation,account_id) values('$name','$email','$phone','$address','$dobf','$bgroup','$ldf','$account_id')");   
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