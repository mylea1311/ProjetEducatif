<body>

   <header style=" background-image: radial-gradient(circle, #92b9eb, #a5b9f6, #bdb8fd, #d9b5ff, #f5b1fb);">
      <div class="container h-100">
         <div class="row h-100 align-items-center">
            <div class="col-lg-12">
               <h1 class="display-4 text-white mt-5 mb-2">Coucou! <?php if (isset($_SESSION['username']))
                                                                     echo $_SESSION['username'];
                                                                  ?> bienvenue sur <span style="background-clip: text;-webkit-text-fill-color: transparent;background-image: -webkit-linear-gradient(left, red, orange, yellow, green, blue, indigo, violet);">KIKOO</span> !</h1>

               <p class=" lead mb-5 text-white-50">Apprendre en s'amusant. C'est partie les enfants !<br></p>

               <?  // if (isset($_SESSION['succes'])) { 
               ?>
               <div class="alert alert-success"> <?php //echo $_SESSION['success']; 
                                                   ?></div>
               <? // } 
               ?>

               Hello , <?php if (isset($_SESSION['username']))
                           echo $_SESSION['username'];
                        ?>
               tu as <?php if (isset($_SESSION['point']))
                        echo $_SESSION['point'];
                     ?> points !


   </header>

   <!-- Page Content -->
   <div class="container">

      <div class="col-md-8 mb-5">
      </div>

      <div class="row">

         <div class="col-md-6 mb-5">
            <div class="card h-100">
               <a href="/index.php/site/exercice"> <img class="card-img-top" src="/assets/img/francais.jpg" width="400" height="350" alt=""> </a>
               <div class="card-body">
                  <h4 class="card-title"><a href="/index.php/site/exercice">exercice </a></h4>
                  <p class="card-text"></p>
               </div>
               <div class="card-footer">
                  <a href="/index.php/site/exercice" class="btn btn-primary">En savoir plus</a>
               </div>
            </div>
         </div>

         <!--SEPARATION-->

         <div class="col-md-6 mb-5">
            <div class="card h-100">
               <a href="/index.php/site/jeux"> <img class="card-img-top" src="/assets/img/coloriage.jpg" width="400" height="350" alt=""> </a>
               <div class="card-body">
                  <h4 class="card-title"><a href="/index.php/site/jeux">Récréation </a></h4>
                  <p class="card-text">Viens t'amuser avec nous !</p>
               </div>
               <div class="card-footer">
                  <a href="/index.php/site/jeux" class="btn btn-primary">C'est partie !</a>
               </div>
            </div>
         </div>

         <div class="col-md-12 mb-5">
            <div class="card h-100">
               <a href="/index.php/site/cour"> <img class="card-img-top" src="/assets/img/alphabet_1.jpg" width="400" height="350" alt=""> </a>
               <div class="card-body">
                  <h4 class="card-title"><a href="/index.php/site/cour">COURS </a></h4>
                  <p class="card-text">Les cours</p>
               </div>
               <div class="card-footer">
                  <a href="/index.php/site/cour" class="btn btn-primary">C'est partie !</a>
               </div>
            </div>
         </div>
         <!--SEPARATION-->

         <div class="col-md-6 mb-5">
            <div class="card h-100">
               <a href="/index.php/auth/register"> <img class="card-img-top" src="/assets/img/Cl .jpg" alt=""> </a>
               <div class="card-body">
                  <h4 class="card-title"><a href="/index.php/auth/register">CONTACT </a></h4>
                  <p class="card-text">Une suggestion ? Un avis ? Nous répondrons à toutes vos questions !</p>
               </div>
               <div class="card-footer">
                  <a href="/index.php/auth/register" class="btn btn-primary">Nous contacter</a>
               </div>
            </div>
         </div>

         <!--SEPARATION-->

         <div class="col-md-6 mb-5">
            <div class="card h-100">
               <a href="/index.php/site/apropos"> <img class="card-img-top" src="/assets/img/apropos.jpg" alt=""> </a>
               <div class="card-body">
                  <h4 class="card-title"><a href="/index.php/site/apropos">A propos </a></h4>
                  <p class="card-text"></p>
               </div>
               <div class="card-footer">
                  <a href="/index.php/site/apropos" class="btn btn-primary">En savoir plus</a>
               </div>
            </div>
         </div>

      </div>
   </div>

   <!-- JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>