<?php
  $months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
  $months = str_replace('u', 'û', 'Aout');
 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>phpp5e4</title>
  </head>
  <body>
    <p><?= $months ?></p>
  </body>
</html>
