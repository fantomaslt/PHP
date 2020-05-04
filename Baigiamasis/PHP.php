<?php

$nameErr1="";
$emailErr="";
$message1="";
$name="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name1"])) {
		$nameErr1 = "Įveskite vardą";
	} else {
		$name = test_input($_POST["name1"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
			$nameErr1 = "Galimos tik raidės ir tarpai";
		}
	}
	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format";
		}
	}
	if (isset($_POST['submit1'])) {
		if (isset($_POST['name1']) && isset($_POST['email']) && isset($_POST['message'])) {
			$message1 = 'Your message is sent';
			
		}
	}
}



$errdate="";
$errtime="";
$errguests="";
$errphone="";
$phone="";
$message="";
$nameErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["date"])) {
		$errdate = "Choose Date you want";
	}
	if (empty($_POST["time"])) {
		$errtime = "Choose Time you want";
	}
	if (empty($_POST["guest"])) {
		$errguests = "Choose number of Guests";
	}
	if (empty($_POST["name"])) {
		$nameErr = "Įveskite vardą";
	} else {
		$name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
			$nameErr = "Galimos tik raidės ir tarpai";
		}
	}
	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format";
		}
	}
	if (empty($_POST["phone"])) {
		$errphone= "Type your phone";
	} else {
		$phone = test_input($_POST["phone"]);
		if (!preg_match("/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\/0-9]*$/", $phone)) {
			$errphone = "Phone number is incorrect!";
		}
	}
	if (isset($_POST['submit'])) {
		if (isset($_POST['date']) && isset($_POST['time']) && isset($_POST['guest'])
		    && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['message'])) {
			$message = 'Your message is sent';
		}
	}
}


$actions = [
	[
		'name'  => 'Small hookah',
		'value' => '15'
	],
	[
		'name'  => 'standart hookah',
		'value' => '18'
	],
	[
		'name'  => 'exclusive hookah',
		'value' => '18'
	],
	[
		'name'  => 'VIP hookah',
		'value' => '22'
	],
	
];



// funkcija tikrina ar nera tarpu ir t.t.
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	
	return $data;
}




