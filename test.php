<?PHP
$conn=oci_connect('scott','tiger','localhost/xe') or die (oci_error());
if(!$conn){
echo 'sorry some issues';
}
else{
echo 'connected';
}

$query = "select * from emp where empno=7698";
$stid = oci_parse($conn, $query);

$r=oci_execute($stid);
$i=0;

print '<table border="1">';
while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
   print '<tr>';
   $i++;
   foreach ($row as $item) {

       print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   print '</tr>';
}
print '</table>';
echo "total row: $i";