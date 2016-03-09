 <?php echo link_tag('Assets/styles/Home.css'); ?>
 
<header id="first">
        <div class="header-content">
            <div class="inner">
                <h1>Super Voisin</h1>
                <h4>Une solution pragmatique aux problèmes du quotidien</h4> 
                <div class="search-bar">
                    <form accept-charset="UTF-8" action="/service/search" id="search" method="post">
                    <div class="case-input">
                        <input autocomplete="off" autocorrect="off" class="service" name="manual-search" placeholder="Babysitting, déménagement..." type="text">
                    </div><div class="case-input">
                    <div>
                        <input type="text" class="categories-search" autocomplete="off" autocorrect="off" placeholder="Catégories de service " name="categories-search"/>
                    </div>
                        <input class="spe" hidden="" name="speciality" placeholder="Catégories" title=""></div><div class="case-input"><span class="icon fa fa-map-marker locate-btn"></span><input name="latitude" type="hidden"><input name="longitude" type="hidden">
                        <input class="location where" data-country="fr" name="address" placeholder="Où ? (adresse, ville…)" required="" value="" autocomplete="off">
                   </div><div class="case-button"><button><span class="icon front-icon-search"></span><span>Rechercher</span></button></div><span class="circle-ou">OU</span></form></div>
                    <footer>
                        <a href="#" title="Mentions légales"><span>Mentions légales</span></a> |
                        <a href="#" title="Mentions légales"><span>Nous contacter</span></a>
                    <footer>
            </div>
        </div>
        <video autoplay="" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="Assets/images/home/video-poster-blurred.png" id="video-background">
            <source src="Assets/motions/motion.mp4" type="video/mp4">
            <source src="Assets/motions/motion.webm" type="video/webm">Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
    </header>