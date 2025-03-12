
<?php
try {
    $connection = mysqli_connect("localhost", "root", "", "shopping_system");
} catch (Exception $e) {
    echo "database Error " . $e->getMessage();
}
