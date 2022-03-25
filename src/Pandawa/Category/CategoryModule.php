<?php
declare(strict_types=1);

namespace Pandawa\Category;

use Pandawa\Component\Module\AbstractModule;

/**
 * @author root
 */
final class CategoryModule extends AbstractModule
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

