<?php
require '../pages/navbar.php';
require 'resa.php';

?>


<div class="container">

<br>

  <div id="maisonTitle" class="col s12 m8 l8 offset-l2">
  <span>&nbsp;Chez <?= ucfirst($p); ?></span>
  </div>

  <?php

  if ($p === 'rousseau') {
   echo "<div class='carousel col m12 s12 l12'>";
   echo $carrousel;
   echo "</div>";
  }

    ?>

    <div class="row zIndex">
        <div class="col m6 l6 s12">
            <div class="card" id="animInfo1">
                <div class="card-content">

                    <span class="card-title">Équipements </span>

                    <i class="material-icons">wifi</i> Wifi <br>
                    <i class="material-icons">tv</i> Télévision <br>
                    <i class="material-icons">computer</i> Espace de travail pour ordinateur portable <br>
                    <i class="material-icons">local_dining</i> Cuisine tout équipée <br>
                    <i class="material-icons">time_to_leave</i> Place de parking dans la rue <br>
                    <i class="material-icons">directions_bike</i> Garage sur place pour vélo et moto

                </div>
            </div>
        </div>

        <div class="col m6 m6 s12">
            <div class="card" id="animInfo2">
                <div class="card-content">
                    <span class="card-title"><i class="material-icons">location_on</i>À quelques pas </span>

                    <?= $parametres['Description']; ?>

                </div>
            </div>
        </div>

    </div>

</div>




<iframe src="<?= $parametres['Googlemap']; ?>" width="100% !important;" frameborder="0" style="border:0; height: 250px !important;" allowfullscreen></iframe>
