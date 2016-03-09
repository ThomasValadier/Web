<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../index/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="membre.css">
    <link
</head>
<body>
<div class="to_top"><button><a href="#top"><div class="glyphicon glyphicon-arrow-up"></div></button></a></div>
<div class=""
<div style="height:30px; background-color:grey">espace navbar</div>
<a href="#ancre">
    <div class="glyphicon glyphicon-search"></div>
</a>

<div id="boxgauche" class="col-md-6">
    <h2>Mon profil</h2>
    <div class="photoprofil col-md-2"><img src="../index/image/photoprofil.jpg" alt=""></div>
    <div id="descri">
        <h3>Julie</h3>
        <h3>DURANT</h3>
        <h3>5 RUE DU PETIT TRAIN 9999 Paris</h3>
        <h3>6 services rendus</h3>
        <button type="submit"> <a href="#top">Modifier mon profil</a></button><br><br>
        <a href="#downClick" id="toggler"><div class="glyphicon glyphicon-chevron-down"> </div>Afficher les commentaires</a>
        <a href="#upClick" id="togglerup"><div class="glyphicon glyphicon-chevron-up"> </div>Masquer les commentaires</a>
        <div id="toggle"><a href=""><h1>Jean</h1></a><!--amenera sur le profil de jean: box gauche identique
        sauf qu'à la place de pouvoir modifier le profil le visiteur pourra juste contacter jean,
        box droit: une liste de profil, la recherche pourra encore se faire en bas dans le footer-->
            <p>Bonjour, très Julie à c'est très bien occupé de ma fille, je le recommande!</p>

        </div>
    </div>
    <div class="graphique">
        <ul class="barGraph">
            <li class="bricolage">1</li>
            <li class="petsitting">2</li>
            <li class="assistanat">4</li>
            <li class="informatique">3</li>
        </ul>
        <div class="bri"></div>
        <p>Bricolage</p>
        <div class="pets"></div>
        <p>Pet-sitting</p>
        <div class="assi"></div>
        Assistanat
        <div class="info"></div>
        <p>Informatique</p>


    </div>
</div>


</div>
<div id="boxdroite" class="col-md-6">
    <h2>Demande</h2>
    <div class="depose">
        <form action="">
            <select name="categorie">
                <option value='10' style='background-color:#dcdcc3' disabled selected>Choisissez la
                    catégorie
                </option>
                <option value='1'>Bricolage</option>
                <option value='2'>Assistanat</option>
                <option value='3'>Informatique</option>
                <option value='4'>Pet-sitting</option>
                <option value='5'>Baby-sitting</option>
            </select><br>
            <input type="text" placeholder="titre de l'annonce"><br>
            <input type="text" placeholder="Prix"><br>
            <input type="text" placeholder="distance max"><br>
            <textarea type="text" rows="10" cols="44" placeholder="description"></textarea><br>
            <button type="submit">Déposer</button>


        </form>
    </div>


</div>
<div id="ancre"></div>
<footer>
    <div class="foot col-xs-12 col-sm-12 col-md-12">
        <a href="">
            <div class="catfoot col-xs-4 col-sm-4 col-md-4">Catégorie</div>
        </a>
        <a href="">
            <div class="catfoot col-xs-4 col-sm-4 col-md-4">Agora</div>
            <!--designe la zone qui sera cindé en 2 avec d'un coté l'offre de l'autre la demande-->
        </a>
        <a href="">
            <div class="catfoot  col-xs-4 col-sm-4 col-md-4">A propos</div>
        </a>
    </div>
    <div class="finish col-xs-12 col-md-12">
        <ul class="col-md-offset-1 col-md-2">
            <a href="">
                <li>Bricolage</li>
            </a>
            <a href="">
                <li>Assistanat</li>
            </a>
            <a href="">
                <li>Informatique</li>
            </a>
            <a href="">
                <li>Pet-sitting</li>
            </a>
            <a href="">
                <li>Baby-sitting</li>
            </a>
        </ul>
        <div id="recher" class="col-md-9">
            <form action="">
                <select name="categorie">
                    <option value='10' style='background-color:#dcdcc3' disabled selected>Choisissez la
                        catégorie
                    </option>
                    <option value='1'>Bricolage</option>
                    <option value='2'>Assistanat</option>
                    <option value='3'>Informatique</option>
                    <option value='4'>Pet-sitting</option>
                    <option value='5'>Baby-sitting</option>
                </select><br>
                <input type="text" placeholder="titre de l'annonce">
                <input type="text" placeholder="Prix">
                <input type="text" placeholder="distance max"><br>
                <button type="submit">Rechercher</button>
            </form>
        </div>
    </div>

</footer>
<script src="jquery.js" type="text/javascript"></script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
<script src="test.js" type="text/javascript"></script>
</body>
</html>