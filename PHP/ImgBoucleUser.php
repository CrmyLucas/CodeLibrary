
<div class="container">
    <?php
    foreach ($results as $result) { ?>

        <div class="carte">
            <div class="carte-title">
                <?php echo $result['Name'] ?>
            </div>
            <div>
                <?php 
                    //img test existe 
                    $folder = "uploads/";
                    // print_r(getimagesize($folder . $result['PictureUser']));
                    // le Arobase sert a enlever l'erreur quand il n'y a pas de fichier
                    if (@is_array( getimagesize($folder . $result['PictureUser']))){
                        echo '<img width="124" src="' . $folder . $result['PictureUser'] . '" alt="">';
                        echo 'img ok';
                    }
                    else{
                        echo 'img not ok';
                    }
                ?>
            </div>
            <div class="carte-text">
                <?php echo $result['Mail'] ?>
            </div>
            <a class="botn botn-yellow" href="INDEX.php?p=profilePlayer.php&UserId=<?php echo $result['UserId']; ?>">See More</a>
        </div>

    <?php } ?>
</div>
