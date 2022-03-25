<?php
declare(strict_types=1);

namespace Pandawa\Product\Command;

use Pandawa\Product\Service\ProductDeleter;

/**
 * @author root
 */
final class DestroyProductHandler
{

    public function __construct(private ProductDeleter $deleter)
    {
    }

    /**
     * @param DestroyProduct $message
     *
     * @return mixed
     */
    public function handle(DestroyProduct $message)
    {
        return $this->deleter->delete($message);
    }
}

