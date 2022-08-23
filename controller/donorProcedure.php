<?php
$conn=oci_connect('bbank','blood','localhost/xe') or die (oci_error());
//Request does not change
$sql = 'BEGIN SHOWDONOR(:OUTPUT_CUR); END;';            

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
        <th scope="col">DONOR_ID</th>
        <th scope="col">NAME</th>
        <th scope="col">PHONE</th>
        <th scope="col">ADDRESS</th>
        <th scope="col">BLOOD GROUP</th>
        <th scope="col">DATE OF BIRTH</th>
        <th scope="col">LAST DONATION</th>
    </thead>
    <tbody>
<?php

while (($row = oci_fetch_assoc($OUTPUT_CUR)) != false) {
    $url="../admin/updatedonor.php?did=".$row['DONOR_ID']."&name=".$row['NAME']."&phone=".$row['PHONE']."&address=".$row['ADDRESS']."&bgroup=".$row['BLOOD_GROUP']."&dob=".$row['DATE_OF_BIRTH']."&ld=".$row['LAST_DONATION'];
    ?>
    <tr>
        <th scope="row"><?php echo $row['DONOR_ID'];   ?></td>
        <td><?php echo $row['NAME'];   ?></td>
        <td><?php echo $row['PHONE'];   ?></td>
        <td><?php echo $row['ADDRESS'];   ?></td>
        <td><?php echo $row['BLOOD_GROUP'];   ?></td>
        <td><?php echo $row['DATE_OF_BIRTH'];   ?></td>
        <td><?php echo $row['LAST_DONATION'];   ?></td>
        <td><button class="btn btn-primary"><a  style="color:white; text-decoration:none;" href="<?php echo $url; ?>">Modify</a></button></td>
        <td><button class="btn btn-danger"><a style="color:white; text-decoration:none;" href="../../controller/donorDelete.php?did=<?php echo $row["DONOR_ID"]; ?>">Delete</a></button></td>
    </tr>
    <?php
    
    
}
?>
</tbody>
</table>