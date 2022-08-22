<?php
include_once '../model/dbconnect.php';

if(isset($_POST['btn-submit'])){
    $name=$_POST['name'];
    $phone= $_POST['phone'];
    $address=$_POST['address'];
    $bgroup=$_POST['bgroup'];
    $did=$_GET['did'];
    $dob=$_GET['dob'];
    $ld=$_GET['ld'];
    $query = oci_parse($conn,"UPDATE donor SET NAME='" . $name ."', ADDRESS='" . $address ."', PHONE='" . $phone ."', BLOOD_GROUP='" . $bgroup ."', DATE_OF_BIRTH='" . $dob ."', LAST_DONATION='" . $ld ."' WHERE DONOR_ID='" . $did ."'");

    $result=oci_execute($query, OCI_DEFAULT);
    if($result)
    {
        oci_commit($conn);
        echo "Data Update Successfully !";
        header("location: ../view/admin/admindash.php");
    }
    else{
        echo "Error.";
    }
}
?>