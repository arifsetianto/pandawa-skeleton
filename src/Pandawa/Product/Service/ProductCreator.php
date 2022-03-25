<?php

declare(strict_types=1);

namespace Pandawa\Product\Service;

use Pandawa\Product\Command\CreateProduct;
use Pandawa\Product\Model\Product;
use Pandawa\Product\Repository\ProductRepository;

final class ProductCreator {
  public function __construct(private ProductRepository $repository) {}

  public function create(CreateProduct $create): Product {
    $product = new Product($create->origin()->all());

    return $this->repository->save($product);
  }
}