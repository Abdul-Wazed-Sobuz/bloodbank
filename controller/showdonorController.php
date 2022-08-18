<?php
$conn=oci_connect('bbank','blood','localhost/xe') or die (oci_error());

$query = "select * from donor";
$stid = oci_parse($conn, $query);
oci_execute($stid);

// $nrows = oci_fetch_all($stid, $res);
?>


<table class="table table-hover">
    <thead>
        <th scope="col">DONOR_ID</th>
        <th scope="col">NAME</th>
        <th scope="col">PHONE</th>
        <th scope="col">ADDRESS</th>
        <th scope="col">DATE OF BIRTH</th>
        <th scope="col">LAST DONATION</th>
    </thead>
    <tbody>
<?php
while (($row = oci_fetch_assoc($stid)) != false) {
    ?>
    <tr>
        <th scope="row"><?php echo $row['DONOR_ID'];   ?></td>
        <td><?php echo $row['NAME'];   ?></td>
        <td><?php echo $row['PHONE'];   ?></td>
        <td><?php echo $row['ADDRESS'];   ?></td>
        <td><?php echo $row['DATE_OF_BIRTH'];   ?></td>
        <td><?php echo $row['LAST_DONATION'];   ?></td>
    </tr>
    <?php
    
}
?>
</tbody>
</table>
<?php
oci_free_statement($stid);
oci_close($conn);
