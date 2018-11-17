<?php
$to = "aratostrio@gmail.com";
$from = "no-reply@aratostrio.rs";

$headers = "From: " . $from . "\r\n";

$subject = "New subscription";
$body = "New user subscription: "."\n".$_POST['name']."\n".$_POST['email'];


if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
{ 
    if (mail($to, $subject, $body, $headers, "-f " . $from))
    {
      echo 'Vaš e-mail (' . $_POST['email'] . ') je uspešno dodat na našoj e-mail listi!';
      echo "\n";
      echo '<button onclick="history.go(-1);">Nazad</button>';
/*      echo '<a href="https://www.aratostrio.rs/videogallery.html" class="button">Nazad</a>';*/
/*      echo '<a href="https://www.aratostrio.rs/videogallery.html" class="btn btn-default">Nazad</a>';*/
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
