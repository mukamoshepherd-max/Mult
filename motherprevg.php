
<?php
include ("hchecklog.php");
include ("connect.php");

$id1 = $_GET['id'];
$count=0;

 
 		$qry=mysqli_query($connect,"select * from personal_details where id ='$id1' ") or die(mysqli_error($connect));
	$rp=mysqli_fetch_array($qry);
			$count=mysqli_num_rows($qry);
//$fetch1=mysqli_fetch_array($query);
				
$_SESSION['counter'] = $_SESSION['counter']-1;
				
$_SESSION['mfamilyid']=$rp['family_id'];

$_SESSION['mfatherid']=$rp['father_id'];

$_SESSION['mgid']=$rp['generation_id'];
			
			

			$_SESSION['logdate'] = date("m/d/Y H:i:s");
			
			$_SESSION['log'] =true;

			header('location:mheritage');
			
			
		
			
			
	



?>