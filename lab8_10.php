<?php
echo "Your IP address is ".$_SERVER['REMOTE_ADDR']."<br>";
//echo $_SERVER['HTTP_HOST'];
if (!empty($_SERVER['HTTPS'])) 
{
  echo 'https is enabled';
}
else
{
echo 'http is enabled'."<br>";
}

?>