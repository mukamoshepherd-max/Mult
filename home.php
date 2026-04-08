<?php
include ("hchecklog.php");
include ("../connect.php");
//$id= $_SESSION['bizo'];
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


	




<div id="mid" class="style3">

<marquee>CONNECTING TO MY HISTORY</marquee>
</div>


<div id="footerz1" class="style4">
<?php

if($_SESSION[level]!='admin')
{?>
<form id="form1" name="form1" method="post" action="glogindetails">
<table width = "10" bgcolor ="grey">
<tr><td>admin login</td><td></td></tr>
<tr><td>username</td><td><input type ="text" name ="user" value=""/></td></tr>
<tr><td>password</td><td><input type ="text" name ="password" value=""/></td></tr>
<tr><td><input type="submit" name="log" id="" value="Login"  title=" click to login"  /></td><td></td></tr>
</table>
</form>
<?php

}
else{
?>
<a href ="logout" class="style4">logout</a>||</br>
<div class="box">
	<a class="button" href="#popup1"> new post</a>
</div>

,<?php
}
?>

</br></br>
</div>

<div id="footerz">
vision</br>
connecting to my  heritage</br></br></br>

mission</br>
knowing my family tree </br></br></br>

values</br>
</br>

</br>f</br></br>
</div>
</br>


<?php

if($_SESSION[level] !='admin')

{
?>
<div class="box">
	<form id="form1" name="form1" method="post" action="glogindetails">
<table width = "10" bgcolor ="grey">
<tr><td>Request OTP</td><td></td></tr>
<tr><td>user ID</td><td><input type ="text" name ="userotp" value=""/></td></tr>

<tr><td><input type="submit" name="otp" id="" value="Get OTP"  title=" click to login"  /></td><td></td></tr>
</table>
</form>
</div>

<?php

}
else{
?>

<div class="box">
	<form id="form1" name="form1" method="post" action="glogindetails">
<table width = "10" bgcolor ="grey">
<tr><td>Request OTP</td><td></td></tr>
<tr><td>user ID</td><td><input type ="text" name ="userotp" value=""/></td></tr>

<tr><td><input type="submit" name="otp" id="" value="Get OTP"  title=" click to login"  /></td><td></td></tr>
</table>
</form>
</div>

<?php


}
?>

<form id="form2" name="form2" method="post"    action="posted" enctype="multipart/form-data">
<div id="popup1" class="overlay">
	<div class="popup">
		<h2>update followers</h2>
<P><input type="text" name="historyid" id=""  required placeholder = "history ID" /></p>
<P><input type="text" name="subject" id=""  required placeholder = "my post sub topic" /></p>
<p>  <textarea id="" name="caption" rows="10" cols="150" value = ""></textarea> </p>

picture_____: <input type="file" name="file" id="form_file" onchange=" return myFunction()" multiple>(use jpeg,jpg,png)</br></br>
video_______:<input type="file" name="vfile" id="form_file1" onchange=" return myFunction1()">(use mp4)</br></br>
 documents: <input type="hidden" name="filedoc" id="form_file2" onchange=" return myFunction2()">(use pdf)</br></br>
 
 audio______: <input type="hidden" name="fileaud" id="form_file3" onchange=" return myFunction3()">(use mp3)</br>



<p><input type="submit" name="mypost1"   id="submit" width = "100%" value =" click to upload files" /> </p>
		<a class="close" href="#">&times;</a>
		<div class="content">

			
		</div>
	</div>
</div>

</form>

<button type="button" class="collapsible">about the system</a></button>


<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a>          


</br>


 



</div>
<div id="footer">
<P align = "center">services</p>








 </div>







<button type="button" class="collapsible">contact us </a></button>


<div class="content">

     	



   
     	  

</td>  <td>
	




	</td>
   </br> 
 
 





</div>

</br>

 

</div>

<div id="footer">


<p><span class="style1"></span></p>



</form>

<form id="form1" name="form1" method="post" action="">

<br />


</form>



</form>

 <p>follw us</p>




<a href ="" class="style">      </a></br>


</br>

</br>
 
 
   
 




</br>







</div>




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
      content.style.display = "block";
    }
  });
}
</script>
</html>
