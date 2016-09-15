<!DOCTYPE HTML>
<html>

<head>
        <title>Restaurant Ratatouille - Nos restaurants</title>
        <meta charset="utf-8">
        <meta name="Restaurant Ratatouille cuisine traditionnelle Liscence ratatouille" content="165c. uniques">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="fds.css" rel="stylesheet">

</head>

<body class="nosrestaurants">
        <div class="container" >
                <?php include ("header.php") ?>

                <div class="row">
                        <img class="bann img-responsive" src="img/banniere_franchise.jpg"/>
                </div>
          
  <div class="row">
          <section class="col-xs-3">
                  <h2>Lyon</h2>
                  <p><img class="img-responsive" src="img/Lyon.jpg"></p>
                  <p>Venez découvrir notre restaurant situé en plein coeur de la presque île.</p>
                  <p class="text-center">
                          <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">En savoir plus</button>
                  </p>

                  <!-- Modal -->
                  <div class="modal fade" id="myModal" role="dialog">
                          <div class="modal-dialog">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                          <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Nos restaurants</h4>
                                          </div>
                                          <div class="modal-body">
                                                  <h2>Lyon</h2>
                                                  <p><img class="img-responsive" src="img/Lyon.jpg"></p>
                                                  <p>Venez découvrir notre restaurant situé en plein coeur de la presque île!<br/>
                                                  Si vous souhaitez réserver merci de contacter directement le restaurant :</p>
                                                          <dl>
                                                                  <dd><b>Adresse</b> : 17 rue Delandine, 69002 Lyon</dd>
                                                                  <dd><b>Tel </b>: 04 78 96 02 69</dd>
                                                                  <dd><b>E-mail </b>: lyon@restaurant-ratatouille.fr</dd>
                                                          </dl>

                                          </div>
                                          <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                  </div>

                          </div>
                  </div>


          </section>
          <section class="col-xs-offset-1 col-xs-3">blabla</section>
          <section class="col-xs-offset-1 col-xs-3">blabla</section>
  </div>
   

    
 
        </div>
       
        
    
</body>
<?php include ("footer.php") ?>
</html>