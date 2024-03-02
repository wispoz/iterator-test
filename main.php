<?php
include_once 'Product.php';
include_once 'ProductCollection.php';
include_once 'Cart.php';
include_once 'ProductsIterator.php';
include_once 'ProductsFilterByIterator.php';


$productCollection = new ProductCollection();
$productCollection->addProduct(new Product('Пицца','Додо',650));
$productCollection->addProduct(new Product('Молоко','Простоквашино',70));
$productCollection->addProduct(new Product('Macbook','Apple',12500));

$cart = new Cart($productCollection);
echo $cart->calculateTotalCost().PHP_EOL;

$cart = new Cart(new ProductsFilterByIterator($productCollection->getIterator()));
echo $cart->calculateTotalCost().PHP_EOL;

$cart = new Cart(new LimitIterator($productCollection->getIterator(),1));
echo $cart->calculateTotalCost().PHP_EOL;
