<?php

class Cart
{
    public function __construct(private readonly iterable $productCollection)
    {

    }

    public function calculateTotalCost(): int
    {
        $cost = 0;

        foreach ($this->productCollection as $product) {
            $cost += $product->cost;
        }
        return $cost;
    }
}
