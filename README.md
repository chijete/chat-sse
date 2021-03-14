# chat-sse
Una demostración simple de un chat que trabaja con Server-Sent Events (PHP + JavaScript + JQuery)

En el código puedes encontrar el chat. Trabaja con almacenamiento de datos en archivos TXT (deberás cambiar esto cuando trabajes en producción).

EXPLICACIÓN

index.php -> cliente

server.php -> el servidor que procesa el Server-Sent Events

sendMsg.php -> el servidor que envia los mensajes

lastMsg-id.txt -> almacena el ID del último mensaje enviado, que sirve como referencia para server.php

lastMsg-text.txt -> almacena el texto del último mensaje enviado.

IGNORAR

Los archivos README y LICENCE son generados por GitHub.

MÁS INFORMACIÓN

Puedes encontrar más información sobre esta tecnología en: https://developer.mozilla.org/es/docs/Web/API/Server-sent_events/Using_server-sent_events
