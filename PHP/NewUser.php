<!-- ajouter nouvel User -->
<h2>Create New User</h2>
<?php
if (isset($_POST['add'])) {
    print_r($_POST);
    try {
        //! doit etre dans le meme ordre que le '->execute' sinon ca inverse
        $sql = "INSERT INTO user SET name = ?, FirstName = ?, Mail = ?,Pictures =  ?, Color = ?";
        $stmt = $bdd->prepare($sql);
        // On recupere le UserId pour changer le nom avec POST <!> NOM DES COLONNES <!>
        $stmt->execute(array(strip_tags($_POST['Name']), strip_tags($_POST['FirstName']), strip_tags($_POST['Mail']), strip_tags($_POST['Pictures']), strip_tags($_POST['Color'])));
    } catch (Exception $e) {
        print "Erreur ! " . $e->getMessage() . "<br/>";
    }
} //accolade du if(isset($_POST['add']))
?>
<!-- Fin nouvel User -->




<form method="POST">
    <input type="text" name="Name" placeholder="Name" required>
    <br>
    <input type="text" name="FirstName" placeholder="FirstName" required>
    <br>
    <input type="email" name="Mail" placeholder="email" required>
    <br>
    <input type="file" name="Pictures" accept=".png .jpeg">
    <br>
    <input type="color" id="colorpicker" name="Color">
    <br>
    <input type="submit" name="add" value="Add">
</form>