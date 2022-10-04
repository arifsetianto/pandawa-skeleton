<?php

declare(strict_types=1);

namespace Order\Repository;

use Pandawa\Component\Ddd\Collection;
use Pandawa\Component\Ddd\Repository\Repository;

/**
 * @author  Arif Setianto <arifsetiantoo@gmail.com>
 */
class OrderRepository extends Repository
{
    public function findByUser(string $user)
    {
        return $this->findBy(['user_id' => $user]);
    }
}