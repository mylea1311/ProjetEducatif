<div class="container h-100">
   <div class="row h-100 ">
      <div class="col-lg-12" style="text-align: center;">

         <h1 class="display-4 text-white mt-5 mb-2"></h1>
         <h2>Exercice</h2>

         <div class="container">

            <strong>
               <p> Tu as <?php if (isset($point))
                              echo $point; ?> points</p>
            </strong>

         </div>

         <hr>
         <p>

            <form method="POST">
               <input type="hidden" value="1" name="proposition">

               <?php
               if (isset($message_reponse)) {
                  echo $message_reponse . '<br><br>';
               }
               echo $formulaire_exercice;
               ?>

         </p> <input type='submit' class="btn btn-primary btn-info" href="#" value='Validez ! '>

         <br>
         <hr>
         <div class="container">
            <div class="row">

               <div class="col-sm">
                  <p><a class='btn btn-primary btn-info' href='http://projeteducatif.bsb/index.php/exercice/show/1/<?= $plusdur ?>/'>J'en veux plus !</a> </p>
               </div>

               <div class="col-sm">
                  <p><a class='btn btn-primary btn-info' href='http://projeteducatif.bsb/index.php/exercice/show/1/<?= $moindur ?>/'>c'est trop dur !</a> </p>
               </div>

               <div class="col-sm">
                  <a class='btn btn-warning  btn-info' href='?deco=1'>Recommencer le jeux</a>
               </div>
            </div>
         </div>

         </form>

         <?php include '/wamp64/www/ProjetEducatif/application/views/common/footer.php'; ?>

      </div>

   </div>


</div>