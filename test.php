<?php
$connection = mysql_connect("localhost","root","");
$db = mysql_select_db("kyc",$connection);
if(isset($_POST['submit']))

{
	
$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="Upload/";
 $name = $_POST['fname'];
 $lname = $_POST['lname'];
$phoneno = $_POST['mobno'];
$dob = $_POST['dob'];


 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO info(fname,lname,mobno,dob,file,type,size) VALUES('$name','$lname','$phoneno','$','$final_file','$file_type','$new_size')";
  mysql_query($sql);
  ?>
  <script>
  alert('Form submitted successfully');
        window.location.href='eqt.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='eqt.php?fail';
        </script>
  <?php
  
 
}



}
mysql_close($connection);
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title> ICONNECT TEST </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>KYC FORM</h2>
  <form  action="" method="POST"  enctype="multipart/form-data">
    <div class="form-group" >
      <label for="email">First Name:</label>
      <input type="text" class="form-control"  placeholder="Enter First name" name="fname" required>
    </div>
	<div class="form-group" >
      <label for="Last Name">Last Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Last name" name="lname" required>
    </div>
	  <div class="form-group">
      <label for="Phone No.">Phone:</label>
      <input type="text" class="form-control" placeholder="Enter PhoneNo." name="mobno" required>
    </div>
	  <div class="form-group">
      <label for="Date Od Birth">D.O.B</label>
      <input type="text" class="form-control"  placeholder="Enter Birthdate" name="dob" required>
    </div>
   
	<div id="body">
 
Upload Addhar Card/Pan Card  <input type="file" name="file" multiple required>

 </div>
    <br /><br />
    
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
