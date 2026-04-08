<?php
include ("hchecklog.php");
include ("connect.php");
$id= $_SESSION['mfamilyid'];
$pid= $_SESSION['mmyid'];
$gid= $_SESSION['mgid'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="main.css" rel="stylesheet" type="text/css" />
<link href="update.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../style.css"/>
<title>My Heritage</title>

<style type="text/css">
<!--
.style2 {font-size: 12px}
.style3 {color: #FFFFFF}
-->
</style>

</head>
<script src="popup.js"></script>
<script src="postvalidate.js"></script>
<body >


<style type="text/css">
.leftcell
{
   float: left;
   text-align: right;
}
.rightcell
{
   float: left;
   text-align: left;
   padding-left: 5px; /* give some spacing here to fake cell padding */
}
</style>
  
<div class="main">
<?php include ("smheader1.php"); ?> 
</div>


	



<form id="form3" name="form3" method="post" action="">
<?php 
	$qrey=mysqli_query($connect,"select * from personal_details where my_id ='$pid'     ") or die(mysqli_error($connect));
$rew=mysqli_fetch_array($qrey);
	
	?>
<div id="mid" class="style3">

<marquee>CONNECTING TO MY HISTORY Welcomes
<?php 
	$qry=mysqli_query($connect,"select * from family_details where family_id ='$id' and subfamily_id =''    ") or die(mysqli_error($connect));
	while($rw=mysqli_fetch_array($qry))
	{
	?>
<?php echo $rw['family_name']; ?>


<?php } ?>

family


</marquee>
</div>




<div id="footer">

<p><a href="heritage" class="">connecting to my past</a></p>
<table bgcolor = "" border ="0">
<tr><td>generation A </td><td>generation B</td></tr>
<tr>
<td>
<?php 
	$qry=mysqli_query($connect,"select * from personal_details where family_id ='$id' and my_id ='$pid'    ") or die(mysqli_error($connect));
	while($rfw=mysqli_fetch_array($qry))
	{
	?>
<table bgcolor ="green" class="style3" >
<tr>
<td>
 id:<?php echo $rfw['my_id']; ?></br>
 name:<?php echo $rfw['name']; ?>  <?php echo $rfw['second_name']; ?>  <?php echo $rfw['surname']; ?></br>
 gender:<?php echo $rfw['gender']; ?></br>
 dob:<?php echo $rfw['dob']; ?></br>
 dod:<?php echo $rfw['dod']; ?></br>
<a href="motherprevg?id=<?php echo $rew['id']; ?>" class="style3"> previous geneation</a></br>

<div class="box">
	<a class="button" href="#popup1"> info post</a>
</div>
</td>
</tr>
</table>
<form id="form2" name="form2" method="post"    action="" enctype="multipart/form-data">
<div id="popup1" class="overlay" >
	<div class="popup">
		
<marquee><h2><?php echo $rw['name']; ?>  <?php echo $rfw['second_name']; ?>  <?php echo $rfw['surname']; ?> history :dob:<?php echo $rfw['dob']; ?> / dod:<?php echo $rfw['dod']; ?></h2>
</marquee>
<button type="button" class="collapsible">  history</a></button>
<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a> 
<p><?php echo $r1w['my_id']; ?>  <?php echo $r1w['second_name']; ?>  <?php echo $r1w['surname']; ?>  born on :<?php echo $rr1w['dob']; ?> and died on<?php echo $r1w['dod']; ?></p>


</br>


</div>






<button type="button" class="collapsible"> pictures</a></button>
<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a> 
<?php 
		 $sql12 = "select * from history where history_id = '$rfw[my_id]'   order by date  ";
$result12= $connect->query($sql12);

while($prw=mysqli_fetch_array($result12))
 
	

	{


	?>
<?php

if (strpos($prw[file], '.jpg'))
{
 ?>   

<img  align = "left"src="<?php echo $prw['file']; ?>" width="90" height="100" />

<?php
}
else
{
echo "";
}
?>
<?php
}
?>
</br>


</div>

<button type="button" class="collapsible"> vedios </a></button>

<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a> 
<?php 
		 $sql1 = "select * from history where history_id = '$rfw[my_id]'   order by date  ";
$result1= $connect->query($sql1);

while($rwp=mysqli_fetch_array($result1))
 
	

	{


	?>
<?php

if (strpos($rwp[file], '.mp4'))
{
 ?>   

<video width="100%" height="240" controls  controlsList="nodownload">

  <source src="media/<?php echo $rwp['file']; ?>" type="video/mp4">
  
Your browser does not support the video tag.
</video>
<?php
}
else
{
echo "";
}
?>  


</br>
<?php
}
?>

</div>	<a class="close" href="#">&times;</a>
		<div class="content">

			
		</div>
	</div>
</div>

</form>

---------------------------------------------</br>
---------------------------------------------</br>



<table bgcolor ="green" class="style3">
<tr>

<td>
<?php 
	$qry=mysqli_query($connect,"select * from personal_details where  my_id ='$rfw[spouse_id]'    ") or die(mysqli_error($connect));
	while($srw=mysqli_fetch_array($qry))
	{
	?>

spouse id:<?php echo $rw['my_id']; ?></br>
spouse name:<?php echo $rw['name']; ?>  <?php echo $rw['second_name']; ?>  <?php echo $rw['surname']; ?></br>
spouse gender:<?php echo $rw['gender']; ?></br>
spouse dob:<?php echo $rw['dob']; ?></br>
spouse dod:<?php echo $rw['dod']; ?></br>
<div class="box">
	<a class="button" href="#popups1"> info post</a>
</div>


</td>
</tr>
</table>
<form id="form2" name="form2" method="post"    action="" enctype="multipart/form-data">
<div id="popups1" class="overlay" >
	<div class="popup">
		
<marquee><h2><?php echo $srw['name']; ?>  <?php echo $srw['second_name']; ?>  <?php echo $srw['surname']; ?> history :dob:<?php echo $srw['dob']; ?> / dod:<?php echo $srw['dod']; ?></h2>
</marquee>
<button type="button" class="collapsible">  history</a></button>
<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a> 
<p><?php echo $srw['my_id']; ?>  <?php echo $srw['second_name']; ?>  <?php echo $srw['surname']; ?>  born on :<?php echo $srw['dob']; ?> and died on<?php echo $srw['dod']; ?></p>


</br>


</div>






<button type="button" class="collapsible"> pictures</a></button>
<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a> 
<?php 
		 $sql12 = "select * from history where history_id = '$srw[my_id]'   order by date  ";
$result12= $connect->query($sql12);

while($sprw=mysqli_fetch_array($result12))
 
	

	{


	?>
<?php

if (strpos($prw[file], '.jpg'))
{
 ?>   

<img  align = "left"src="<?php echo $sprw['file']; ?>" width="90" height="100" />

<?php
}
else
{
echo "";
}
?>
<?php
}
?>
</br>


</div>

<button type="button" class="collapsible"> vedios </a></button>

<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a> 
<?php 
		 $sql1 = "select * from history where history_id = '$srw[my_id]'   order by date  ";
$result1= $connect->query($sql1);

while($svrw=mysqli_fetch_array($result1))
 
	

	{


	?>
<?php

if (strpos($svrw[file], '.mp4'))
{
 ?>   

<video width="100%" height="240" controls  controlsList="nodownload">
  <source src="media/<?php echo $svrw['file']; ?>" type="video/mp4">
  
Your browser does not support the video tag.
</video>
<?php
}
else
{
echo "";
}
?>  


</br>
<?php
}
?>

</div>	<a class="close" href="#">&times;</a>
		<div class="content">

			
		</div>
	</div>
</div>

</form>
---------------------------------------------</br>
---------------------------------------------</br>



<?php 
	$qry=mysqli_query($connect,"select *from history where  history_id ='$pid' and spouse_id !=''   ") or die(mysqli_error($connect));
	while($r=mysqli_fetch_array($qry))



	{


?>
 
	
<?php
//$qry=mysqli_query($connect,"select * from personal_details where  my_id ='$r[spouse_id]'    ") or die(mysqli_error($connect));
	//$rs2=mysqli_fetch_array($qry);


?>
<table bgcolor ="green" class="style3">
<tr>	

spouse id:<?php echo $r['spouse_id']; ?></br>
spouse name:<?php echo $rs2['name']; ?>  <?php echo $rs2['second_name']; ?>  <?php echo $rs2['surname']; ?></br>
spouse gender:<?php echo $rs2['gender']; ?></br>
spouse dob:<?php echo $rs2['dob']; ?></br>
spouse dod:<?php echo$rs2['dod']; ?></br>
<div class="box">
	<a class="button" href="#popups2<?php echo $r['spouse_id']; ?>"> info post</a>

</div>

</td>
</tr>
</table>




<form id="form2" name="form2" method="post"    action="" enctype="multipart/form-data">
<?php
$qry=mysqli_query($connect,"select * from personal_details where  my_id ='$r[spouse_id]'    ") or die(mysqli_error($connect));
	$rs2=mysqli_fetch_array($qry);


?>
<div id="popups2<?php echo $r['spouse_id']; ?>" class="overlay" >
	<div class="popup">
		
<marquee><h2><?php echo $rs2['name']; ?>  <?php echo $rs2['second_name']; ?>  <?php echo $rs2['surname']; ?> history :dob:<?php echo $rs2['dob']; ?> / dod:<?php echo $rs2['dod']; ?></h2>
</marquee>
<button type="button" class="collapsible">  history</a></button>
<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a> 
<p><?php echo $r1w['my_id']; ?>  <?php echo $r1w['second_name']; ?>  <?php echo $r1w['surname']; ?>  born on :<?php echo $rr1w['dob']; ?> and died on<?php echo $r1w['dod']; ?></p>


</br>


</div>






<button type="button" class="collapsible"> pictures</a></button>
<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a> 
<?php 
		 $sql12 = "select * from history where history_id = '$rs2[my_id]'   order by date  ";
$result12= $connect->query($sql12);

while($prs2=mysqli_fetch_array($result12))
 
	

	{


	?>
<?php

if (strpos($prs2[file], '.jpg'))
{
 ?>   

<img  align = "left"src="<?php echo $prs2['file']; ?>" width="90" height="100" />

<?php
}
else
{
echo "";
}
?>
<?php
}
?>
</br>


</div>

<button type="button" class="collapsible"> vedios </a></button>

<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a> 
<?php 
		 $sql1 = "select * from history where history_id = '$rs2[my_id]'   order by date  ";
$result1= $connect->query($sql1);

while($vrs2=mysqli_fetch_array($result1))
 
	

	{


	?>
<?php

if (strpos($vrs2[file], '.mp4'))
{
 ?>   

<video width="100%" height="240" controls  controlsList="nodownload">
  <source src="media/<?php echo $vrs2['file']; ?>" type="video/mp4">
  
Your browser does not support the video tag.
</video>
<?php
}
else
{
echo "";
}
?>  


</br>
<?php
}
?>

</div>
	<a class="close" href="#">&times;</a>
		<div class="content">

			
		</div>
	</div>
</div>

</form>
<?php
}}
?>
</td>




<td bgcolor = "green">
<?php 
	$qry=mysqli_query($connect,"select * from personal_details where  father_id ='$pid'    ") or die(mysqli_error($connect));
	while($r1w=mysqli_fetch_array($qry))
	{
	?>
<table bgcolor ="red" class="style3">
<tr>

<td>

child id:<?php echo $r1w['my_id']; ?> </td> <td><?php echo $r1w['name']; ?> </td> <td><?php echo $r1w['second_name']; ?> </td> <td><?php echo $r1w['surname']; ?></td></br>
<tr>
<tr>


<td>
<div class="box">
	<a class="button" href="#popup2<?php echo $r1w['my_id']; ?>"> info post</a>
</div>



<form id="form2" name="form2" method="post"    action="" enctype="multipart/form-data">
<div id="popup2<?php echo $r1w['my_id']; ?>" class="overlay">
	<div class="popup">
		<marquee><h2><?php echo $r1w['name']; ?>  <?php echo $r1w['second_name']; ?>  <?php echo $r1w['surname']; ?> history </h2>
</marquee>


<button type="button" class="collapsible">  history</a></button>
<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a> 
<p><?php echo $r1w['my_id']; ?>  <?php echo $r1w['second_name']; ?>  <?php echo $r1w['surname']; ?>  born on :<?php echo $rr1w['dob']; ?> and died on<?php echo $r1w['dod']; ?></p>


</br>


</div>


<button type="button" class="collapsible"> pictures</a></button>
<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a> 
<?php 
		 $sql12 = "select * from history where history_id = '$r1w[my_id]'   order by date  ";
$result12= $connect->query($sql12);

while($prw=mysqli_fetch_array($result12))
 
	

	{


	?>
<?php

if (strpos($prw[file], '.jpg'))
{
 ?>   

<img  align = "left"src="<?php echo $prw['file']; ?>" width="90" height="100" />

<?php
}
else
{
echo "";
}
?>
<?php
}
?>
</br>


</div>

<button type="button" class="collapsible"> vedios </a></button>

<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a> 
<?php 
		 $sql1 = "select * from history where history_id = '$r1w[my_id]'   order by date  ";
$result1= $connect->query($sql1);

while($rwp=mysqli_fetch_array($result1))
 
	

	{


	?>
<?php

if (strpos($rwp[file], '.mp4'))
{
 ?>   

<video width="100%" height="240" controls  controlsList="nodownload">
  <source src="media/<?php echo $rwp['file']; ?>" type="video/mp4">
  
Your browser does not support the video tag.
</video>
<?php
}
else
{
echo "";
}
?>  


</br>
<?php
}
?>

</div>
 




		<a class="close" href="#">&times;</a>
		<div class="content">

			
		</div>
	</div>
</div>

</form>




 </td> <td><a href="motherprevg?id=<?php echo $rew['id']; ?>" class="style3"> previous geneation</a></td> <td> </td> <td><a href="mothernextg?id=<?php echo $r1w['id']; ?>" class="style3"> next geneation</a></td></br>
</tr>

</table>
<?php
}}
?>
</td>   
</tr>




</table>
</div>
</br>





<button type="button" class="collapsible"> other family names</a></button>


<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a> 
<?php 
	$qry=mysqli_query($connect,"select * from family_details where family_id ='$id' and subfamily_id !=''    ") or die(mysqli_error($connect));
	while($rw=mysqli_fetch_array($qry))
	{
	?>
<?php echo $rw['family_name']; ?></br>


<?php } ?>         


</br>


 



</div>
<div id="footer">
<P align = "left">major names</p>








 </div>







<button type="button" class="collapsible">family hisitory and major events </a></button>

<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a> 
<?php 
	$qry=mysqli_query($connect,"select * from history where history_id ='$id'     ") or die(mysqli_error($connect));
	while($rw=mysqli_fetch_array($qry))
	{
	?>
<?php echo $rw['subject']; ?>::
<?php echo $rw['description']; ?></br>

<?php } ?>         


</br>

 
 





</div>

</br>

 

</div>

<div id="footer">


<p><span class="style1">other historic events in pictures</span></p>



</form>

<form id="form1" name="form1" method="post" action="">

<br />


</form>



</form>






<a href ="" class="style">      </a></br>


</br>

</br>
 
 
   
 




</br>







</div>
</form>




 </table></br>

</div>













</body>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
    content.style.backgroundColor = 'green';
      content.style.display = "block";
    }
  });
}
</script>
</html>
