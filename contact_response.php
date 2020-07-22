<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Anthony Hamlin">
    <meta name="keywords" content="14119 WDV101 Projects">
    <meta name="description" content="14119 WDV101 Projects">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/hamberfim_layout.css">
    <link rel="stylesheet" href="css/hamberfim_style.css">
    <style>
        table {
            margin: 0 0 0 25px;

        }

        th, td {
            padding: 5px;
            border: 1px solid #BFB8AE;
        }
        
        .bkdrop {
            border: 1px solid #BFB8AE;
            border-radius: 6px;
            background-color: rgba(191, 184, 174, 0.2);
            padding: 12px;
        }

    </style>

</head>

<body>
    <header>
        <div class="column_control">
            <div>
                <img src="images/MeKandinsky_xsm.png" alt="Hamberfim Icon Image" />
            </div>
            <div>
                <h1>Anthony Hamlin</h1>
                <h3>Learning Omnivore</h3>
                <h3>Developer</h3>
                <h3>DMACC CIS Student</h3>
                <h3>Accidental Dilettante</h3>
            </div>
        </div>
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.html">Home</a>
                <a href="wdv101/index.html">Projects</a>
                <a href="resume.html">Resume</a>
                <a href="contact.html" class="active">Contact</a>
            </li>
        </ul>
    </nav>
    <main>
        <div id="formcontainer" class="bkdrop">
            <!-- Start form code -->
            <?php

echo "<p>Thank you for contacting me! I appreciate it.</p>";
echo "<p>Here is the information you provided:</p>";

//It will create a table and display one set of name value pairs per row
	echo "<table>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	} 
	echo "</table>";
    echo "<p>I'll get back to you at my earliest convenience.</p>";
	echo "<p>&nbsp;</p>";



//This code pulls the field name and value attributes from the Post file
//The Post file was created by the form page when it gathered all the name value pairs from the form.
//It is building a string of data that will become the body of the email

//          CHANGE THE FOLLOWING INFORMATION TO SEND EMAIL FOR YOU //  

	$toEmail = "noreply@hamberfim.com";		//CHANGE within the quotes. Place email address where you wish to send the form data. 
										//Use your DMACC email address for testing. 
										//Example: $toEmail = "jhgullion@dmacc.edu";		
	
	$subject = "Hamberfim Contact Form";	//CHANGE within the quotes. Place your own message.  For the assignment use "WDV101 Email Example" 

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
    </main>
    <footer>

    </footer>
</body>

</html>
