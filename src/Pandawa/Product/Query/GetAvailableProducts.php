<?php
declare(strict_types=1);

namespace Pandawa\Product\Query;

use Pandawa\Component\Message\AbstractQuery;
use Pandawa\Component\Message\NameableMessageInterface;
use Pandawa\Component\Support\NameableClassTrait;

/**
 * @author root
 */
final class GetAvailableProducts extends AbstractQuery implements NameableMessageInterface
{
    use NameableClassTrait;
}
