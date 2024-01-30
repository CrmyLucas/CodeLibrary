<?php
// requete SELECT 
try {
    //rajouter where apres user pour chercher l'id d'un user en particulier (userId = 1)
    $sql = "SELECT * FROM user ;";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();
} catch (Exception $e) {
    print "Erreur ! " . $e->getMessage() . "<br/>";
}

// Boucler les resultats
while ($results = $stmt->fetch(PDO::FETCH_ASSOC)) {
    print_r($results); ?>

    <div style="color: <?php echo $results['Color'] ?>;">

        <h1>
            <?php
            echo $results['Name'] . ' ' . $results['FirstName'];
            ?>
        </h1>
        Mail : <?php echo $results['Mail']; ?>
        <br>
        color : <?php echo $results['Color']; ?>

        <p>
            <a href="user.php?UserId=<?php echo $results['UserId']; ?>">
                Aller a la page de : <?php echo $results['Name']; ?>
            </a>
        </p>


    </div>



<?php  } ?>