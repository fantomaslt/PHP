<?php

$nameErr = "";
$message = "";
$security = "qwerty";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Įveskite vardą";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Galimos tik raidės ir tarpai";
        }
    }
    if (isset($_POST['name'])) {
        $username = $_POST['name'];
        $_SESSION['username'] = $_POST['name'];
    } // Get username
    if (isset($_POST['pass'])) {
        $password = $_POST['pass'];
        $_SESSION['password'] = $_POST['pass'];
    } // get password
    if ($username === 'qwerty' && $password === 'qwerty') {
        $message = "<style> #show {display: block;} ,</style>";
        $_SESSION['authorization'] = 'TRUE';
    } else {
        $message = 'Įvesti duomenys nėra teisingi';
        $_SESSION['authorization'] = 'False';
    }
}

// funkcija tikrina ar nera tarpu ir t.t.
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    
    return $data;
}



