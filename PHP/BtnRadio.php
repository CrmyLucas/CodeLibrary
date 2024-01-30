<?php
// creation d'une radio a partir de la BDD categories
foreach ($categories as $key => $value) {
    // echo $key . ' ' . $value . '<br>'; 
?>
    <label style="<?php echo $results['CatId'] == $key ? 'background-color:' . $results['Color'] : ''; ?>">
        <input type="radio" name="CatId" <?php echo $results['CatId'] == $key ? 'checked' : ''; ?> value="<?php echo $key; ?>"> <?php echo $value; ?>
    </label>
<?php } ?>

<!-- fin creation de la radio a partir de la BDD -->