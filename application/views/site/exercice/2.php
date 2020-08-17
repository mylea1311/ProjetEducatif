<header class="bg-primary">
   <div class="container h-100">
      <div class="row h-100 align-items-center">
         <div class="col-lg-12">
            <h1 class="display-4 text-white mt-5 mb-2"><?php echo isset($message_success); ?></h1>

            <p> <a href="index.php" class="btn btn-warning btn-info"><span class="glyphicon glyphicon-arrow-left"></span> retour</a> </p>
            <a href="Exercice2.php?tableau=animaux" class='btn btn-success btn-lg btn-block' style='color:white'>ANIMAUX</a>
            <a href="Exercice2.php?tableau=cuisine" class='btn btn-success btn-lg btn-block' style='color:white'>CUISINE</a>
            <a href="Exercice2.php?tableau=couleur" class='btn btn-success btn-lg btn-block' style='color:white'>COULEUR</a>

            <hr>
            <?php
            echo $lettres_mot;
            // var_dump($lettres_mot);
            if (isset($supprimer_lettre_numero) > 0) {

            ?>
               <center>
                  <h2>Devine la lettre</h2>
                  <form method="POST">

                     <?php echo $lettres_mot;
                     // var_dump($lettres_mot);

                     ?>
                     <br>


                     <br>
                     <!-- Button trigger modal -->


                  </form>

                  <button type="button" class="btn btn-primary btn-info" data-toggle="modal" data-target="#exampleModal">
                     Valider
                  </button>

               </center>
            <?php } ?>
         </div>
         <div class="container">
            <div class="row">

               <div class="col-sm">

                  <p><a href='?deco=1' class="btn btn-warning btn-info">Recommencer le jeux</a> </p>
               </div>




               <?php include '/wamp64/www/ProjetEducatif/application/views/common/footer.php'; ?>

            </div>

         </div>
      </div>