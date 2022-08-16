<?php
session_start();
include '../model/dbconnect.php';

if (isset($_POST['btn-login'])) {

    if (!empty($_POST['email'] && !empty($_POST['password']))) {
        $query = "select * from account where email='".$_POST['email']."' and password='".$_POST['password']."'";
        $stid = oci_parse($conn, $query);
        oci_execute($stid);
        $row = oci_fetch_all($stid, $res);
        if($row){
                $_SESSION['user']=$_POST['email'];
                header("location: ../view/admin/admindash.php");
        }else{

            echo "wrong password or username";
        }

    }
}
