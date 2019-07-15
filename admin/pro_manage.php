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
		mysql_query("delete from products where pid='$deleteaid'");
	
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
   window.location="pro_manage.php?delidno="+delaid;
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
            <form action="submit.php" method="post" enctype="multipart/form-data" name="menu">
            <table width="50%" border="0" cellspacing="0" cellpadding="5" style="border:1px solid #7ac143;">
              <tr>
                <td height="40" colspan="3" style="background-color:#7ac143; text-align:center; font-size:18px; color:#333;"><strong>Add New Product</strong></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Product Name</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><input name="pname" type="text" required="required" id="pname" size="40" /></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Price</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><input name="price" type="text" required="required" id="price" size="40" /></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Category</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle">
                
                <select name="pcat" size="1" id="pcat">
                <?php 
				$sql_cat=mysql_query("select * from category where cstatus='Published'");
				while($data_cat=mysql_fetch_array($sql_cat))
				{
				?>
                  <option value="<?php echo $data_cat['cname'];?>"><?php echo $data_cat['cname'];?></option>
                  <?php 
				} 
				  ?>
                </select></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Special Category</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><select name="special_cat" id="special_cat">
                  <option value="Featured Product">Featured Product</option>
                  <option value="Best Seller">Best Seller</option>
                  <option value="Latest Product">Latest Product</option>
                </select></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Stock</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><select name="stock" size="1" id="stock">
                  <option value="Available">Available</option>
                  <option value="Unavailable">Unavailable</option>
                </select></td>
              </tr>
              
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Brand</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><select name="brand" size="1" id="brand">
                 
				  <?php 
			  $sql_brand=mysql_query("select * from brand where bstatus='Published'");
			  
			  while ($data_brand=mysql_fetch_array($sql_brand))
			  {
			  ?> 
                  <option value="<?php echo $data_brand['bname']; ?>"> <?php echo $data_brand['bname']; ?> </option>
                 <?php 
			  }
				 ?> 
                </select></td>
              </tr>
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Description</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><textarea name="description" id="description" cols="30" rows="3"></textarea></td>
              </tr>
             
              <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Status</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><select name="pstatus" id="pstatus">
                  <option value="Published">Published</option>
                  <option value="Unpublished">Unpublished</option>
                </select></td>
              </tr>
               <tr>
                <td width="40%" align="left" valign="middle" style="padding-left:15px;"><strong>Image</strong></td>
                <td width="5%" align="center" valign="middle"><strong>:</strong></td>
                <td width="55%" align="left" valign="middle"><input type="file" name="image" id="image" /></td>
              </tr>
              <tr>
                <td colspan="3" align="center" valign="middle" style="padding-left:15px;"><input type="reset" name="Reset" id="button" value="Reset" />
                  <input type="submit" name="submit" id="submit" value="Add Product" /></td>
                </tr>
            </table>
            </form>
            <p>
            </p>
            <table width="97%" border="0" cellspacing="0" cellpadding="5" style="border:1px solid #7ac143;">
              <tr style=" background-color:#7ac143; ">
                <td width="10%" height="30" align="left" valign="middle"><strong>Pro Name</strong></td>
                <td width="15%" height="30" align="left" valign="middle"><strong>Price</strong></td>
                <td width="10%" height="30" align="left" valign="middle"><strong>Category</strong></td>
                <td width="10%" height="30" align="left" valign="middle"><strong>Special Category</strong></td>
                <td width="10%" height="30" align="left" valign="middle"><strong>Stock</strong></td>
                <td width="8%" height="30" align="left" valign="middle"><strong>Brand</strong></td>
                <td width="15%" height="30" align="left" valign="middle"><strong>Description</strong></td>
                <td width="10%" height="30" align="left" valign="middle"><strong>Status</strong></td>
                <td width="10%" height="30" align="center" valign="middle"><strong>Image</strong></td>
                <td width="5%" height="30" align="center" valign="middle"><strong>Edit</strong></td>
                <td width="6%" height="30" align="center" valign="middle"><strong>Delete</strong></td>
              </tr>
              <?php 
			 
			  $sql_pro=mysql_query("select * from products");
			  while($data_pro=mysql_fetch_array($sql_pro))
			  
			  {
			  ?>
              <tr>
                <td width="10%" align="left" valign="middle"><?php echo $data_pro['pname']; ?></td>
                <td width="15%" align="left" valign="middle"> <?php echo $data_pro['price']; ?> </td>
                <td width="10%" align="left" valign="middle"> <?php echo $data_pro['pcat']; ?></td>
                <td width="10%" align="left" valign="middle"> <?php echo $data_pro['specialcat']; ?></td>
                <td width="10%" align="left" valign="middle"> <?php echo $data_pro['stock']; ?></td>
                <td width="8%" align="left" valign="middle"> <?php echo $data_pro['brand']; ?></td>
                <td width="15%" align="left" valign="middle">  <?php echo $data_pro['description']; ?></td>
                <td width="10%" align="left" valign="middle"> <?php echo $data_pro['pstatus']; ?></td>
                <td width="10%" align="center" valign="middle"> <img src="image/<?php echo $data_pro['image']; ?>" width="50" height="50" /> </td>
                <td width="5%" align="center" valign="middle"> <a href="pro_edit.php<?php echo "?proid=$data_pro[pid]";?>"> Edit </a></td>
                <td width="6%" align="center" valign="middle"><?php echo "<a href=\"javascript:deleteAdmin(delaid=$data_pro[pid])\">Delete</a>";?></td>
              </tr>
              <?php
			 
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