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
    $bgroup=$_POST['bgroup'];
   $dob =  date("m/d/Y",strtotime(@$_POST['dob']));
   $ld =  date("m/d/Y",strtotime(@$_POST['ld']));

    // echo $dob;
    // echo $ld;
   
    $bgroup = $_POST['bgroup'];

    $query=oci_parse($conn,"insert into ACCOUNT(email,password,type) values('$email','$password',4)");
    $result = oci_execute($query);

    if($result){
        
        $query1="select account_id from account where email='".$_POST['email']."'";
        $stid = oci_parse($conn, $query1);
        oci_execute($stid);
            while (($row = oci_fetch_assoc($stid)) != false) {
           $account_id=$row['ACCOUNT_ID'];   
            }

            $query2=oci_parse($conn,"insert into DONOR(name,phone,address,DATE_OF_BIRTH,blood_group,LAST_DONATION,account_id) values('$name','$phone','$address',to_date('".$dob ."','MM/DD/YYYY hh24:mi:ss'),'$bgroup',to_date('".$ld ."','MM/DD/YYYY hh24:mi:ss'),'$account_id')");  
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
