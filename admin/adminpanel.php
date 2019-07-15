<?php 
session_start();
$aid=$_SESSION['aid'];
$acat=$_SESSION['category'];
$aname=$_SESSION['name'];
$astatus=$_SESSION['astatus'];

if($acat!="" and $aid!="" and $aname!="" and $astatus=="Published")
{
	include("dbconnect.php");
?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Hub Admin Panel</title>
</head>
<style type="text/css">
body{
	margin:0;
	padding:0;
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;
}
</style>

<body>
<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center" style="border:1px solid #7ac143;">
  <tr>
    <?php 
	include("header.php");
	?>
  </tr>
  <tr height="auto">
    <td width="20%" align="left"> 
    <table width="100%" border="0" cellspacing="0" cellpadding="0" >
          <tr>
          
            <td width="20%" style="border-right:1px solid #7ac143; " valign="top">
            
            <?php 
			include("menu.php");
			?>
            </td>
            
            <td width="80%" align="center" valign="middle"  style="height:auto;"><?php  echo "Hello $aname!<br>You are logged in as $acat"?></td>
        </tr>
	  </table>

    </td>
   
  </tr>
  <tr>
    <?php 
	include("footer.php");
	?>
  </tr>
</table>
</body>
</html>
<?php 
}
else
{
	$_SESSION['msg']="Please login first";
	header("Location:index.php");
}
?>