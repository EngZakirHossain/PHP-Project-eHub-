<?php 
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
		mysql_query("delete from admin where aid='$deleteaid'");
	
	}
?>
<!DOCTYPE html >
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

<script>
function deleteAdmin(delaid)
{
   var res= confirm ("Are you sure want to delete it?");
   if (res){
   window.location="admin_manage.php?delidno="+delaid;
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
                <td height="40" colspan="3" style="background-color:#7ac143; text-align:center; font-size:18px; color:#333;"><strong>Create New Admin</strong></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Name</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><input name="aname" type="text" required="required" id="aname" size="40" /></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Username</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><input name="uname" type="text" required="required" id="uname" size="40" /></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Password</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><input name="pass" type="password" required="required" id="pass" size="40" /></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Confirm Password</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><input name="conpass" type="password" required="required" id="conpass" size="40" /></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Phone</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><input name="phone" type="text" required="required" id="phone" size="40" /></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Email</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><input name="email" type="text" required="required" id="email" size="40" /></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Address</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><textarea name="address" id="address" cols="30" rows="3"></textarea></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Category</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><select name="acat" id="acat">
                  <option value="Superadmin">Superadmin</option>
                  <option value="Admin">Admin</option>
                </select></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Status</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><select name="astatus" id="astatus">
                  <option value="Published">Published</option>
                  <option value="Unpublished">Unpublished</option>
                </select></td>
              </tr>
              <tr>
                <td colspan="3" align="center" valign="middle" style="padding-left:15px;"><input type="reset" name="Reset" id="button" value="Reset" />
                  <input type="submit" name="submit" id="submit" value="Add Admin" /></td>
                </tr>
            </table>
            </form>
            <p>
            </p>
            <table width="95%" border="0" cellspacing="0" cellpadding="5" style="border:1px solid #7ac143;">
              <tr style=" background-color:#7ac143; ">
                <td width="6%" height="30" align="center" valign="middle"><strong>Serial No</strong></td>
                <td width="15%" height="30" align="left" valign="middle"><strong>Name</strong></td>
                <td width="10%" height="30" align="left" valign="middle"><strong>Username </strong></td>
                <td width="10%" height="30" align="left" valign="middle"><strong>Password</strong></td>
                <td width="15%" height="30" align="left" valign="middle"><strong>Phone</strong></td>
                <td width="15%" height="30" align="left" valign="middle"><strong>Email</strong></td>
                <td width="15%" height="30" align="left" valign="middle"><strong>Address</strong></td>
                <td width="10%" height="30" align="left" valign="middle"><strong>Category</strong></td>
                <td width="6%" height="30" align="center" valign="middle"><strong>Status</strong></td>
                <td width="5%" height="30" align="center" valign="middle"><strong>Edit</strong></td>
                <td width="6%" height="30" align="center" valign="middle"><strong>Delete</strong></td>
              </tr>
              <?php 
			  $serial=1;
			  $sql=mysql_query("select * from admin");
			  while($data_admin=mysql_fetch_array($sql))
			  
			  {
			  ?>
              <tr>
                <td width="6%" align="center" valign="middle"><?php echo $serial; ?></td>
                <td width="15%" align="left" valign="middle"> <?php echo $data_admin['name'];?> </td>
                <td width="10%" align="left" valign="middle"> <?php echo $data_admin['uname'];?></td>
                <td width="10%" align="left" valign="middle"> <?php echo $data_admin['password'];?></td>
                <td width="15%" align="left" valign="middle"> <?php echo $data_admin['phone'];?></td>
                <td width="15%" align="left" valign="middle"> <?php echo $data_admin['email'];?></td>
                <td width="15%" align="left" valign="middle">  <?php echo $data_admin['address'];?></td>
                <td width="10%" align="left" valign="middle"> <?php echo $data_admin['category'];?></td>
                <td width="6%" align="center" valign="middle"> <?php echo $data_admin['astatus'];?></td>
                <td width="5%" align="center" valign="middle"> <a href="admin_edit.php<?php echo "?admid=$data_admin[aid]";?>"> Edit </a></td>
                <td width="6%" align="center" valign="middle"> <?php echo "<a href=\"javascript:deleteAdmin(delaid=$data_admin[aid])\">Delete</a>";?></td>
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