<?php

declare(strict_types=1);

namespace Order\Command;

use Order\Model\Order;
use Order\Service\OrderCreator;
use User\Repository\UserRepository;

/**
 * @author  Arif Setianto <arifsetiantoo@gmail.com>
 */
class CreateOrderHandler
{
    public function __construct(private OrderCreator $creator, private UserRepository $userRepository)
    {
    }

    public function handle(CreateOrder $message): Order
    {
        return $this->creator->create(
            $this->userRepository->find($message->getUser()),
            $message->getName(),
            $message->getQty(),
            $message->getAmount()
        );
    }
}