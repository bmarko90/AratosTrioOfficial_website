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
      echo 'Your e-mail (' . $_POST['email'] . ') has been added to our mailing list!';
      echo "\n";
      echo '<button onclick="history.go(-1);">Back</button>';
/*      echo '<a href="https://www.aratostrio.rs/videogallery_en.html" class="button">Back</a>';*/
/*      echo '<a href="https://www.aratostrio.rs/videogallery_en.html" class="btn btn-default">Back</a>';*/
    }
    else
    {
      echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';
      echo "\n";
    	echo '<button onclick="history.go(-1);">Back</button>';
    }
}
else
{
  echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';
  echo "\n";
  echo '<button onclick="history.go(-1);">Back</button>';
}
?>
