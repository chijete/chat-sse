<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>cliente</title>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
  </head>
  <body>

    <input type="text" id="textInput" value="">
    <button type="button" id="sendTextBtn">Enviar</button>

    <script type="text/javascript">
      var evtSource = new EventSource("server.php");

      evtSource.onmessage = function(e) {
        console.log(e.data);
      }

      document.getElementById('sendTextBtn').addEventListener('click', function() {
        var datos = {
          "text" : document.getElementById('textInput').value
        };

        $.ajax({
          url:"sendMsg.php",
          type:"post",
          data:datos,
          success:function(response) {
            console.log(response);
            document.getElementById('textInput').value = '';
          }
        });
      });
    </script>

  </body>
</html>
