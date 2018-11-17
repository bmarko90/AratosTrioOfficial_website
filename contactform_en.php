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
      echo 'Your message (' . $_POST['email'] . ') has been sent to Aratos Trio Official e-mail!';
      echo "\n";
      echo '<button onclick="history.go(-1);">Back</button>';
/*      echo '<a href="https://www.aratostrio.rs/contact_en.html" class="button">Back</a>';*/
/*      echo '<a href="https://www.aratostrio.rs/contact_en.html" class="btn btn-default">Back</a>';*/
    }
    }
    else
    {
      echo 'There is a problem with yours data entry (' . $_POST['email'] . ')';
      echo "\n";
      echo '<button onclick="history.go(-1);">Back</button>';
    }
}
else
{
  echo 'There is a problem with yours data entry (' . $_POST['email'] . ')';
  echo "\n";
  echo '<button onclick="history.go(-1);">Back</button>';
}
?>
