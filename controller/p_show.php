
<?php
$conn=oci_connect('bbank','blood','localhost/xe') or die (oci_error());
//Request does not change
$sql = 'BEGIN SEARCH_BRANCH_BY_ZIP(:zip,:OUTPUT_CUR); END;';            
$zip = 1229;
//Statement does not change
$stmt = oci_parse($conn,$sql);                     
oci_bind_by_name($stmt,':zip',$zip);           
// oci_bind_by_name($stmt,':SEG',$seg);           
// oci_bind_by_name($stmt,':DUR',$dur);           
// oci_bind_by_name($stmt,':VIEW',$view);           
// oci_bind_by_name($stmt,':PAGE',$page);    

// Declare your cursor         
$OUTPUT_CUR = oci_new_cursor($conn);
oci_bind_by_name($stmt,":OUTPUT_CUR", $OUTPUT_CUR, -1, OCI_B_CURSOR);    
// Execute statement               
oci_execute($stmt); 
// Execute the cursor
oci_execute($OUTPUT_CUR);
// Fetch results

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
while (($row = oci_fetch_assoc($OUTPUT_CUR)) != false) {
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
        <td><button class="btn btn-danger"><a style="color:white; text-decoration:none;" href="../../controller/branchDelete.php?bid=<?php echo $row["BRANCH_ID"]; ?>">Delete</a></button></td>
    </tr>
    <?php
    
}
?>
</tbody>
</table>
<?php
// oci_free_statement($stid);
// oci_close($conn);
