<?php


// list_products.php
require_once "bootstrap.php";


if (empty($argv[1]) or empty($argv[2])){
    echo 'falta algun parametro';
} else {
    $id = $argv[1];
    $name = $argv[2];
    $productRepository = $entityManager->getRepository('Products');
    $product= $productRepository->findById($id);
   if (empty($product)) {
        echo 'No existe ese ID';
    }  else {
        foreach ($product as $product) {
            $product->setName($name);
            echo sprintf("-%s\n",$product->getName());
            $entityManager->persist($product);
            $entityManager->flush();
            echo "Base actualizada";
        
    }
} 
}



