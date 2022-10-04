<?php

declare(strict_types=1);

namespace Order\Service;

use Order\Model\Order;
use Order\Repository\OrderRepository;
use User\Model\User;

/**
 * @author  Arif Setianto <arifsetiantoo@gmail.com>
 */
class OrderCreator
{
    public function __construct(private OrderRepository $repository)
    {
    }

    public function create(User $user, string $name, int $qty, int $amount): Order
    {
        $order = new Order();
        $order->user()->associate($user);
        $order->name = $name;
        $order->qty = $qty;
        $order->amount = $amount;
        $order->totalAmount = $order->qty * $order->amount;

        $this->repository->save($order);

        return $order;
    }
}