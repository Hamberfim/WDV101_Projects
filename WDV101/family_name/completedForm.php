<!DOCTYPE html>
<html>
<head>

  <link href="form_style.css" rel="stylesheet" type="text/css" />
  <script src="formsubmit.js"></script>
  <title>Sullivan Family</title>
  
  <style type="text/css"> 
header {
  text-align: center;
  margin: 6px;
}  

footer {
  clear: both;
  text-align: center;
  margin-top: 20px;
  padding: 6px;
 }
 
img {
  vertical-align: middle;
}
  
.title{
  font-size: 3em;
}

left {
  float: left;
}

#immigration {
  width: 47%;
  padding: 10px;
  float: left;
  clear: both;
}

</style>

</head>

<body>

<header>
	<img src = "images/ireland.jpg" height = "150" alt="Ireland map" />
	<span class = "title">The Sullivan Family</span>
</header>

<article id="immigration">

<h3>Irish Immigration</h3>
<p>During the 18th and 19th centuries, many families emigrated from Ireland in search of opportunities and better living conditions. The largest exodus happened in the 1840s during the great potato famine. Potatoes were the main source of food, and a blight destroyed most of the crops. Hundreds of thousands of Irish immigrants left the island, hoping to live in the United States and Canada. It is believed that over 2 million people left Ireland in the 1800s. </p>

<p>Many Sullivans were among the Irish immigrants. They settled in places including:</p>

<ul class="list">
  <li>New York</li>
  <li>Nova Scotia</li>
  <li>Ontario</li>
  <li>Pennsylvania</li>
  <li>Quebec</li>
</ul>

<h3>Tell us about yourself!</h3>

<p>If you're a Sullivan, or if any of your ancestors are Sullivans, please add your name and information to our database using the form. We'd love it if you could also help us with the newsletter and reunion. Please tell us a bit about yourself as well. Also, feel free to ask questions about ancestry research. If you're planning a trip to Ireland, let us know. We'd love to show you around!</p>


</article> <!-- end immigration -->

<div id="formcontainer">
<!-- Start form code -->
<?php

echo "<p>Thank you for your response, ! I appreciate the following information!</p>";

//It will create a table and display one set of name value pairs per row
	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr class=colorRow>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	} 
	echo "</table>";
	echo "<p>&nbsp;</p>";

//This code pulls the field name and value attributes from the Post file
//The Post file was created by the form page when it gathered all the name value pairs from the form.
//It is building a string of data that will become the body of the email

//          CHANGE THE FOLLOWING INFORMATION TO SEND EMAIL FOR YOU //  

	$toEmail = "noreply@hamberfim.com";		//CHANGE within the quotes. Place email address where you wish to send the form data. 
										//Use your DMACC email address for testing. 
										//Example: $toEmail = "jhgullion@dmacc.edu";		
	
	$subject = "WDV101 Sulli Form";	//CHANGE within the quotes. Place your own message.  For the assignment use "WDV101 Email Example" 

	$fromEmail = "noreply@hamberfim.com";		//CHANGE within the quotes.  Use your DMACC email address for testing OR
										//use your domain email address if you have Heartland-Webhosting as your provider.
										//Example:  $fromEmail = "contact@jhgullion.org";  

//   DO NOT CHANGE THE FOLLOWING LINES  //

	$emailBody = "Form Data\n\n ";			//stores the content of the email
	foreach($_POST as $key => $value)		//Reads through all the name-value pairs. 	$key: field name   $value: value from the form									
	{
		$emailBody.= $key."=".$value."\n";	//Adds the name value pairs to the body of the email, each one on their own line
	} 
	
	$headers = "From: $fromEmail" . "\r\n";				//Creates the From header with the appropriate address

 	if (mail($toEmail,$subject,$emailBody,$headers)) 	//puts pieces together and sends the email to your hosting account's smtp (email) server
	{
   		echo("<p>Message successfully sent!</p>");
  	} 
	else 
	{
   		echo("<p>Message delivery failed...</p>");
  	}

?>

<!-- end form code -->
</div> 
	<!-- end formcontainer -->
<footer>
<p>Patrick Sullivan &bull; 37 Merrion Square &bull; Dublin 2 &bull; Ireland</p>

</footer> 



</body>
</html>