<?php 
	$connect = mysqli_connect("127.0.0.1","root","","Hakaton");
	$ins = "INSERT INTO Contacts(name, number, description)
        VALUES ('{$_GET['name']}', '{$_GET['number']}', '{$_GET['message']}')";
        
	mysqli_query($connect,$ins);
	header('Location: index.php');
 ?>
