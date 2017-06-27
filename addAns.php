<?php
		$host="localhost";
		$user="id2066063_qnda";	
		$conn= new mysqli($host,$user,"password");
		$sql="USE id2066063_ilisha;";
		$conn->query($sql);
		$sql="UPDATE ".$_POST["Tname"]." SET Answer='".$_POST["Answer"]."' WHERE Name='".$_POST["ID"]."'";
		$res=$conn->query($sql);
		if ($res === TRUE) {
    		echo "Answer submit successful.<br>You will be redirected shortly";
		}
            else
                echo "Error occured.<br>You will be redirected shortly";
		header("Refresh: 1.5; URL=index.php");
	die();
?>