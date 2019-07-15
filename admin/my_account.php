<?php 
error_reporting(E_ALL^E_NOTICE);
session_start();
$aid=$_SESSION['aid'];
$acat=$_SESSION['category'];
$aname=$_SESSION['name'];
$astatus=$_SESSION['astatus'];

if($acat!="" and $aid!="" and $aname!="" and $astatus=="Published")
{
	include("dbconnect.php");
?>
<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
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
          
            <td width="20%" style="border-right:1px solid #7ac143; height:auto;" valign="top">
            
            <?php 
			include("menu.php");
			?>
            </td>
            
            <td width="80%" align="center" valign="middle"  style="height:auto;">
            <p style="color:#F00;"> 
            <?php 
			$msg=$_SESSION['msg'];
			if($msg)
			{
				echo $msg;
				$_SESSION['msg']="";
			}
			?>
            </p>
            <?php 
			$sql=mysql_query("select * from admin where aid='$aid'");
			$data_adm=mysql_fetch_array($sql);
			
			?>
            <form action="edit_account.php" method="post" name="menu">
            <table width="50%" border="0" cellspacing="0" cellpadding="5" style="border:1px solid #7ac143;">
              <tr>
                <td height="40" colspan="3" style="background-color:#7ac143; text-align:center; font-size:18px; color:#333;"><strong>My Account Info</strong></td>
              </tr>
              <tr>
                <td width="40%" height="30" align="left" valign="middle" style="padding-left:15px;"><strong>Name</strong></td>
                <td width="5%" height="30" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" height="30" align="left" valign="middle"><?php echo $data_adm['name']; ?></td>
              </tr>
              <tr>
                <td width="40%" height="30" align="left" valign="middle" style="padding-left:15px;"><strong>Username</strong></td>
                <td width="5%" height="30" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" height="30" align="left" valign="middle"><?php echo $data_adm['uname']; ?></td>
              </tr>
              
              
              <tr>
                <td width="40%" height="30" align="left" valign="middle" style="padding-left:15px;"><strong>Phone</strong></td>
                <td width="5%" height="30" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" height="30" align="left" valign="middle"><?php echo $data_adm['phone']; ?></td>
              </tr>
              <tr>
                <td width="40%" height="30" align="left" valign="middle" style="padding-left:15px;"><strong>Email</strong></td>
                <td width="5%" height="30" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" height="30" align="left" valign="middle"><?php echo $data_adm['email']; ?></td>
              </tr>
              <tr>
                <td width="40%" height="30" align="left" valign="middle" style="padding-left:15px;"><strong>Address</strong></td>
                <td width="5%" height="30" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" height="30" align="left" valign="middle"><?php echo $data_adm['address']; ?></td>
              </tr>
             
              <tr>
                <td colspan="3" align="center" valign="middle" style="padding-left:15px;"><input type="submit" name="submit" id="submit" value="Go To Edit Account" /></td>
                </tr>
            </table>
            </form>
          
            <p>&nbsp; </p>

            </td>
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