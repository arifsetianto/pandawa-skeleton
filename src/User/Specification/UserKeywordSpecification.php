<?php

declare(strict_types=1);

namespace User\Specification;

use Pandawa\Component\Ddd\Specification\NameableSpecificationInterface;
use Pandawa\Component\Ddd\Specification\NameableSpecificationTrait;
use Pandawa\Component\Ddd\Specification\SpecificationInterface;

/**
 * @author  Arif Setianto <arifsetiantoo@gmail.com>
 */
class UserKeywordSpecification implements SpecificationInterface, NameableSpecificationInterface
{
    use NameableSpecificationTrait;

    public function __construct(private ?string $keyword)
    {
    }

    public function match($query): void
    {
        if ($this->keyword) {
            $query->where(function ($qb) {
                $qb
                    ->where('name', 'ilike', '%' . $this->keyword . '%')
                    ->orWhere('email', 'ilike', '%' . $this->keyword . '%')
                ;
            });
        }
    }
}