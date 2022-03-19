<?php

declare(strict_types=1);

namespace Pandawa\Product\Service;

use Pandawa\Product\Command\EditProduct;
use Pandawa\Product\Model\Product;
use Pandawa\Product\Repository\ProductRepository;

final class ProductEditor {
  public function __construct(private ProductRepository $repository) {}

  public function edit(EditProduct $edit): Product | null {
    $product = $this->repository->find($edit->origin()->get('product'));

    if ($product) {
      $product->fill($edit->origin()->exclude(['product'])->all());
      $this->repository->save($product);

      $product = $product->fresh();
    }
    
    return $product;
  }
}