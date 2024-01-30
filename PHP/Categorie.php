<!-- Categories -->
<?php
try {
    $sql = "SELECT * FROM categories";
    $stmt = $bdd->prepare($sql);
    $stmt->execute(array());
} catch (Exception $e) {
    print "Erreur ! " . $e->getMessage() . "<br/>";
}
// boucler les resultats
while ($results = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // print_r($results);
    // print $results['Nom'] . ' ' . $results['Id'];
    $categories[$results['Id']] = $results['Nom'];
}
echo $categories[1];
?>
<!-- fin categories -->