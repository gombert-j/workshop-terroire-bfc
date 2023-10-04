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
