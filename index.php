<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="styles/index.css" rel="stylesheet">
    <!-- Pour le parallax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <!-- Fin des liens pour parallax -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title>Porte-folio</title>
    <link rel="shortcut icon" href="images/logosimplon.png">
  </head>
       <?php include "header.php";?>
  <body>

        <!-- partie du slider-->
		<div class="container">
			<!--images du slide-->
					<div class="mySlides">
						<div class="numbertext"></div>
						<img src="images/image1.png" style="width:100%">

					</div>

					<div class="mySlides">
						<div class="numbertext"></div>
						<img src="images/image2.png" style="width:100%">

					</div>

					<div class="mySlides">
							<div class="numbertext"></div>
							<img src="images/image3.jpg" style="width:100%">

					</div>

					<div class="mySlides">
							<div class="numbertext"></div>
							<img src="images/image4.jpg" style="width:100%">
					</div>
        </div>
          <div id="Qui-suis-je?"></div>
    <script src="script.js"></script>
    <!-- Fin du slider -->

    <!-- partie qui suis je-->
		<div id="qui-suis-je">
			<h3>Qui suis je ?</h3> <!-- titre de la partie qui suis je -->

			<div class="flex-container"> <!-- container de la partie qui suis je -->
				<div class="qui"> <!-- partie texte de qui suis je -->
					<p>Un texte est une série orale ou écrite de mots perçus comme constituant un ensemble cohérent, porteur de sens et utilisant les structures propres à une langue (conjugaisons, construction et association des phrases…)1. Un texte n'a pas de longueur déterminée sauf dans le cas de poèmes à forme fixe comme le sonnet ou le haïku. L'étude formelle des textes s'appuie sur la linguistique, qui est l'approche scientifique du langage.</p>
				</div>

				<div class="qui"> <!-- partie image de qui suis je -->
					<img src="images/image2.png">
				</div>
			</div>
      		</div>
<!-- fin de la partie qui suis je-->




    <!-- paralax 4 elem -->
    <div class="parallax-element" data-parallax="scroll" data-image-src="images/para.png" alt="" id="par">

      <div id="get-involved">
       <div id="ico">
         <div id="wrapper">
           <ul id="menu">
             <font color="white">
               <li><center><i class="fas fa-tasks fa-stack fa-inverse fa-4x"></i></i><br>
                 <h4>11 projets</h4></li>
                 <li><center><i class="fas fa-user-check fa-stack fa-inverse fa-4x"></i></i><br>
                   <h4>11 clients</h4></li>
                   <li><center><i class="fas fa-code fa-stack fa-inverse fa-4x"></i></i><br>
                     <h4>567 lignes de code</h4></li>
                     <li><center><i class="fas fa-mug-hot fa-stack fa-inverse fa-4x"></i></i><br>
                       <h4>27M de litre de café</h4></li>
                      </font>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

		<!-- parcours-->
    <div id="parcours">
  		<h4>PARCOURS</h4>
  		<hr>

      <!-- The Timeline -->

      <div class="timeline">
          <div class="entry">
            <div class="core">
            <h3>2005</h3> <!-- H3 en cas d'une seule date -->
              Information 3
            </div>
          </div>
             <br/><br/>
          <div class="entry">
            <div class="core">
              <h3>2010</h3>
              Information 2
            </div>
          </div>
           <br/><br/>
          <div class="entry">
            <div class="core">
            <h3>2010<br></h3>
              Nom du métiers ou projets
            </div>
          </div>
          <br/><br/>
         <div class="entry">
           <div class="core">
           <h2>De 2018<br>à 2019</h2> <!-- H2 en cas de 2 dates -->
             Nom du métiers ou projets
           </div>
         </div>
      </div>
</div>
		<!-- fin de parcours-->


<br>

<!-- parallax "Mes projets" -->
  <div class="parallax-projet" data-parallax="scroll" data-image-src="images/para.png" alt="" id="projets">
    <font color="white">MES PROJETS</font></div>
  <!-- fin de parallax "Mes projets" -->

<center>
  <!-- Début des 8 screens des projets accomplis -->
  <div id="proj">
  <a href="#"><img src="images/projet.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/projet.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/projet.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/projet.png" width="20%" height="200px"></a>
  <br>

  <a href="#"><img src="images/projet.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/projet.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/projet.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/projet.png" width="20%" height="200px"></a>
  <br><br>
  <div class="bouton">
  <p>
    <a href="projets.php">ALL »</a>
  </p>
</div>
<!-- Fin des screens des projets accomplis -->

</div><br><br>

<!-- Début parallax "Mes tips" -->
<div class="parallax-tip" data-parallax="scroll" data-image-src="images/para.png" alt="" id="tips">
  <font color="white">MES TIPS</font></div>
<!-- Fin parallax "Mes tips" -->

<!-- Début des 8 images des tips -->
<div id="proj">
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <br>

  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <br><br>
  <div class="bouton">
  <p>
    <a href="tips.php">ALL »</a>
  </p>
</div>
</div>

</center>
<!-- Fin des tips -->
  </body>

<?php include "footer.php";?>
<?php include "footer2.php";?>

</html>
