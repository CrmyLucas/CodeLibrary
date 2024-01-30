<!-- For each select -->
<!-- ! mettre la VALUE -->
<select name="CatId">
    <?php foreach ($categories as $key => $value) { ?>
        <option <?php echo $results['CatId'] == $key ? 'selected' : ''; ?> value="<?php echo $key; ?>">
            <?php echo $value; ?>
        </option>
    <?php } ?>
</select>
<!-- fin du for each select -->