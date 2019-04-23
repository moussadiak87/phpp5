<?php
  $months = array('Janvier', 'Février', 'mars', 'Avril', 'mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>phpp5e8</title>
  </head>
  <body>
    <p><?php
      for ($i=0; $i < count($months); $i++) { ?>
      <?=    $months[$i]  ;
      }
      ?>
   </p>
  </body>
</html>
