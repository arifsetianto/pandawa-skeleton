<?php
declare(strict_types=1);

namespace Pandawa\Product\Query;

use Pandawa\Component\Message\InteractsWithRepositoryTrait;
use Pandawa\Product\Repository\ProductRepository;

/**
 * @author root
 */
final class AvailableProductsHandler
{
    use InteractsWithRepositoryTrait;

    /**
     * @param ProductRepository $repository
     */
    public function __construct(private ProductRepository $repository)
    {
    }

    /**
     * @param ProductRepository $repository
     * @param GetAvailable $query
     *
     * @return mixed
     */
    protected function run($repository, $query)
    {
        return $repository->getAvailable();
    }

    /**
     * @return ProductRepository
     */
    protected function repository()
    {
        return $this->repository;
    }
}

