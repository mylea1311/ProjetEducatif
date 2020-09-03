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





         <div class="container">
            <div class="span3 well">
               <center>
                  <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="/assets/img/enfant.png" name="aboutme" width="140" height="140" class="img-circle"></a>
                  <h3>Gimmelli melanie</h3>
                  <em>click my face for more</em>
               </center>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title" id="myModalLabel">More About Joe</h4>
                     </div>
                     <div class="modal-body">
                        <center>
                           <img src="/assets/img/enfant.png" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                           <h3 class="media-heading">Joe Sixpack <small>USA</small></h3>
                           <span><strong>Skills: </strong></span>
                           <span class="label label-warning">HTML5/CSS</span>
                           <span class="label label-info">Adobe CS 5.5</span>
                           <span class="label label-info">Microsoft Office</span>
                           <span class="label label-success">Windows XP, Vista, 7</span>
                        </center>
                        <hr>
                        <center>
                           <p class="text-left"><strong>Bio: </strong><br>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                           <br>
                        </center>
                     </div>
                     <div class="modal-footer">
                        <center>
                           <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about Joe</button>
                        </center>
                     </div>
                  </div>
               </div>
            </div>
         </div>



   </center>
</body> <?php include('common/footer.php'); ?>