<center>
   <h1><?php echo $title; ?></h1>
</center>

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
               <!-- <th scope="row" style="font-size: 25px; text-align:center;"> //$cour['idCour'] ?></th> -->
               <td style="font-size: 25px; text-align:center;"><?= $cour['titre'] ?>
               <td style="font-size: 25px; text-align:center;"><?= $cour['categorie'] ?></td>
               <td>
                  <center><button type="button" class="btn-lg btn-secondary " style="border: 1px solid ;"><a style="color:black " href='<?= $cour['pdf'] ?> '>ICI</a></button></center>
               </td>


            <?php
         endforeach;
            ?>
      </tbody>
   </table>

</div>