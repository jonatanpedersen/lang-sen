<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php
	$meta_title = "Lang Sen Contact Form";
	$meta_description = "";
	$meta_keywords = "";
	?>
	<?php include("head.php"); ?>
	<body>
		<?php include("top_pane.php"); ?>
		<?php include("navigation_pane.php"); ?>
		<?php include("left_pane.php"); ?>
		<div id="right_pane">

			<a name="top"></a>
			<h1><?php echo $meta_title; ?></h1>			
			<p><img class="image" src="/images/contact/contact.gif" width="240" height="180" align="right" alt="Lang Sen Contact Form" />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean dictum, lorem sed posuere blandit, risus lacus vulputate est, et posuere tellus tellus ac massa. Duis consectetuer, elit ut rutrum tempor, dui neque mattis lorem, at venenatis urna elit non tellus. Mauris id dui. Etiam interdum lectus nec nisi. Quisque interdum enim eu tellus. Phasellus nec enim vitae lorem lacinia lacinia. Pellentesque tempus lorem non sem. Vivamus venenatis ipsum at tortor. Curabitur rutrum congue dui. Nullam ac arcu et eros volutpat volutpat. Vivamus sapien dui, lobortis ac, varius a, porttitor dictum, lectus. Morbi mi. Nullam id nibh vel velit vulputate malesuada. Maecenas eu mi. Vestibulum odio odio, pharetra in, sodales eget, rhoncus at, neque.</p>

			<?php
			if (isset($_REQUEST['email']))
			{
			  $email = $_REQUEST['email'] ; 
			  $subject = $_REQUEST['name'] ;
			  $message = $_REQUEST['message'] . "\nPhone: " . $_REQUEST['phone'] ;
			  mail("lang-sen@lang-sen.co.uk", "Subject: $subject", $message, "From: $email" );
			  
				?>
				
				<div id="contact">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
				</div>
				
			  <?php
			  			  
			}
			else
			{
				?>
				
				<div id="contact">
				  <form method="post" action="contact.php">
				  	
				  	<div>Your name:</div>
				  	<div><input name="name" type="text" /></div>
	
				  	<div>Your email:</div>
				  	<div><input name="email" type="text" /></div>
	
				  	<div>Your phone number:</div>
				  	<div><input name="phone" type="text" /></div>
				  	
				  	<div>Message:</div>
				  	<div><textarea name="message" rows="10" cols="40"> </textarea></div>
				  
				  	<div><input type="submit" value="Send" /></div>
				  	
				  </form>
				</div>
				
			  <?php
			}
			?>			

		</div>
		<?php include("bottom_pane.php"); ?>
	</body>
</html>