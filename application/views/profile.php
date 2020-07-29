<?php include('common/header.php'); ?>

<body>

   <center>
      <h1>Profil page</h1>
      <?php if (isset($_SESSION['succes'])) { ?>
         <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
      <?php } ?>

      Hello , <?php echo $_SESSION['username']; ?>



      <div class="container">
         <div class="row">
            <div class="col-sm-6">
               <h1>Math</h1>
               <div class="progress-bar blue">MAth</div>
            </div>
            <div class="col-sm-6">
               <h1>Francais</h1>
               <div class="progress-bar blue">FRANCAIS</div>
            </div>
         </div>
         <br>
         <hr>
         <br>
         <p> tu as <?php if (isset($_SESSION['point']))
                        echo $_SESSION['point']; ?> Points !</p>
         <br> <br>
         <label for="start">Start date:</label>

         <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">

         <br> <br>

         <button type="button" class="btn-lg btn-secondary " style="border: 1px solid ;"> <a style="color:black " href="<?php echo base_url(); ?>index.php/auth/logout">Logout</a></button>
         <br> <br>



   </center>
</body> <?php include('common/footer.php'); ?>