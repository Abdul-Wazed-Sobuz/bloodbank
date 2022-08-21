<?php
include_once '../model/dbconnect.php';

$data= $_GET["did"];

$query= oci_parse($conn, "DELETE FROM donor WHERE donor_id='" . $data . "'");

$stid = oci_execute($query, OCI_DEFAULT);
if($stid)  
	{  
		oci_commit($conn); //*** Commit Transaction ***// 
		echo "Data Deleted Successfully.";
		sleep(3);
		header("location: ../view/admin/admindash.php");
	}
	else{
		echo "Error.";
	}
?>