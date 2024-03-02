<?php

class ProductCollection implements IteratorAggregate
{

    private array $products = [];

    public function getIterator(): \Traversable
    {
        return new ProductsIterator($this);
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function getProduct(int $position): ?Product
    {
        return $this->products[$position] ?? null;
    }
}
