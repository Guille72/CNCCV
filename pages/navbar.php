<!-- PC -->
<nav id="nav" class="sticky hide-on-med-and-down">
  <div class="nav-wrapper">
    <a href="../Public/index.php" id="navTitle" class="brand-logo white-text">&nbsp; Chez Nous comme Chez Vous</a>

    <ul class="right">
      <li><a class="navLi colortext" href="index.php?p=contact">CONTACT</a></li>
      <li><a class="navLi colortext dropdown-trigger" data-target='dropdown1'>LES MAISONS</a></li>
      <li><a class="navLi colortext" onclick="alert('En cours de developpement')">SE CONNECTER</a></li>
    </ul>

  </div>
</nav>


<ul id='dropdown1' class='dropdown-content'>

  <li><a onclick="displayBurger()">Resumé</a></li>

  <li class="divider" tabindex="-1"></li>

  <?php
  require ROOT.'/settings/maisons.php';
  foreach ($maisons as $maison):
  ?>

  <li class="centerUl"><a href="index.php?p=<?= $maison ?>">
    <i class="material-icons">
      home
    </i>
    <?= ucfirst($maison) ?></a></li>

  <?php endforeach; ?>

</ul>


<!-- MOBILE -->
<nav id="nav" class="nav-extended sticky hide-on-large-only">
  <div class="nav-wrapper center">

    <a href="../Public/index.php" id="navTitle" class="center white-text">&nbsp; Chez Nous comme Chez Vous</a>

  </div>

  <div class="nav-content">

    <ul class="centerUl">
      <li><a class="navLi" href="index.php?p=contact">CONTACT</a></li>
      <li><a class="navLi" onclick="displayBurger()">LES MAISONS</a></li>
      <li><a class="navLi" onclick="alert('En cours de developpement')">SE CONNECTER</a></li>
    </ul>

    <br>

  </div>
</nav>



<div id="burger">

  <div id="burgerContent">

  <table class="responsive-table centered">
          <thead>
            <tr>
                <th>Maison</th>
                <th>Disponibilité</th>
                <th></th>
            </tr>
          </thead>

          <tbody>

            <?php
            require ROOT.'/settings/maisons.php';

            if (isset($_POST['arrivee'])) {

            foreach ($maisons as $maison):
            ?>

            <tr>
              <td><a href="index.php?p=<?= $maison ?>">Chez <?= ucfirst($maison) ?></a></td>
              <td><?= $_SESSION[$maison] ?></td>
              <td>
              <?php

              if ($_SESSION[$maison] != "Pas dispo") {
                echo "<i class='material-icons colorRed left'>send</i>";
              }
              else {
                echo "<i class='material-icons colorGrey left'>clear</i>";
              }

               ?>
              </td>
            </tr>

          <?php endforeach; }

          else {
            foreach ($maisons as $maison): ?>

            <tr>
              <td><a href="index.php?p=<?= $maison ?>">Chez <?= ucfirst($maison) ?></a></td>
              <td>//Prix d'une nuit de <?= $maison ?></td>
            </tr>

            <?php  endforeach; }?>


          </tbody>
        </table>

  </div>

</div>

<div id="burgerFond" onclick="hideBurger()"></div>

<script>


function displayBurger(){

document.getElementById('burger').classList.add('burgerUp');
document.getElementById('burgerFond').classList.add('burgerFondUp');

document.getElementById('burgerContent').classList.add('displayOk');

document.getElementById('burger').classList.remove('burgerDown');
document.getElementById('burgerFond').classList.remove('burgerFondDown');

}

function hideBurger(){

  document.getElementById('burger').classList.add('burgerDown');
  document.getElementById('burgerFond').classList.add('burgerFondDown');

  document.getElementById('burgerContent').classList.remove('displayOk');

  document.getElementById('burger').classList.remove('burgerUp');
  document.getElementById('burgerFond').classList.remove('burgerFondUp');

}

function submitForm(){
window.location = window.location;ç
}

</script>
