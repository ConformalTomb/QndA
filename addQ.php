<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Header.css">
	<meta charset="UTF-8">
	<title>Ask a Question</title>
</head>
<body>
	<div id="header" align="left"><a href="index.php">QndA.com</a></div>
        <hr>
	<form method="POST" action="addScript.php">
	<fieldset>
		<legend>Question</legend>
			<textarea rows="20" cols="100" name="Question" required></textarea><br>
		<label><u>Category:</u><br>
			<input type="radio" name="Category" value="science">Science<br>
			<input type="radio" name="Category" value="college">College<br>
			<input type="radio" name="Category" value="currentaffairs">Current Affairs<br>
			<input type="radio" name="Category" value="bussiness">Bussiness<br>
			<input type="radio" name="Category" value="random">Random<br>
		</label>
	</fieldset>
	<fieldset>
		<legend>Personal Information</legend>
		<label>Name:</label><input type="text" name="Name" required><br><br>
		<label>Age:</label><input type="number" name="Age" min="16" max="200" required><br><br>
		<label>Email:</label><input type="email" name="Email" required><br><br>
		<input type="submit" name="submit" value="Submit">
	</fieldset>
	</form>

</body>
</html>