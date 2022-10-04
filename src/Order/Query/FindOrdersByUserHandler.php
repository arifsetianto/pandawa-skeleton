<?php

declare(strict_types=1);

namespace Order\Query;

use Order\Repository\OrderRepository;
use Pandawa\Component\Ddd\Collection;
use Pandawa\Component\Message\InteractsWithRepositoryTrait;

/**
 * @author  Arif Setianto <arifsetiantoo@gmail.com>
 */
class FindOrdersByUserHandler
{
    use InteractsWithRepositoryTrait;

    public function __construct(private OrderRepository $orderRepository)
    {
    }

    /**
     * @param OrderRepository $repository
     * @param FindOrdersByUser $query
     */
    protected function run($repository, $query)
    {
        return $repository->findByUser($query->getUser());
    }

    protected function repository(): OrderRepository
    {
        return $this->orderRepository;
    }
}