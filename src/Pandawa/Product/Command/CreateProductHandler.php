<?php
declare(strict_types=1);

namespace Pandawa\Product\Command;

use Pandawa\Product\Service\ProductCreator;

/**
 * @author root
 */
final class CreateProductHandler
{
    public function __construct(private ProductCreator $creator)
    {
    }

    /**
     * @param CreateProduct $message
     *
     * @return mixed
     */
    public function handle(CreateProduct $message)
    {
        return $this->creator->create($message);
    }
}

