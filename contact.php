<?php $title = 'Shookies! Contact us at your convenience or because we say so.'; ?>
<?php $body = 'contact'; ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); ?>

	<section>
		<form id="contactform" action="sendmessage4.php" enctype="multipart/form-data" method="post"> 
		<h2>How can we help you?</h2>
		<h5>Call us, email us, Twitter us or Facebook us!</h5>
		
				<aside>
					<ul>
						<li><strong>Call us:</strong> (415) 393-5508</li>
						<li><strong>Text us!</strong> (415) 343-5508</li>
						<li><strong>Follow us</strong> <a href="http://twitter.com/myshookies">on Twitter</a></li>
						<li><strong>Friend us</strong> <a href="http://www.facebook.com/pages/Shookies/106441829383142">on Facebook</a></li>
					</ul>
				</aside>
				<fieldset> 
					<legend>Email Contact Form</legend> 
					<ul>
						<li><label for="name">My name is:</label> 
							<input id="name" name="name" type="text"></li>
						<li><label for="email">You can email me at:</label> 
							<input id="email" name="email" type="text"></li>
 						<li><label for="message">My question is:</label> 
							<textarea name="message" id="message" rows="5" cols="10"></textarea></li>
					 	<li><button type="submit" name="submit" value="submit"><em>Send me your email!</em></button></li>
					</ul>
				</fieldset> 
			</form> 
	</section>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'); ?>