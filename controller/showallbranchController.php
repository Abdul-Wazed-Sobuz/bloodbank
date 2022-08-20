<?php
$conn=oci_connect('bbank','blood','localhost/xe') or die (oci_error());

$query = "select * from branch";
$stid = oci_parse($conn, $query);
oci_execute($stid);

// $nrows = oci_fetch_all($stid, $res);
?>


<table class="table table-hover">
    <thead>
        <th scope="col">BRANCH_ID</th>
        <th scope="col">BRANCH_ADDRESS</th>
        <th scope="col">BRANCH_EMAIL</th>
        <th scope="col">BRANCH_PHONE</th>
        <th scope="col">ZIP</th>
        <th scope="col">ACCOUNT_ID</th>
    </thead>
    <tbody>
<?php
while (($row = oci_fetch_assoc($stid)) != false) {
    $url="../admin/updatebranch.php?bid=".$row['BRANCH_ID']."&badd=".$row['BRANCH_ADDRESS']."&bemail=".$row['BRANCH_EMAIL']."&bphon=".$row['BRANCH_PHONE']."&zip=".$row['ZIP'];
    ?>
    <tr>
        <th scope="row">
        <?php echo $row['BRANCH_ID'];   ?></td>
        <td><?php echo $row['BRANCH_ADDRESS'];   ?></td>
        <td><?php echo $row['BRANCH_EMAIL'];   ?></td>
        <td><?php echo $row['BRANCH_PHONE'];   ?></td>
        <td><?php echo $row['ZIP'];   ?></td>
        <td><?php echo $row['ACCOUNT_ID'];   ?></td>
        <!-- <td><button class="btn btn-primary"></button></td> -->
        <td><button class="btn btn-primary"><a  style="color:white; text-decoration:none;" href="<?php echo $url; ?>">Modify</a></button></td>
        <td><button class="btn btn-danger">Delete</button></td>
    </tr>
    <?php
    
}
?>
</tbody>
</table>
<?php
oci_free_statement($stid);
oci_close($conn);
