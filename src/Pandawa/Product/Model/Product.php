<?php
declare(strict_types=1);

namespace Pandawa\Product\Model;

use Pandawa\Component\Ddd\AbstractModel;
use Pandawa\Product\Relation\BelongsToCategoryTrait;

/**
 * @author root
 */
class Product extends AbstractModel
{
    use BelongsToCategoryTrait;

    protected $table = 'products';
}
