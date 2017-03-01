<?php
  require "Personnage.php";

  $p1 = new Personnage("Moussa",Personnage::FORCE_MOYENNE,20,35);
  $p2 = new Personnage("Demba",Personnage::FORCE_MOYENNE,10,55);
   ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les personnages</title>
  </head>
  <body>
    <p><?php $p1->description(); ?></p>
    <p><?php $p2->description(); ?></p>
    <?php $p1->frapper($p2); ?>
    <?php $p1->frapper($p2); ?>
    <?php $p1->frapper($p2); ?>
    <?php $p1->frapper($p2); ?>
    <p>######## Après combat ########</p>
    <p><?php $p1->description(); ?></p>
    <p><?php $p2->description(); ?></p>
  </body>
</html>
