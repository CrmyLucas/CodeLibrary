<?php

$MyMonths = 4;

$months[1] = "janvier";
$months[2] = "fevrier";
$months[3] = "mars";
$months[4] = "avril";
$months[5] = "mai";
// print_r($months);
// echo $months[5];
foreach ($months as $key => $value) {
    // echo $key. " ". $value . '<br>';
?>
    <label>
        <input type="radio" name="Month" value="<?php echo $key; ?>" <?php echo $MyMonths == $key ? 'checked' : ''; ?>> <?php echo $value; ?>
    </label>
<?php } ?>

<hr>

<select name="Months">

    <?php foreach ($months as $key => $value) { ?>
        <option <?php echo $MyMonths == $key ? 'selected' : ''; ?>>
            <?php echo $value ?>
        </option>
    <?php } ?>
</select>