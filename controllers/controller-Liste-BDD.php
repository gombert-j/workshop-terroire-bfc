<?php
$user = 'root';
$mdp = 'root';


try {
    $db = new PDO(
        'mysql:host=localhost;dbname=projetsite;',
        $user,
        $mdp
    );

    print('connection reussi');
} catch (Exception $e) {
    die('erreur');
}
$sqlQuery = 'SELECT * FROM vin';
$donnees = $db->prepare($sqlQuery);
$donnees->execute();
$recipes = $donnees->fetchAll();
echo 'Vin';
foreach ($recipes as $recipe) {
?>
    <p><?php echo $recipe['nom']; ?><br>
        <?php echo $recipe['adresse']; ?><br>
        <?php echo $recipe['contact']; ?><br>
        <?php echo $recipe['horaire']; ?><br>
        <?php echo $recipe['site']; ?><br>


    </p>
<?php
}

$sqlQuery = 'SELECT * FROM fromage';
$donnees = $db->prepare($sqlQuery);
$donnees->execute();
$recipes = $donnees->fetchAll();
echo 'Fromage :';
foreach ($recipes as $recipe) {
?>
    <p>
        <?php echo $recipe['nom']; ?><br>
        <?php echo $recipe['adresse']; ?><br>
        <?php echo $recipe['contact']; ?><br>
        <?php echo $recipe['horaire']; ?><br>
        <?php echo $recipe['site']; ?><br>


    </p>
<?php
}

$sqlQuery = 'SELECT * FROM escargot';
$donnees = $db->prepare($sqlQuery);
$donnees->execute();
$recipes = $donnees->fetchAll();
echo 'Escargot :';
foreach ($recipes as $recipe) {
?>
    <p>
        <?php echo $recipe['nom']; ?><br>
        <?php echo $recipe['adresse']; ?><br>
        <?php echo $recipe['contact']; ?><br>
        <?php echo $recipe['horaire']; ?><br>
        <?php echo $recipe['site']; ?><br>


    </p>
<?php
}
