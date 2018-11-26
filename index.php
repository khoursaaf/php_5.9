<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercise</title>
    </head>
    <body>
      <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
      <?php $department =
      ['80' => 'Somme',
       '02' => 'Aisne',
       '59' => 'Nord',
       '62' => 'Pas-De-Calais'
     ];
      foreach ($department as $key => $value) {
      ?>
      <p><?php echo $key.' '.$value; }?></p>
    </body>
</html>
