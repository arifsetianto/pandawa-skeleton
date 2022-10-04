<?php

declare(strict_types=1);

namespace Order\Command;

use Pandawa\Component\Message\AbstractCommand;
use Pandawa\Component\Message\NameableMessageInterface;
use Pandawa\Component\Support\NameableClassTrait;

/**
 * @author  Arif Setianto <arifsetiantoo@gmail.com>
 */
class CreateOrder extends AbstractCommand implements NameableMessageInterface
{
    use NameableClassTrait;

    protected string $user;
    protected string $name;
    protected int $qty;
    protected int $amount;

    public function getUser(): string
    {
        return $this->user;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getQty(): int
    {
        return $this->qty;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }
}