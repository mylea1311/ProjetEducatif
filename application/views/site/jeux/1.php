<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
   <link rel="stylesheet" href="/assets/css/main.css">
   <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
   <title>Title</title>
</head>

<body>

   <!-- Canvas = Zone de dessin -->
   <div class="container" style="text-align: center;">
      <h1>Draw </h1>
   </div>
   <input type="button" value="saveme" id="save" />
   <div class="container" style="text-align: center;"><canvas id='pad' width='900' height="600"></canvas></div>
   <br>
   <img id="img" /> <button id="reset">Reset</button>
   <button id="red">Rouge</button>
   <button id="blue">Bleu</button>
   <button id="noir">Noir</button>
   <button id="jaune">Jaune</button>
   <button id="vert">Vert</button>
   <button id="rose">Rose</button>
   <button id="gomme">Gomme</button>

   <br>
   <br>
   <br>

   <a href="vignettes">consulter les images</a>
   <script>
      var saveme, img;

      canvas = $('#pad')[0]
      context = canvas.getContext("2d")
      pendown = false


      saveme = document.getElementById("save");
      img = document.getElementById("img");
      saveme.onclick = function(event) { // method for save pico
         var tmp = canvas.toDataURL();
         img.src = tmp;
         img.style.display = 'inline';

      }
      //Gomme
      $('#gomme').click(function() {
         context.beginPath();
         context.strokeStyle = 'white';
         context.lineWidth = '15';
      });

      //Couleur Rose
      $('#rose').click(function() {
         context.beginPath();
         context.strokeStyle = 'pink';
         context.lineWidth = '3';
      });

      //Couleur Vert
      $('#vert').click(function() {
         context.beginPath();
         context.strokeStyle = 'green';
         context.lineWidth = '3';
      });

      //Couleur Jaune
      $('#jaune').click(function() {
         context.beginPath();
         context.strokeStyle = 'yellow';
         context.lineWidth = '3';
      });

      //Couleur Rouge
      $('#red').click(function() {
         context.beginPath();
         context.strokeStyle = 'red';
         context.lineWidth = '3';
      });

      //Couleur Bleu
      $('#blue').click(function() {
         context.beginPath();
         context.strokeStyle = 'blue';
         context.lineWidth = '3';
      });

      //Couleur Noir
      $('#noir').click(function() {
         context.beginPath();
         context.strokeStyle = 'black';
         context.lineWidth = '3';
      });

      // Function Zone Dessin MouseMove
      $('#pad').mousemove(function(event) {
         let xpos = event.pageX - canvas.offsetLeft;
         let ypos = event.pageY - canvas.offsetTop;
         if (pendown) context.lineTo(xpos, ypos)
         else context.moveTo(xpos, ypos)
         context.stroke();
         context.strokeStyle = '';
         context.lineWidth = '';
      });

      $('#pad').mousedown(function() {
         pendown = true
      })
      $('#pad').mouseup(function() {
         pendown = false
      })

      $('#reset').click(function() {
         const context = canvas.getContext('2d');
         context.clearRect(0, 0, canvas.width, canvas.height);
         let w = canvas.width;
         canvas.width = 1;
         canvas.width = w;
      });
   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>



</body>

</html>