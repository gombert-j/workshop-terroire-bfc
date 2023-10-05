<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../public/css/styles.css">
  <title><?=$title?> - Terroire de l'Yonne</title>
</head>
<body>
    <main>
        <div class="header">
            <?php require('../views/header.php'); ?>
        </div>
        <div class="title" >
            <h1 id ='title'><?=$title?></h1>
        </div>

        <div id="container-1">
            <?= $content ?>
        </div>
        <div class="footer">
          <label>Crédits: Les icônes utilisées proviennent du site WEB: <a href='https://icons.getbootstrap.com/'>https://icons.getbootstrap.com/</a> sous accord de la licence creative commons.</label>
        </div>
    </main>

</body>
</html>