<div class="container" style="text-align: center;">
   <h1><?php echo $title; ?></h1>
</div>

<div class="container">

   <table class="table table-striped">

      <thead>
         <tr>
            <!-- <th scope="col" style="font-size: 30px; text-align:center;">#</th> -->
            <th scope="col" style="font-size: 30px; text-align:center;">Titre</th>
            <th scope="col" style="font-size: 30px; text-align:center;">Categorie</th>
            <th scope="col" style="font-size: 30px; text-align:center;">pdf</th>
         </tr>
      </thead>

      <tbody>
         <?php
         //Si la variable exercices n'est pas vide on parcours la table exercice
         foreach ($cours as $cour) :
         ?><tr>
               <td style="font-size: 25px; text-align:center;"><?= $cour['titre'] ?>
               <td style="font-size: 25px; text-align:center;"><?= $cour['categorie'] ?></td>
               <td style="text-align:center;">
                  <button type="button" class="btn-lg btn-secondary " style="border: 1px solid ;"><a style="color:black;" target="_blank" href='<?= $cour['pdf'] ?> '>ICI</a></button>
               </td>

            <?php
         endforeach;
            ?>

      </tbody>
   </table>

</div>