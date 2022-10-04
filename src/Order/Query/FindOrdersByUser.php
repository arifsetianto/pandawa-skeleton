<?php

declare(strict_types=1);

namespace Order\Query;

use Pandawa\Component\Message\AbstractQuery;
use Pandawa\Component\Message\NameableMessageInterface;
use Pandawa\Component\Support\NameableClassTrait;

/**
 * @author  Arif Setianto <arifsetiantoo@gmail.com>
 */
class FindOrdersByUser extends AbstractQuery implements NameableMessageInterface
{
    use NameableClassTrait;

    protected string $user;

    public function getUser(): string
    {
        return $this->user;
    }
}