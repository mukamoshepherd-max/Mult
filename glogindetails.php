<?php
include ("hchecklog.php");

include"connect.php";

?>









<?php



@$user=$_POST['user'];
@$pass=$_POST['password'];

 if(isset($_POST['log']))
 {
 		$qry=mysqli_query($connect,"select * from users where username ='$user'  and password = '$pass'") or die(mysqli_error($connect));
	$rw=mysqli_fetch_array($qry);
			$count=mysqli_num_rows($qry);
//$fetch1=mysqli_fetch_array($query);
				if($count!=0)
					
{
				
$_SESSION['user']=$rw['user'];

$_SESSION['level']=$rw['level'];

//$_SESSION['gid']=$rw['generation_id'];
			
			

			$_SESSION['logdate'] = date("m/d/Y H:i:s");
			
			$_SESSION['log'] =true;
			$_SESSION['couter'] =0;

			header('location:home');
			
			
		
			
			
	
}


	
else


{
						?>
			<script language="javascript">
alert(" invalid login. ");
window.location="logout";
</script>
<?php
exit();
	}
}
			
					
?>










<?php



@$user=$_POST['fid'];

 if(isset($_POST['psearch']))
 {
 		$qry=mysqli_query($connect,"select * from personal_details where my_id ='$user' ") or die(mysqli_error($connect));
	$rw=mysqli_fetch_array($qry);
			$count=mysqli_num_rows($qry);
//$fetch1=mysqli_fetch_array($query);
				if($count!=0)
					
{
				
$_SESSION['ofamilyid']=$rw['family_id'];

$_SESSION['otid']=$rw['my_id'];

$_SESSION['ogid']=$rw['generation_id'];
			
$_SESSION['ofatherid']=$rw['father_id'];			

			$_SESSION['logdate'] = date("m/d/Y H:i:s");
			
			$_SESSION['log'] =true;
			$_SESSION['couter'] =0;

			header('location:heritage');
			
			
		
			
			
	
}


	
else


{
						?>
			<script language="javascript">
alert(" family not registeres. ");
window.location="index";
</script>
<?php
exit();
	}
}
			
					
?>




<?php



@$userotp=$_POST['userotp'];

 if(isset($_POST['otp']))
 {
 		$qry=mysqli_query($connect,"select * from personal_details where my_id ='$userotp' ") or die(mysqli_error($connect));
	$rw=mysqli_fetch_array($qry);
			$count=mysqli_num_rows($qry);
//$fetch1=mysqli_fetch_array($query);
				if($count!=0)
					
{
$save1="update personal_details set otpass='9876' where my_id = '$userotp'";
 $connect->query($save1);
				
?>
			
			<script language="javascript">
alert(" welcome. this is your OTP ");
window.location="index";
</script>			
		
			
			
<?php	
}


	
else


{
						?>
			<script language="javascript">
alert(" you are not registered. ");
window.location="home";
</script>
<?php
exit();
	}
}
			
					
?>