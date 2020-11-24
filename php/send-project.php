<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$description = $_POST['description'];
 

    


	$newArray = [
		"name" => $name,
		"surname" => $surname,
		"email" => $email,
        "description" => $description
	];


        echo json_encode($newArray);
    




?>