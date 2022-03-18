<?php
declare(strict_types=1);

namespace Pandawa\Product;

use Pandawa\Component\Module\AbstractModule;

/**
 * @author root
 */
final class ProductModule extends AbstractModule
{
    /**
     * @return array
     */
    protected function policies(): array
    {
        return [

        ];
    }

    /**
     * @return array
     */
    protected function listens(): array
    {
        return [

        ];
    }
}

