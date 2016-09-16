<!DOCTYPE HTML>
<html>

<head>
        <title>Restaurant Ratatouille - devenir Franchisés</title>
        <meta charset="utf-8">
        <meta name="Restaurant Ratatouille cuisine traditionnelle Liscence ratatouille" content="165c. uniques">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="fds.css" rel="stylesheet">

</head>
<?php include ("header.php") ?>
<body class="franchise container">



        <div class="row">
            <img class="bann img-responsive" src="img/banniere_franchise.jpg"/>
        </div>


   

    <section>
        <h2>Pourquoi devenir franchisé?</h2>
	<ul>
        <li>L'assurance d'un suivi optimal avec notre maison mère</li>
        <li>Nous intervenons pour vous aider dans la gestion administrative de votre restaurant</li>
        <li>Vous bénéficiez de la notoriété de nos restaurants à travers la France</li>
        <li>Vous choisissez librement vos meilleurs fournisseurs</li>
        <li>Votre restaurant, votre carte</li>
    </ul>
    </section>


    <section>
        <h2>Témoignages</h2>
        <div class="row">
            <p class="col-xs-8">La licence du restaurant Ratatouille m'a énormément aidé à la mise en place de mon restaurant.
            C'est un cadre préparé, mais une grande liberté est laissé sur le choix des fournisseurs et de la carte.
            Grâce à eux, j'ai aujourd'hui une enseigne correcte et fonctionnelle, et mon restaurant est rempli chaque soir!<br/><br/>
             <span style="font-size:2em; font-style:italic">"Et surtout : J'aime le piment d'espelette"</span></p>

            <p class="col-xs-4"><img class="img-responsive img-circle" src="img/lignac-round.jpg"></p>
        </div>
    </section>


<section>
<h2> Vous souhaitez devenir franchisés? écrivez-nous!</h2>
    <form class="form-horizontal" action="envoi_form.php" method="post">
    <fieldset>


    <div class="form-group">
      <label class="col-md-4 control-label" for="nom">Votre Nom et Prénom</label>
      <div class="col-md-4">
        <input id="nom" name="nom" type="text" placeholder="ex: Damien Aubertin" class="form-control input-md" required/>
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="email">Votre E-mail</label>
        <div class="col-md-4">
            <input id="mail" name="mail" type="email" placeholder="ex: damien.aubertin@youpi.fr" class="form-control input-md" required/>
        </div>
    </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="tailleresto">Taille estimée du restaurant à ouvrir</label>
            <div class="col-md-4">
                <select id="tailleresto" name="tailleresto" class="form-control">
                    <option value="1" selected>Non définie</option>
                    <option value="2">De 10 à 30 couverts</option>
                    <option value="3">De 30 à 50 couverts</option>
                    <option value="4">Plus de 50 couverts</option>
                </select>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="ouverture">Date d'ouverture prévisionnelle</label>
                <div class="col-md-4">
                    <select id="ouverture" name="ouverture" class="form-control">
                        <option value="1" selected>Non définie</option>
                        <option value="2">Dans les 6 prochains mois</option>
                        <option value="3">D'ici 1 an</option>
                        <option value="4">D'ici plus d'un an</option>
                    </select>
                </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="locaux">Avez-vous des locaux?</label>
            <div class="col-md-4">
                <input type="radio" name="" value="" id="locaux-oui" /> <label for="locaux-oui">Oui</label>
                <input type="radio" name="" value="" id="locaux-non" /> <label for="locaux-non">Non</label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="champlibre" maxlength="500">Décrivez nous votre expérience professionnelle</label>
        <div class="col-md-4">
            <textarea rows="5" cols=40"></textarea>
            <span class="help-block">Maximum : 500 caractères</span>
        </div>
        </div>



    <div class="text-center">
        <input value="Envoyer" type="submit"/>
    </div>



    </fieldset>
    </form>

</section>


</body>
<?php include ("footer.php") ?>
</html>
