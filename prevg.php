
<?php
include ("hchecklog.php");
include ("connect.php");

$id = $_GET['id'];


 
 		$qry=mysqli_query($connect,"select * from personal_details where id ='$id' ") or die(mysqli_error($connect));
	$rp=mysqli_fetch_array($qry);
			$count=mysqli_num_rows($qry);
//$fetch1=mysqli_fetch_array($query);
				if($count!=0)
					
{
				
$_SESSION['ofamilyid']=$rp['family_id'];

$_SESSION['otid']=$rp['father_id'];

$_SESSION['ogid']=$rp['generation_id'];
			
$_SESSION['ofatherid']=$rp['father_id'];		

			$_SESSION['logdate'] = date("m/d/Y H:i:s");
			
			$_SESSION['log'] =true;

			header('location:heritage');
			
			
		
			
			
	
}
?>