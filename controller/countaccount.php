<?php
$tacc = '';

$conn=oci_connect('bbank','blood','localhost/xe') or die (oci_error());
$query = "select count(*) as total from account";
$stid = oci_parse($conn, $query);
oci_execute($stid);
while (oci_fetch($stid)) {
    $tacc = oci_result($stid, 'TOTAL');
}
