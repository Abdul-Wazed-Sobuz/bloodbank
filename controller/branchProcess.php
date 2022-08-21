<?php
include_once '../model/dbconnect.php';

if(isset($_POST['btn-submit'])){
    $bmail=$_POST['bemail'];
    $badd= $_POST['baddress'];
    $bphone=$_POST['bphone'];
    $bzip=$_POST['bzip'];
    $bid=$_GET['bid'];
    $query = oci_parse($conn,"UPDATE branch SET BRANCH_EMAIL='" . $bmail ."', BRANCH_ADDRESS='" . $badd ."', BRANCH_PHONE='" . $bphone ."', ZIP='" . $bzip ."' WHERE BRANCH_ID='" . $bid ."'");

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