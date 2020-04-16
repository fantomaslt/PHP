<?php


function TextInput($name)
{
    $text = ucfirst($name);
    echo "
            <label for='{$name}'>{$text}</label>
            <input type='text' name='{$name}' value='' placeholder='Įrašykite tekstą' />
        ";
}


