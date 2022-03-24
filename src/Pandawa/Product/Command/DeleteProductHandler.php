<?php
declare(strict_types=1);

namespace Pandawa\Product\Command;

use Pandawa\Product\Service\ProductDeleter;

/**
 * @author root
 */
final class DeleteProductHandler
{

    public function __construct(private ProductDeleter $deleter)
    {
    }

    /**
     * @param DeleteProduct $message
     *
     * @return mixed
     */
    public function handle(DeleteProduct $message)
    {
        return $this->deleter->delete($message);
    }
}

