<?php

date_default_timezone_set("America/New_York");
header("Content-Type: text/event-stream\n\n");

// trabajo con archivos, deberias reemplazarlo por una consulta a BD
$counter = (int) file_get_contents('lastMsg-id.txt');
while (1) {
  // Every second, sent a "ping" event.

  echo "event: ping\n";
  $curDate = date(DATE_ISO8601);
  echo 'data: {"time": "' . $curDate . '"}';
  echo "\n\n";

  // verificar si ahy nuevo mensaje
  $lastId = (int) file_get_contents('lastMsg-id.txt'); // trabajo con archivos, deberias reemplazarlo por una consulta a BD
  if ($lastId > $counter) {
    $counter = $lastId;
    echo 'data: Mensaje recibido: '.file_get_contents('lastMsg-text.txt'). "\n\n";
  }

  ob_flush();
  flush();
  sleep(1);
}

?>
