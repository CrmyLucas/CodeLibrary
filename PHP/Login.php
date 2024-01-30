<!-- Login -->
<?php
try {
    $bdd = new PDO("mysql:host=localhost;dbname=testsite", "root", "");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die($erreur_sql = 'Erreur connect bd: ' . $e->getMessage());
}

if (!empty($_POST)) {

    if (isset($_POST['connect'])) {
        echo 'connect pressed ';
        // requete SELECT 
        try {
            $sql = "SELECT * FROM user WHERE Mail = ? ;";
            $stmt = $bdd->prepare($sql);
            $stmt->execute(array(strip_tags($_POST['Mail'])));
        } catch (Exception $e) {
            print "Erreur ! " . $e->getMessage() . "<br/>";
        }
        //CONSTRUCTIONS DES RESULTATS
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        print_r($results);
        if (empty($results)) {
            echo 'pas d\'utilisateur avec ce mail';
        } else {
            echo 'utilisateur trouvé avec ce mail';
            // tester $results['pass'] $_POST['pass']
            if ($results['Password'] == $_POST['Password']) {
                $_SESSION['user'] = 1;
                echo 'MDP OK';
            } else {
                echo 'Mot de passe incorrect';
            }
        }
    } else if (isset($_POST['deconnect'])) {
        unset($_SESSION['user']);
    }
} //if(!empty($_POST))
?>