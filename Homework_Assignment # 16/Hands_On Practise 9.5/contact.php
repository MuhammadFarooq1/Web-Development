<!DOCTYPE html> 
<html lang="en">
<head>
<title>Contact Form</title>
<meta charset="utf-8">
<style>
form { background-color:#eaeaea;
	   font-family: Arial, sans-serif;
       padding: 10px;	}
label { float: left;
	    width: 100px; 
	    clear: left;
	    text-align: right; 
	    padding-right: 10px;
	    margin-top: 10px; }
input, textarea { margin-top: 10px; 
                  display: block;} 
#mySubmit { margin-left: 110px; }
</style>
</head>
<body>
<h1>Contact Us</h1>

<form method="post" action="https://webdevbasics.net/scripts/demo.php">
  <label for="myName">Name:</label>
  <input type="text" name="myName" id="myname">
  <label for="myEmail">E-mail:</label>
  <input type="text" name="myemail" id="myEmail">
 
  <input id="mySubmit" type="submit" value="Submit" name="submit">
</form>
</body>
</html>]