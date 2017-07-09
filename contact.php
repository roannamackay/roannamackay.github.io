<!DOCTYPE html>
	<html>
		<head>
			<title>Edinburgh Young Lacemakers</title>
			<meta name="keywords" content="Young, Lace, Edinburgh, Lacemakers, children, club">
			<meta charset="UTF-8">
			<link rel="stylesheet" href=style/style.css>
		</head>
		<body>
		    <h1>Edinburgh Young Lacemakers</h1>
			<div class="nav">
			    <ul>
				     <li><a href= 'index.html'>Home</a></li>
					 <li><a href= 'gallery.html'>Gallery</a></li>
					 <li><a class='active' href= 'contact.php'>Contact</a></li>
					 <li><a href= 'http://freeteams.com/edinburghlaceclub/'>Edinburgh Lace Club</a></li>
			    </ul>
		    </div>
			<section>
			    <?php
					$name = $_POST['name'];
					$email = $_POST['email'];
					$message = $_POST['message'];
					$from = 'From: LaceSite'; 
					$to = 'edinyounglace@gmail.com'; 
					$subject = 'Contact from Website';
					$human = $_POST['human'];
			
					$body = "From: $name\n E-Mail: $email\n Message:\n $message";
			    ?>
				<form method='post' action='contact.php'>
					<label>Name</label>
					<input name='name' placeholder='Type Here'>
					
					<label>Email</label>
					<input name 'email' type='email' placeholder='Type Here'>
					
					
					<label> Message</label>
					<textarea name='message' placeholder='Type here'></textarea>
					
					<label>*What is 2+2? (Anti-spam)</label>
                    <input name="human" placeholder="Type Here">
					
					<input id='submit' name='submit' type='submit' value='Submit'>
					
				</form>
				<?php
				if ($_POST['submit']) {		
					if (mail ($to, $subject, $body, $from)) { 
						echo '<p>Your message has been sent, we will try to get back to you soon.</p>';
					} else { 
						echo '<p>Something went wrong, go back and try again!</p>'; 
					}		 
				}
				?>
			</section>
		</body>
	</html>