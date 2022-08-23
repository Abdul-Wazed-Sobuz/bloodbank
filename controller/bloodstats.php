<?php
$conn=oci_connect('bbank','blood','localhost/xe') or die (oci_error());
$tabpos='';
$tabneg='';
$tbpos='';
$tbneg='';
$tapos='';
$taneg='';
$topos='';
$toneg='';

$query = "select count(*) as total from donor where blood_group='AB pos'";
$stid = oci_parse($conn, $query);
oci_execute($stid);

while (oci_fetch($stid)) {
    $tabpos = oci_result($stid, 'TOTAL');
}
echo $topos;
$query = "select count(*) as total from donor where blood_group='AB neg'";
$stid = oci_parse($conn, $query);
oci_execute($stid);

while (oci_fetch($stid)) {
    $tabneg = oci_result($stid, 'TOTAL');
}
$query = "select count(*) as total from donor where blood_group='A pos'";
$stid = oci_parse($conn, $query);
oci_execute($stid);

while (oci_fetch($stid)) {
    $tapos = oci_result($stid, 'TOTAL');
}
$query = "select count(*) as total from donor where blood_group='A neg'";
$stid = oci_parse($conn, $query);
oci_execute($stid);

while (oci_fetch($stid)) {
    $taneg = oci_result($stid, 'TOTAL');
}

$query = "select count(*) as total from donor where blood_group='B pos'";
$stid = oci_parse($conn, $query);
oci_execute($stid);

while (oci_fetch($stid)) {
    $tbpos = oci_result($stid, 'TOTAL');
}

$query = "select count(*) as total from donor where blood_group='B neg'";
$stid = oci_parse($conn, $query);
oci_execute($stid);

while (oci_fetch($stid)) {
    $tbneg = oci_result($stid, 'TOTAL');
}

$query = "select count(*) as total from donor where blood_group='O neg'";
$stid = oci_parse($conn, $query);
oci_execute($stid);

while (oci_fetch($stid)) {
    $toneg = oci_result($stid, 'TOTAL');
}
$query = "select count(*) as total from donor where blood_group='O pos'";
$stid = oci_parse($conn, $query);
oci_execute($stid);

while (oci_fetch($stid)) {
    $topos = oci_result($stid, 'TOTAL');
}




oci_free_statement($stid);
oci_close($conn);
