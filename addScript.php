<?php
		$host="localhost";
		$user="id2066063_qnda";	
		$conn= new mysqli($host,$user,"password");
		$sql="USE id2066063_ilisha;";
		$conn->query($sql);
		$sql="INSERT INTO ".$_POST["Category"]." (Name, Age, Email, Question) VALUES ('".$_POST["Name"]."','".$_POST["Age"]."','".$_POST["Email"]."','".$_POST["Question"]."');";
		$res=$conn->query($sql);
		if ($res === TRUE) {
    		echo "Question submit successful.<br>You will be redirected shortly";
		}
                else{
                echo "Error has occured<br>You will be redirected shortly";
                }
		header("Refresh: 3; URL=index.php");
	die();
?>