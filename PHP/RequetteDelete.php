<?php

// Debut Requete Delete User
if (isset($_POST['delete'])) {
    try {
        $sql = "DELETE FROM user WHERE UserID = ?;";
        $stmt = $bdd->prepare($sql);
        $stmt->execute(array(strip_tags($_GET['UserId'])));
    } catch (Exception $e) {
        print "Erreur ! " . $e->getMessage() . "<br/>";
    }
    //Redirection apres delete
}
?>
<!-- Fin Requete Delete User -->