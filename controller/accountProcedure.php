<?php
$conn=oci_connect('bbank','blood','localhost/xe') or die (oci_error());
//Request does not change
$sql = 'BEGIN SHOWACCOUNT(:OUTPUT_CUR); END;';            

//Statement does not change
$stmt = oci_parse($conn,$sql);                     
// oci_bind_by_name($stmt,':POP',$pop);           
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
        <th scope="col">ACCOUNT_ID</th>
        <th scope="col">TYPE</th>
        <th scope="col">EMAIL</th>
    </thead>
    <tbody>
<?php
while (($row = oci_fetch_assoc($OUTPUT_CUR)) != false) {
    $url="../admin/updatebranch.php?bid=".$row['ACCOUNT_ID']."&badd=".$row['TYPE']."&bemail=".$row['EMAIL'];
    ?>
    <tr>
        <th scope="row">
        <?php echo $row['ACCOUNT_ID'];   ?></td>
        <td><?php echo $row['TYPE'];   ?></td>
        <td><?php echo $row['EMAIL'];   ?></td>
        <!-- <td><button class="btn btn-primary"></button></td> -->
        <td><button class="btn btn-danger"><a style="color:white; text-decoration:none;" href="../../controller/accountDelete.php?aid=<?php echo $row["ACCOUNT_ID"]; ?>">Delete</a></button></td>
    </tr>
    <?php
    
}
?>
</tbody>
</table>