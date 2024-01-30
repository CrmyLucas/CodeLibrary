<?php
// si l'array post N'EST PAS VIDE '!empty' / ! = PAS LE CONTRAIRE 
if (isset($_POST['update'])) {
    // echo 'POST<br>';
    // print_r($_POST);
    // Update Nom de la table ici User SET colonne_1 = valeur_1, colonne_2 = valeur_2, WHERE UserId
    try {
        //! doit etre dans le meme ordre que le '->execute' sinon ca inverse
        $sql = "UPDATE team SET TeamName = ?, GameName = ?, RankGame = ?, PictureTeam = ? WHERE TeamId = ?;";
        $stmt = $bdd->prepare($sql);
        // On recupere le UserId pour changer le nom avec POST <!> NOM DES COLONNES <!>
        $stmt->execute(array(strip_tags($_POST['TeamName']), strip_tags($_POST['GameName']), strip_tags($_POST['RankGame']), strip_tags($_POST['PictureTeam']), strip_tags($_GET['TeamId'])));
    } catch (Exception $e) {
        print "Erreur ! " . $e->getMessage() . "<br/>";
    }
}
// Fin Requete Update
?>





<!-- method POST pour eviter de passer par l'url -->
<!-- form pour pouvoir modifier les informations -->
<form method="POST">
    <div>
        <!-- Inserer l'image depuis la base de donnee -->
        <img src="User/<?php echo $results['PictureTeam'] ?>" alt="">
        <br>
        <p>
            <!-- BIEN PENSER A METTRE UN NAME = au $results plus simple pour si retrouver  -->
            <input type="text" name="TeamName" value="<?php echo $results['TeamName']; ?>" placeholder="Team Name">
            <br>
            <input type="text" name="GameName" value="<?php echo $results['GameName']; ?>" placeholder="Game Name">
            <br>
            <input type="text" name="RankGame" value="<?php echo $results['RankGame']; ?>" placeholder="Rank Game">
            <br>
            <input type="text" name="Description" value="<?php echo $results['Description']; ?>" placeholder="Descrption">
            <br>
            <input type="file" name="PictureTeam" accept=".png .jpeg">
            <br>
            <input type="submit" name="update" value="modifier">
            <input type="submit" name="delete" value="Delete">
        </p>
    </div>
    <br>
</form>