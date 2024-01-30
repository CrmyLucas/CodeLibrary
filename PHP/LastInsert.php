<?php

echo '<script>window.location.href="MySqlUser.php?UserId=' . $bdd->lastInsertId() . '";</script>';
?>