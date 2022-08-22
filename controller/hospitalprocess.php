<?php
include_once '../model/dbconnect.php';

if(isset($_POST['btn-submit'])){
    $hmail=$_POST['hemail'];
    $hname=$_POST['hname'];
    $hphone=$_POST['hphone'];
    $hadd= $_POST['haddress'];
    $hid=$_GET['hid'];
    //echo $hid;
    $query = oci_parse($conn,"UPDATE HOSPITAL SET HOSPITAL_EMAIL='" . $hmail ."', HOSPITAL_NAME='" . $hname ."',HOSPITAL_PHONE='" . $hphone ."', HOSPITAL_ADDRESS='" . $hadd ."' WHERE HOSPITAL_ID='" . $hid ."'");

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