<?php

// list_products.php
require_once "bootstrap.php";

$productRepository = $entityManager->getRepository('Products');
$product= $productRepository->findAll();

foreach ($product as $product) {
    echo sprintf("-%s\n",$product->getName());
    
}

