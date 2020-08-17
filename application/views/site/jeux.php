<div class="container">

   <table class="table table-striped">

      <thead>
         <tr>
            <!-- <th scope="col" style="text-align: center; font-size:30px;">#</th> -->
            <th scope="col" style="text-align: center; font-size:30px;">Titre</th>
            <!-- <th scope="col" style="text-align: center; font-size:30px;">Categorie</th>
            <th scope="col" style="text-align: center; font-size:30px;">Utilisation</th> -->
            <th scope="col" style="text-align: center; font-size:30px;">Description</th>
         </tr>
      </thead>

      <tbody>
         <?php
         //Si la variable exercices n'est pas vide on parcours la table exercice
         foreach ($jeux as $jeu) :
         ?><tr>

               <!-- <th scope="row" style="font-size: 25px;">
                  <center>//$jeux['idJeux'] ?></center>
               </th> -->
               <td style="font-size: 25px; text-align:center;">
                  <?= $jeu['Titre'] ?>
               <td style="font-size: 25px;">
                  <!-- <center><?php //$jeux['description']; 
                                 ?> ?>
               </td>
               </center> -->
                  <!-- <td style="font-size: 25px;">
                  <center>// $exercice['compteurUtilisation'] ?>
               </td>
               </center> -->
                  <div class="container" style="text-align:center;">

                     <button class="btn-lg btn-secondary" style="border: 1px solid ;">
                        <a style="color:black " href=" <?php echo  'http://projeteducatif.bsb/index.php/jeux/show/' . $jeu['idJeux'] . '/5/'; ?>">GO</a>
                     </button>

                  </div>
               <?php endforeach;
               ?>
      </tbody>
   </table>

   <?php


   /* echo  isset($formulaire_exercice);
   var_dump($formulaire_exercice);
   */ ?>
</div>