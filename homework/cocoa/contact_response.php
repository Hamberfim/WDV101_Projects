<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="The history and production of cocoa, its health benefits of cocoa, and interesting cocoa facts">
    <meta name="keywords" content="cocoa, chocolate, health benefits of cocoa, health benefits of chocolate, chocolate facts, cocoa facts">
    <meta name="author" content="Anthony Hamlin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocao Crazy Sally - Recipe Suggestions</title>
    <link rel="stylesheet" href="css/cocoa_layout.css">
    <link rel="stylesheet" href="css/cocao_style.css">
        <style>
        table {
            margin: 0 0 0 25px;
            border: 0px solid chocolate;

        }

        th, td {
            padding: 5px;
            border: 1px solid chocolate;
            
        }
        
        .bkdrop {
            border: 1px solid chocolate;
            border-radius: 6px;
            background-color: rgba(229, 151, 72, 0.2);
            padding: 12px;
            width: 93%;
            margin-bottom: 25px;
        }

    </style>
    
</head>

<body>
    <header>
        <h1><span style="color:chocolate;">Cocoa:</span> Fun Facts</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="health.html">Health</a></li>
            <li><a href="facts.html">Facts</a></li>
            <li><a href="recipe_suggestions.html">Recipe Suggestions</a></li>
        </ul>
    </nav>
    <section>
        <div id="formcontainer" class="bkdrop">
            <!-- Start form code -->
            <?php

echo "<p>Thank you for providing this recipe! We appreciate it.</p>";
echo "<p>Here is the recipe you provided:</p>";

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
    </section>
    <footer>

    </footer>
</body>

</html>
