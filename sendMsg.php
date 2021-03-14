<?php

// trabajo con archivos, deberias reemplazarlo por una consulta a BD

echo 'Mensaje enviado: '.$_POST['text'];

$lastId = file_get_contents('lastMsg-id.txt');
$lastId = (int) $lastId;
$newId = $lastId + 1;

file_put_contents('lastMsg-id.txt',$newId);
file_put_contents('lastMsg-text.txt',$_POST['text']);

?>
