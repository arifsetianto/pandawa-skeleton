<?php
declare(strict_types=1);

namespace Pandawa\Product\Model;

use Pandawa\Component\Ddd\AbstractModel;

/**
 * @author root
 */
class Product extends AbstractModel
{
    /**
     * @var array
     */
    protected $guarded = [];
    protected $table = 'products';
}
