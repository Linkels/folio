<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="styles/tips.css" type="text/css" rel="stylesheet"/>
  <link href="styles/header.css" rel="stylesheet" type="text/css"/>
</head>
<html>
<body>
  <!--Barre nav avec images-->
  <div class="nav" id="black">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
    <img src="images/blanc.png" width="50px">
    </div>
    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>

    <div class="nav-links">
      <a href="index.php">Accueil</a>
      <a href="projets.php">Mes Projets</a>
  </div>
</div>

  <div class="block">

  </div>
  <div class="gallerie">
    <span id="item">
      <img src="images/tips.png" alt="à définir"/>
    </span>
    <span id="item1">
      <img src="images/tips.png" alt="à définir"/>
    </span>
    <span id="item2">
      <img src="images/test.jpg" alt="à définir"/>
    </span>
    <span id="item3">
      <img src="images/tips.png" alt="à définir"/>
    </span>
    <span id="item4">
      <img src="images/tips.png" alt="à définir"/>
    </span>
    <span id="item5">
      <img src="images/tips.png" alt="à définir"/>
    </span>
    <span id="item6">
      <img src="images/tips.png" alt="à définir"/>
    </span>
    <span id="item7">
      <img src="images/tips.png" alt="à définir"/>
    </span>
    </div>
    <!-- Modal part -->
    <div class="pop-tips">
      <div class="frame">
        <i id="close" class="fas fa-window-close fa-2x"></i>
        <img id="pop-tips" src="images/pop-tips.png" alt="image présentant le tips"/>
        <div id="texte-tips">
          <p>Cette partie présentera le tips en explicitant son contenu. Blablablablabla<br/>
          blablablablablablablablablablablablablablablablablablablablablablablablablablablabla<br/>
          blablablablablablablablablablablablablablablablablablablablablablablablablablablabla<br/>
          blablablablablablablablablablablablablablablablablablablablablablablablablablablabla<br/>
          blablablablablablablablablablablablablablablablablablablablablablablablablablablabla<br/>
          blablablablablablablablablablablablablablablablablablablablablablablablablablablabla<br/>
          blablablablablablablablablablablablablablablablablablablablablablablablablablablabla<br/>
          blablablablablablablablablablablablablablablablablablablablablablablablablablablabla<br/>
          blablablablablablablablablablablablablablablablablablablablablablablablablablablabla<br/>
          blablablablablablablablablablablablablablablablablablablablablablablablablablablabla<br/>
          blablablablablablablablablablablablablablablablablablablablablablablablablablablabla<br/>
          </p>
        </div>
        <div class="links">
          <a href="#"><button class="button-tips">Redirection</button></a>
          <a href="https://github.com/ntoine08/projet-portfolio.git"><button class="button-tips">Git</button></a>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="styles/jquery.js"></script>
    <script type="text/javascript" src="styles/tips.js"></script>
</body>
<footer>
  <?php include 'footer.php' ?>
  <?php include 'footer2.php' ?>
</footer>
</html>
