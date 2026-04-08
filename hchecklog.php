<?php
error_reporting(0);
session_start();

$logdate = date("m/d/Y H:i:s");
$start =strtotime("$_SESSION[logdate]");
$end =strtotime("$logdate");

$totaltime =($end-$start);


if ($totaltime> 2000)
{
?>
			<script language="javascript">
alert("time out logging out");
window.location="logout";
</script>
<?php
	}


$_SESSION['logdate'] = date("m/d/Y H:i:s");

?>