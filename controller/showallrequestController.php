<?php
$conn=oci_connect('bbank','blood','localhost/xe') or die (oci_error());

$query = "select * from request ORDER BY REQUEST_ID";
$stid = oci_parse($conn, $query);
oci_execute($stid);
?>
<table class="table table-hover">
    <thead>
        <th scope="col">REQUEST ID</th>
        <th scope="col">BLOOD GROUP</th>
        <th scope="col">PHONE</th>
        <th scope="col">ADDRESS</th>
        <th scope="col">REQUEST DATE</th>
        <th scope="col">ACCOUNT ID</th>
    </thead>
    <tbody>
<?php
while (($row = oci_fetch_assoc($stid)) != false) {
    ?>
    <tr>
        <th scope="row">
        <?php echo $row['REQUEST_ID'];   ?></td>
        <td><?php echo $row['BLOOD_GROUP'];   ?></td>
        <td><?php echo $row['PHONE'];   ?></td>
        <td><?php echo $row['ADDRESS'];   ?></td>
        <td><?php echo $row['REQUEST_DATE'];   ?></td>
        <td><?php echo $row['ACCOUNT_ID'];   ?></td>
        <td><button class="btn btn-danger"><a style="color:white; text-decoration:none;" href="../../controller/requestDelete.php?rid=<?php echo $row["REQUEST_ID"]; ?>">Delete</a></button></td>
    </tr>
    <?php 
}
?>
</tbody>
</table>
<?php
// oci_free_statement($stid);
// oci_close($conn);
