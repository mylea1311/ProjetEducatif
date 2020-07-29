<?php include('common/header.php'); ?>

<body>

   <center>
      <h1>Login page</h1>
      <?php if (isset($_SESSION['succes'])) { ?>
         <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
      <?php } ?>
      <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
      <form action="register" method="POST">

         <div class="col-lg-4 col-lg-offset-2">
            <div class="form-group">
               <label for="username" class="label-default">Username :</label>
               <input class="form-control" name="username" id="username" type="text">
            </div>

            <div class="form-group">
               <label for="password">Password :</label>
               <input class="form-control" name="password" id="password" type="password">
            </div>

            <div class="text-center">

               <button class="btn btn-primary" name="login">Login</button>

            </div>
            <br> <br>
      </form>

   </center>
</body> <?php include('common/footer.php'); ?>