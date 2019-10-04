<html>

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SAAL Fatma</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>



 </head>
 <!-- contenu du site -->
  <body>

    <!-- header -->
  <!--  ================================================== -->

    <header class="container-fluid header">
      <div class="container>"
          <a href="#" class="logo">SAAL Fatma</a>
            <nav class=menu>
              <a href="#banner">Accueil</a>
              <a href="#about">A propos de moi</a>
              <a href="#competence ">Compétences</a>
              <a href="#projet">Mes projets</a>
              <a href="#contact">contacts</a>
            </nav>
      </div>
    </header>
    <!-- end of header -->


    <!-- banniere -->
  <!--  ================================================== -->

    <section class="container-fluid banne">
      <div class="banne" id="banner">
        <img src="img/fond.jpg" alt="banniere du site">
      </div>
      <div class="inner-banner">
        <h1>Bienvenue sur mon site</h1>
      <a href="#contact"><button type="btn" class="btn btn-primary" name="button">Contactez moi</button></a>


      </div>
    </section>
    <!-- end banniere-->


    <!-- about -->
  <!--  ================================================== -->

<section class="container-fluid portfolio" id="about">
<div class="bio-info">
  <div class="row">
    <div class="col-md-4">
      <div class="row">
        <div class="col-md-12">
            <div class="bio-image">
            <img class="moi" src="img/moi.jpg" alt="image" />
            </div>
          </div>
        </div>
      </div>

    <div class="col-md-8">
      <div class="bio-content">
          <h1>Fatma SAAL</h1>
         <h3>Étudiante en informatique</h3>
        <h6>Je suis une étudiante en informatique à l'université d'Artois ,faculté des sciences Jean PERRIN     à Lens(pas-de-calais) .</br></h6>
        <h6>Ce portfolio a pour but de présenter les différents projets sur lesquels j'ai travaillé pendant  mon cursus universitaire . </br>
            Si vous avez une question, ou si vous avez simplement besoin d'un renseignement,vous pouvez me contacter en cliquant ici :<a href="#contact"> Contact</a>
        </h6>

      </div>
    </div>
  </div>
</div>
</section>
    <!-- end about-->

    <!-- competences -->
    <!--================================================== -->


    <section>



        <h1>Compétences </h1>

<div class="skillbar clearfix " data-percent="60%">
	<div class="skillbar-title" style="background: #d35400;"><span>HTML5</span></div>
	<div class="skillbar-bar" style="background: #e67e22;"></div>
	<div class="skill-bar-percent">60%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="60%">
	<div class="skillbar-title" style="background: #2980b9;"><span>CSS3</span></div>
	<div class="skillbar-bar" style="background: #3498db;"></div>
	<div class="skill-bar-percent">60%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="40%">
	<div class="skillbar-title" style="background: #2c3e50;"><span>jQuery</span></div>
	<div class="skillbar-bar" style="background: #2c3e50;"></div>
	<div class="skill-bar-percent">40%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="40%">
	<div class="skillbar-title" style="background: #46465e;"><span>PHP</span></div>
	<div class="skillbar-bar" style="background: #5a68a5;"></div>
	<div class="skill-bar-percent">40%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="75%">
	<div class="skillbar-title" style="background: #333333;"><span>Python</span></div>
	<div class="skillbar-bar" style="background: #525252;"></div>
	<div class="skill-bar-percent">75%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="70%">
	<div class="skillbar-title" style="background: #27ae60;"><span>Bootstrap</span></div>
	<div class="skillbar-bar" style="background: #2ecc71;"></div>
	<div class="skill-bar-percent">70%</div>
</div> <!-- End Skill Bar -->
<div class="skillbar clearfix " data-percent="100%">
	<div class="skillbar-title" style="background: #B233FF;"><span>Systèmes d'éxploitation</span></div>
	<div class="skillbar-bar" style="background: #B233FF;"></div>
	<div class="skill-bar-percent">100%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="40%">
	<div class="skillbar-title" style="background: #124e8c;"><span>Javascript</span></div>
	<div class="skillbar-bar" style="background: #4288d0;"></div>
	<div class="skill-bar-percent">40%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="100%">
	<div class="skillbar-title" style="background: #77FF33;"><span>Git</span></div>
	<div class="skillbar-bar" style="background: #77FF33;"></div>
	<div class="skill-bar-percent">100%</div>
</div> <!-- End Skill Bar -->




<script>

    jQuery(document).ready(function(){
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},6000);
	});
});

</script>


    </section>


    <!-- end competences-->


    <!-- projets -->
<!--    ================================================== -->
<section class="details-card" id="projet">
    <div class="container" >
        <div class="row">


            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="img/lille.png" alt="">
                    </div>
                    <div class="card-desc">
                        <h3>VLive</h3>
                            <p>Création d'un site web VLive.<span id="dots"></span><span id="more">
                            Ce site web permet au résidants de la Métropole Européenne de Lille d'avoir des informations sur les stations vélos VLille .</br>
                            Téchnologies utilisées : PHP , JavaScript , HTML5/CSS3 , ainsi qu'une API qui permet d'avoir les disponibilites en temps réel des stations en métropole lilloise </span></p>


                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="img/trucmuche.png" alt="">
                    </div>
                    <div class="card-desc">
                        <h3>Trucmuche</h3>
                            <p>Programmation du jeu du Trucmuche.<span id="dots"></span><span id="more">
                            Langage utilisé est : Python
                            </span></p>


                    </div>
                </div>
            </div>
             <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="#" alt="">
                    </div>
                    <div class="card-desc">
                        <h3>Memory game</h3>
                            <p>Programmation du jeu Mémory game.<span id="dots"></span><span id="more">
                            Langage de programmation utilisé est :Java et swing pour l'interface graphique .</span></p>
                    </div>
                </div>
            </div>

             <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="img/taquin.png" alt="">
                    </div>
                    <div class="card-desc">
                        <h3>Taquin</h3>
                            <p>Programmation du jeu du taquin.<span id="dots"></span><span id="more">
                            Langage utilisé est : Python et la bibliothéque Tkinter pour l'interface graphique
                            </span></p>


                    </div>
                </div>
            </div>


             <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="img/portfolio.png" alt="">
                    </div>
                    <div class="card-desc">
                        <h3>Portfolio</h3>
                            <p>Création d'un site personnel portfolio.<span id="dots"></span><span id="more"> Technologies utilises : HTML5/CSS3 , Bootstrap , JavaScript,JQuery  PHP .</span></p>
                    </div>
                </div>
            </div>

 <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="#" alt="">
                    </div>
                    <div class="card-desc">
                        <h3>SpaceInvaders</h3>
                            <p>Programmation du jeu Space Invaders<span id="dots"></span><span id="more">
                            Langage utilisé est : Python et la bibliothéque Tkinter pour l'interface graphique
                            </span></p>


                    </div>
                </div>
            </div>


        </div>

    </div>




</section>











<script>

jQuery(function(){

    var minimized_elements = $('p');

    minimized_elements.each(function(){
        var t = $(this).text();
        if(t.length < 100) return;

        $(this).html(
            t.slice(0,50)+'<span>... </span><a href="#" class="more">More</a>'+
            '<span style="display:none;">'+ t.slice(50,t.length)+' <a href="#" class="less">Less</a></span>'
        );

    });

    $('a.more', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).hide().prev().hide();
        $(this).next().show();
    });

    $('a.less', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).parent().hide().prev().show().prev().show();
    });

});



</script>


    <!-- end projets-->


    <!--contact-->
    <!--================================================== -->
<!--contact-->
    <!--================================================== -->


    <footer>



<section id="contact">



<div class='container'>
    <div class='row'>
      <h2>Contactez moi</h2>
        <div class='col-sm-10 col-sm-offset-1'>
            <div class='contact'>
                <form method="post">
                    <div class='row'>
                        <div class='col-sm-4'>
                            <div class='form-group'>
                                <label for='fname'>Nom</label>
                                <input type='text' name='fname' class='form-control' />
                            </div>
                            <div class='form-group'>
                                <label for='lname'>Prenom</label>
                                <input type='text' name='lname' class='form-control' />
                            </div>
                            <div class='form-group'>
                                <label for='email'>Email</label>
                                <input type='text' name='email' class='form-control' />
                            </div>
                            <div class='form-group'>
                                <label for='subject'>Sujet</label>
                                <select name='subject' class='form-control'>
                                    <option>Propositions pour le site</option>
                                    <option>autres</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-sm-8'>
                            <div class='form-group'>
                                <label for='message'>Message</label>
                                <textarea class='form-control' name='message' rows='10'></textarea>
                            </div>
                            <div class='text-right'>
                                <input type='submit' class='btn btn-primary' value='envoyer' />
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

        </section>

    <!--end contact-->

    <?php
        if (isset($_POST['message'])) {
            $position_arobase = strpos($_POST['email'], '@');
            if($position_arobase === false)
            echo "<script>alert('Votre email doit comporter un arobase')</script>";

            else {
                $retour = mail('fatmasaal1995@gmail.com', 'Envoi depuis page Contact', $_POST['message'], 'From : ' . $_POST['email']);
                if($retour)
                echo "<script>alert('Votre message a été envoyé')</script>";

                else

                echo "<script>alert('Erreur')</script>";
            }
        }
    ?>


  <a href="https://github.com/FATMAsaal" class="git"><img src="img/github.png" alt=""></a>
  <a href="https://www.linkedin.com/in/fatma-saal-8a9609193" class="link"><img src="img/linkedin.png" alt=""></a>


    </footer>
  </body>
</html>
