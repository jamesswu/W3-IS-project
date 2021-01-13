<?php
require_once('common.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css_styles/contact_us.css" />

</head>
<body>
	<!--Navigation bar-->
		<header>
			<a class="logo_wrapper" href = "index.php"> 
				<img class = "logo" src="img/meshbox.png" alt="Mesh Box Logo" width="20%"> 
			</a>
			<nav> 
				<ul class = "nav_links">
					<li><a href = "index.php">Home</a></li>
					<li><a href = "private.php">My Files</a></li>
					<li><a href = "contact_us.php">Contact Us</a></li>
					<?php if (!UserUtils::is_logged_in()) { ?>
                        <li><a href="login.php">Log in</a></li>
                    <?php } else { ?>
                        <li><a href="logout.php">Log out</a></li>
                    <?php } ?>
				</ul>
			</nav>
		</header>
	
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>What can we help you with today:</p>
  </div>
  <div class="row">
    <div class="column">
	  <a href="https://www.google.com/maps/place/Lambton+Tower,+Windsor,+ON+N9B+3P4/@42.3054223,-83.0653745,17z/data=!3m1!4b1!4m5!3m4!1s0x883b2d76e3051649:0x39d8b28d6913b9cd!8m2!3d42.3054223!4d-83.0653745">
      <img src="img/maps.png" style="width:100%">
	  </a>
    </div>
    <div class="column">
      <form action="mail.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="about">About</label>
        <select id="about" name="About">
		  <option value="general">General Inquiry</option>
          <option value="bug">Report a Bug</option>
          <option value="comments">Comments and Suggestions</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>