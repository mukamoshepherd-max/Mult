<?php
session_start();
include ("connect.php");
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


	



<form id="form1" name="form1" method="post" action="glogindetails">
<div id="mid" class="style3">
<button type="button" class="collapsible">family names</a></button>


<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a>          


</br>


 



</div>


<marquee>CONNECTING TO MY HISTORY</marquee>
</div>




<div id="footer">
<p><input type="text" name="fid" id="" placeholder= "enter your ID number" onkeypress="return blockSpecialChar(event)" onkeydown = "return Check(event)" onpaste = "return false;" /> <input type="submit" name="psearch" id=""  value =" click to search" /></td></tr>
</p>
<p>connecting to my past</p>


</div>
</br>





<button type="button" class="collapsible">family names</a></button>


<div class="content">

 &nbsp;

	&nbsp;




    <a href="#" class="style1">






</a>          


</br>


 



</div>
<div id="footer">
<P align = "left">major names</p>








 </div>







<button type="button" class="collapsible">family hisitory and major events </a></button>


<div class="content">

     	



   
     	  

</td>  <td>
	




	</td>
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
      content.style.display = "block";
    }
  });
}
</script>
</html>
