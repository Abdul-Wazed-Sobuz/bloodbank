<?php
$tbranch = '';

$conn=oci_connect('bbank','blood','localhost/xe') or die (oci_error());
$query = "select count(*) as total from branch";
$stid = oci_parse($conn, $query);
oci_execute($stid);
while (oci_fetch($stid)) {
    $tbranch = oci_result($stid, 'TOTAL');
}
