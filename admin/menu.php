<link href="style.css" rel="stylesheet" type="text/css" />

<ul> 
            <?php 
			if($acat=='Superadmin')
			{
				$sql=mysql_query("select * from menu where mstatus='Published'");
			}
			else
			{
				$sql=mysql_query("select * from menu where mstatus='Published' and mcategory!='Superadmin'");
			}
			while($data=mysql_fetch_array($sql))
			{
			?>
            	<li > <a href="<?php echo $data["mlink"]; ?>" > <?php echo $data['mname'];?></a>
                </li>
                <?php 
			}
				?>
        </ul>
            
            
            