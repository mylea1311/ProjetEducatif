<?php include('common/header.php'); ?>

<body>

   <center>
      <h1>Register</h1>
      <?php if (isset($_SESSION['succes'])) { ?>
         <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
      <?php } ?>
      <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
      <form action="register" method="POST">

         <div class=" col-lg-4 col-lg-offset-2">
            <div class="form-group">
               <label for="username" class="label-default">Username :</label>
               <input class="form-control" name="username" id="username" type="text">
            </div>

            <div class="form-group">
               <label for="email">Email : </label>
               <input class="form-control" name="email" id="email" type="text">
            </div>

            <div class="form-group">
               <label for="password">Password :</label>
               <input class="form-control" name="password" id="password" type="password">
            </div>

            <div class="form-group">
               <label for="password" class="label-default">Confirm Password : </label>
               <input class="form-control" name="password2" id="password" type="password">
            </div>

            <div class="form-group">
               <label for="gender">Genre : </label>
               <select class="form-control" name="gender" id="gender">
                  <option value="Male">Fille</option>
                  <option value="Femele">Garçon</option>
               </select>
            </div>

            <div class="form-group">
               <label for="phone">Téléphone :</label>
               <input class="form-control" name="phone" id="phone" type="text">
            </div>
            <div class="text-center">

               <button class="btn btn-primary" name="register">Register</button>

            </div>
            <br> <br>
      </form>
   </center>
</body> <?php include('common/footer.php'); ?>