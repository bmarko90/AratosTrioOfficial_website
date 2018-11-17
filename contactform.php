<?php
$to = "aratostrio@gmail.com";
$from = $_POST['email'];

$headers = "From: " . $from . "\r\n";

$subject = $_POST['subject'];
$body = $_POST['message'];


if( (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) && (filter_var($_POST['name'], FILTER_SANITIZE_STRING)) )
{ 
    if (mail($to, $subject, $body, $headers, "-f " . $from))
    {
      echo 'Vaša poruka (' . $_POST['email'] . ') je uspešno poslata na email Aratos Trio Official!';
      echo "\n";
    	echo '<button onclick="history.go(-1);">Nazad</button>';
/*      echo '<a href="https://www.aratostrio.rs/contact.html" class="button">Nazad</a>';*/
/*      echo '<a href="https://www.aratostrio.rs/contact.html" class="btn btn-default">Nazad</a>';*/
    }
    else
    {
      echo 'Postoji problem sa vašim unosom podataka (' . $_POST['email'] . ')';  
      echo "\n";
      echo '<button onclick="history.go(-1);">Nazad</button>'; 
    }
}
else
{
   echo 'Postoji problem sa vašim unosom podataka (' . $_POST['email'] . ')';
   echo "\n";
   echo '<button onclick="history.go(-1);">Nazad</button>';
}
?>
