<header class="bg-primary py-5 mb-5">
   <div class="container h-100">
      <div class="row h-100 align-items-center">
         <div class="col-lg-12">
            <center>

               <h1 class="display-4 text-white mt-5 mb-2"></h1>
               <h2>Exercice</h2>

               <div class="container">
                  <div class="row">

                     <div class="col-sm">
                        <a href="index.php" class="btn btn-warning btn-info"><span class="glyphicon glyphicon-arrow-left"></span> retour</a>
                     </div>
                  </div>
               </div>

               <hr>
               <p>
                  <form method="POST" type="text">
                     <input type="hidden" value="1" name="proposition">

                     <?php
                     //  echo   $message_reponse;

                     // echo  $formulaire_exercice;

                     ?>
               </p> <input type='submit' class="btn btn-primary btn-info" href="#" value='Validez ! '>
               </form>
            </center>
         </div>

      </div>
      <br>
      <br>
      <br>

      <div class="container">
         <div class="row">

            <div class="col-sm">
               <p><a class='btn btn-primary btn-info' href='http://localhost/Jeux/Exercice1.php?difficuler=10&difficulter_champ=10'>J'en veux plus !</a> </p>
            </div>

            <div class="col-sm">
               <p><a class='btn btn-primary btn-info' href='http://localhost/Jeux/Exercice1.php?difficuler=4&difficulter_champ=3'>c'est trop dur !</a> </p>
            </div>

            <div class="col-sm">
               <a class='btn btn-warning  btn-info' href='?deco=1'>Recommencer le jeux</a>
            </div>
         </div>
      </div>


   </div>

</header>


<!-- Page Content -->

<h1>TEST PAGE VIE EXERCICE SA MERRRRRRRRRR BLEU </h1>

<!-- Footer -->
<?php // include 'footer.php';
?>


</body>

</html>