<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>responsive design!</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen">
	<?php $page = 'away' ?>
</head>
<body>
	<div id="wrapper">
		<header>
		  <div id="logo">
			  <span class="logo-1">sam</span>
			  <span class="logo-2">DANIEL</span>
			  <h2><span id="tagline">This website is blue, orange, red, black, and bold.</span></h2>
			  <h2><span id="responsive">And now it's responsive!</span></h2>
		  </div>
		  <nav>
			<?php include('navigation.php'); ?>
		  </nav>
		</header>

			<section id='left'>
				<article class='blog-post'>
			    	<h1>Blog Post 1</h1>
			    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac elit at nisl sagittis consequat sed eget tellus. Aliquam gravida, nunc sit amet viverra dictum, nibh justo semper massa</p>
			    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac elit at nisl sagittis consequat sed eget tellus. Aliquam gravida, nunc sit amet viverra dictum, nibh justo semper massa</p>
			  	</article>
			  	<article class='blog-post'>
			    	<h1>Blog Post 2</h1>
			    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac elit at nisl sagittis consequat sed eget tellus. Aliquam gravida, nunc sit amet viverra dictum, nibh justo semper massa</p>
			    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac elit at nisl sagittis consequat sed eget tellus. Aliquam gravida, nunc sit amet viverra dictum, nibh justo semper massa</p>
			  	</article>
			</section>

			<section id='right'>
				<article class='blog-post'>
			    	<h1>Blog Post 1</h1>
    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac elit at nisl sagittis consequat sed eget tellus. Aliquam gravida, nunc sit amet viverra dictum, nibh justo semper massa</p>
    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac elit at nisl sagittis consequat sed eget tellus. Aliquam gravida, nunc sit amet viverra dictum, nibh justo semper massa</p>
    			</article>
  				<article class='blog-post'>
    				<h1>Blog Post 2</h1>
    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac elit at nisl sagittis consequat sed eget tellus. Aliquam gravida, nunc sit amet viverra dictum, nibh justo semper massa</p>
    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac elit at nisl sagittis consequat sed eget tellus. Aliquam gravida, nunc sit amet viverra dictum, nibh justo semper massa</p>
  				</article>
			</section>
		
		<footer>
		</footer>
	</div>

</body>
</html> 
