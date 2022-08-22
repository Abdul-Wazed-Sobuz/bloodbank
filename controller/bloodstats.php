<?php
$conn=oci_connect('bbank','blood','localhost/xe') or die (oci_error());
$tabpos='';
$query1 = "select count(*) as totalabpos from donor where blood_group='Apos'";
$stid = oci_parse($conn, $query);
oci_execute($stid);

while (($row = oci_fetch_assoc($stid)) != false) {
$tabpos=$row['totalabpos']; 
}
oci_free_statement($stid);
oci_close($conn);
