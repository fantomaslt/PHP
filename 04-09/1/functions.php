<?php


$nameErr = "";
$name = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty($_GET["name"])) {
        $nameErr = "Įveskite vardą";
    } else {
        $name = test_input($_GET["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Galimos tik raidės ir tarpai";
        }
    }
    if (isset($_GET['submit'])) {
        if (isset($_GET['name']) && isset($_GET['check'])) {
            $message = 'Sveiki';
        }
        if (isset($_GET['name']) && !isset($_GET['check'])) {
            $message = 'Sveiki2';
        }
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

