<?php
declare(strict_types=1);

namespace Pandawa\Product\Repository;

use Pandawa\Component\Ddd\Repository\Repository;

/**
 * @author root
 */
final class ProductRepository extends Repository
{
  public function getAvailable() {
    $qb = $this->createQueryBuilder();
    $qb->where('status', 'published')->where('stock', '>', 0);

    return $this->execute($qb);
  }
}
