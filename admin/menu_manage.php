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
	$deleteaid=@$_GET['delidno'];
	if($deleteaid)
	{
		mysql_query("delete from menu where mid='$deleteaid'");
	
	}
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

<script>
function deleteAdmin(delaid)
{
   var res= confirm ("Are you sure want to delete it?");
   if (res){
   window.location="menu_manage.php?delidno="+delaid;
   }
}
</script>
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
                <td height="40" colspan="3" style="background-color:#7ac143; text-align:center; font-size:18px; color:#333;"><strong>Create New Menu</strong></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Menu Name</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><input name="mname" type="text" required="required" id="mname" size="40" /></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Menu Link</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><input name="mlink" type="text" required="required" id="mlink" size="40" /></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Menu Category</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><select name="mcat" id="mcat">
                  <option value="Superadmin">Superadmin</option>
                  <option value="Superadmin+admin">Superadmin+admin</option>
                </select></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Menu Status</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><select name="mstatus" id="mstatus">
                  <option value="Published">Published</option>
                  <option value="Unpublished" selected="selected">Unpublished</option>
                </select></td>
              </tr>
              <tr>
                <td colspan="3" align="center" valign="middle" style="padding-left:15px;"><input type="reset" name="Reset" id="button" value="Reset" />
                  <input type="submit" name="submit" id="submit" value="Add Menu" /></td>
                </tr>
            </table>
            </form>
            <p>
            </p>
            <table width="95%" border="0" cellspacing="0" cellpadding="5" style="border:1px solid #7ac143;">
              <tr style=" background-color:#7ac143; ">
                <td width="10%" height="30" align="center" valign="middle"><strong>Serial No</strong></td>
                <td width="21%" height="30" align="left" valign="middle"><strong>Menu </strong></td>
                <td width="19%" height="30" align="left" valign="middle"><strong>Link</strong></td>
                <td width="19%" height="30" align="left" valign="middle"><strong>Category</strong></td>
                <td width="13%" height="30" align="center" valign="middle"><strong>Status</strong></td>
                <td width="9%" height="30" align="center" valign="middle"><strong>Edit</strong></td>
                <td width="9%" height="30" align="center" valign="middle"><strong>Delete</strong></td>
              </tr>
              <?php 
			  $serial=1;
			  $sql=mysql_query("select * from menu");
			  while($data_menu=mysql_fetch_array($sql))
			  
			  {
			  ?>
              <tr>
                <td width="10%" align="center" valign="middle"><?php echo $serial; ?></td>
                <td width="21%" align="left" valign="middle"> <?php  echo $data_menu['mname'];?></td>
                <td align="left" valign="middle"><?php  echo $data_menu['mlink'];?></td>
                <td width="19%" align="left" valign="middle"><?php  echo $data_menu['mcategory'];?></td>
                <td width="13%" align="center" valign="middle"><?php  echo $data_menu['mstatus'];?></td>
                <td width="9%" align="center" valign="middle"><a href="menu_edit.php<?php echo "?menuid=$data_menu[mid]";?>"> Edit</a></td>
                <td width="9%" align="center" valign="middle"><?php echo "<a href=\"javascript:deleteAdmin(delaid=$data_menu[mid])\">Delete</a>";?></td>
              </tr>
              <?php
			  $serial++; 
			  }
			  
			  ?>
            </table>
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