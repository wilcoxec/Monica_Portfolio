<!DOCTYPE html>
<html lang="en">
	<head>
		<title>contact - MONICA WILCOX</title>
		<link rel="stylesheet" type="text/css" href="css/contact.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="shortcut icon" type="image/png" href="/favicon.png"/>

	</head>

	<body>
		<header>
			<div class="navContainer">
				<div class="nav">
					<ul>
						<li><a id="contactNav" href="home.html">MW &nbsp;</a></li>
						<li><a id="workNav" href="work.html">WORK &nbsp;</a></li>
						<li><a id="studioNav" href="studio.html">STUDIO &nbsp;</a></li>
						<li><a id="mwNav" href="contact.php">CONTACT</a></li>
					</ul>
				</div>

				<div class="nav2">
					<ul>
						<li><a id="contactNav2">MW &nbsp;</a></li>
						<li><a id="workNav2" >WORK &nbsp;</a></li>
						<li><a id="studioNav2" >STUDIO &nbsp;</a></li>
						<li><a id="mwNav2" href="contact.php">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</header>

		<div class="about row"></div>
		<div class="about row">
			<div class="aboutBox col-xs-12 col-sm-5 col-sm-offset-5 col-md-4 col-md-offset-5 col-lg-4 col-lg-offset-5">
				<div class="aboutTitle">
				Let's get in touch.
				</div>
				<div class="aboutText">If you are curious to hear more about what I can offer, don't hesitate to get in touch.
				The best way to connect with me is by <a href="#email">email</a>, but feel free to give me a <a href="tel:+18597535691">call.</a> 
				Take a look at my <a href="images/resume.pdf" target="_blank">resume</a> for more information about my work experience.
				</div>
 			</div>
		</div>

		<div class="aboutHrFirst aboutHr row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 "><hr></div>

		</div>

		<div class="info row">
			<div class="infoText col-xs-12 col-sm-4 col-sm-offset-2">
				<div><a href="https://www.linkedin.com/in/monica-wilcox-875514a4" target="_blank">Visit my LinkedIn.</a></div>
				<div><a href="tel:+18597535691">Give me a call.</a></div>
			</div>
			<div class="infoText col-xs-12 col-sm-3">
				<div><a href="monicaWilcoxPortfolio.pdf" download>Download my work (PDF).</a></div>
				<div><a href="images/resume.pdf" target="_blank">View my resume.</a></div>
			</div>

		</div>

		<div class="aboutHr row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 "><hr></div>

		</div>
			<a name="email"></a>
<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form style="text-align: center; font-family: 'Arial', Arial, sans-serif;" action="" method="POST" enctype="multipart/form-data"> 
	    <input style="text-align: left; margin: 0px;" type="hidden" name="action" value="submit"/> 
	    <div></div><br> 
	    <input name="name" type="text" value="" placeholder="Name" size="40"/><br> 
	    <div></div><br> 
	    <input name="email" type="text" value="" placeholder="Email" size="40"/><br> 
	    <div></div><br> 
	    <textarea name="message" rows="7" cols="40" placeholder="Dear Monica,"></textarea><br> 
	    <input type="submit" value="Send email"/>
	</form> 
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent from website"; 
        mail("wilcoxmc@mail.uc.edu", $subject, $message, $from); 
        echo "<meta http-equiv='refresh' content='0'>";
        } 
    }   
?>
		<div id="bottomP"></div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/navStickGrey.js"></script>

		
	</body>
</html>