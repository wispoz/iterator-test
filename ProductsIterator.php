<?php

class ProductsIterator implements Iterator
{
    private int $position = 0;
    public function __construct(private readonly ProductCollection $productCollection)
    {
    }

    public function current(): ?Product
    {
       return $this->productCollection->getProduct($this->position);
    }

    #[ReturnTypeWillChange]
    public function next(): ?Product
    {
        ++$this->position;
        return $this->productCollection->getProduct($this->position);
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return $this->productCollection->getProduct($this->position) !== null;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
