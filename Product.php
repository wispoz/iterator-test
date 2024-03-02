<?php

class Product
{
    public function __construct(
        public string $name,
        public string $brand,
        public int $cost
    ) {
    }
}
