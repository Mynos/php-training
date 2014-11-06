<?php


// list_products.php
require_once "bootstrap.php";
$id = $argv[1];

$productRepository = $entityManager->getRepository('Products');
$product= $productRepository->findById($id);

if (empty($product)) {
    echo 'No existe ese ID';
}  else {
    foreach ($product as $product) {
        echo sprintf("-%s\n",$product->getName());
    }
}
    
    

