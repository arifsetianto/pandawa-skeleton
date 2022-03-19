<?php
declare(strict_types=1);

namespace Pandawa\Product\Model;

use Pandawa\Component\Ddd\AbstractModel;
use Pandawa\Product\Relation\BelongsToCategory;

/**
 * @author root
 */
class Product extends AbstractModel
{
    use BelongsToCategory;

    protected $table = 'products';
}
