<?php

$_email = '';
$_number = '';

function check()
{
    if (filter_input($_POST['email'], FILTER_VALIDATE_INT, 7) == TRUE)
    {
        $_email = $_POST['email'];
    } else
    {
        echo "ERROR";
    }
    if (filter_input($_POST['number'], FILTER_VALIDATE_INT, 8) == TRUE)
    {
        $_number = $_POST['number'];
    } else
    {
        echo "ERROR";
    }
}

echo $_email . $_number;




check();
?>

