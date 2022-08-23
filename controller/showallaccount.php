<?php
$conn=oci_connect('bbank','blood','localhost/xe') or die (oci_error());

$query = "select * from account";
$stid = oci_parse($conn, $query);
oci_execute($stid);

// $nrows = oci_fetch_all($stid, $res);
?>


<table class="table table-hover">
    <thead>
        <th scope="col">ACCOUNT_ID</th>
        <th scope="col">TYPE</th>
        <th scope="col">EMAIL</th>
    </thead>
    <tbody>
<?php
while (($row = oci_fetch_assoc($stid)) != false) {
    $url="../admin/updatebranch.php?bid=".$row['ACCOUNT_ID']."&badd=".$row['TYPE']."&bemail=".$row['EMAIL'];
    ?>
    <tr>
        <th scope="row">
        <?php echo $row['ACCOUNT_ID'];   ?></td>
        <td><?php echo $row['TYPE'];   ?></td>
        <td><?php echo $row['EMAIL'];   ?></td>
        <!-- <td><button class="btn btn-primary"></button></td> -->
        <!-- <td><button class="btn btn-primary"><a  style="color:white; text-decoration:none;" href="<?php echo $url; ?>">Modify</a></button></td> -->
        <td><button class="btn btn-danger"><a style="color:white; text-decoration:none;" href="../../controller/accountDelete.php?aid=<?php echo $row["ACCOUNT_ID"]; ?>">Delete</a></button></td>
    </tr>
    <?php
    
}
?>
</tbody>
</table>
<?php
oci_free_statement($stid);
oci_close($conn);
