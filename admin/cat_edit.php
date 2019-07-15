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
	$cid=$_GET['catid'];
	$sql_cat=mysql_query("select * from category where cid='$cid'");
	$data_cat=mysql_fetch_array($sql_cat);
?>
<!DOCTYPE html>
<html>
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
            <form action="submit.php" method="post" name="menu">
            <table width="50%" border="0" cellspacing="0" cellpadding="5" style="border:1px solid #7ac143;">
              <tr>
                <td height="40" colspan="3" style="background-color:#7ac143; text-align:center; font-size:18px; color:#333;"><strong>Add Category</strong></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Category</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><input name="cname" type="text" required="required" id="cname" size="40" value="<?php echo $data_cat['cname']; ?>"/></td>
              </tr>
              
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Category Status</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><select name="cstatus" id="cstatus">
                  <option value="Published" <?php if($data_cat['cstatus']=='Published'){ echo "selected";} ?>>Published</option>
                  <option value="Unpublished" <?php if($data_cat['cstatus']=='Unpublished'){ echo "selected";} ?>>Unpublished</option>
                </select></td>
              </tr>
              <tr>
                <td colspan="3" align="center" valign="middle" style="padding-left:15px;"><input type="reset" name="Reset" id="button" value="Reset" />
                  <input type="submit" name="submit" id="submit" value="Edit Category" />
                  <input type="hidden" name="hiddencid" id="hiddencid" value="<?php echo $data_cat['cid']; ?>"/></td>
                </tr>
            </table>
            </form>
            
            
            <p></p>

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