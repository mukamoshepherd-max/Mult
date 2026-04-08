<?php
include ("hchecklog.php");
include ("connect.php");

?>

<?php
  if(isset($_POST['mypost1'])){
move_uploaded_file($_FILES['vfile']['tmp_name'],"media/".$fnv);
$historyid = mysqli_real_escape_string($connect,$_POST['historyid']);
  $subject = mysqli_real_escape_string($connect,$_POST['subject']);
  $caption=mysqli_real_escape_string($connect,$_POST['caption']);
 // $file=$_FILES['file']; 
  $user =$_SESSION['user'];

$date =date('d/m/Y');
 
$fn1 = time().$_FILES['filedoc']['name'];
 $fnv = time().$_FILES['vfile']['name'];
$fna = time().$_FILES['fileaud']['name'];


  $fn = time().$_FILES['file']['name'];

$countfiles =count($_FILES['file']['name']);

move_uploaded_file($_FILES['file']['tmp_name'],"files/".$fn);


//move_uploaded_file($_FILES['filedoc']['tmp_name'],"files/".$fn1);
			
//move_uploaded_file($_FILES['fileaud']['tmp_name'],"files/".$fna);



move_uploaded_file($_FILES['file']['tmp_name'],"files/".$fnv);
		

//,'/my heritage/medai/$fn','$date','$user','$date'



 mysqli_query($connect,"INSERT INTO history(history_id,subject,description,file,timing,user,date)
  VALUES('$historyid','$subject','$caption','/my heritage/files/$fn','$date','$user','$date')") or die(mysqli_error($connect));


/*mysqli_query($connect,"INSERT INTO history(history_id,subject,description,file,timing,user,date)
  VALUES('$historyid','$subject','$caption','$fnv','$date','$user','$date')") 
 
or die(mysqli_error($connect));*/
 {
  ?>
  
   <script language="javascript">
  alert(" uploaded")
  window. location = "home"; 
  </script>
  <?php
  }}
  ?>
