<?php

declare(strict_types=1);

namespace Ecommerce\Api;

use Pandawa\Component\Module\AbstractModule;
use Pandawa\Component\Module\Provider\RouteProviderTrait;

/**
 * @author  Arif Setianto <arifsetiantoo@gmail.com>
 */
class EcommerceApiModule extends AbstractModule
{
    use RouteProviderTrait;

    protected function routes(): array
    {
        return [
            [
                'type'       => 'group',
                'middleware' => 'api',
                'prefix'     => 'v{version}',
                'children'   => $this->getCurrentPath() . '/Resources/routes/routes.yaml',
            ],
        ];
    }
}