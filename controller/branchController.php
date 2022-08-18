<?php
$conn=oci_connect('bbank','blood','localhost/xe') or die (oci_error());



// Before running, create the table:
//   CREATE TABLE MYTABLE (col1 NUMBER);

// $conn = oci_connect('hr', 'welcome', 'localhost/XE');

$stid = oci_parse($conn, 'INSERT INTO mytab (col1) VALUES (123)');
// oci_execute($stid, OCI_NO_AUTO_COMMIT);  // data not committed
$query = "INSERT INTO account (name,email,password,u_role,phone) VALUES ('" . $uname . "','" . $email . "','" . $upass . "','" . $uroll . "','" . $phone . "')";




$stid = oci_parse($conn, 'INSERT INTO account VALUES ()');
oci_execute($stid);  // commits both 123 and 456 values
