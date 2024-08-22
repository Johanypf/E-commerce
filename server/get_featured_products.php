<?php

include('conection.php');
$smt = $conn->prepare(" SELECT * FROM products LIMIT 4");
$smt->execute();
$featured_products = $smt->get_result();



?>