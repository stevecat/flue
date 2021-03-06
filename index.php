<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<title>Fluebot</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>
<body>
<?php

if (file_exists("switches.json")) {
  $switches = json_decode(file_get_contents("switches.json"),true);
} else {
  $switches = [];
}

if (isset($_GET["on"])) {

  if ($_GET["on"] == "1"){
    $switches["enabled"]=true;
  } else {
    $switches["enabled"]=false;
  }

  file_put_contents("switches.json", json_encode($switches));

}

if (isset($_GET["clearNightlight"])) {

    $switches["nightlight"]=[];
    file_put_contents("switches.json", json_encode($switches));
    echo "Night light cleared.";

}

echo "<h3>Fluebot</h3>";

if ($_GET["manual"]==1) {

  echo "<pre>";
    include "fluebot.php";
  echo "</pre>";

}

if ($_GET["status"]==1) {

  echo "<pre>";
    include "status.php";
  echo "</pre>";

}

if ($switches["enabled"]) {
  echo "<h4>Enabled.</h4>";
  echo "<h4><a href=\"?on=0\">Switch off :(</a></h4>";
} else {
  echo "<h4>Disabled!</h4>";
  echo "<h4><a href=\"?on=1\">Switch on :3</a></h4>";
}

echo "<a href=\"?manual=1\">Manual</a>, ".
     "<a href=\"?force=1&manual=1\">Force</a>, ".
     "<a href=\"?status=1\">Status</a>";

?>
</body>
</html>
