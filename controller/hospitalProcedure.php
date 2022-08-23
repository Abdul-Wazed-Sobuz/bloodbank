
<?php
$conn=oci_connect('bbank','blood','localhost/xe') or die (oci_error());
//Request does not change
$sql = 'BEGIN SHOWHOSPITAL(:OUTPUT_CUR); END;';            

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
        <th scope="col">HOSPITAL ID</th>
        <th scope="col">HOSPITAL NAME</th>
        <th scope="col">HOSPITAL EMAIL</th>
        <th scope="col">HOSPITAL PHONE</th>
        <th scope="col">HOSPITAL ADDRESS</th>
        <th scope="col">ACCOUNT_ID</th>
    </thead>
    <tbody>

    <?php
   while (($row = oci_fetch_assoc($OUTPUT_CUR)) != false) {
    $url="../admin/updatehospital.php?hid=".$row['HOSPITAL_ID']."&hname=".$row['HOSPITAL_NAME']."&hemail=".$row['HOSPITAL_EMAIL']."&hphone=".$row['HOSPITAL_PHONE']."&haddress=".$row['HOSPITAL_ADDRESS'];
    ?>
    <tr>
        <th scope="row">
        <?php echo $row['HOSPITAL_ID'];   ?></td>
        <td><?php echo $row['HOSPITAL_NAME'];   ?></td>
        <td><?php echo $row['HOSPITAL_EMAIL'];   ?></td>
        <td><?php echo $row['HOSPITAL_PHONE'];   ?></td>
        <td><?php echo $row['HOSPITAL_ADDRESS'];   ?></td>
        <td><?php echo $row['ACCOUNT_ID'];   ?></td>
        <td><button class="btn btn-primary"><a  style="color:white; text-decoration:none;" href="<?php echo $url; ?>">Modify</a></button></td>
        <td><button class="btn btn-danger"><a style="color:white; text-decoration:none;" href="../../controller/hospitalDelete.php?hid=<?php echo $row["HOSPITAL_ID"]; ?>">Delete</a></button></td>
    </tr>
    <?php
    
}
?>
</tbody>
</table>


