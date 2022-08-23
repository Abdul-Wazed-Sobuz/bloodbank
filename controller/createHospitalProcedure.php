<?php
$conn=oci_connect('bbank','blood','localhost/xe') or die (oci_error());
//Request does not change
$sql = 'BEGIN create_hospital(:email, :password, :hname, :hphone, :haddress); END;';            

//Statement does not change
$stmt = oci_parse($conn,$sql);                     
oci_bind_by_name($stmt,':email',$_POST['email']); 
oci_bind_by_name($stmt,':password',$_POST['password']); 
oci_bind_by_name($stmt,':hname',$_POST['hospital_name']); 
oci_bind_by_name($stmt,':hphone',$_POST['hospital_phone']); 
oci_bind_by_name($stmt,':haddress',$_POST['hospital_address']);           
// oci_bind_by_name($stmt,':SEG',$seg);           
// oci_bind_by_name($stmt,':DUR',$dur);           
// oci_bind_by_name($stmt,':VIEW',$view);           
// oci_bind_by_name($stmt,':PAGE',$page);    

// Declare your cursor         
// $OUTPUT_CUR = oci_new_cursor($conn);
// oci_bind_by_name($stmt,":OUTPUT_CUR", $OUTPUT_CUR, -1, OCI_B_CURSOR);    
// Execute statement               
$result1=oci_execute($stmt); 
// Execute the cursor
// oci_execute($OUTPUT_CUR);
// Fetch results

if($result1){
    // echo "Data added successfully!";
    header('location:../view/admin/admindash.php');
    
}
else{

    echo "Error!";
    exit();
}
?>