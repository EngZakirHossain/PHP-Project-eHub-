<?php 
if(isset($_POST['submit']))
{
	session_start();
	extract($_POST);
	include("dbconnect.php");
	$aid=$_SESSION['aid'];
	//include("php_function.php");
	
	switch($submit)
	{
		case("Login");
		$sql=mysql_query("select * from admin where uname='$userName' and password='$password' and astatus='Published'") or die(mysql_error());
		$a=mysql_num_rows($sql);
		if($a>0)
		{
			$data=mysql_fetch_array($sql);
			$_SESSION['aid']=$data['aid'];
			$_SESSION['category']=$data['category'];
			$_SESSION['name']=$data['name'];
			$_SESSION['astatus']=$data['astatus'];
			header("Location:adminpanel.php");
		}
		else
		{     
			$_SESSION['msg']="You have entered wrong password or username.";
			header("Location:index.php");
		}
		break;
		
		case("Add Menu");
		$sql="insert into menu values('','$mname','$mlink','$mcat','$mstatus')";
		mysql_query($sql) or die(mysql_error());
		$_SESSION['msg']="Successfully added a menu";
		header("Location:menu_manage.php");
		
		break;
		
		case("Add Admin");
		if($pass==$conpass)
		{
		$sql="insert into admin values('','$aname','$uname','$pass','$phone','$email','$address','$acat','$astatus')";
		mysql_query($sql) or die(mysql_error());
		$_SESSION['msg']="Successfully added an admin";
		header("Location:admin_manage.php");
		}
		else
		{
			$_SESSION['msg']="Confirm Password does not match!";
			header("Location:admin_manage.php");
		}
		
		break;
		
		case("Add Category");
		$sql="insert into category values('','$cname','$cstatus')";
		mysql_query($sql) or die(mysql_error());
		$_SESSION['msg']="Successfully added a category";
		header("Location:cat_manage.php");
		
		break;
		
		case("Add Brand");
		$sql="insert into brand values('','$bname','$bstatus')";
		mysql_query($sql) or die(mysql_error());
		$_SESSION['msg']="Successfully added a new brand";
		header("Location:brand_manage.php");
		
		break;
		
		case("Add Product");
		
		$imageName=$_FILES['image']['name'];
		$imageSize=$_FILES['image']['size'];
		$imagetype=$_FILES['image']['type'];
		
		if($imageName)
		{
			if($imagetype=="image/jpeg" || $imagetype=="image/jpg" || $imagetype=="image/gif" || $imagetype=="image/png" )
			{
				if($imageSize<1035690)
				{
					$imagepath="image/".$imageName;
					
					if(file_exists($imagepath))
					{
						$a=gmdate("Yzhis");
						move_uploaded_file($_FILES['image']['tmp_name'],$a.$imagepath);
					}
					else
					{
						move_uploaded_file($_FILES['image']['tmp_name'],$imagepath);
					}
				}
				else
				{
					session_start();
					$_SESSION['msg_img']="File Size is too big";
					header("Location:pro_manage.php");
				}
			}
			else
			{
				session_start();
				$_SESSION['msg_img']="File type is not supported";
				header("Location:pro_manage.php");
			}
		}
		
		mysql_query("insert into products     values('','$pname','$price','$pcat','$special_cat','$stock','$brand','$description','$pstatus','$imageName')");
		$_SESSION['msg']="Sucessfully Added a New Product";
		header("Location:pro_manage.php");
		break;
		
		case("Edit Menu");
		mysql_query("update menu set mname='$mname', mlink='$mlink', mcategory='$mcat', mstatus='$mstatus' where mid='$hiddenid'");
		$_SESSION['msg']="Sucessfully updated a menu";
		header("Location:menu_manage.php");
		break;
		
		case("Edit Category");
		mysql_query("update category set cname='$cname', cstatus='$cstatus' where cid='$hiddencid'");
		$_SESSION['msg']="Sucessfully updated a category";
		header("Location:cat_manage.php");
		break;
		
		case("Change Admin");
		mysql_query("update admin set name='$aname', uname='$uname', password='$pass', phone='$phone', email='$email', address='$address', category='$acat', astatus='$astatus' where aid='$hiddenaid'");
		$_SESSION['msg']="Sucessfully updated an admin";
		header("Location:admin_manage.php");
		break;
		
		case("Edit Product");
		
		$imageName=$_FILES['image']['name'];
		$imageSize=$_FILES['image']['size'];
		$imagetype=$_FILES['image']['type'];
		
		if($imageName)
		{
			if($imagetype=="image/jpeg" || $imagetype=="image/jpg" || $imagetype=="image/gif" || $imagetype=="image/png" )
			{
				if($imageSize<1035690)
				{
					$imagepath="image/".$imageName;
					
					if(file_exists($imagepath))
					{
						$a=gmdate("Yzhis");
						move_uploaded_file($_FILES['image']['tmp_name'],$a.$imagepath);
					}
					else
					{
						move_uploaded_file($_FILES['image']['tmp_name'],$imagepath);
					}
				}
				else
				{
					session_start();
					$_SESSION['msg_img']="File Size is too big";
					header("Location:pro_manage.php");
				}
			}
			else
			{
				session_start();
				$_SESSION['msg_img']="File type is not supported";
				header("Location:pro_manage.php");
			}
		}
		
		
		
		if($imageName=="")
		{
			mysql_query("update products set pname='$pname', price='$price', pcat='$pcat', specialcat='$special_cat', stock='$stock', brand='$brand', description='$description', pstatus='$pstatus' where pid='$hiddenpid'");
			$_SESSION['msg']="Sucessfully updated a product";
			header("Location:pro_manage.php");
		}
		else
		{
			mysql_query("update products set pname='$pname', price='$price', pcat='$pcat', specialcat='$special_cat', stock='$stock', brand='$brand', description='$description', pstatus='$pstatus', image='$imageName' where pid='$hiddenpid'");
			$_SESSION['msg']="Sucessfully updated a product";
			header("Location:pro_manage.php");
		}
		
		
		break;
		
		case("Change Info");
		mysql_query("update admin set name='$aname', uname='$uname', phone='$phone', email='$email', address='$address' where aid='$hiddenmyid'");
		$_SESSION['msg']="Sucessfully updated account info";
		header("Location:my_account.php");
		
		
		break;
		
		case("Edit Brand");
		mysql_query("update brand set bname='$bname', bstatus='$bstatus' where bid='$hiddenbid'");
		$_SESSION['msg']="Sucessfully updated a brand";
		header("Location:brand_manage.php");
		
		break;
		
		
		case("Change Password");
		$sql=mysql_query("select * from admin where aid='$aid'");
		$data=mysql_fetch_array($sql);
		if($data['password']==$curPass)
		{
			if($newPass==$conPass)
			{
				mysql_query("update admin set password='$newPass' where aid='$aid'");
				$_SESSION['msg']="Your Password Changed Successfully!";
				header("Location:change_pass.php");
			}
			else 
			{
				$_SESSION['msg']="New Password and Confirm Password is not matched!";
				header("Location:change_pass.php");
			}
		}
		else
		{
			$_SESSION['msg']="You Have Entered Invalid Current Password!";
			header("Location:change_pass.php");
		}
	}
}
?>