<?php


function TextInput($name)
{
    $text = ucfirst($name);
    echo "<label for='{$name}'>{$text}</label>
          <input type='text' name='{$name}' value='' placeholder='Įrašykite tekstą' />";
}

$new = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['submit'])) {
        if (empty($_GET['name'])) {
            echo 'turite įrašyti pavadinimą';
        } elseif (isset($_GET['name'])) {
            $new = TextInput($_GET['name']);
        }
    }
}
