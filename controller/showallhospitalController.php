<?php
$conn=oci_connect('bbank','blood','localhost/xe') or die (oci_error());

$query = "select * from hospital";
$stid = oci_parse($conn, $query);
oci_execute($stid);

// $nrows = oci_fetch_all($stid, $res);
?>


<table class="table table-hover">
    <thead>
        <th scope="col">HOSPITAL ID</th>
        <th scope="col">HOSPITAL NAME</th>
        <th scope="col">HOSPITAL EMAIL</th>
        <th scope="col">HOSPITAL PHONE</th>
        <th scope="col">HOSPITAL ADDRESS</th>
        <th scope="col">ACCOUNT_ID</th>
    </thead>
    <tbody>
<?php
while (($row = oci_fetch_assoc($stid)) != false) {
    ?>
    <tr>
        <th scope="row">
        <?php echo $row['HOSPITAL_ID'];   ?></td>
        <td><?php echo $row['HOSPITAL_NAME'];   ?></td>
        <td><?php echo $row['HOSPITAL_EMAIL'];   ?></td>
        <td><?php echo $row['HOSPITAL_PHONE'];   ?></td>
        <td><?php echo $row['HOSPITAL_ADDRESS'];   ?></td>
        <td><?php echo $row['ACCOUNT_ID'];   ?></td>
    </tr>
    <?php
    
}
?>
</tbody>
</table>
<?php
oci_free_statement($stid);
oci_close($conn);
