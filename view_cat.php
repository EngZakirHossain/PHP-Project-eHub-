<?php 
include("admin/dbconnect.php");
$pcat=$_GET['pcat'];
$sql_view_cat=mysql_query("select * from products where pstatus='Published' and pcat='$pcat'") or die(mysql_error());

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title> All <?php echo $pcat; ?> Category</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	<!--[if IE 6]>
		<script src="js/DD_belatedPNG-min.js" type="text/javascript" charset="utf-8"></script>
	<![endif]-->
    <script> 
		$(document).ready(function(){
		  $("#search_box").click(function(){
			$("#search_container").slideToggle("slow");
		  });
		});
	</script>
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Search -->
		<div id="search">
			<div class="shell">
            	<div id="box1"> 
                    <div id="search_box"> <img src="css/images/search-icon.png" width="15" height="12" /> &nbsp; <b> Search Products  </b></div>
                    <div id="search_container"> 
                    <form action="search_pro.php" method="post" accept-charset="utf-8">
                    <label> By Keyword</label>
                    <input type="text" value="Keywords..." title="Keywords..." name="search" class="blink" />
                     <br /> <br />
                    <label> By Category </label>
                   
                    <select name="category" size="1" >
                    
                        <option value="default">-- Select Category --</option>
                        <?php 
						$sql_c2=mysql_query("select * from category where cstatus='published'");
						while($data_c2=mysql_fetch_array($sql_c2))
						{
						?>
                        <option value="<?php echo $data_c2['cname']; ?>"><?php echo $data_c2['cname']; ?></option>
                        <?php 
						}
						?>
                    </select>
                                         
					<br /> <br />
                    <label> By Price </label>
                    <select name="by_price" size="1" >
                        <option value="default">-- Select Price --</option>
                        <option value="100-500">100-500</option>
                        <option value="500-1000">500-1000</option>
                        <option value="1000-5000">1000-5000</option>
                    </select>
                    <br /> <br /> 
                    <input type="submit" name="submit" id="submit" value="Search"  />
                    
                    </form>
                    </div>
                 </div>                
				
				<div class="cl">&nbsp;</div>
			</div>
		</div>
		<!-- End Search -->
		<!-- Begin Header -->
		<div id="header" class="shell">
			
		</div>
		<!-- End Header -->
		<!-- Begin Navigation -->
		<div id="navigation">
			<div class="shell">
				<ul>
					<li><a href="index.php" title="Home">Home</a></li>
					<li><a href="view_about.php" title="About">About</a></li>
					<li><a href="view_contact.php" title="Contact">Contact</a></li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
		</div>
		<!-- End Navigation -->
		<!-- Begin Slider -->
		<div id="slider">
			<div class="slider-outer">
				<div class="slider-inner shell">
					<!-- Begin Slider Items -->
					<ul class="slider-items">
						<li>
							<img src="css/images/slide-img1.jpg" alt="Slide Image 1" />
							<div class="slide-entry">
								<h2>Graphics Computer </h2>
								<h3>Sed condimentum metus at risus </h3>
								<p>Maecenas eget purus arcu, in vestibulum libero. Ali-quam facilisis rhoncus eros, quis rutrum dolor tincid-unt ac. Duis vel consequat justo.</p>
							</div>
							<a href="#" class="more" title="View More">View More</a>
						</li>
						<li>
							<img src="css/images/slide-img2.jpg" alt="Slide Image 2" />
							<div class="slide-entry">
								<h2>Apple Home PC</h2>
								<h3>Sed condimentum metus at risus </h3>
								<p>Maecenas eget purus arcu, in vestibulum libero. Ali-quam facilisis rhoncus eros, quis rutrum dolor tincid-unt ac. Duis vel consequat justo.</p>
							</div>
							<a href="#" class="more" title="View More">View More</a>
						</li>
						<li>
							<img src="css/images/slide-img3.jpg" alt="Slide Image 3" />
							<div class="slide-entry">
								<h2>HP Computer</h2>
								<h3>Sed condimentum metus at risus </h3>
								<p>Maecenas eget purus arcu, in vestibulum libero. Ali-quam facilisis rhoncus eros, quis rutrum dolor tincid-unt ac. Duis vel consequat justo.</p>
							</div>
							<a href="#" class="more" title="View More">View More</a>
						</li>
						<li>
							<img src="css/images/slide-img4.jpg" alt="Slide Image 4" />
							<div class="slide-entry">
								<h2>Fujitsu Computer </h2>
								<h3>Sed condimentum metus at risus </h3>
								<p>Maecenas eget purus arcu, in vestibulum libero. Ali-quam facilisis rhoncus eros, quis rutrum dolor tincid-unt ac. Duis vel consequat justo.</p>
							</div>
							<a href="#" class="more" title="View More">View More</a>
						</li>
						<li>
							<img src="css/images/slide-img5.jpg" alt="Slide Image 5" />
							<div class="slide-entry">
								<h2>Apple Desktop</h2>
								<h3>Sed condimentum metus at risus </h3>
								<p>Maecenas eget purus arcu, in vestibulum libero. Ali-quam facilisis rhoncus eros, quis rutrum dolor tincid-unt ac. Duis vel consequat justo.</p>
							</div>
							<a href="#" class="more" title="View More">View More</a>
						</li>
					</ul>
					<!-- End Slider Items -->
					<div class="cl">&nbsp;</div>
					<div class="slider-controls">
						
					</div>
				</div>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		<!-- End Slider -->
		<!-- Begin Main -->
		<div id="main">
			<!-- Begin Inner -->
			<div class="inner">
				<div class="shell">
					<!-- Begin Left Sidebar -->
					<div id="left-sidebar" class="sidebar">
						<ul>
							<li class="widget">
								<h2>Categories</h2>
								<div class="widget-entry">
									<ul>
                                    <?php 
									$sql_cat=mysql_query("select * from category where cstatus='Published'");
									while($data_cat=mysql_fetch_array($sql_cat))
									{
									?>
										<li><a href="view_cat.php<?php echo "?pcat=$data_cat[cname]"; ?>" title="<?php echo $data_cat['cname']; ?>"><span><?php echo $data_cat['cname']; ?></span></a></li>
										<?php 
										
									}
										?>
									</ul>
								</div>
							</li>
                            
                            
							<li class="widget">
								<h2>Brands</h2>
								<div class="widget-entry">
									<ul>
                                    <?php 
												$sql_b=mysql_query("select * from brand where bstatus='Published'");
												while($data_b=mysql_fetch_array($sql_b))
												{
												?>
										<li><a href="view_brand.php<?php echo "?pbrand=$data_b[bname]"; ?>" title="<?php echo $data_b['bname']; ?>"><span><?php echo $data_b['bname']; ?></span></a></li>
                                         <?php 
												}
													?>
										
									</ul>
								</div>
							</li>
                            
                            
                         
						</ul>
					</div>
					<!-- End Sidebar -->
					<!-- Begin Content -->
					<div id="content">
						<!-- Begin Post -->
						<!--<div class="post">
							<h2>Welcome to PCStore<span class="title-bottom">&nbsp;</span></h2>
							<p>Maecenas eget purus arcu, in vestibulum libero. Aliquam facilisis rhoncus eros, quis rutrum dolor tincid-unt ac. Duis vel consequat justo. Praesent felis mauris, ultricies nec tincidunt vitae, dignissim ac risus. Suspendisse in sem sit amet quam adipiscing interdum. Cras ac lacinia enim. Fusce eros odio, lacinia id egestas id, adipiscing a erat. Integer lacinia augue quis eros condimentum ac varius nunc lacinia. </p>
						</div>-->
						<!-- End Post -->
						<!-- Begin Products -->
						<div id="products">
							<h2> All <?php echo $pcat; ?> Category<span class="title-bottom">&nbsp;</span></h2>
							<?php 
							$serial=1;
							
							while($data_view_cat=mysql_fetch_array($sql_view_cat))
							{
							?>
                            <div class="product">
								<a href="view_pro.php<?php echo "?viewpid=$data_view_cat[pid]"; ?>" title="<?php echo $data_view_cat['pname']; ?>">
									<span class="title"><?php echo $data_view_cat['pname']; ?></span>
									<img src="admin/image/<?php echo $data_view_cat['image']; ?>" alt="Product Image 1" />
									<span class="number">Product &nbsp; <?php echo $serial;?></span>
									<span class="price"><span>Tk.</span><?php echo $data_view_cat['price']; ?></span>
								</a>
							</div>
                            <?php 
							$serial++;
							}
							
							?>
                            
							
							<div class="cl">&nbsp;</div>
						</div>
						<!-- End Products -->
					</div>
					<!-- End Content -->
					<!-- Begin Right Sidebar -->
					<div id="right-sidebar" class="sidebar">
						<ul>
							<li class="widget products-box">
								<h2>Bestsellers</h2>
								<div class="widget-entry">
									<ul>
                                    <?php 
									$sql_pro=mysql_query("select * from products where specialcat='Best Seller'");
									while($data_pro=mysql_fetch_array($sql_pro))
									{
									?>
										<li>
											<a href="view_pro.php<?php echo "?viewpid=$data_pro[pid]"; ?>" title="<?php echo $data_pro['pname']; ?>">
												<img src="admin/image/<?php echo $data_pro['image']; ?>"  />
												<span class="info">
													<span class="title"><?php echo $data_pro['pname']; ?></span>
													<span class="price"><span> Tk.</span><?php echo $data_pro['price']; ?></span>
												</span>
												<span class="cl">&nbsp;</span>
											</a>
										</li>
                                        <?php 
									}
										?>
										
									</ul>
									<div class="cl">&nbsp;</div>
								</div>
							</li>
							<li class="widget products-box">
								<h2>Feature</h2>
								<div class="widget-entry">
									<ul>
                                    <?php 
									$sql_fp=mysql_query("select * from products where specialcat='Featured Product'");
									while($data_fp=mysql_fetch_array($sql_fp))
									{
									?>
										<li>
											<a href="view_pro.php<?php echo "?viewpid=$data_fp[pid]"; ?>" title="<?php echo $data_fp['pname'];?>">
												<img src="admin/image/<?php echo $data_fp['image'];?>" alt="Product Featured Image 1" />
												<span class="info">
													<span class="title"><?php echo $data_fp['pname'];?></span>
													<span class="price"><span>Tk.</span><?php echo $data_fp['price'];?></span>
												</span>
												<span class="cl">&nbsp;</span>
											</a>
										</li>
                                        <?php 
									}
										?>
															
									</ul>
									<div class="cl">&nbsp;</div>
								</div>
							</li>
                            
                             <li class="widget">
								<h2>Information</h2>
								<div class="widget-entry">
									<ul>
										<li><a href="view_about.php" title="About Us"><span>About Us</span></a></li>
										<li><a href="#" title="Privacy Policy"><span>Privacy Policy</span></a></li>
										<li><a href="#" title="Terms &amp; Conditions"><span>Terms &amp; Conditions</span></a></li>
										<li><a href="view_contact.php" title="Contact Us"><span>Contact Us</span></a></li>										
									</ul>
								</div>
							</li>
                            
						</ul>
					</div>
					<!-- End Sidebar -->
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- End Inner -->
		</div>
		<!-- End Main -->
		<!-- Begin Footer -->
		<div id="footer">
			<div class="shell">
				<p style="text-align:left; float:left; font-size:14px; color:#000; padding-left:150px;">Copyright &copy; PC Store 2013. Design & Developed by: Md. Shagor Sarder All Rights Reserved. </p>
				<div class="cl">&nbsp;</div>
			</div>
		</div>
		<!-- End Footer -->
	</div>
	<!-- End Wrapper -->
</body>
</html>