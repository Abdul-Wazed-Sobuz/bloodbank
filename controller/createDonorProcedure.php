<?php
$conn=oci_connect('bbank','blood','localhost/xe') or die (oci_error());
//Request does not change
$sql = 'BEGIN create_donor(:email, :password, :name, :phone, :address, :dob, :ld, :bgroup); END;';            

//Statement does not change
$stmt = oci_parse($conn,$sql);                     
oci_bind_by_name($stmt,':email',$_POST['email']); 
oci_bind_by_name($stmt,':password',$_POST['password']); 
oci_bind_by_name($stmt,':name',$_POST['name']); 
oci_bind_by_name($stmt,':phone',$_POST['phone']); 
oci_bind_by_name($stmt,':address',$_POST['address']); 
oci_bind_by_name($stmt,':dob',$_POST['dob']); 
oci_bind_by_name($stmt,':ld',$_POST['ld']); 
oci_bind_by_name($stmt,':bgroup',$_POST['bgroup']); 
          
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