<?php session_start();  /*NOTE : We'll improve the contact form in the next versions of the template (with a spam protection etc.)*/ ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<!--charset-->
		<meta charset="UTF-8">
		
		<!--Add your page title -->
		<title>Add your title here</title>
		
		<!--Add meta description and Auther -->
		<meta name="description" content ="">
		<meta name="author" content ="">
		 
		<!--favicon -->
		<link rel="shortcut icon" href="favicon.ico">	
			
		<!--iOS/android/handheld specific -->	
		<link rel="apple-touch-icon" href="apple-touch-icon.png">			
		<meta name="viewport" content="width=device-width; initial-scale=1.0">						
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!--The Main CSS file -->
		<link rel="stylesheet" href="css/base.css">
				
		<!--Fonts we are using @font-face **See the Documentation for more options	-->
		<link  id ="font" rel="stylesheet" href="css/fonts/google-droidsans-droidserif-georgia.css">		

		<!--And then the skin **Refer to the Documentation for more options-->
		<link  id ="skin" rel="stylesheet" href="css/skins/orange.css">

		<!-- Modernizr - mainly used to detect html5/css3/etc. features supported by the current UA -->
		<script src="js/modernizr.min.js"></script>
		
		<!--[if lt IE 9 ]>
			<link rel="stylesheet" href="css/ie.css">		
		<![endif]-->
		
	</head>
	
	<body id ="contact-page">

		
		<!--START Main header -->
		<header>
		
			<!--START #top-bar .container -->
			<aside id = "top-bar" class = "hidden container">
				<!--START .content -->
				<div class="content">
					<!--START .row -->
					<div class="row gutter-width-2">
					
						<!-- START GRID COLUMN-->	
						<section class="c-6-12">
			
							<!-- START .about-us widget-->
							<div class="g widget">
								<h3 class="title ">Feel free to add any content you want inside this box</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum, <a href="#"> demention </a> nulla mi congue orci ivamus condimentum.</p>
								<input class="search animate" placeholder = "Type and hit enter" >	
							</div>
							<!-- END/ .about-us widget-->
							
						</section>
						<!-- END/ GRID COLUMN-->
					
						<!-- START GRID COLUMN-->	
						<section class="c-3-12">
							
							<!-- START .about-us widget-->
							<div class="g widget ">
								<h3 class="title ">Links list</h3>
								<ul class="list no-link-color">
									<li><a href="#">List item</a></li>
									<li><a href="#">Lorem ipsum</a></li>
									<li><a href="#">Vivamus condimentum</a></li>
									<li><a href="#">Mauris diam</a></li>
								</ul>								
							</div>
							<!-- END/ .about-us widget-->
							
						</section>
						<!-- END/ GRID COLUMN-->
					
						<!-- START GRID COLUMN-->	
						<section class="c-3-12">
						
							<!-- START .about-us widget-->
							<div class="g widget ">
								<h3 class="title ">Explorer more</h3>
								<ul class="list no-link-color">
									<li><a href="#">List item</a></li>
									<li><a href="#">Lorem ipsum</a></li>
									<li><a href="#">Vivamus condimentum</a></li>
									<li><a href="#">Mauris diam</a></li>						
								</ul>								
							</div>
							<!-- END/ .about-us widget-->
							
						</section>
						<!-- END/ GRID COLUMN-->
						
					</div>
					<!--END/ .row -->
				</div>				
				<!--END/ .content -->
			</aside>
			<!--END/  #top-bar .hidden .container-->			
		
		
			<!--START .container-->
			<div class = "container" >
		
				<!--#top-bar toggle button for small screens (visible on small screens) -->
				<div id = "ss-top" class="ss-only" ><span class="skin right" data-toggle ="#top-bar"><a href="#">+</a> </span></div>	
			
				<!--START #header-logo -->
				<div id="header-logo">
					<a href="./">
						<img src="images/sample-content/logo.png" alt="GearBox HTML"/>
					</a>	
				</div>			
				<!--END/ #header-logo -->
						
				<!--START #navigation -->
				<nav id="navigation">
					<ul>
					
						<!--START menu item -->
						<li>	
							<a href="./">Home</a>
						</li>
						<!--END/ menu item -->
						
						<!--START menu item -->
						<li class="current">
							<a href="#">Pages</a>
							
							<!--START dropdown level one -->
							<ul>
							
								<li><a href="#">Home suggestions</a> 
									<ul>
										<li><a href="home-suggestion-2.html">Home suggestion 2</a></li>
										<li><a href="home-suggestion-3.html">Home suggestion 3</a></li>
										<li><a href="#">More to come..</a></li>
									</ul>
								</li>
								
								<li><a href="#">More pages</a> 
									<ul>
										<li><a href="layout-nav+content+sidebar.html">nav + content + sidebar</a></li>	
										<li><a href="portfolio-single.html">Portfolio single</a></li>
										<li><a href="faq-page.html">FAQ page</a></li>										
										<li><a href="#">More to come..</a></li>
									</ul>
								</li>
								
								<li><a href="#">Galleries</a> 
									<ul>
										<li><a href="gallery-two-col.html">gallery two col</a></li>
										<li><a href="gallery-three-col.html">gallery three col</a></li>
										<li><a href="gallery-four-col.html">gallery four col</a></li>
										<li><a href="gallery-four-col-style-1.html">gallery four col (style 1)</a></li>
										<li><a href="gallery-three-col-style-2.html">gallery three col (style 2)</a></li>
									</ul>
								</li>
								
								<li><a href="blog-posts.html">Blog posts</a></li>						
								
								<li><a href="single-blog-post.html">Blog single post </a></li>	
								
								<li class="current"><a href="contact-page.php">Contact page</a></li>									
								
								<li><a href="demo-pricing-tables.html">Pricing tables</a></li>																	
								
								<li><a href="404-not-found.html">404 Not found</a></li>									
								
								<li><a href="#">A Lot more to come...</a></li>
								
							</ul>
							<!--END/ dropdown level one --> 
							
						</li>
						<!--END/ menu item -->
						
						<!--START menu item -->
						<li>
							<a href="demo-typography.html">Typography</a>
						</li>
						<!--END/ menu item -->	

						<!--START menu item -->
						<li>
							<a href="demo-grid.html">Grid</a>
						</li>
						<!--END/ menu item -->						

						<!--START #top-bar toggle button-->
						<li data-toggle ="#top-bar" class="skin">
							<a href="#top-bar">+</a>
						</li>
						<!--END/ #top-bar toggle button -->							
						
					</ul>
				</nav>
				<!--END/ #navigation-->
				
			</div>
			<!--END/ .container -->
			
			
			<!--START .container-->
			<section class = "container">
			
				<!--START #page-header-->
				<div id ="page-header">	
					
					<!-- START page title Note : you can also use h1 , h2 etc. -  make sure you add .title and .sub -->
					<h2 class=" title">Contact us</h2>
					<span class="sub">get in touch with us</span>
					<!-- END/ page title -->			

				</div>	
				<!--END/ #page-header-->				

			</section>
			<!--END/ .container -->

			
		</header>
		<!--END/ Main header -->
	
	
	
		<!--START #page -->
		<div id="page">

			<!-- START noscript alert -->
			<noscript>
				<div  class="alert">
					<h5 class="title">Javascript is disabled in your browser :( </h5>
					Javascript is required to work this site properly.	
				</div>	
			</noscript>	
			<!-- END/ noscript alert -->	
			
		
			<!--a little intro ?-->
			<p class="title-format-3 f-20">We are a group of talented web designers and developers, based in <a data-tooltip = "My Company, LLC <br> 000 whatever St., <br>You Know What , CA 00000 "><mark class="fontart-x1">San Fransisco ,  CA.</mark></a> Aenean dapibus interdu  , ut iaculis urna. Quisque sit amet velit vel ante gravida consequat. </p>

			
			<!--divider-->
			<hr>

			<!-- START .row -->					
			<div class="row gutter-width-1">	
				
				<!-- START GRID COLUMN-->						
				<div class="c-8-12">
				
					<!--START  #contact-form-->
					<div id="contact-form" class="g p-r divider-right">
					
						<h2 class="title-format-1">Your download includes a working contact form</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum terdum suscipit.Rhoncus lacinia pulvinar eros sollicitudin. Mauris diam ligula, posuere in fringilla id, gravida a risus.</p>

						<?php
						//init variables
						$cf = array();
						$sr = false;
						
						if(isset($_SESSION['cf_returndata'])){
							$cf = $_SESSION['cf_returndata'];
							$sr = true;
						}
						?>
						
						<!--START error notification-->
						<div id="errors" class="removable error hidden <?php echo ($sr && !$cf['form_ok']) ? 'show' : ''; ?>">
							<h5 class="title">There were some problems with your form submission:</h5>
							<ul class="close list" >	
								<?php 
								if(isset($cf['errors']) && count($cf['errors']) > 0) :
									foreach($cf['errors'] as $error) :
								?>
								<li><?php echo $error ?></li>
								<?php
									endforeach;
								endif;
								?>
							</ul>
						</div>	
						<!--END /error notification-->
						
						<!--START sucess notification-->
						<p id="success" class="removable success hidden <?php echo ($sr && $cf['form_ok']) ? 'show' : ''; ?>">
							Thanks for your message! We will get back to you ASAP.
						</p>
						<!--END /sucess notification-->
						

						<form method="post" action="email.php">
							
							<!--Name-->
							<p>
								<label for=" name">Name: <span class="orange-text">*</span></label>
								<input type="text" id=" name" name=" name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="Your Name" required ="required"/>
							</p>
							
							<!--Email Address-->
							<p>
								<label for="email">Email Address: <span class="orange-text">*</span></label>
								<input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="YourEmail@Here.com" required ="required" />
							</p>
							
							<!--Telephone-->
							<p>
								<label for="telephone">Telephone: </label>
								<input type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>"/>
							</p>
							
							<!--Enquiry-->
							<p>
								<label for="enquiry">Enquiry: </label>
								<select id="enquiry" name="enquiry">
									<option value="General"<?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ?"selected='selected'": '' ?>>General</option>
									<option value="Sales"<?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Sales') ?"selected='selected'": '' ?>>Sales</option>
									<option value="Support"<?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ?"selected='selected'": '' ?>>Support</option>
								</select>
							</p>
							
							<!--Message-->
							<p>
								<label for="message">Message: <span class="orange-text">*</span></label>
								<textarea id="message" cols="45" rows="8" name="message" placeholder="Your message must be greater than 20 charcters" required ="required" data-minlength="20"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
							</p>
							
							<!--Submit button-->
							<p>
								<input class ="medium skin button fontart-x1" type="submit" value="Post" id="submit-button"/>
								<!--loading spinner-->
								<span id="mail-processing" class="loading hidden"></span>										
							</p>
							<p class="italic"><span class="h2 orange-text">*</span> indicates a required field</p>
							
						</form>
						<?php unset($_SESSION['cf_returndata']); ?>
						
					</div>						
					<!--END / #contact-form-->		

				</div>
				<!-- END/ GRID COLUMN-->	
				
				<!-- START GRID COLUMN .sidebar-->	
				<div class="sidebar c-4-12">
					<div class="g">
					
						<p class="title-format-3 gray-text m-0 ">Let's talk -</p>
						<p class=" f-20 title-format-2 divider-bottom m-b-1">Call us 123-456-7890</p>							
						
						<h2 class="title-format-1 m-t">How to reach us</h2>
						<address>
							My Company, LLC</br>
							000 whatever St.,</br>
							You Know What , CA 00000
						</address>
						
						<a href="#" class="skin button">Get directions</a>
					
					</div>
				</div>
				<!-- END/ GRID COLUMN .sidebar-->	
				
			</div>					
			<!-- END/ .row-->						

		</div>
		<!-- END/ #page-->	
		
		
		<!-- START global footer -->			
		<footer>		
			<section class = "container" >

				<!-- START .row-->	
				<div class ="row gutter-width-2">
				
					<!-- START GRID COLUMN-->	
					<section class ="c-5-16">
						<!-- START .about-us widget-->
						<div class ="g about-us widget">
							
							<h3 class="title ">About us</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum, <a href="#"> demention </a> nulla mi congue orci ivamus condimentum.</p>
							
							<section>
								<h4 class="title">Stay connected..</h4>
								
								<!-- START .social-connect-->
								<ul class="social-connect">
									<li><a href="#" data-tooltip ="Like us on facebook"><img src ="images/content/social-icons/facebook.png" alt="facebook"/></a></li>
									<li><a href="#" data-tooltip ="Subscribe to RSS feed"><img src ="images/content/social-icons/rss.png" alt="RSS"/></a></li>
									<li><a href="#" data-tooltip ="Follow us on twitter"><img src ="images/content/social-icons/twitter.png" alt="twitter"/></a></li>
									<li><a href="#" data-tooltip ="Follow us on Dribbble"><img src ="images/content/social-icons/dribbble.png" alt="dribbble"/></a></li>
									<li><a href="#" data-tooltip ="Follow us on Flickr"><img src ="images/content/social-icons/Flickr.png" alt="Flickr"/></a></li>
								</ul>
								<!-- END/ .social-connect-->
	
							</section>
							
						</div>
						<!-- END/ .about-us widget-->
					</section>
					<!-- END/ GRID COLUMN-->
				
					<!-- START GRID COLUMN-->	
					<aside class ="c-6-16">
						<!-- START .about-us widget-->
						<div class ="g twitter widget">
							
							<h3 class="title">Latest tweets</h3>
							<div id = "twits">
								Loading...
							</div>
							
						</div>
						<!-- END/ .about-us widget-->
					</aside>
					<!-- END/ GRID COLUMN-->

					<aside class="c-5-16">
						<!-- START .flickr widget-->
						<div class="g flickr widget animate-all">
							
							<p class="title-format-3 gray-text f-13 m-0 ">talk to a real person</p>
							<p class=" f-20 fontart-3 fontface-2 divider-bottom m-b-1">Call us 123-456-7890</p>
	
							<h3 class="title"> newsletter</h3>	
							<p>Join our newsletter to get weekly updates on our nerw theme releases and theme updates</p>
							
							<form>
								<input placeholder="Enter your Email"> <button class="skin button">Sign up </button>							
							</form>	
						
						</div>	
						<!-- END/ .flickr widget-->
					</aside>	
				
					
				</div>
				<!-- END/ .row -->
			
				<!-- START #copyright-note-->
				<div class ="row" id ="copyright-note">
				
					<!--START #footer-nav-->
					<div  id ="footer-nav" class="semi-left uppercase">
						<a href="./">Home</a> <a href="#">pages</a> <a href="#">ABOUT</a> <a href="#">CONTACT</a> 
					</div>
					<!--END/ #footer-nav-->
					
					<!--Add your copyright here-->
					<p>Copyright &copy; 2012 Your Company. All rights reserved.</p>
					
				</div>
				<!-- END/ #copyright-note -->			
			

			</section><!-- END/ container -->			
		</footer>		
		<!-- END/ global footer -->

		
		
		<!-- START JS -->
		
			<!-- jQuery Javascript Library-->
			<script src="js/jquery.min.js"></script>
			
			<!--10 JQuery plugins -concatenated - see the documentation for more info -->
			<script src="js/essential.plugins.min.js"></script>
			
			<!--Contact form script -->
			<script src="js/all/contact-form/js.js"></script>			
			
			<!-- Custom js for GearBox HTML template-->
			<script src="js/custom.js"></script>
		
		<!-- END/ JS -->
			
	</body>
</html>