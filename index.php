<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Header.css">
	<meta charset="UTF-8">
	<title >QndA</title>
</head> 
<body>
	<div id="header" align="left"><a href="index.php">QndA.com</a></div>
        <hr>
	<ul>
		<li id="guide">Topics</li>
		<li><a href="index.php">Science</a></li>
		<li><a href="college.php">College</a></li>
		<li><a href="current_affairs.php">Current Affairs</a></li>
		<li><a href="bussiness.php">Bussiness</a></li>
		<li><a href="Random.php">Random</a></li>
		<li style="float: right; border: none; background-color: #4CAF50;"><a href="addQ.php">Ask a Question</a>
	</ul>	
	
	<?php
		$host="localhost";
		$u="id2066063_qnda";	
		$conn= new mysqli($host,$u,"password");
		$sql="USE id2066063_ilisha;";
		$conn->query($sql);
		$sql="SELECT * FROM science;";
		$result=$conn->query($sql);	
	if($result->num_rows>0)
	{	
		while($row=$result->fetch_assoc())
		{
			echo "<br>Name: ".$row["Name"]."<br>Email: ".$row["Email"]."<br>Age: ".$row["Age"]."<fieldset><legend>Question:</legend>".$row["Question"]."</fieldset><br>";
			echo '<form method="POST" action="addAns.php"><fieldset><legend>Answer</legend><textarea cols="100" rows="5" name="Answer">'.$row["Answer"].'</textarea><br><input type="radio" name="ID" value="'.$row["Name"].'" checked>I understand this will edit the above Answer.<br><input type="hidden" name="Tname" value="science"><input type="submit" value="Submit"></form></fieldset>';
		}
	}
	else
		echo "<h1><center>No Questions here.</center></h1>";
die();
	?>
	
</body>
</html>