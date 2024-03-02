<?php

class ProductsFilterByIterator extends FilterIterator
{

    public function accept(): bool
    {
      return  $this->current()?->brand === 'Apple';
    }
}
