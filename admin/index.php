<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Hub Admin Panel</title>
</head>

<body>
<p>&nbsp; </p>
<p align="center" style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#F00;">
							<?php 
                            session_start();
                            $msg=$_SESSION['msg'];
                            if($msg)
                            {
                                echo $msg;
								$_SESSION['msg']="";
                            }
                            ?>
</p>
<form action="submit.php" method="post" name="login"> 
<table width="468" border="0" cellspacing="0" cellpadding="0" align="center" style="border:1px #7ac143 solid;">
  <tr>
    <td height="70" colspan="3" align="center" valign="middle" style="background-color:#7ac143; font-family:Tahoma, Geneva, sans-serif; font-size:24px; color:#FFF;"><strong>E-Hub Admin Panel <br> Login Here!</strong></td>
  </tr>
  <tr>
    <td width="200" height="50" align="left" valign="middle" style="padding-left:25px; font-family:Verdana, Geneva, sans-serif;">User Name</td>
    <td width="28" height="50" align="center" valign="middle"><strong>:</strong></td>
    <td width="240" align="center" valign="middle"><input name="userName" type="text" id="userName" size="40" /></td>
  </tr>
  <tr>
    <td width="200" height="50" align="left" valign="middle"style="padding-left:25px;font-family:Verdana, Geneva, sans-serif;">Password</td>
    <td width="28" height="50" align="center" valign="middle"><strong>:</strong></td>
    <td width="240" align="center" valign="middle"><input name="password" type="password" id="password" size="40" /></td>
  </tr>
 
  <tr>
    <td height="38" colspan="3" align="center" valign="middle"><input type="reset" name="Reset" id="button" value="Reset" />
      <input type="submit" name="submit" id="submit" value="Login" /></td>
  </tr>
</table>
</form>
</body>
</html>